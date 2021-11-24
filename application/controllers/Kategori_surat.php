<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kategori_surat extends CI_Controller
{
    public function index()
    {
        $data['kategori_surat'] = $this->Model_kategori_surat->bacajenissurat();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Kategori_surat/index', $data);
        $this->load->view('template/footer');
    }

    public function viewAdd()
    {

        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Kategori_surat/add_kategori');
        $this->load->view('template/footer');
    }
    public function add()
    {
        $this->Model_kategori_surat->addkategori();
    }

    public function hapus($id)
    {
        $this->Model_kategori_surat->hapuskategori($id);
        redirect('Kategori_surat');
    }
    public function edit(){
        $this->Model_kategori_surat->editkategori();
        
    }
}
