<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori_surat extends CI_Model
{
    public function bacajenissurat()
    {
        return $this->db->get('kategori_surat')->result_array();
    }

    public function suratUndangan()
    {

        $this->db->where('id_kategori_surat', 1);
        $data = $this->db->get('kategori_surat');
        return $data->result_array();
    }


    public function optionkategori()
    {
        return $this->db->get('kategori_surat');
    }
    public function addkategori()
    {

        $data = array(
            'Kategori' => $this->input->post('kategori')

        );
        // var_dump($data);
        // die;
        $this->db->insert('kategori_surat', $data);
        redirect('Kategori_surat');
    }

    public function hapuskategori($id)
    {
        $this->db->delete('kategori_surat', ['id_kategori_surat' => $id]);
    }

    public function editkategori()
    {
        $this->form_validation->set_rules('kategori', 'kategori');
        if ($this->form_validation->run() == FALSE) {
            $data['kategori_surat'] = $this->Model_kategori_surat->bacajenissurat();

            // var_dump($data);
            // die;
            $this->load->view('template/header');
            $this->load->view('template/Navbar');
            $this->load->view('template/sidebar');
            $this->load->view('Kategori_surat/update_kategori', $data);
            $this->load->view('template/footer');

        }else{
            $data = array(
                'Kategori' => $this->input->post('kategori')

            );
            // var_dump($data);
            // die;
            $this->db->where('id_kategori_surat', $this->input->post('id'));
            $this->db->update('mahasiswa', $data);
        }
    }
}
