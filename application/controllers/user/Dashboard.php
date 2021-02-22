<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // proteksi halaman
        $this->auth->cek_login();

        // // load model
        $this->load->model('Peternak_model');
        // $this->load->model('Kriteria_model');
        
    }

    // Halaman utama Dashboard
    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        

        $anggota = $this->Peternak_model->getAnggota($id_user);
        $cek = $this->db->select('*')->from('tb_info_user')->where('id_user', $_SESSION['id_user'])->get()->num_rows();

        $data = array(  'title'             =>      'Dashboard | User',
                        'subtitle'          =>      'Dashboard',
                        'anggota'           =>      $anggota,
                        'cek'               =>      $cek,
                        'isi'               =>      'user/dashboard/list' );
        
        $this->load->view('user/layout/wrapper', $data, FALSE);
    }

}