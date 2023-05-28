<?php defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
    function index()
    {
        $tabel = $this->getContentView('component/datatables/datatables.responsive', array(
            'dtTitle' => 'Daftar Karyawan yang Tersedia',
            'dtid' => 'dt-navigasi',
            'head' => array(
               '','Nrp', 'Nik','Nama', 'Jabatan', 'Username/akun'
            ),
            'skrip' => 'dtconfig/dt_karyawan', //wajib
            'skrip_data' => array('id' => 'dt-navigasi'),
            'options' => array(
                'source' => 'ws/user/karyawan',
                'search' => 'false', 
                'select' => 'multi', //false, true, multi
                'checkbox' => 'true',
                'change' => 'false',
                'dom' => 'rtip',
                'responsive' => 'true',
                'auto-refresh' => '20000',
                'form-posisi'=> 'def',
                'form-size' => 'lg'
            ),
            'form' => array(
                'id' => 'form-karyawan',
                'path' => '',
                'nama' => 'Form Karyawan',
                'skrip' => 'forms/form-karyawan',
                'formGenerate' => array(
                    [
                        "label" => 'Tanggal Masuk Karyawan', "placeholder" => 'Masukkan Tanggal Masuk Karyawan',
                        "type" => 'date', "name" => 'tgl_masuk', "id" => 'tgl_masuk'
                    ],
                    [
                        "label" => 'Nama Karyawan', "placeholder" => 'Masukkan Karyawan',
                        "type" => 'text', "name" => 'nama', "id" => 'nama', "attr" => 'required'
                    ],
                    [
                        "label" => 'NIK', "placeholder" => 'Masukkan NIK',
                        "type" => 'nummber', "name" => 'nik', "id" => 'nik', "attr" => 'required'
                    ],
                    [
                        "label" => 'NRP', "placeholder" => 'Masukkan NRP',
                        "type" => 'text', "name" => 'nrp', "id" => 'nrp'
                    ],
                    [
                        "label" => 'No Handphone', "placeholder" => 'Masukkan No. Handphone',
                        "type" => 'text', "name" => 'nope', "id" => 'nope'
                    ],
                    [
                        "label" => 'Jenis Kelamin', "placeholder" => 'Jenis Kelamin',
                        "type" => 'select', "name" => 'jk', "id" => 'jk', "attr" => 'required', 'options' => array(
                            '1' => array('text' => "Laki-Laki"), '2' => array('text' => "Perempuan" )
                        )
                    ],
                    [
                        "label" => 'Tempat Lahir', "placeholder" => 'Masukkan Tempat Lahir',
                        "type" => 'text', "name" => 'tempat_lahir', "id" => 'tempat_lahir'
                    ],
                    [
                        "label" => 'Tanggal Lahir', "placeholder" => 'Masukkan Tanggal Lahir',
                        "type" => 'date', "name" => 'tgl_lahir', "id" => 'tgl_lahir'
                    ],
                    [
                        "label" => 'Status Perkawinan', "placeholder" => 'Status Perkawinan', 
                        "type" => 'select', "name" => 'sts', "id" => 'sts', "attr" => 'required', 'options' => array(
                            '1' => array('text' => "Belum Kawin"), '2' => array('text' => "Kawin" ),
                            '3' => array('text' => "Cerai hidup"), '4' => array('text' => "Cerai Mati")
                        )
                    ],
                    [
                        "label" => 'Jumlah Anak', "placeholder" => 'Masukkan Jumlah Anak',
                        "type" => 'number', "name" => 'jml_anak', "id" => 'jml_anak'
                    ],
                    [
                        "label" => 'Pendidikan', "placeholder" => 'Pilih Pendidikan',
                        "type" => 'select', "name" => 'pendidikan', "id" => 'pendidikan', "attr" => 'required', 'options' => array(
                            '1' => array('text' => "SD/MI"), '2' => array('text' => "SMP/MTS" ), '3' => array('text'=>"SMA/SMK/MA"),
                            '4' => array('text' => "D1"), '5' => array('text' => 'D2'), '6' => array('text' => 'D3'), 
                            '7' => array('text' => 'D4'), '8' => array('text' => 'S1'), '9' => array('text' => 'S2')
                        )
                    ],
                    [
                        "label" => 'Jabatan', "placeholder" => 'Pilih Jabatan',
                        "type" => 'select', "name" => 'jabatan', "id" => 'jabatan', "attr" => 'required', 'options' => array(
                            '1' => array('text' => "Manager"), '2' => array('text' => "Checker" ), '3' => array( 'text' => "Driver"),
                            '4' => array('text' => "PM")
                        )
                    ],
                    [
                        "label" => 'Agama', "placeholder" => 'Pilih Agama',
                        "type" => 'select', "name" => 'agama', "id" => 'agama', "attr" => 'required', 'options' => array(
                            '1' => array('text' => "Islam"), '2' => array('text' => "Katolik" ), '3' => array('text'=>"Kristen"),
                            '4' => array('text' => "Hindu"), '5' => array('text' => "Budha"), '6' => array('text' => 'Konghucu')
                        )
                    ],
                    [
                        "label" => 'Bank', "placeholder" => 'Pilih Bank',
                        "type" => 'select', "name" => 'bank', "id" => 'bank', 'options' => array(
                            '1' => array('text' => "BNI"), '2' => array('text' => "BCA" ), '3' => array('text'=>"BRI"),
                            '4' => array('text' => "MANDIRI"), '5' => array('text' => "CIMB NIAGA"),
                            '6' => array('text' => "PERMATA")
                        )
                    ],
                    [
                        "label" => 'Nomor Rekening', "placeholder" => 'Masukkan Nomor Rekening',
                        "type" => 'number', "name" => 'norek', "id" => 'norek'
                    ],
                    [
                        "label" => 'Upah Pokok', "placeholder" => 'Masukkan Upah Pokok',
                        "type" => 'text', "name" => 'upah', "id" => 'upah'
                    ],
                ),
                'posturl' => 'ws/user/karyawan',
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
            'pageName' => 'Karyawan',
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