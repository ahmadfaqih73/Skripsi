 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_tambah_surat extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('form_validation');
    }

    public function upload_file()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'pdf|jpg|png';
        $config['max_size']             = 0;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('filename')) {
            return $this->upload->data("file_name");
        }
    }
    public function insert_surat_out()
    {
        $this->form_validation->set_rules('Nama', 'nama', 'required|min_length[3]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header');
            $this->load->view('template/Navbar');
            $this->load->view('template/sidebar');
            $this->load->view('Surat_keluar/Tambah_surat');
            $this->load->view('template/footer');
        } else {
            // $nama         = $this->input->post('Nama');
            // $kategori         = $this->input->post('kategori');
            // // $filename  = $this->upload_file();
            // $tanggal = $this->input->post('tanggal');

            $data = array(
                'Nama_surat' => $this->input->post('Nama'),
                'Jenis_surat' => $this->input->post('kategori'),
                'nama_file' => $this->upload_file(),
                'Tanggal_keluar' => $this->input->post('tanggal')
            );
            // var_dump($data);
            // die;

            $this->db->insert('surat_out', $data);
            redirect('Input_surat');
        }
    }
    public function updateSurat_Undangan()
    {

        // $this->form_validation->set_rules('Nama', 'nama', 'required|min_length[3]');
        // if ($this->form_validation->run() == FALSE) {
        //     echo 'harus diisi';
        // } else {
        //     if ($_FILES["filename"]["name"] !== '') {
        //         $config['upload_path']          = './uploads/';
        //         $config['allowed_types']        = 'pdf|jpg|png';
        //         $config['max_size']             = 0;
        //         $this->load->library('upload', $config);
        //         if ($this->upload->do_upload('filename')) {
        //             return $this->upload->data("file_name");
        //         }
        //         $file = $config['upload_path'];
        //         $data = array(
        //             'Nama_surat' => $this->input->post('Nama'),
        //             'Jenis_surat' => $this->input->post('kategori'),
        //             'nama_file' => $file,
        //             'Tanggal_keluar' => $this->input->post('tanggal')
        //         );
        //        
        //         // $this->db->where('id_surat_keluar', $this->input->post('id'));
        //         // $this->db->update('surat_out', $data);
        //         // redirect('Surat_Undangan', 'refresh');
        //     }
        $nama_surat       = $this->input->post('Nama');
        $filenam          = $this->input->post('oldFiles');
        $kategori = $this->input->post('kategori_surat');
        $tanggal = $this->input->post('tanggal');

        $upload_file = $_FILES['filename']['name'];
        if (!$upload_file) {

            $data = array(
                'Nama_surat'              => $nama_surat,
                'jenis_surat'       => $kategori,
                'Tanggal_keluar' => $tanggal

            );
            $this->db->where('id_surat_keluar', $this->input->post('id'));
            $this->db->update('surat_out', $data);
            redirect('Surat_Undangan', 'refresh');
        } else {
            if (!empty($_FILES['filename']['name'])) {
                unlink('./uploads/' . $filenam);
            } else {
                $filenam  = $this->input->post("oldFiles");
            }

            $data = array(
                'Nama_surat'              => $nama_surat,
                'jenis_surat'       => $kategori,
                'nama_file'         => $this->upload_file(),
                'Tanggal_keluar' => $tanggal

            );
            $this->db->where('id_surat_keluar', $this->input->post('id'));
            $this->db->update('surat_out', $data);
            redirect('Surat_Undangan', 'refresh');
        }
    }
}
