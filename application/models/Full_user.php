<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Full_user extends CI_Model
{
    public function Bacauser(){
        return $this->db->get('users')->result_array();
    }
}