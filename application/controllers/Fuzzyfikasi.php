<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fuzzyfikasi extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/Navbar');
        $this->load->view('template/sidebar');
        $this->load->view('Proses_Fuzzy/Fuzzyfikasi');
        $this->load->view('template/footer');
    }
    
    public function prosesfuzifikasi(){
        $nama= $this->input->post('nama');
        $ipk = $this->input->post('ipk');
        $itaq = $this->input->post('itaq');
        $taat = $this->input->post('taat');
        $visi = $this->input->post('visi');
       
        //Fuzzyfikasi

        //IPk
        //Tidak Baik
        if ($ipk <= 2 ) {
            $jenisIpk = 1;
            $statusIpk = 'Tidak Baik';
        } 
        elseif($ipk >= 2 and $ipk<=2.5 ){
            $jenisIpk=(2.5-$ipk)/(2.5-2);
        } 
        elseif($ipk>=2.5){
            $jenisIpk = 0;
        }

        //Baik
        if ($ipk <= 2) {
            $jenisIpk2 = 0;
        } elseif ($ipk >= 2 and $ipk <= 2.5) {
            $jenisIpk2 = ($ipk - 2) / (2.5 - 2);
        }
        elseif ($ipk >= 2.5 and $ipk <= 3) {
            $jenisIpk2 = (3 - $ipk) / (3 - 2.5);
        } elseif ($ipk >= 3) {
            $jenisIpk2 = 1;
        }

        //Sangat Baik
        if ($ipk <= 2.75) {
            $jenisIpk3 = 0;
        } elseif ($ipk >= 2.75 and $ipk <= 3) {
            $jenisIpk3 = ($ipk - 2.75) / (3 - 2.75);
        } elseif ($ipk >= 3) {
            $jenisIpk3 = 1;
        }


        //Itaq
        //Tidak Baik
        if ($itaq <= 50) {
            $jenisItaq = 1;
        } elseif ($itaq >= 50 and $itaq <= 70) {
            $jenisItaq = (70 - $itaq) / (70 - 50);
        } elseif ($itaq >= 70) {
            $jenisItaq = 0;
        }

        //Baik
        if ($itaq <=50) {
            $jenisItaq2 = 0;
        } elseif ($itaq >= 50 and $itaq <= 70) {
            $jenisItaq2 = ($ipk - 50) / (70 - 50);
        } elseif ($itaq >=70  and $itaq <= 90) {
            $jenisItaq2 = (90 - $itaq) / (90 - 70);
        } elseif ($itaq >= 90) {
            $jenisItaq2 = 1;
        }

        //Sangat Baik
        if ($itaq  <= 70) {
            $jenisItaq3 = 0;
        } elseif ($itaq >= 70 and $itaq <= 90) {
            $jenisItaq3 = ($itaq - 70) / (90 -70 );
        } elseif ($itaq >= 90) {
            $jenisItaq3 = 1;
        }

        //Taat Pancasila
        //Tidak Baik
        if ($taat <= 50) {
            $jenistaat = 1;
        } elseif ($taat >= 50 and $taat <= 70) {
             $jenistaat = (70 - $taat) / (70 - 50);
        } elseif ($taat >= 70) {
             $jenistaat = 0;
        }

        //Baik
        if ($taat<= 50) {
             $jenistaat2 = 0;
        } elseif ($taat >= 50 and $taat <= 70) {
             $jenistaat2 = ($taat- 50) / (70 - 50);
        } elseif ($taat >= 70  and $taat <= 90) {
             $jenistaat2 = (90 - $taat) / (90 - 70);
        } elseif ($taat >= 90) {
             $jenistaat2 = 1;
        }

        //Sangat Baik
        if ($taat  <= 70) {
             $jenistaat3 = 0;
        } elseif ($taat >= 70 and $taat <= 90) {
             $jenistaat3 = ($taat - 70) / (90 - 70);
        } elseif ($taat >= 90) {
             $jenistaat3 = 1;
        }


        //Visi_misi
        //Tidak Baik
        if ($visi <= 50) {
            $jenisvisi = 1;
        } elseif ($visi >= 50 and $visi <= 70) {
            $jenisvisi = (70 - $visi) / (70 - 50);
        } elseif ($visi >= 70) {
            $jenisvisi = 0;
        }

        //Baik
        if ($visi <= 50) {
            $jenisvisi2 = 0;
        } elseif ($visi >= 50 and $visi <= 70) {
            $jenisvisi2 = ($visi - 50) / (70 - 50);
        } elseif ($visi >= 70  and $visi <= 90) {
            $jenisvisi2 = (90 - $visi) / (90 - 70);
        } elseif ($visi >= 90) {
            $jenisvisi2 = 1;
        }

        //Sangat Baik
        if ($visi  <= 70) {
            $jenisvisi3 = 0;
        } elseif ($visi >= 70 and $visi <= 90) {
            $jenisvisi3 = ($visi - 70) / (90 - 70);
        } elseif ($visi >= 90) {
            $jenisvisi3 = 1;
        }


        var_dump($nama,
            $jenisIpk,
            $jenisIpk2,
            $jenisIpk3,
            $jenisItaq,
            $jenisItaq2,
            $jenisItaq3,
            $jenistaat,
            $jenistaat2,
            $jenistaat3,
            $jenisvisi,
            $jenisvisi2,
            $jenisvisi3);

    }
}
