<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_variable extends CI_Controller
{
    public function index()
    {
        $data['variables'] = $this->Model_variable->readvariables();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('variabel/index_variable', $data);
        $this->load->view('template/footer');
    }

    public function view_add()
    {
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('variabel/tambah_variable');
        $this->load->view('template/footer');
    }

    public function addvariable()
    {
        $this->model_variable->add_variable();
    }
}
