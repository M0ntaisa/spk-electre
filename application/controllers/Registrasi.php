<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

     public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data = array(
            'title'     =>  'Registrasi'
        );

        $valid = $this->form_validation;
        $valid->set_rules('nama', 'Name', 'required|trim',[
            'required' => 'Nama lengkap harus diisi.'
        ]);
        $valid->set_rules('username', 'Username', 'required|trim|is_unique[tb_users.username]', [
            'required' => 'Username harus diisi',
            'is_unique' => 'Username anda sudah terdaftar'
        ]);
        $valid->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_users.email]', [
            'required' => 'Email harus diisi',
            'valid_email' => 'Format email anda tidak valid.',
            'is_unique' => 'Email anda sudah terdaftar'
        ]);
        $valid->set_rules('password', 'Password', 'required|min_length[3]|matches[re_password]',[
            'required' => 'Password harus diisi',
            'matches' => 'Password tidak sama.',
            'min_length' => 'Password terlalu pendek.'
        ]);
        $valid->set_rules('re_password', 'Ulangi Password', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('regis/list', $data, FALSE);
        
        } else {
            
            $this->User_model->add_user();

            $this->session->set_flashdata('sukses', "Daftar Akun Berhasil. Silahklan Cek Email Anda Untuk Verifikasi Akun!");
            
            redirect('login','refresh');
            
        }
    }

    public function verify()
    {
        $this->User_model->verify_user();
    }

}

/* End of file Registrasi.php */
