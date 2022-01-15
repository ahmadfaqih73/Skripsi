<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rules extends CI_Controller
{
    public function index()
    {
        $data['rules'] = $this->Model_rule->Bacarules();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Rule/index_rule', $data);
        $this->load->view('template/footer');
    }

    public function addrule()
    {
        $data['Status'] = $this->Model_rule->get_ipk();
        // $status_itaq['Status'] = $this->Model_rule->get_status_itaq();
        // $status_taat['Status'] = $this->Model_rule->get_status_taat();
        // $status_visi['Status'] = $this->Model_rule->get_status_visi();
        $data['nama_variabel'] = $this->Model_rule->get_status_hasil();
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Rule/tambah_rule', $data);
        $this->load->view('template/footer');
    }
    public function tambahrule()
    {
        $this->Model_rule->add_rule();
        $this->session->set_flashdata('flash', 'ditambahkan');
        redirect('Rules');
    }
    public function getstatushasil(){
        header('Content-typ: application/json');
        $Status = $this->input->post('hasil');
        $this->db->likes('nama_variabel',$Status);
        $hasil = $this->db->get('variabel_output')->result();
        foreach ($hasil as $datavariabeloutput) {
            $data[]=array(
                'id'=>$datavariabeloutput->id_variabel_output,
                'text'=>$datavariabeloutput->nama_variabel
            );
        }
    }
}
