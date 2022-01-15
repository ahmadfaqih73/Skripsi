<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coba extends CI_Controller
{
    public function index(){
    	$variabel = $this->Model_variable->variabel();
    	$data = array('variabel' => $variabel, );
    	//print_r($variabel);
        $this->load->view('view_user/coba', $data);
    }
}