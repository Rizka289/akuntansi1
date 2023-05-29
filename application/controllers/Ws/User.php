<?php defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller{
    function login_post(){
        $this->load->library('Authentication');

        if(!httpmethod())
            response("Metode akses ilegal");

        list($input) = $this->authentication->persiapan($_POST);
        $this->authentication->login($input);
    }
    function logout_get(){
        if (!is_login())
            response(['message' => 'Anda belum login', 'type' => 'error'], 401);

        try {
            $this->session->unset_userdata('login');
            response(['message' => 'Anda berhasil logout', 'type' => 'success'], 200);
        } catch (\Throwable $th) {
            response(['message' => 'Gagal, Terjadi kesalahan', 'type' => 'error', 'err' => $th], 500);
        }
    }

    function username_post()
    {
        if (sessiondata('login', 'username') == $_POST['username']) response(['boleh' => false]);
        if (!isset($_POST['username']) || empty($_POST['username'])) response(['boleh' => false]);
        $usernameBaru = $_POST['username'];

        $user = $this->db->select('*')->where('username', $usernameBaru)->get('user')->result();
        if (!empty($user))
            response(['boleh' => false]);
        else
            response(['boleh' => true]);
    }

    function crud_post(){

    }

    function crud_delete(){

    }

    function crud_get($username = null){
        $query = $this->db->from('user')
            ->join('user_permission', 'user_permission.username = user.username')
            ->join('profile', 'profile.id = user.profile', 'left');

        if(!empty($username))
            $query->where('user.username', $username);
        
        $this->load->library('Datatables');

        $header = array(
            'username' => array('searchable' => true, 'field' => 'user.username')
        );

        $this->datatables->setHeader($header);
        $this->datatables->setQuery($query);
        $this->datatables->set_resultHandler(function($raw, $results, $header, $query){
            return $results;
        });

        $data = $this->datatables->getData();
        response($data);
    }
    function karyawan_get(){
        $get = $_GET;
        $q = $this->db->from('profile')->join('user', 'user.profile = profile.id', 'left');
        if(isset($get['dt']) && $get['dt'] == 0){
            $karyawan = $q->select('*')->get()->result();
            response(['data' => $karyawan]);
        }
        $this->load->library('Datatables');
        $header = array(
            'id' => array('searchable' => false),
            'nrp' => array('searchable' => true),
            'nik' => array('searchable' => true),
            'nama' => array('searchable' => true, 'field' => 'nama_lengkap'),
            'jabatan' => array('searchable' => true),
            'username' => array('searchable' => true)
            // 'desc' => array('searchable' => 'deskripsi', 'field' => 'deskripsi')
        );

        $this->datatables->setHeader($header)
            ->setQuery($q);
        $data =  $this->datatables->getData('object');
        response($data);
    }
    function karyawan_post(){
        $post = $_POST;
        $isEdit = isset($post['mode']) && $post['mode'] == 'edit';
        $default = array(
            'tgl_masuk' => '#unset',
            'nama_lengkap' => '#unset',
            'nik' => '#unset',
            'nrp' => '#unset',
            'no_hp' => '#unset',
            'kelamin' => 1,
            'tempat_lahir' => '#unset',
            'tanggal_lahir' => '#unset',
            'status_perkawinan' => '#unset',
            'jml_anak' => '#unset',
            'pendidikan' => '#unset',
            'jabatan' => '#unset',
            'agama' => '#unset',
            'bank' => '#unset',
            'no_rek' => '#unset',
            'upah_pokok' => '#unset',
        );
        $peta = array();
        $data = fieldmapping('profile', $post, $default, $peta);

        $user = fieldmapping('user', $post, ['username' => null]);
        $permission = fieldmapping('navigasi-permission', $post);
        if(isset($data['no_hp']))
            $user['hp'] = $data['no_hp'];
        
        // gunakan nik sebagai password default
        if(!empty($user['username'])){
            $user['password'] = password_hash($data['nik'], PASSWORD_DEFAULT);
        }

        try {
          if(!$isEdit){
                $data['id'] = random(8);
                $this->db->insert('profile', $data);

                // Insert Akun jika ada
                if(!empty($user['username'])){
                    $user['profile'] = $data['id'];
                    $this->db->insert('user', $user);

                    // Insert User-permission jika ada
                    $perm = [];
                    foreach($permission['permission'] as $p){
                        $perm[] = array(
                            'permission_id' => $p,
                            'username' => $user['username'],
                        );
                    }
                    $this->db->insert_batch('user_permission', $perm);
                }
                response('Berhasil menambahkan karyawan baru (' . $data['nama_lengkap'] . ')');
          }else{
                $this->db->where('id', $post['id'])->update('profile', $data);

                // Hapus user dan permission
                $this->db->where('profile', $post['id'])->delete('user');

                if(!empty($user['username'])){
                    $user['profile'] = $post['id'];
                    $this->db->insert('user', $user);

                    // Insert User-permission jika ada
                    $perm = [];
                    foreach($permission as $p){
                        $perm[] = array(
                            'permission_id' => $p,
                            'username' => $user['username'],
                        );
                    }
                    $this->db->insert_batch('user_permission');
                }
                response("Berhasil Update Karyawan #" . $post['id'] . " (" . $data['nama_lengkap'] . ")");
          }

        } catch (\Throwable $th) {
           response("Terjadi kesalahan", 500);
        }
        
    }

    function karyawan_delete()
    {
        $post = $_POST;
        $ids = $post['ids'];
        if(!isset($post['ids']) || empty($ids))
            response("Gagal, tidak ada id yang dikirim");

        try {
            $this->db->where_in('karyawan.id', $ids)->delete('karyawan');
            response("Berhasil Menghapus Karyawan dengan id " . join(', ', $ids));
        } catch (\Throwable $th) {
            response($th, 500);
        }
    }
}