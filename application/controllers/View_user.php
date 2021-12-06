<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View_user extends CI_Controller
{
    public function index()
    {
        $data['users'] = $this->full_user->Bacauser();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('view_user/show_user', $data);
        $this->load->view('template/footer');
    }
}
