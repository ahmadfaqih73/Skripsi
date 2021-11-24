<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{



    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('template/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('template/auth_footer');
    }
    public function Register()
    {
        $data['title'] = 'Register';
        $this->load->view('template/auth_header', $data);
        $this->load->view('auth/register');
        $this->load->view('template/auth_footer');
    }

    public function reg_action()
    {
        $fullname = $this->input->post('fullname');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $repassword = $this->input->post('repassword');

        if ($password != $repassword) {
            echo "password tidak sama";
            # code...
        } else {
            $data = array(
                'fullname' => $fullname,
                'username' => $username,
                'password' => md5($password)
            );
            // var_dump($data);
            $result = $this->Model_user->simpan('users', $data);
            if ($result > 0) {
                echo "data users berhasil disimpan";
                # code...
            } else {
                echo "data user tidak tersimpan";
            }
        }
    }
    public function login_action()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $check_login_r = $this->Model_user->getLogin($username, $password)->num_rows();
        if ($check_login_r > 0) {
            redirect("Admin");
            # code...
        } else {
            echo "login gagal";
        }
    }
}
