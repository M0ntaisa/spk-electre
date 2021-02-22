<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Peternak_model extends CI_Model {

    //Fungsi Lihat Data Alternatif
    public function getPeternak() {
        $query = $this->db->query("SELECT 
        tb_alternatif.*,
        tb_users.nama as nm_ketua
        FROM
        tb_alternatif 
        INNER JOIN tb_users ON tb_users.id_users = tb_alternatif.id_user
        ORDER BY
        tb_alternatif.id_alternatif ASC
        ");
        
        return $query->result_array();
    }

    // get kd & nama klp
    public function getKdNama()
    {
        $query = $this->db->query("SELECT kd_alternatif, nama
                FROM tb_alternatif
                ORDER BY id_alternatif ASC
            ");

        return $query->result_array();
    }

    // get kd & nama klp
    public function getEachKdNama($kd_alternatif)
    {
        return $this->db->select('*')->from('tb_alternatif')->where('kd_alternatif', $kd_alternatif)->get()->result_array();
    }

    // Fungsi tambah kelompok ternak
    public function tambahKelpTernak($data, $kd_subkriteria)   
    {
        //Cek apakah ada kelompok ternak dengan Kode sama
        $filter = $this->db->select('*')->from('tb_alternatif')->where('id_user', $data['id_user'])->get()->num_rows();
        if ($filter < 1) {
            $insert = $this->db->insert('tb_alternatif', $data);
            if ($insert) {
                // mengambil data kriteria dalam database
                $kriteria = $this->db->select('id_kriteria')->from('tb_kriteria')->get()->result_array();
                // membuat array data evaluasi
                $data_eval = array();
                // menyusun data kriteria, material dan kelompok ternak dalam 1 array
                for ($j=0; $j < count($kriteria) ; $j++) { 
                    $x = array (
                        'kd_alternatif'    =>  $data['kd_alternatif'],
                        'id_kriteria'   =>  $kriteria[$j]['id_kriteria'],
                        'kd_subkriteria'=>  $kd_subkriteria[$j]
                    );
                    $data_eval[] = $x; 
                }

                // memasukkan semua data dalam array ke dalam tb_evaluasi
                $this->db->insert_batch('tb_evaluasi', $data_eval);
                
            }
        } else {
            // set flashdata
            $this->session->set_flashdata('gagal', 'Ketua kelompok ternak sudah terdaftar.');
            redirect(base_url('admin/peternak'), 'refresh');
        }
        
        
    }

    // fungsi edit kelompok Ternak
    public function editPeternak($data, $kd_subkriteria)
    {
        $this->db->where('kd_alternatif', $data['kd_alternatif']);
        $update = $this->db->update('tb_alternatif', $data);
        if ($update) {
            // mengambil data kriteria dalam database
            $kriteria = $this->db->select('id_kriteria')->from('tb_kriteria')->get()->result_array();
            // membuat array data evaluasi
            $data_eval = array();
            // menyusun data kriteria, material dan kelompok ternak dalam 1 array
            for ($j=0; $j < count($kriteria) ; $j++) { 
                $x = array (
                    'kd_alternatif'    =>  $data['kd_alternatif'],
                    'id_kriteria'   =>  $kriteria[$j]['id_kriteria'],
                    'kd_subkriteria'=>  $kd_subkriteria[$j]
                );
                $data_eval[] = $x; 
            }

            // menghapus data suplier sebelum diinput pada table evaluasi
            $this->db->where('kd_alternatif', $data['kd_alternatif']);
            $delete = $this->db->delete('tb_evaluasi');
            // memasukkan semua data dalam array ke dalam tb_evaluasi
            if ($delete) {
                $this->db->insert_batch('tb_evaluasi', $data_eval);
            }
        }
    }

    // edit info user
    public function editInfoUser($data, $data2)
    {
        $this->db->where('id_user', $data['id_user']);
        $upd = $this->db->update('tb_info_user', $data);

        if ($upd) {
            $this->db->where('id_user', $data2['id_user']);
            $this->db->update('tb_kelompok', $data2);
        } else {
            // set flashdata
            $this->session->set_flashdata('gagal', 'Data info user gagal diedit.');
            redirect(base_url('user/info'), 'refresh');
        }
    }

    // fungsi hapus kelp ternak
    public function hapusKlpTernak($id_user)
    {
        $this->db->delete('tb_alternatif', ['id_user' => $id_user]);
    }

    // get info user
    public function getInfoUsers($id_user)
    {
        return $this->db->select('*')->from('tb_info_user')->where('id_user', $id_user)->get()->result_array();
    }

    // get anggota kelompok ternak
    public function getAnggota($id_user)
    {
        return $this->db->select('*')->from('tb_anggota')->where('id_user', $id_user)->get()->result_array();
    }

    // get jumlah anggota
    public function getJumlahAnggota($id_user)
    {
        $query = $this->db->query("SELECT COUNT(id_anggota) as count
        FROM
        tb_anggota 
        WHERE
        tb_anggota.id_user = '$id_user'
        ");
        
        return $query->result_array();
    }

    // get berkas semua kelompok ternak
    public function getBerkas($kd_alternatif)
    {
        return $this->db->select('*')->from('tb_kelompok')->where('kd_alternatif', $kd_alternatif)->get()->result_array();
    }

    // get berkas semua kelompok ternak
    public function getBerkasById($id_user)
    {
        return $this->db->select('*')->from('tb_kelompok')->where('id_user', $id_user)->get()->result_array();
    }

    // get berkas kelompok ternak
    public function getBerkasKlp($id_user)
    {
        return $this->db->select('*')->from('tb_kelompok')->where('id_user', $id_user)->get()->result_array();
    }

    // add anggota
    public function addAnggota($data)
    {
        //Cek apakah ada anggota dengan Kode sama
        $filter = $this->db->select('*')->from('tb_anggota')->where('nik', $data['nik'])->get()->num_rows();
        if ($filter < 1) {
            $this->db->insert('tb_anggota', $data);
        } else {
            // set flashdata
            $this->session->set_flashdata('gagal', 'Data Anggoya gagal ditambahkan. NIK sudah terdaftar.');
            redirect(base_url('user/info/master_data'), 'refresh');
        }
    }

    // edit anggota
    public function editAnggota($data)
    {
        $this->db->where('nik', $data['nik']);
        $this->db->update('tb_anggota', $data);
    }

    // add data kelompok
    public function addDataKlp($data)
    {
        $this->db->set($data['field'], $data['file']);
        $this->db->where('id_user', $data['id_user']);
        $this->db->update('tb_kelompok'); 
    }

    // hapus anggota
    public function hapusAnggota($nik)
    {
        $this->db->delete('tb_anggota', ['nik' => $nik]);
    }

    // fungsi get kd mat pada table transmat
    public function getSertifikat($id_user)
    {
        $this->db->select('sertifikat');
        $this->db->from('tb_kelompok');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        return $query->result_array();
    }

}

/* End of file Peternak_model.php */
