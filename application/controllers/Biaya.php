<?php
class Biaya extends CI_Controller{

    function pengajuan_get(){
        $tabel = $this->getContentView('component/datatables/datatables.responsive', array(
            'dtTitle' => 'Daftar Pengajuan Biaya Yang Dibuat',
            'dtid' => 'dt-pengajuan-biaya',
            'head' => array(
               '','Nomor Pengajuan', 'Tanggal Pengajuan', 'Tanggal Jatuh Tempo', 'Nominal Yang Diajukan', 'Nominal Cair', 'Tanggal Pencairan', 'Status', 'Keterangan'
            ),
            'skrip' => 'dtconfig/dt_pengajuan_biaya', //wajib
            'skrip_data' => array('id' => 'dt-pengajuan-biaya'),
            'options' => array(
                'source' => 'ws/biaya/pengajuan',
                'search' => 'false',
                'select' => 'multi', //false, true, multi
                'checkbox' => 'true',
                'change' => 'false',
                'dom' => 'rtip',
                'responsive' => 'true',
                'auto-refresh' => 'false',
                'show-info' => 'false',
                'deselect-on-refresh' => 'true',
            ),
            'form' => array(
                'id' => 'form-pengajuan-biaya',
                'path' => '',
                'nama' => 'Form Pengajuan Biaya',
                'path' => 'forms/pengajuan_biaya',
                'skrip' => 'forms/form-pengajuan-biaya',
                'posturl' => 'ws/biaya/pengajuan',
                'updateurl' => '',
                'deleteurl' => '',
                'buttons' => array(
                    [ "type" => 'reset', "data" => 'data-dismiss="modal"', "text" => 'Batal', "id" => "batal", "class" => "btn btn btn-warning" ],
                    [ "type" => 'submit', "text" => 'Simpan', "id" => "simpan", "class" => "btn btn btn-primary" ]
                )
            ),
            'data_panel' => array(
                'nama' => 'dt-pengajuan-biaya',
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
            'resource' => array('main', 'dore','datatables', 'form'),
            'contentHtml' => array($tabel),
            'data_content' => array(
               
            ),
            'adaThemeSelector' => false,
            'navbar' => 'component/navbar/navbar.dore',
            'sidebar' => 'component/sidebar/sidebar.dore',
            'pageName' => 'Pengajuan Biaya',
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
        $this->add_javascript('vendor/inputmask/js/jquery.inputmask');
        $this->add_javascript('vendor/inputmask/js/bindings');
        $this->render();
    }
}