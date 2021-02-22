<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // proteksi halaman
        // $this->auth->cek_login();
        // load model
        $this->load->model('History_model');
    }

    public function index()
    {
        // ambil data history
        $top_rank = $this->History_model->getHistoryByRank();

        $data = array(
            'title'     =>  "Hasil",
            'top_rank'  =>  $top_rank,
            'isi'       =>  "hasil/list"
        );

        $this->load->view('layout/wrapper', $data, FALSE);
        
    }

}

/* End of file Hasil.php */
