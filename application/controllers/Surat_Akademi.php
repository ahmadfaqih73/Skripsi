<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_Akademi extends CI_Controller{
    public function index()
    {
       
        // var_dump($data);
        // die;
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Surat_keluar/Surat_akademi');
        $this->load->view('template/footer');
    }
}