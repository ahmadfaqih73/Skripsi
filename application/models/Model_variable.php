<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_variable extends CI_Model
{

    public function add_variable()
    {
        $data = array(
            'nama_variabel' => $this->input->post('variabel'),
            'kategori' => $this->input->post('kategori')
            // 'prioritas'
            // 'nilai_minimum'
            // 'nilai_maksimum'
        );
        var_dump($data);
    }
    public function get_ipk(){
        $get_statusipk=$this->db->query("SELECT `Status` From variabel_itaq GROUP BY `Status` Order By status DESC");
         return $get_statusipk->result();
    }

    
    public function readvariables(){
        $q_read = $this->db->get('variables')->result_array();
        return $q_read;
    }

    public function variabel(){
        $this->db->select('*');
        $this->db->from('tb_variabel');
        $this->db->order_by('id_variabel','asc');
        $query = $this->db->get();
        return $query->result();
    }

}
