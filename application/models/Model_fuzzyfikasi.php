 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_fuzzyfikasi extends CI_Model
{
    public function get_data_min($vvv){
        $query= $this->db->get_where('variabel_output',['nama_variabel'=> $vvv])->row_array();
        return $query['Nilai_minimum'];
    }
    public function get_data_max($vvv)
    {
        $query = $this->db->get_where('variabel_output', ['nama_variabel' => $vvv])->row_array();
        return $query['Nilai_max'];
    }
    public function get_minipk($Nilai_minipk){
       
    }
    public function status_tidakbaik_ipk(){
        $query = $this->db->query("SELECT `Status` FROM variabel_ipk WHERE id_variable_ipk=1;");
        return $query->result();
    }
}
