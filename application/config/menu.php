<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config['menu'] = array(
    'def' => array(
        'menus' => array(
            array('text' => 'Dashboard', 'icon' => 'iconsmind-Home', 'link' => base_url('admin')),
            // array('text' => 'Data', 'link' =>  '#data', 'icon' => 'iconsmind-Big-Data'),
            array('text' => 'Buku Terbitan', 'link' => base_url('admin/buku'), 'icon' => 'iconsmind-Books'),
        )
    ),
);

$config['default_urls'] = array();
$config['web_services'] = array(
    'ws/user/login', 'ws/user/logout', 'ws/uihelper/form', 'ws/uihelper/skrip',
);
