<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Peternak extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // proteksi halaman
        $this->auth->cek_login();
        // load model
        $this->load->model('Peternak_model');
        $this->load->model('Subkriteria_model');
        $this->load->model('Evaluasi_model');
        $this->load->model('User_model');
    }

    public function index()
    {   
        // get data peternak
        $users = $this->User_model->getUsers();
        $id_users = $this->User_model->getIdUsers();
        
        foreach ($id_users as $row) {
            $id_user = $row['id_users'];

            $get_count[$id_user] = $this->Peternak_model->getJumlahAnggota($id_user); 
            
        }
        

        foreach ($get_count as $key => $value) {
            $id_user = $key;
            
            $cek = $this->db->select('*')->from('tb_info_user')->where('id_user', $id_user)->get()->num_rows();
            if ($cek != 0) {
                $count = $value[0]['count'];
                if ($count >= '10' ) {
                    $berkas = $this->Peternak_model->getBerkasKlp($id_user)[0];
            
                    if ($berkas['prop_klp'] != NULL && $berkas['akta_pengukuhan'] != NULL && $berkas['akta_notaris'] != NULL && $berkas['foto_kandang'] != NULL && $berkas['sk_terdaftar'] != NULL && $berkas['ss_lokasi'] != NULL) {
                        $users_pas[] = $this->User_model->getUsersById($id_user)[0];
                    } 
                    
                } 
            } else {
                $users_pas = array();
            }
            
            
        }
        
        $peternak = $this->Peternak_model->getPeternak();
        $st_kelompok = $this->Subkriteria_model->getSubkritEachKrit('KRT001');
        $sys_pemeliharaan = $this->Subkriteria_model->getSubkritEachKrit('KRT003');
        $pel_kesehatan = $this->Subkriteria_model->getSubkritEachKrit('KRT004');

        for ($i=0; $i < count($peternak) ; $i++) { 
            $peternak[$i]['eval']['st_kelompok'] = $this->Evaluasi_model->getDataEval($peternak[$i]['kd_alternatif'], "1");
            $peternak[$i]['eval']['sertifi'] = $this->Evaluasi_model->getDataEval($peternak[$i]['kd_alternatif'], "2");
            $peternak[$i]['eval']['sys_pem'] = $this->Evaluasi_model->getDataEval($peternak[$i]['kd_alternatif'], "3");
            $peternak[$i]['eval']['sys_kes'] = $this->Evaluasi_model->getDataEval($peternak[$i]['kd_alternatif'], "4");
        }


        $data = array(  
            'title'     =>      'Peternak | Administrator',
            'subtitle'  =>      'Peternak',
            'peternak'  =>      $peternak,
            'users'  =>      $users,
            'users_pas'  =>      $users_pas,
            'st_kelompok'  =>      $st_kelompok,
            'sys_pemeliharaan'  =>      $sys_pemeliharaan,
            'pel_kesehatan'  =>      $pel_kesehatan,
            'isi'       =>      'admin/peternak/list' 
        );

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    public function ajax_info_user()
    {
        //variabel id_user yang dikirimkan form.php
        $id_user = $_POST['id_user'];
        $info_users = $this->Peternak_model->getInfoUsers($id_user);

        $data = array(
            'id_user'   => $info_users[0]['id_user'],
            'kel_ternak'   => $info_users[0]['nama_kelp'],
            'alamat'   => $info_users[0]['alamat'],
            'telepon'   => $info_users[0]['telepon'],
        );

        //tampil data
        echo json_encode($data);
    }

    // fungsi tambah data suplier
    public function tambah_klp_ternak()
    {
        if ($this->input->post('id_user') == "") {
            // set flashdata
            $this->session->set_flashdata('gagal', 'Anda Belum Memilih Ketua Kelompok.');
            redirect(base_url('admin/peternak'), 'refresh');
        } else {
         
            if ($this->input->post('sertifikat') == "Tidak Ada") {
                $sertifi = "SUB006";
    
                $kd_subkriteria = array(
                    $_POST['st_kelompok'],
                    $sertifi,
                    $_POST['sys_pemeliharaan'],
                    $_POST['pel_kesehatan']
                );
        
                $data = array (
                    'kd_alternatif'    =>  $this->input->post('kd_alternatif'),
                    'id_user'       =>  $this->input->post('id_user'),
                    'nama'          =>  $this->input->post('kel_ternak'),
                    'alamat'        =>  $this->input->post('alamat'),
                    'telepon'       =>  $this->input->post('telepon'),
                    'sertifikat'       =>  $this->input->post('sertifikat')
                );
                
                // tambah data ke table suplier
                $this->Peternak_model->tambahKelpTernak($data, $kd_subkriteria);
        
                // set flashdata
                $this->session->set_flashdata('sukses', 'Data Kelompok Ternak telah ditambahkan.');
                redirect(base_url('admin/peternak'), 'refresh');
            } else {
                $sertifi = "SUB005";
    
                $kd_subkriteria = array(
                    $_POST['st_kelompok'],
                    $sertifi,
                    $_POST['sys_pemeliharaan'],
                    $_POST['pel_kesehatan']
                );
        
                    $data = array (
                        'kd_alternatif'    =>  $this->input->post('kd_alternatif'),
                        'id_user'       =>  $this->input->post('id_user'),
                        'nama'          =>  $this->input->post('kel_ternak'),
                        'alamat'        =>  $this->input->post('alamat'),
                        'telepon'       =>  $this->input->post('telepon'),
                        'sertifikat'       =>  $this->input->post('sertifikat')
                    );
                    
                    // tambah data ke table suplier
                    $this->Peternak_model->tambahKelpTernak($data, $kd_subkriteria);
            
                    // set flashdata
                    $this->session->set_flashdata('sukses', 'Data Kelompok Ternak telah ditambahkan.');
                    redirect(base_url('admin/peternak'), 'refresh');
            }
            
            
        }
        
    }


    // fungsi edit data kelompok ternak
    public function edit_klp_ternak()
    {

        if ($this->input->post('sertifikat') == "Tidak Ada") {
            
            // echo "<pre>";
            // print_r($_FILES);die;
            $kd_subkriteria = array(
                $_POST['st_kelompok'],
                "SUB006",
                $_POST['sys_pemeliharaan'],
                $_POST['pel_kesehatan']
            );

            $data = array (
                'kd_alternatif' =>  $this->input->post('kd_alternatif'),
                'nama'          =>  $this->input->post('kel_ternak'),
                'alamat'        =>  $this->input->post('alamat'),
                'telepon'       =>  $this->input->post('telepon'),
                'sertifikat'       =>  $this->input->post('sertifikat')
            );
            
            // edit data kelompok ternak
            $this->Peternak_model->editPeternak($data, $kd_subkriteria);

            // set flashdata
            $this->session->set_flashdata('sukses', 'Data Kelompok Ternak telah diubah.');
            redirect(base_url('admin/peternak'), 'refresh');

        } else {
            
            // echo "file not 0";die;
            $kd_subkriteria = array(
                $_POST['st_kelompok'],
                "SUB005",
                $_POST['sys_pemeliharaan'],
                $_POST['pel_kesehatan']
            );
    
                $data = array (
                    'kd_alternatif' =>  $this->input->post('kd_alternatif'),
                    'nama'          =>  $this->input->post('kel_ternak'),
                    'alamat'        =>  $this->input->post('alamat'),
                    'telepon'       =>  $this->input->post('telepon'),
                    'sertifikat'       =>  $this->input->post('sertifikat')
                );

                // edit data kelompok ternak
                $this->Peternak_model->editPeternak($data, $kd_subkriteria);

                // set flashdata
                $this->session->set_flashdata('sukses', 'Data Kelompok Ternak telah diubah.');
                redirect(base_url('admin/peternak'), 'refresh');

            }
        

    }

    // anggota kelompok
    public function anggota()
    {
        $id_user = $_GET['id_user'];
        $anggota = $this->Peternak_model->getAnggota($id_user);
        
        $data = array(
            'title'     =>  'Anggota | Admin',
            'subtitle'  =>  'Daftar Anggota',
            'anggota'   =>  $anggota,
            'isi'       =>  "admin/peternak/anggota"
        );

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    // berkas kelompok
    public function berkas()
    {
        $id_user = $_GET['id_user'];

        $berkas = $this->Peternak_model->getBerkasById($id_user);
      
        if ($berkas == NULL) {
            // set flashdata
            $this->session->set_flashdata('gagal', 'Tidak Ada Data Terdeteksi.');
            redirect(base_url('admin/peternak'), 'refresh');
        } else {
            $data = array(
                'title'     =>  'Berkas | Admin',
                'subtitle'  =>  'Berkas Kelompok Ternak',
                'berkas'    =>  $berkas[0],
                'isi'       =>  "admin/peternak/berkas"
            );
    
            $this->load->view('admin/layout/wrapper', $data, FALSE);
        }
      
    }

    public function open_file()
    {
        // Store the file name into variable
        $file = $_GET['file'];
        $filepath = base_url()."/assets/upload/berkas/".$file;
        // Header content type 
        header("Content-type: application/pdf");
        header("Content-Disposition: inline; filename=$file");
        @readfile($filepath);
    }

    // fungsi hapus Alternatif
    public function hapus_klp_ternak($id_user)
    {
        // proses hapus gambar
        $alternatif = $this->Peternak_model->getSertifikat($id_user);
        // echo "<pre>";
        // print_r($alternatif);die;

        if ($alternatif[0]['sertifikat'] == NULL) {
            // proses hapus suplier
            $this->Peternak_model->hapusKlpTernak($id_user);
            $this->session->set_flashdata('sukses', 'Data Kelompok Ternak Telah Dihapus');
            redirect(base_url('admin/peternak'), 'refresh');
        } else {
            $image_path = realpath(APPPATH . '../assets/upload/berkas/img');
            unlink("$image_path/".$alternatif[0]['sertifikat']);
            unlink("$image_path/thumbs/".$alternatif[0]['sertifikat']);
            
            // proses hapus suplier
            $this->Peternak_model->hapusKlpTernak($id_user);
            $this->session->set_flashdata('sukses', 'Data Kelompok Ternak Telah Dihapus');
            redirect(base_url('admin/peternak'), 'refresh');
        }
        
    }

}

/* End of file Peternak.php */
