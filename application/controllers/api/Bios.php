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
class Bios extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        $this->load->model('Satker','satker');
        $this->load->model('M_Transaksi','transaksi');

    }
    public function LayananPendidikan_get()
    {
        if(!isset($_GET['tanggal_update']))
        {
            $data = 'Parameter tanggal_update tidak didapatkan. Gunakan Methode POST atau GET dengan mengirim parameter tanggal_update';
        }
        else
        {
            $tgl_update = $_GET['tanggal_update'];
            $satker = $this->satker->getAllSatker($tgl_update);
            $data['layanan_pendidikan'] = $satker->result();
        }
        $this->set_response($data, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code

    }

    public function LayananPendidikan_post()
    {
        if(!isset($_POST['tanggal_update']))
        {
            $data = 'Parameter tanggal_update tidak didapatkan';
        }
        else
        {
            $tgl_update = $_POST['tanggal_update'];
            $satker = $this->satker->getAllSatker($tgl_update);

            $data['layanan_pendidikan'] = $satker->result();
        }

        $this->set_response($data, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code

    }    
    public function LayananLainnya_get()
    {
        if(!isset($_GET['tanggal_update']))
        {
            $data = 'Parameter tanggal_update tidak didapatkan';
        }
        else
        {
            $tgl_update = $_GET['tanggal_update'];
            $satker = $this->satker->getAllSatkerLainnya($tgl_update);
            $data['layanan_pendidikan'] = $satker->result();
        }
        $this->set_response($data, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code

    }

    public function LayananLainnya_post()
    {
        if(!isset($_POST['tanggal_update']))
        {
            $data = 'Parameter tanggal_update tidak didapatkan';
        }
        else
        {
            $tgl_update = $_POST['tanggal_update'];
            $satker = $this->satker->getAllSatkerLainnya($tgl_update);

            $data['layanan_pendidikan'] = $satker->result();
        }

        $this->set_response($data, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code

    }    

    public function Penerimaan_get()
    {
        if(!isset($_GET['TanggalUpdate']))
        {
            $data = 'Parameter TanggalUpdate tidak didapatkan';
        }
        else
        {
            $tgl_update = $_GET['TanggalUpdate'];
            $transaksi = $this->transaksi->getAllPenerimaan($tgl_update);
            $data['Penerimaan'] = $transaksi->result();
        }
        $this->set_response($data, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code

    }

    public function Penerimaan_post()
    {
        if(!isset($_POST['TanggalUpdate']))
        {
            $data = 'Parameter TanggalUpdate tidak didapatkan';
        }
        else
        {
            $tgl_update = $_POST['TanggalUpdate'];
            $transaksi = $this->transaksi->getAllPenerimaan($tgl_update);
            $data['Penerimaan'] = $transaksi->result();
        }

        $this->set_response($data, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code

    }


    public function Pengeluaran_get()
    {
        if(!isset($_GET['TanggalUpdate']))
        {
            $data = 'Parameter TanggalUpdate tidak didapatkan';
        }
        else
        {
            $tgl_update = $_GET['TanggalUpdate'];
            $transaksi = $this->transaksi->getAllPengeluaran($tgl_update);
            $data['Pengeluaran'] = $transaksi->result();

        }
        $this->set_response($data, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code

    }

    public function Pengeluaran_post()
    {
        if(!isset($_POST['TanggalUpdate']))
        {
            $data = 'Parameter TanggalUpdate tidak didapatkan';
        }
        else
        {
            $tgl_update = $_POST['TanggalUpdate'];
            $transaksi = $this->transaksi->getAllPengeluaran($tgl_update);
            $data['Pengeluaran'] = $transaksi->result();
        }

        $this->set_response($data, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code

    }

    public function Saldo_get()
    {
        if(!isset($_GET['TanggalUpdate']))
        {
            $data = 'Parameter TanggalUpdate tidak didapatkan';
        }
        else
        {
            $tgl_update = $_GET['TanggalUpdate'];
            $transaksi = $this->transaksi->getAllSaldo($tgl_update);
            $data = $transaksi->result();
        }
        $this->set_response($data, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code

    }

    public function Saldo_post()
    {
        if(!isset($_POST['TanggalUpdate']))
        {
            $data = 'Parameter TanggalUpdate tidak didapatkan';
        }
        else
        {
            $tgl_update = $_POST['TanggalUpdate'];
            $transaksi = $this->transaksi->getAllSaldo($tgl_update);
            $data = $transaksi->result();
        }

        $this->set_response($data, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code

    }

}