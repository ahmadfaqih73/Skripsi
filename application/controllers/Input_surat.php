<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input_surat extends CI_Controller
{

    public function index()
    {
        $data['kategori_surat'] = $this->Model_kategori_surat->bacajenissurat();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Surat_keluar/Tambah_surat', $data);
        $this->load->view('template/footer');
    }
    public function add()
    {
        $this->Model_tambah_surat->insert_surat_out();
        $this->session->set_flashdata('message', '<div class="alert
            alert-danger" role="alert">data succes 
            </div>');
        // redirect('Surat_Undangan');
    }
}
