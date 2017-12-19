<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->model('M_Transaksi','transaksi');
	}

	public function index()
	{
		// echo '<h1>BIOS WEBSERVICE</h1>';
		// echo '<a href="'.base_url('index.php/api/bios/LayananPendidikan').'">Satker</a><br>';
		// echo '<a href="'.base_url('index.php/api/bios/LayananPendidikanLainnya').'">Satker Lainnya</a><br>';
		// echo '<a href="">Penerimaan</a><br>';
		// echo '<a href="">Pengeluaran</a><br>';
		// echo '<a href="">Saldo BLU</a><br>';
		$data = array();
		$data['pengeluaran'] = $this->transaksi->getPengeluaranAkhir();
		$data['penerimaan'] = $this->transaksi->getPenerimaanAkhir();
		$data['saldo'] = $this->transaksi->getSaldoAkhir();
		$this->template->load('template_dashboard', 'homepage',$data);
	}
}
