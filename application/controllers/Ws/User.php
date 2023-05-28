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
}