<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    // get users
    public function getUsers()
    {
        return $this->db->get_where('tb_users', ['level' => 'users', 'status' => 1])->result_array();
    }

    // get id_users
    public function getIdUsers()
    {
        $query = $this->db->query("SELECT 
        tb_users.id_users
        FROM
        tb_users 
        WHERE
        tb_users.level = 'users' AND tb_users.status = '1'
        ORDER BY
        tb_users.id_users ASC
        ");
        
        return $query->result_array();
    }

    // get users by id_users
    public function getUsersById($id_user)
    {
        $query = $this->db->query("SELECT *
        FROM
        tb_users 
        WHERE
        tb_users.id_users = '$id_user'
        ");
        
        return $query->result_array();
    }

    // login user
    public function login($username, $password)
    {
        return $this->db->get_where('tb_users', ['username' => $username, 'password' => SHA1($password)])->row_array();
    }

    public function getPassword($username)
    {
        return $this->db->get_where('tb_users', ['username' => $username])->row_array();
    }

    public function add_user()
    {
        $email = $this->input->post('email', true);

        $data = [
            'nama'              => htmlspecialchars($this->input->post('nama', true)),
            'email'             => htmlspecialchars($email),
            'username'          => htmlspecialchars($this->input->post('username', true)),
            'password'          => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'level'             => "users",
            'status'            => 0,
            'created'    =>  time()
        ];

        // token
        $token = base64_encode(random_bytes(32));
        $user_token = [
            'email' =>  $email,
            'token' => $token,
            'created' => time()
        ];

        $this->db->insert('tb_users', $data);
        $this->db->insert('tb_token', $user_token);

        $this->_sendEmail($token, 'verify');
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'   =>  'smtp',
            'smtp_host'  =>  'ssl://smtp.googlemail.com',
            'smtp_user'  =>  'onaccompany@gmail.com',
            'smtp_pass'  =>  'accompanyON101',
            'smtp_port'  =>  465,
            'mailtype'   =>  'html',
            'charset'    =>  'utf-8',
            'newline'    =>  "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('onaccompany@gmail.com', 'Accompany On');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {   
            $this->email->subject('Account Verification');
            $this->email->message('Terima kasih karena telah mendaftar di layanan kami. Klik link ini untuk verifikasi akun anda : <a href="' . base_url() . 'registrasi/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktivasi</a>');
        }
            
        if($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify_user()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('tb_users', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('tb_token', ['token' => $token])->row_array();

            if ($user_token) {
                if (time() - $user_token['created'] < (60*60*24)) {
                    $this->db->set('status', 1);
                    $this->db->where('email', $email);
                    $this->db->update('tb_users');

                    $this->db->delete('tb_token', ['email' => $email]);
                    $this->session->set_flashdata('sukses', 'Aktivasi berhasil! Silahkan Login!');
            
                    redirect('login','refresh');
                } else {
                    $this->db->delete('tb_users', ['email' => $email]);
                    $this->db->delete('tb_token', ['email' => $email]);

                    $this->session->set_flashdata('sukses', "Aktivasi akun gagal! *Token telah kadaluwarsa");
            
                    redirect('registrasi','refresh');
                }
            } else {
                $this->session->set_flashdata('sukses', '<script>alert("Aktivasi akun gagal! *Token tidak valid")</script>');
            
                redirect('registrasi','refresh');
            }
        } else {
            $this->session->set_flashdata('sukses', '<script>alert("Aktivasi akun gagal! *Wrong email!")</script>');
            
            redirect('registrasi','refresh');
        }
    }

    // tambah info user
    public function tambahInfoUser($data, $data2)
    {
        // $this->db->insert('tb_info_user', $data);
        //Cek apakah ada kelompok ternak dengan Kode sama
        $filter = $this->db->select('*')->from('tb_info_user')->where('id_user', $data['id_user'])->get()->num_rows();
        if ($filter < 1) {
            $insert = $this->db->insert('tb_info_user', $data);
            if ($insert) {
                // insert data kelompok
                $this->db->insert('tb_kelompok', $data2);
            }
        } else {
            // set flashdata
            $this->session->set_flashdata('gagal', 'Ketua kelompok ternak sudah terdaftar.');
            redirect(base_url('admin/peternak'), 'refresh');
        }
    }


}

/* End of file User_model.php */
