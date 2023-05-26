<?php defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
    function index()
    {
        $perm = $this->db->select('id, nama')->get('supplier')->result();
        $tabel = $this->getContentView('component/datatables/datatables.responsive', array(
            'dtTitle' => 'Daftar Supplier yang Tersedia',
            'dtid' => 'dt-navigasi',
            'head' => array(
               '','Nama', 'Alamat', 'Kota', 'No. Telephone'
            ),
            'skrip' => 'dtconfig/dt_supplier', //wajib
            'skrip_data' => array('id' => 'dt-navigasi'),
            'options' => array(
                'source' => 'ws/supplier/supplier',
                'search' => 'false',
                'select' => 'multi', //false, true, multi
                'checkbox' => 'true',
                'change' => 'false',
                'dom' => 'rtip',
                'responsive' => 'true',
                'auto-refresh' => '20000',
                'form-posisi'=>'def'
            ),
            'form' => array(
                'id' => 'form-supplier',
                'path' => '',
                'nama' => 'Form Supplier',
                'skrip' => 'forms/form-supplier',
                'formGenerate' => array(
                    [
                        "label" => 'Nama Supplier', "placeholder" => 'Masukkan Supplier',
                        "type" => 'text', "name" => 'nama', "id" => 'nama', "attr" => 'required'
                    ],
                    [
                        "label" => 'Alamat', "placeholder" => 'Masukkan Alamat',
                        "type" => 'textarea', "name" => 'alamat', "id" => 'alamat', "attr" => 'required'
                    ],
                    [
                        "label" => 'Kota', "placeholder" => 'Masukkan Kota',
                        "type" => 'text', "name" => 'kota', "id" => 'kota', "attr" => 'required'
                    ],
                    [
                        "label" => 'No. Telephone', "placeholder" => 'Masukkan No. Telephone',
                        "type" => 'text', "name" => 'telephone', "id" => 'telephone', "attr" => 'required'
                    ],
                ),
                'posturl' => 'ws/supplier/supplier',
                'updateurl' => '',
                'deleteurl' => '',
                'buttons' => array(
                    [ "type" => 'reset', "data" => 'data-dismiss="modal"', "text" => 'Batal', "id" => "batal", "class" => "btn btn btn-warning" ],
                    [ "type" => 'submit', "text" => 'Simpan', "id" => "simpan", "class" => "btn btn btn-primary" ]
                )
            ),
            'data_panel' => array(
                'nama' => 'dt-navigasi',
                'perpage' => 10,
                'pages' => array(1, 2, 10),
                'hilangkan_display_length' => true,
                'toolbar' => array(
                    array(
                        'tipe' => 'buttonset',
                        'tombol' => array(
                            array('tipe' => 'link', 'href' => '#', 'title' => 'Tambah', 'icon' => 'icon-plus simple-icon-paper-plane', 'class' => 'btn-outline-primary tool-add tetap'),
                            array('tipe' => 'link', 'href' => '#', 'title' => 'Edit', 'icon' => 'icon-edit simple-icon-note', 'class' => 'tool-edit'),
                            array('tipe' => 'link', 'href' => '#', 'title' => 'Hapus', 'icon' => 'icon-remove simple-icon-trash', 'class' => 'tool-delete'),
                        )
                    ),
                ),
                'toolbarSkrip' => '',
            )
        ), true);
        $data = array(
            'resource' => array('main', 'dore', 'icon', 'datatables', 'form'),
            'contentHtml' => array($tabel),
            'data_content' => array(
               
            ),
            'adaThemeSelector' => false,
            'navbar' => 'component/navbar/navbar.dore',
            'sidebar' => 'component/sidebar/sidebar.dore',
            'pageName' => 'Supplier',
            'navbarConf' => array(
                'adaSidebar' => true,
                'adaUserMenu' => true,
                'adaNotif' => false,
                'pencarian' => false,
                'homePath' => base_url('admin/dashboard')
            ),
            'sidebarConf' => $this->session_info
        );
        $this->addViews('template/dore',$data);
        $this->render();
    }
}