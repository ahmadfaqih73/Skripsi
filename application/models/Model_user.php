<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    public function simpan($tabel, $data)
    {
        return $this->db->insert($tabel, $data);
    }
    public function hapus($tabel, $where)
    {
        return $this->db->delete($tabel, $where);
    }

    public function update($tabel, $data, $where)
    {
        return $this->db->update($tabel, $data, $where);
    }
    public function getUsers($where = '')
    {
        return $this->db->query("SELECT * FROM users");
    }

    public function getLogin($username, $password)
    {
        return $this->db->query("SELECT * FROM users WHERE username='$username' AND password='" . md5($password) . "'");
    }
    
}
