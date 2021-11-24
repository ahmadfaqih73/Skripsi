<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_Undangan extends CI_Controller
{
    public function index()
    {
        $data['surat_out'] = $this->Model_surat_undangan->baca_undangan();
        $data['kategori_surat'] = $this->Model_kategori_surat->bacajenissurat();

        // var_dump($data);
        // die;
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Surat_keluar/Surat_undangan', $data, array('error' => ' '));
        $this->load->view('template/footer');
    }
    public function update_Surat_Undangan()
    {
        $this->Model_tambah_surat->updateSurat_Undangan();
    }
}
