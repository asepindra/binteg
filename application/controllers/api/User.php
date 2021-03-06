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
class User extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->library('aauth');
        $this->load->model('M_user','m_user');
    }

    public function user_post()
    {
        // Users from a data store e.g. database
        $u = $this->input->post('user');
        $p = $this->input->post('password');

        $login = $this->aauth->login($u,$p);

        if($login)
        {            
            $data = $this->m_user->getUserDataById($u);

            $message = [
                'user_data' => $data, // Automatically generated by the model
            ];
        }
        else
            $message['error'] = 'User atau Password salah';


        $this->set_response($message, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }

    public function ceklogin_post()
    {
        // $this->some_model->update_user( ... );
        $u = $this->post('user');
        $p = $this->post('password');

        $login = $this->aauth->login($u,$p);

        $message = [
            'login' => $login, // Automatically generated by the model
        ];
	//$message['login'] = ['status' => $login,];
        $this->set_response($message, REST_Controller::HTTP_CREATED); 

	// CREATED (201) being the HTTP response code
    }

    public function users_delete()
    {
        $id = (int) $this->get('id');

        // Validate the id.
        if ($id <= 0)
        {
            // Set the response and exit
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }

        // $this->some_model->delete_something($id);
        $message = [
            'id' => $id,
            'message' => 'Deleted the resource'
        ];

        $this->set_response($message, REST_Controller::HTTP_NO_CONTENT); // NO_CONTENT (204) being the HTTP response code
    }

    public function register_post()
    {
        if($this->input->post()){

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email    = $this->input->post('email');

            $date = date("Y-m-d H:i:s");

            $query = $this->db->query("select email from aauth_users where email='".$email."' OR username = '".$username."';");

            if ($query->num_rows()==1) {
                $error['error'] = 'Invalid Register';
                $error['msg'] = 'User atau Email Sudah Ada';

                $this->set_response([$error], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code

            }
            else{

                if(!$this->aauth->create_user($email,$password,$username)){

                    $error['error'] = 'Invalid Register';
                    $error['msg'] = $this->aauth->print_errors();

                    $this->set_response([$error], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
                }
                else
                {

                    $user_id = $this->aauth->get_user_id($email);

                    $sql = $this->db->query("update aauth_users set
                                                        banned          =  0,
                                                        jenis_user      =  'USER',
                                                        user_is_aktif   =  1,
                                                        last_login      = '$date',
                                                        last_activity   = '$date',
                                                        date_created    = '$date',
                                                        user_newlogin   = '$date'
                                                        where  id  = '$user_id' ");
                    $message = [
                        'register' => 'Register Berhasil', // Automatically generated by the model
                        'id' => $user_id
                    ];

                    $this->set_response($message, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code

    /*                if($sql)  {
                        redirect('/site/login');
                    }
                    else echo "false";*/
                }
            }

        }
        else{
            $message['error'] = 'Tidak ada data diterima';
            $this->set_response($message, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
        }

    }

    public function registeredit_post()
    {
        if($this->input->post()){

            $user['email'] = $this->input->post('email');
            $user['user_fullname'] = $this->input->post('realname');
            $user['user_contact'] = $this->input->post('contact');
            $user['user_address'] = $this->input->post('address');
            $user['tgl_lahir'] = $this->input->post('bird');
            $user['tempat_lahir'] = $this->input->post('tempat_lahir');
            $user['gender'] = $this->input->post('gender');

            $user['user_logo'] = $this->input->post('pic');

            $user_id = $this->aauth->get_user_id($user['email']);
            if($user_id)
            {               
                $edit = $this->m_user->update($user_id,$user);
                if($edit)
                    $update = 'Update Berhasil';
                else
                    $update = 'Update Gagal';

                $message = [
                    'update' => $update, // Automatically generated by the model
                    'id' => $user_id
                ];
            }
            else
                $message = [
                    'update' => 'User tidak ditemukan', // Automatically generated by the model
                ];
        
            $this->set_response($message, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
           
        }
        else{
            $message['error'] = 'Tidak ada data diterima';
            $this->set_response($message, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
        }
    }

    public function editpassword_post()
    {
        if($this->input->post()){
            $old = $this->input->post('old_password');
            $new = $this->input->post('new_password');
            $user = $this->input->post('user');
            $email = $this->input->post('email');

        
            if($this->aauth->login($user,$old)){
                
                $user_id = $this->aauth->get_user_id($email);
                $hasil = $this->aauth->update_user($user_id,FALSE,$new,FALSE);
                if($hasil)
                    $message['success'] = 'Berhasil Merubah Password';
                else
                    $message['error'] = 'Gagal Mengubah Password. Terjadi Kesalahan';
            }
            else
                $message['error'] = 'Gagal Mengubah Password. User atau Password Sebelumnya tidak sesuai';


        }
        else{
            $message['error'] = 'Tidak ada data diterima';
        }        
            $this->set_response($message, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }
}
