<?php defined('BASEPATH') or exit('No direct script access allowed');
class Supplier extends CI_Controller{
    function supplier_get(){
        $get = $_GET;
        if(isset($get['dt']) && $get['dt'] == 0){
            $permission = $this->db->select('*')->get('supplier')->result();
            response(['data' => $permission]);
        }
        $this->load->library('Datatables');
        $q = $this->db->from('supplier');

        // if(isset())

        $header = array(
            'id' => array('searchable' => false),
            'nama' => array('searchable' => true),
            'alamat' => array('searchable' => true),
            'kota' => array('searchable' => true),
            'telephone' => array('searchable' => true)
            
        );

        $this->datatables->setHeader($header)
            ->setQuery($q);
        $data =  $this->datatables->getData('object');
        response($data);
    }

    function supplier_post(){
        $post = $_POST;
        $isEdit = isset($post['mode']) && $post['mode'] == 'edit';
        $data = array(
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'kota' => $post['kota'],
            'telephone' => $post['telephone']
        );
        try {
          if(!$isEdit){
                $this->db->insert('supplier', $data);
                $new_data = $this->db->order_by('id', 'DESC')->get('supplier')->row();
                $new_data->message = "Berhasil menambahkan supplier baru";
                response($new_data);
          }else{
                $this->db->where('id', $post['id'])->update('supplier', ['nama' => $post['nama'], 'alamat' =>$post['alamat'],
                'kota'=> $post['kota'],'telephone'=> $post['telephone']]);
                response("Berhasil Update Navigasi #" . $post['id'] . " (" . $post['nama'] . ")");
          }

        } catch (\Throwable $th) {
           response("Terjadi kesalahan", 500);
        }
        
    }

    function supplier_delete()
    {
        $post = $_POST;
        $ids = $post['ids'];
        if(!isset($post['ids']) || empty($ids))
            response("Gagal, tidak ada id yang dikirim");

        try {
            $this->db->where_in('supplier.id', $ids)->delete('supplier');
            response("Berhasil Menghapus Supplier dengan id " . join(', ', $ids));
        } catch (\Throwable $th) {
            response($th, 500);
        }
    }

    function pelanggan_get(){
        $get = $_GET;
        if(isset($get['dt']) && $get['dt'] == 0){
            $permission = $this->db->select('*')->get('pelanggan')->result();
            response(['data' => $permission]);
        }
        $this->load->library('Datatables');
        $q = $this->db->from('pelanggan');

        // if(isset())

        $header = array(
            'id' => array('searchable' => false),
            'nama' => array('searchable' => true),
            'alamat' => array('searchable' => true),
            'kota' => array('searchable' => true),
            'telephone' => array('searchable' => true)
            
        );

        $this->datatables->setHeader($header)
            ->setQuery($q);
        $data =  $this->datatables->getData('object');
        response($data);
    }

    function pelanggan_post(){
        $post = $_POST;
        $isEdit = isset($post['mode']) && $post['mode'] == 'edit';
        $data = array(
            'nama' => $post['nama'],
            'alamat' => $post['alamat'],
            'kota' => $post['kota'],
            'telephone' => $post['telephone']
        );
        try {
          if(!$isEdit){
                $this->db->insert('pelanggan', $data);
                $new_data = $this->db->order_by('id', 'DESC')->get('pelanggan')->row();
                $new_data->message = "Berhasil menambahkan pelanggan baru";
                response($new_data);
          }else{
                $this->db->where('id', $post['id'])->update('pelanggan', ['nama' => $post['nama'], 'alamat' =>$post['alamat'],
                'kota'=> $post['kota'],'telephone'=> $post['telephone']]);
                response("Berhasil Update Navigasi #" . $post['id'] . " (" . $post['nama'] . ")");
          }

        } catch (\Throwable $th) {
           response("Terjadi kesalahan", 500);
        }
        
    }

    function pelanggan_delete()
    {
        $post = $_POST;
        $ids = $post['ids'];
        if(!isset($post['ids']) || empty($ids))
            response("Gagal, tidak ada id yang dikirim");

        try {
            $this->db->where_in('pelanggan.id', $ids)->delete('pelanggan');
            response("Berhasil Menghapus pelanggan dengan nama " . join(', ', $ids));
        } catch (\Throwable $th) {
            response($th, 500);
        }
    }
}