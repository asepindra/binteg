<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->template->title = 'Transaksi';
        $this->load->model('Satker','satker');
        $this->load->model('M_Transaksi','transaksi');
        $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array();
		$this->template->load( 'template_dashboard','index',$data);
	}
	public function penerimaan()
	{
		$this->template->title = 'Penerimaan';
		$data['data'] = $this->transaksi->getAllPenerimaan();
		$this->template->load( 'template_dashboard','transaksi/penerimaan',$data);
	}	

    public function upload($jenis_tr){
        $inputFileName = $_FILES['file_upload']['tmp_name'];
         // var_dump($_FILES['file_upload']['tmp_name']);
        try {
                $inputFileType = IOFactory::identify($inputFileName);
                $objReader = IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
            } catch(Exception $e) {
                die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
            }
 
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow();
            $highestColumn = $sheet->getHighestColumn();
             
            $jenis = $sheet->rangeToArray('A1:' . $highestColumn . '1',NULL,TRUE,FALSE);
            if(strtoupper($jenis_tr) != strtoupper($jenis[0][0]))
            	die('Jenis Transaksi Bukan '.strtoupper($jenis_tr.'. Upload data transaksi Pengeluaran'));

            $data = $sheet->rangeToArray('A2:' . $highestColumn . $highestRow,NULL,TRUE,FALSE);
            $column = $data[0];
			// var_dump($column);
            for ($row = 1; $row < count($data); $row++){                  //  Read a row of data into an array                 
				 $rowData = $data[$row];
                 foreach ($column as $key => $v) {
                 	$r[$v] = $rowData[$key];
                 }
                 $records[] = $r;                     
            }

            return $records;

    }

    public function uploadPenerimaan()
    {
    		$records = $this->upload('penerimaan');
	         // echo '<pre>';
	         // var_dump($records);
	         // echo '</pre>';
            $this->db->trans_start();
            foreach ($records as $key => $v) {
            	$data = array(
            			'Tanggal'=>$v['Tahun'].'-'.$v['Bulan'].'-'.$v['Tanggal'],
            			'KodeAkun'=>$v['KodeAkun'],
            			'Saldo'=>$v['Saldo'],
            			'tgl_update'=> date("Y-m-d H:i:s")
            		);
            	$hasil = $this->transaksi->insertPenerimaan($data);
            	// var_dump($hasil);

            }
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE)
			{
			    echo 'Upload Data Error. Periksa File Anda!';
			}
			else
			{
				redirect('index.php/transaksi/penerimaan');
				// echo 'Berhasil';
			}
    	
    }
    public function hapusPenerimaan($tanggal, $KodeAkun)
    {
    	$del = $this->db->delete('penerimaan',array('Tanggal'=>$tanggal,'KodeAkun'=>$KodeAkun));

    	if($del)
			redirect('index.php/transaksi/penerimaan');
    	else
    		echo 'Gagal menghapus data';
    }
	public function pengeluaran()
	{
		$this->template->title = 'Pengeluaran';
		$data['data'] = $this->transaksi->getAllPengeluaran();
		$this->template->load( 'template_dashboard','transaksi/pengeluaran',$data);
	}	
    public function uploadPengeluaran()
    {
    		$records = $this->upload('pengeluaran');

            $this->db->trans_start();
            foreach ($records as $key => $v) {
            	$data = array(
            			'Tanggal'=>$v['Tahun'].'-'.$v['Bulan'].'-'.$v['Tanggal'],
            			'KodeAkun'=>$v['KodeAkun'],
            			'Saldo'=>$v['Saldo'],
            			'tgl_update'=> date("Y-m-d H:i:s")
            		);
            	$hasil = $this->transaksi->insertPengeluaran($data);
            	// var_dump($hasil);

            }
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE)
			{
			    echo 'Upload Data Error. Periksa File Anda!';
			}
			else
			{
				redirect('index.php/transaksi/pengeluaran');
			}
    	
    }    
    public function hapusPengeluaran($tanggal, $KodeAkun)
    {
    	$del = $this->db->delete('pengeluaran',array('Tanggal'=>$tanggal,'KodeAkun'=>$KodeAkun));

    	if($del)
			redirect('index.php/transaksi/pengeluaran');
    	else
    		echo 'Gagal menghapus data';
    }

	public function saldo()
	{
		$this->template->title = 'Saldo';
		$data['data'] = $this->transaksi->getAllSaldo();
		$this->template->load( 'template_dashboard','transaksi/saldo',$data);
	}	
    public function uploadSaldo()
    {
    		$records = $this->upload('saldo');

            $this->db->trans_start();
            foreach ($records as $key => $v) {
            	$data = array(
            			'Tanggal'=>$v['Tahun'].'-'.$v['Bulan'].'-'.$v['Tanggal'],
            			'kodeJenisRekening'=>$v['kodeJenisRekening'],
            			'NamaBank'=>$v['NamaBank'],
            			'Saldo'=>$v['Saldo'],
            			'tgl_update'=> date("Y-m-d H:i:s")
            		);
            	$hasil = $this->transaksi->insertSaldo($data);
            	// var_dump($hasil);

            }
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE)
			{
			    echo 'Upload Data Error. Periksa File Anda!';
			}
			else
			{
				redirect('index.php/transaksi/saldo');
			}
    	
    }    
    public function hapusSaldo($tanggal, $kodeJenisRekening)
    {
    	$del = $this->db->delete('saldo',array('Tanggal'=>$tanggal,'kodeJenisRekening'=>$kodeJenisRekening));

    	if($del)
			redirect('index.php/transaksi/saldo');
    	else
    		echo 'Gagal menghapus data';
    }    
	public function layananPendidikan()
	{
		$this->template->title = 'Layanan Pendidikan';
		$data['data'] = $this->satker->getAllSatker();
		$this->template->load( 'template_dashboard','transaksi/layananPendidikan',$data);
	}	
    public function uploadLayananPendidikan()
    {
    		$records = $this->upload('layananpendidikan');

            $this->db->trans_start();
            foreach ($records as $key => $v) {
            	$data = array(
            			'kode_satker'=>$v['kode_satker'],
            			'tahun'=>$v['tahun'],
            			'bulan'=>$v['bulan'],
            			'kd_fakultas'=>$v['kode_fakultas'],
            			'kode_program_studi'=>$v['kode_program_studi'],
            			'kode_akreditasi'=>$v['kode_akreditasi'],
            			'kode_jurusan'=>$v['kode_jurusan'],
            			'tgl_update'=> date("Y-m-d H:i:s")
            		);
            	$hasil = $this->satker->insertSatker($data);
            	// var_dump($hasil);

            }
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE)
			{
			    echo 'Upload Data Error. Periksa File Anda!';
			}
			else
			{
				redirect('index.php/transaksi/layananPendidikan');
			}
    	
    }    
    public function hapusLayananPendidikan($kode_satker)
    {
    	$del = $this->db->delete('satker',array('kode_satker'=>$kode_satker));

    	if($del)
			redirect('index.php/transaksi/layananPendidikan');
    	else
    		echo 'Gagal menghapus data';
    }      
	public function _filter()
	{
		    return array();
	}

}
