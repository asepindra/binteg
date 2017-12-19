<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Layanan extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->library('aauth');
        $this->load->model('M_user','m_user');
        $this->load->model('M_form','m_form');
        $this->load->model('M_layanan','m_layanan');
        $this->load->model('M_maudaftar','m_md');
        $this->load->library('Libraryku','lib');
        $this->load->library('Forms','form');
        $this->format = 'application/json';

    }

    public function daftarlayanan_post()
    {
        $page = $this->input->post('page');
        $limit = $this->input->post('limit');
        $type = $this->input->post('type');

        $daftar = $this->m_layanan->getAllLayanan($type,$page,$limit);
        $data['daftar_layanan'] = $daftar->result();

        $data = json_encode($data,JSON_UNESCAPED_SLASHES);
        // echo $data;
        // var_dump($daftar->result());
        // $data = [$page];//json_encode(1);
        $this->response($data); // OK (200) being the HTTP response code
        // $this->response('', REST_Controller::HTTP_OK); // OK (200) being the HTTP response code

    }

    public function pemberitahuan_post()
    {
        if($this->input->post()){
            $page = $this->input->post('page');
            $limit = $this->input->post('limit');
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user_id = $this->aauth->get_user_id($email);
            // if($this->aauth->login($user,$password)){
                $notif = $this->m_layanan->getPemberitahuan($user_id,$page,$limit);

                $message['daftar_pemberitahuan'] = $notif->result();

                $message = json_encode($message,JSON_UNESCAPED_SLASHES);
            // }

        }
        else{
            $message['error'] = 'Tidak ada data diterima';
        }     

        $this->set_response($message, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }

    public function prasyaratlayanan_post()
    {
        if($this->input->post()){
            $id_layanan = $this->input->post('id_layanan');
            $user = $this->input->post('user');
            $email = $this->input->post('email');
            $get = $this->m_layanan->getPrasyarat($id_layanan);
            if($get->num_rows())
            {
                $send['is_prasyarat'] = true;
                $pr = $get->row();
            // var_dump($pr);

                $send['attribute']['id_prasyarat'] = $pr->id_prasyarat;
                $send['attribute']['metode'] = $pr->metode_prasyarat;
                // $send['attribute']['label'] = $pr->metode_prasyarat;
                $send['attribute']['keterangan'] = $pr->keterangan;
                $send['attribute']['session_id'] = $this->enkrip->encode('sess_prasyarat');
                $send['attribute']['session_value'] = $this->enkrip->encode($user.$pr->id_prasyarat);
                $send['attribute']['link'] = 'api/layanan/sendprasyarat';
                if($pr->metode_prasyarat == 'authentication'){
                    $func = 'getPrasyarat'.$pr->metode_prasyarat;
                    $send['link_forms'] = 'api/layanan/sendMaudaftar';
                    $send['forms'] = $this->$func($pr);
                }
                
            }else
            {
                $send['is_prasyarat'] = false;
                $defaultData = $this->m_layanan->getDefaultData($id_layanan,$user);
                $send['forms'] =   [$this->getForms($id_layanan,$defaultData)];                    

            }

        }
        else{
            $send['error'] = 'Tidak ada data diterima';
        }     

        $this->set_response(json_encode($send), REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }

    protected function getPrasyaratauthentication($pr)
    {
        $label = (array) json_decode($pr->label);

        $data = array(
                        '0'=>array('type'=>'text', 'field'=> 'mdc'.$this->enkrip->encode($pr->id_prasyarat.$label['username']),'name'=>$label['username']),
                        '1'=>array('type'=>'password', 'field'=>'mdc'.$this->enkrip->encode($pr->id_prasyarat.$label['password']) ,'name'=> $label['password'])
                        );
        return $data;
    }

    public function sendprasyarat_post()
    {

        if($this->input->post()){

            $id_prasyarat = $this->input->post('id_prasyarat');   
            $post_prasyarat = $this->input->post();
            $id_user = $this->aauth->get_user_id($post_prasyarat['email']);
            $get_data = $this->m_layanan->getPrasyaratById($id_prasyarat);
            $datapost = array();
            if($get_data->num_rows() == 1)
            {
                $ps = $get_data->row();

                if($ps->metode_prasyarat == 'authentication')
                {
                    $label = (array) json_decode($ps->label);
                    foreach ($label as $key => $value) {                        
                        $datapost[$key] = $post_prasyarat['mdc'.$this->enkrip->encode($ps->id_prasyarat.$value)];
                    }
                    $hasil = $this->libraryku->sendDataForAuth($ps,$datapost);
                    if($hasil == 'authenticated'){
                        $srt[$this->enkrip->encode($ps->id_prasyarat.$ps->id_lyn_pendaftaran)] = 'authentication';
                        $this->libraryku->on_save_to($ps->on_save_to,$datapost,$id_user);
                        $send['message'] = 'Autentikasi Berhasil';

                        $defaultData = $this->m_layanan->getDefaultData($ps->id_lyn_pendaftaran,$this->aauth->get_user($id_user)->username);

                        $send['link_forms'] = 'api/layanan/sendmaudaftar';
                        $send['forms'] = [$this->getForms($ps->id_lyn_pendaftaran,$defaultData)];
                    }
                    else
                        $send['message'] = 'Autentikasi Gagal';

                }

            }

        }
        else{
            // $send['error'] = 'Tidak ada data diterima';
        }     

        $this->set_response(json_encode($send,JSON_UNESCAPED_SLASHES), REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    
    }

    function getForms($id_lyn_pendaftaran,$defaultData)
    {
        // $send['default'] = $defaultData;
        $data = $this->m_md->getInput($id_lyn_pendaftaran);
        $array = $data->result_array();
        $nm_tab = '';
        foreach ($array as $key => $field) {
            if($field['kategori'] == 'pendidikan' || $field['kategori'] == 'berkas')
            {
                $array[$key]['field'] = $field['kategori'].'[fil'.$field['filter'].$field['field'].']';
            }
            else
                $array[$key]['field'] = $field['kategori']."[".$field['field']."]";


            if(!is_null($array[$key]['pilihan'])){
                // $pilihan = json_decode($array[$key]['pilihan']);
                $array[$key]['pilihan'] = json_decode($array[$key]['pilihan']);//json_encode($pilihan,JSON_UNESCAPED_SLASHES);
                $array[$key]['default'] = json_decode($array[$key]['default']);//json_encode($pilihan,JSON_UNESCAPED_SLASHES);

            }

/*            if(!is_null($defaultData[$field['kategori']][$array[$key]['field']]))
            {
                if($array[$key]['jenis'] == 'select' || $array[$key]['jenis'] == 'checkbox' ||  $array[$key]['jenis'] == 'radio')
                    $array[$key]['default'] = json_encode($defaultData[$field['kategori']][$array[$key]['field']]);
                else
                    $array[$key]['default'] = $defaultData[$field['kategori']][$array[$key]['field']];
            }*/
            
            if(!is_null($defaultData[$field['kategori']][$field['field']]))
            {
                if($array[$key]['jenis'] == 'select' || $array[$key]['jenis'] == 'checkbox' ||  $array[$key]['jenis'] == 'radio')
                    $array[$key]['default'] = json_encode($defaultData[$field['kategori']][$field['field']]);
                else
                    $array[$key]['default'] = $defaultData[$field['kategori']][$field['field']];
            }

            $tab_now = $array[$key]['nm_tab'];
            if($nm_tab <> $tab_now){
                $nm_tab = $tab_now;
            }
            $send[$nm_tab][] = $array[$key];

        }
        return $send;
    }
    public function sendmaudaftar_post()
    {

        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $id_user = $this->aauth->get_user_id($email);
        $id_layanan = $this->input->post('id_layanan');

        #Mengambil Data Input di tbl_input
        $input = $this->m_md->getInput($id_layanan);

        #Mengambil Kategori Input
        $kategori_input = $this->m_md->getKategoriInput($id_layanan);

        #mengambil data default yang sudah terisi di tabel untuk user yg akan mendaftar
        $this->forms->defaultData = $this->m_md->getDefaultData($kategori_input,$id_layanan,$username);

        #Mengambila daftar TAB jika pendaftaran ada banyak TAB
        $tab = $this->m_md->getTab($id_layanan);

        #JIKA SUDAH ADA ISINYA 
        if(!empty($this->input->post('basic')) || !empty($this->input->post('pendidikan')) || !empty($this->input->post('custom')) || !empty($this->input->post('pekerjaan') || !empty($this->input->post('berkas'))))
        {
            $layanan = $this->m_md->getLayanan($id_layanan);
            // var_dump($layanan);
            if(!empty($layanan))
            {
                $input = $this->m_md->getInput($id_layanan);
                // var_dump($input->result());
                $post = $this->input->post();
                $this->forms->defaultData = $post;
                // var_dump($post);
                $validation = $this->libraryku->validation_input($input->result(),$post);

                $proses = true;
                // var_dump(isset($_FILES));
                // var_dump(isset($post['berkas']));
                if($validation === true){
                    #Mencari Isi Post berdasarkan Kategori
                    foreach ($kategori_input as $key => $value) {
                        #Jika Kategori terkirim berisi POST yang sesuai
                         if(isset($post[$value->kategori])){
                                #data akan di update atau ditambah
                                $function = 'add'.$value->kategori;
                                $filter = $value->filter;
                                $hasil = $this->$function($post[$value->kategori],$filter,$value->type);
                                $proses = $proses && $hasil;
                            // var_dump($post[$value->kategori]);
                         }
                         if($value->kategori == 'berkas' && isset($_FILES))
                         {
                                $filter = $value->filter;
                                $hasil = $this->addBerkas('fil'.$filter.'file_berkas',$filter,$value->type);
                                $proses = $proses && $hasil;

                         }

                    }

                    if($proses)
                    {   
                        $save['id_pengguna'] = $id_user;
                        $save['id_lyn_pdf'] = $id_layanan;                              
                        // $save['tgl_berakhir'] = ;
                        $save['status_validasi'] = 1;
                        $update = $this->m_md->savePenggunaLayanan($save);
                        if($update)
                        {
                            $send['message'] = 'Berhasil Disimpan';
                        }
                    }

                }
                else{
                    $send['error'] = true;
                    $send['error_message'] =  validation_errors();
                }


            }

        $this->set_response(json_encode($send,JSON_UNESCAPED_SLASHES), REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code


        }
 
    }


    function addbasic($data,$filter = '',$type = '')
    {
        // var_dump($data);
        $exec = $this->m_md->updateUser($this->user,$data);

        return $exec;

    }
    function addpendidikan($data,$filter = '',$type = '')
    {
        $dataPd = $this->m_md->getDataPendidikan($filter,$this->user); 
        // var_dump($data);
        // var_dump($dataPd);
        if(!empty($dataPd)):
            $pendidikan['id_pendidikan'] = $dataPd->id_pendidikan;
        else:
            $pendidikan['id_pengguna'] = $this->aauth->get_user_id();
            $pendidikan['id_pendidikan'] = '';
        endif;
        $pendidikan['jns_pendidikan'] = $filter;
        
        // $pendidikan
        foreach ($data as $key => $value) {
            if(strrpos($key, 'fil'.$filter) === 0){
                $field = str_replace('fil'.$filter, '', $key);
                $pendidikan[$field] = $value;
            }
        }

        $save = $this->m_md->savePendidikan($pendidikan);

        return $save;
        
    }   

    function addpekerjaan($data,$filter = '',$type = '')
    {

        $dataPkj = $this->m_md->getDataPekerjaan($this->aauth->get_user_id()); 
        // var_dump($data);
        // var_dump($dataPd);
        $pekerjaan = $data;
        if(!empty($dataPkj)):
            $pekerjaan['id_pkj_pengguna'] = $dataPkj->id_pkj_pengguna;
        else:
            $pekerjaan['id_pengguna'] = $this->aauth->get_user_id();
            $pekerjaan['id_pkj_pengguna'] = '';
        endif;
        

        $save = $this->m_md->savePekerjaan($pekerjaan,$this->aauth->get_user_id()); 

        return $save;
    }   
    function addcustom($data,$filter = '',$type = '')
    {
        $exec = $this->m_md->saveCustom($data,$this->aauth->get_user_id(),$this->layanan); 
            
        return $exec;
        // var_dump($this->session->userdata('id'));
    }   
    
}