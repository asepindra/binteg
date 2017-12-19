<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->template->title = 'Referensi';
		$this->url_fakultas = 'http://bios.djpbn.kemenkeu.go.id/web_services/ref_fakultas';
		$this->url_program_studi = 'http://bios.djpbn.kemenkeu.go.id/web_services/ref_program_studi';
		$this->url_jurusan = 'http://bios.djpbn.kemenkeu.go.id/web_services/ref_jurusan';
		$this->url_akreditasi = 'http://bios.djpbn.kemenkeu.go.id/web_services/ref_akreditasi';
	}

	public function fakultas()
	{
		$json = file_get_contents($this->url_fakultas);
		$obj = json_decode($json);
		$data['obj'] = $obj->ref_fakultas;
		$this->template->load( 'template_dashboard','referensi/index',$data);
		 // var_dump($obj->ref_fakultas);		
	}
	public function program_studi()
	{
		$json = file_get_contents($this->url_program_studi);
		$obj = json_decode($json);
		$data['obj'] = $obj->ref_program_studi;
		$this->template->load( 'template_dashboard','referensi/index',$data);

	}
	public function jurusan()
	{
		$json = file_get_contents($this->url_jurusan);
		$obj = json_decode($json);
		$data['obj'] = $obj->ref_jurusan;
		$this->template->load( 'template_dashboard','referensi/index',$data);

	}	
	public function akreditasi()
	{
		$json = file_get_contents($this->url_akreditasi);
		$obj = json_decode($json);
		$data['obj'] = $obj->ref_akreditasi;
		$this->template->load( 'template_dashboard','referensi/index',$data);

	}
	public function log()
	{
		// $json = file_get_contents($this->url_log);
		// $obj = json_decode($json);
		// $data['obj'] = $obj->ref_akreditasi;
		// $this->template->load( 'template_dashboard','referensi/index',$data);
		echo 'Belum Dibuat';
	}		
	public function wslink()
	{
		// $json = file_get_contents($this->url_log);
		// $obj = json_decode($json);
		// $data['obj'] = $obj->ref_akreditasi;
		$data = array();
		$this->template->load( 'template_dashboard','referensi/wslink',$data);

	}			
}