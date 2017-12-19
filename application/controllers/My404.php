<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends CI_Controller 
{
    function __construct() 
    {
        parent::__construct(); 
    } 

    public function index() 
    { 
    		echo 'Halaman Tidak Ditemukan';
    		

    } 
} 
