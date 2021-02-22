<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // proteksi halaman
        $this->auth->cek_login();
        // load model
        $this->load->model('User_model');
        $this->load->model('Peternak_model');
        $this->load->model('Subkriteria_model');
        $this->load->model('Evaluasi_model');
    }

    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        $st_kelompok = $this->Subkriteria_model->getSubkritEachKrit('KRT001');
        $sys_pemeliharaan = $this->Subkriteria_model->getSubkritEachKrit('KRT003');
        $pel_kesehatan = $this->Subkriteria_model->getSubkritEachKrit('KRT004');

        $cek = $this->db->select('*')->from('tb_info_user')->where('id_user', $_SESSION['id_user'])->get()->num_rows();
        $info = $this->db->select('*')->from('tb_info_user')->where('id_user', $_SESSION['id_user'])->get()->result_array();
        
        // echo "<pre>";
        // print_r($info);die;

        $data = array(
            'title'     =>  'Info | User',
            'subtitle'  =>  'Informasi Kelompok Ternak',
            'cek'   => $cek,
            'info'   => $info,
            'id_user'   => $id_user,
            'st_kelompok'  =>      $st_kelompok,
            'sys_pemeliharaan'  =>      $sys_pemeliharaan,
            'pel_kesehatan'  =>      $pel_kesehatan,
            'isi'       =>  "user/info/list"
        );

        $this->load->view('user/layout/wrapper', $data, FALSE);
    }

    // tambah info user
    public function tambah_info_user()
    {
        $data = array (
            'id_user'       =>  $this->input->post('id_user'),
            'nama_kelp'     =>  $this->input->post('kel_ternak'),
            'alamat'        =>  $this->input->post('alamat'),
            'Telepon'       =>  $this->input->post('telepon')
        );

        $data2 = array (
            "id_user"   => $this->input->post('id_user'),
            "nama_klp"   => $this->input->post('kel_ternak')
        );
        
        // edit data info user
        $this->User_model->tambahInfoUser($data, $data2);

        // set flashdata
        $this->session->set_flashdata('sukses', 'Data info user telah ditambah.');
        redirect(base_url('user/info'), 'refresh');
    }

    // edit info klp
    // fungsi edit data kelompok ternak
    public function edit_info_klp()
    {

        $data = array (
            'id_user'       =>  $this->input->post('id_user'),
            'nama_kelp'     =>  $this->input->post('kel_ternak'),
            'alamat'        =>  $this->input->post('alamat'),
            'Telepon'       =>  $this->input->post('telepon')
        );

        $data2 = array (
            "id_user"   => $this->input->post('id_user'),
            "nama_klp"   => $this->input->post('kel_ternak')
        );
        
        // edit data info user
        $this->Peternak_model->editInfoUser($data, $data2);

        // set flashdata
        $this->session->set_flashdata('sukses', 'Data info user telah diedit.');
        redirect(base_url('user/info'), 'refresh');

    }

    public function anggota()
    {
        $id_user = $this->session->userdata('id_user');
        $cek = $this->db->select('*')->from('tb_info_user')->where('id_user', $id_user)->get()->num_rows();
        $anggota = $this->Peternak_model->getAnggota($id_user);
        
        $data = array(
            'title'     =>  'Anggota | User',
            'subtitle'  =>  'Daftar Anggota',
            'anggota'   =>  $anggota,
            'cek'  =>  $cek,
            'isi'       =>  "user/anggota/list"
        );

        $this->load->view('user/layout/wrapper', $data, FALSE);
    }

    public function berkas()
    {
        $id_user = $this->session->userdata('id_user');

        $berkas = $this->Peternak_model->getBerkasKlp($id_user);
        $cek = $this->db->select('*')->from('tb_info_user')->where('id_user', $id_user)->get()->num_rows();
        // echo "<pre>";
        // print_r($berkas);die;
        $data = array(
            'title'     =>  'berkas | User',
            'subtitle'  =>  'Berkas Kelompok Ternak',
            // 'berkas'    =>  $berkas[0],
            'cek'  =>  $cek,
            'isi'       =>  "user/berkas/list"
        );

        $this->load->view('user/layout/wrapper', $data, FALSE);
    }

    public function master_data()
    {
        $id_user = $this->session->userdata('id_user');
        $cek = $this->db->select('*')->from('tb_info_user')->where('id_user', $id_user)->get()->num_rows();
        $anggota = $this->Peternak_model->getAnggota($id_user);
        $berkas = $this->Peternak_model->getBerkasKlp($id_user)[0];
        
        if ($berkas['prop_klp'] != NULL && $berkas['akta_pengukuhan'] != NULL && $berkas['akta_notaris'] != NULL && $berkas['foto_kandang'] != NULL && $berkas['sk_terdaftar'] != NULL && $berkas['ss_lokasi'] != NULL) {
            $status = 1;
        } else {
            $status = 0;
        }

        $data = array(
            'title'     =>  'Master Data | User',
            'subtitle'  =>  'Master Data',
            'anggota'   =>  $anggota,
            'berkas'    =>  $berkas,
            'cek'        =>  $cek,
            'status'    => $status,
            'isi'       =>  "user/master/list"
        );

        $this->load->view('user/layout/wrapper', $data, FALSE);
    }

    public function tambah_anggota()
    {
        // echo "<pre>";
        // print_r($_POST);
        $ttl = $this->input->post('tempat_lahir').", ".$this->input->post('tanggal_lahir');
        
        $data = array(
            'id_user' => $this->session->userdata('id_user'),
            'nik'   =>  $this->input->post('nik'),
            'nama_anggota'   =>  $this->input->post('nama_anggota'),
            'ttl'   =>  $ttl,
            'agama'   =>  $this->input->post('agama'),
            'alamat'   =>  $this->input->post('alamat'),
            'st_perkawinan'   =>  $this->input->post('st_perkawinan'),
            'pekerjaan'   =>  $this->input->post('pekerjaan')
        );

        $this->Peternak_model->addAnggota($data);
        
        // set flashdata
        $this->session->set_flashdata('sukses', 'Data Anggota telah ditambahkan.');
        redirect(base_url('user/info/master_data'), 'refresh');
    }

    // edit anggota
    public function edit_anggota()
    {
        // echo "<pre>";
        // print_r($_POST);
        $ttl = $this->input->post('tempat_lahir').", ".$this->input->post('tanggal_lahir');
        
        $data = array(
            'id_user' => $this->session->userdata('id_user'),
            'nik'   =>  $this->input->post('nik'),
            'nama_anggota'   =>  $this->input->post('nama_anggota'),
            'ttl'   =>  $ttl,
            'agama'   =>  $this->input->post('agama'),
            'alamat'   =>  $this->input->post('alamat'),
            'st_perkawinan'   =>  $this->input->post('st_perkawinan'),
            'pekerjaan'   =>  $this->input->post('pekerjaan')
        );

        $this->Peternak_model->editAnggota($data);
        
        // set flashdata
        $this->session->set_flashdata('sukses', 'Data Anggota telah diedit.');
        redirect(base_url('user/info/master_data'), 'refresh');
    }

    public function tambah_berkas()
    {   
    
        foreach ($_FILES as $key => $value) {
            $name = $key;
        }

        $type = $_FILES[$name]['type'];

        if ($_FILES[$name]['size'] == 0) {
            // set flashdata
            $this->session->set_flashdata('gagal', 'Tidak Ada File Yang Ditambahkan.');
            redirect(base_url('user/info/master_data'), 'refresh');
        } else {

            if ($type == "application/pdf") {
                // upload pdf
                $this->_upload_pdf($name);
            } elseif ($type == "image/png" || $type == "image/jpg" || $type == "image/jpeg") {
                // upload img
                $this->_upload_img($name);
            } else {
               // set flashdata
                $this->session->set_flashdata('gagal', 'Format file tidak sesuai.');
                redirect(base_url('user/info/master_data'), 'refresh');
            }

        }

    }

    public function upload_berkas()
    {

        $id_user = $this->session->userdata('id_user');

        foreach ($_FILES as $key => $value) {

            foreach ($value as $k => $v) {
                if ($k=='name' && $v!='') {
                    break;
                } else {
                    unset($_FILES[$key]);
                }
            }
        }

        if ($_FILES == NULL) {
            // set flashdata
            $this->session->set_flashdata('gagal', 'Tidak Ada File Yang Ditambahkan.');
            redirect(base_url('user/info/master_data'), 'refresh');
        } else {
            $pdf = array();
            $imgs = array();
            foreach ($_FILES as $key => $value) {
                $name = $key;
                $type = $_FILES[$key]['type'];
                if ($type == "application/pdf") {
                    // upload pdf
                    
                    $pdf[$name] = $_FILES[$name];
                    
                    // $this->_upload_pdf($name);
                } elseif ($type == "image/png" || $type == "image/jpg" || $type == "image/jpeg") {
                    // upload img
                    
                    $imgs[$name] = $_FILES[$name];

                } 
                
            }

            // untuk image
            foreach ($imgs as $key => $value) {
                $image_path = realpath(APPPATH . '../assets/upload/berkas/img');
                $config['upload_path']   = $image_path;
                $config['allowed_types'] = 'jpg|png|PNG|JPEG|jpeg|JPG';
                $config['max_size']      = 2048;
                $config['max_width']     = 2040;
                $config['max_height']    = 2040;

                $this->load->library('upload', $config, 'imgupload');
                // $upload_imgs = $this->catalogupload->do_upload($key0);
                if( ! $this->imgupload->do_upload($key) ) {
                    // set flashdata
                    $this->session->set_flashdata('gagal', $this->imgupload->display_errors());
                    redirect(base_url("user/info/master_data"), 'refresh');  
                } else {
                    $upload_gambar = ["upload_data" => $this->imgupload->data()];
            
                    // create thumbnail gambar
                    $config['image_library']    = 'gd2';
                    $config['source_image']     = "$image_path/".$upload_gambar['upload_data']['file_name'];
                    // lokasi folder thumbnail
                    $config['new_image']        = "$image_path/thumbs";
                    $config['create_thumb']     = TRUE;
                    $config['maintain_ratio']   = TRUE;
                    $config['width']            = 75;
                    $config['height']           = 50;
                    $config['thumb_marker']     = '';

                    $this->load->library('image_lib', $config);

                    $this->image_lib->resize();
                    // end create thumbnail

                    $data = [
                        $key => $value['name']
                    ];
                    $this->db->where('id_user', $id_user);
                    $this->db->update('tb_kelompok', $data);

                }
                
            }

            // untuk pdf
            foreach ($pdf as $key => $value) {
                $pdf_path = realpath(APPPATH . '../assets/upload/berkas');
                $config['upload_path']   = $pdf_path;
                $config['allowed_types'] = 'pdf|csv';

                $this->load->library('upload', $config, 'pdfupload');
                // $this->pdfupload->initialize($config);
                // $upload_pdf = $this->catalogupload->do_upload($key1);
                if( ! $this->pdfupload->do_upload($key) ) {
                    // set flashdata
                    $this->session->set_flashdata('gagal', $this->pdfupload->display_errors());
                    redirect(base_url("user/info/master_data"), 'refresh');       
                } else {
                    $data = [
                        $key => $value['name']
                    ];
    
                    $this->db->where('id_user', $id_user);
                    $this->db->update('tb_kelompok', $data);
                }

            }

            // set flashdata
            $this->session->set_flashdata('sukses', 'Berkas telah ditambahkan.');
            redirect(base_url('user/info/master_data'), 'refresh');


        }
    }

    public function edit_berkas()
    {   
    
        foreach ($_FILES as $key => $value) {
            $name = $key;
        }

        $type = $_FILES[$name]['type'];
        // $file_name = $_FILES[$name]['name'];

        if ($_FILES[$name]['size'] == 0) {
            // set flashdata
            $this->session->set_flashdata('gagal', 'Tidak Ada File Yang Ditambahkan.');
            redirect(base_url('user/info/master_data'), 'refresh');
        } else {

            if ($type == "application/pdf") {
                // upload pdf
                // $this->_unlink_pdf($file_name);
                $this->_upload_pdf($name);
            } elseif ($type == "image/png" || $type == "image/jpg" || $type == "image/jpeg") {
                // upload img
                // $this->_unlink_img($file_name);
                $this->_upload_img($name);
            } else {
               // set flashdata
                $this->session->set_flashdata('gagal', 'Format file tidak sesuai.');
                redirect(base_url('user/info/master_data'), 'refresh');
            }

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

    public function _upload_img($name)
    {
        // upload img
        $image_path = realpath(APPPATH . '../assets/upload/berkas/img');
        $config['upload_path']   = $image_path;
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']      = 2048;
        $config['max_width']     = 2040;
        $config['max_height']    = 2040;
        
        $this->load->library('upload', $config);
        // echo "<pre>";print_r($_FILES);exit;
        if( ! $this->upload->do_upload($name) ) {
            // echo "<pre>";
            // echo $this->upload->display_errors();
            // print_r($this->upload->display_errors('', ''));
            // print_r($_FILES);exit;

            // set flashdata
            $this->session->set_flashdata('gagal', $this->upload->display_errors());
            redirect(base_url("user/info/master_data"), 'refresh');

        } else {

            $upload_gambar = ["upload_data" => $this->upload->data()];
            
            // create thumbnail gambar
            $config['image_library']    = 'gd2';
            $config['source_image']     = "$image_path/".$upload_gambar['upload_data']['file_name'];
            // lokasi folder thumbnail
            $config['new_image']        = "$image_path/thumbs";
            $config['create_thumb']     = TRUE;
            $config['maintain_ratio']   = TRUE;
            $config['width']            = 75;
            $config['height']           = 50;
            $config['thumb_marker']     = '';

            $this->load->library('image_lib', $config);

            $this->image_lib->resize();
            // end create thumbnail

            $data = array (
                "id_user"   => $this->session->userdata('id_user'),
                "field"     => $name,
                "file"      => $_FILES[$name]['name']
            );

            $this->Peternak_model->addDataKlp($data);

            // set flashdata
            $this->session->set_flashdata('sukses', 'Berkas telah ditambahkan.');
            redirect(base_url('user/info/master_data'), 'refresh');
        }
    }

    public function _upload_pdf($name)
    {
        // upload berkas
        $pdf_path = realpath(APPPATH . '../assets/upload/berkas');
        $config['upload_path']   = $pdf_path;
        $config['allowed_types'] = 'pdf|csv';
        
        $this->load->library('upload', $config);
        
        $this->upload->initialize($config);
        // echo "<pre>";print_r($_FILES);exit;
        if( ! $this->upload->do_upload($name) ) {
            // echo $this->upload->display_errors();
            // var_dump($this->upload->display_errors('', ''));
            // echo "<pre>";
            // print_r($_FILES);
            // echo "hereee";die;
            // set flashdata
            $this->session->set_flashdata('gagal', $this->upload->display_errors());
            redirect(base_url("user/info/master_data"), 'refresh');

        } else {
            // echo "here";die;
            // $upload_pdf = ["upload_data" => $this->upload->data()];
            $data = array (
                "id_user"   => $this->session->userdata('id_user'),
                "field"     => $name,
                "file"      => $_FILES[$name]['name']
            );

            $this->Peternak_model->addDataKlp($data);

            // set flashdata
            $this->session->set_flashdata('sukses', 'Berkas telah ditambahkan.');
            redirect(base_url('user/info/master_data'), 'refresh');
       }
    }

    // hapus anggota
    public function hapus_anggota($nik)
    {
        // proses hapus suplier
        $this->Peternak_model->hapusAnggota($nik);
        $this->session->set_flashdata('sukses', 'Data Anggota Telah Dihapus');
        redirect(base_url('user/info/master_data'), 'refresh');
    }

    // hapus file di directore
    public function _unlink_pdf($file_name)
    {
        $pdf_path = realpath(APPPATH . '../assets/upload/berkas/');
        unlink("$pdf_path\\".$file_name);
    }

    public function _unlink_img($file_name)
    {
        $image_path = realpath(APPPATH . '../assets/upload/berkas/img');
        $image_thumbs_path = realpath(APPPATH . '../assets/upload/berkas/img/thumbs');
        unlink("$image_path\\".$file_name);
        unlink("$image_thumbs_path\\".$file_name);
    }

/* End of file Info.php */
}