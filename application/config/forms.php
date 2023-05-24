<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['form'] = array(
    'login' => [
        'user' => 'user',
        'pass' => 'password'
    ],
    'user' => array(
        'username' => 'username',
        'nama' => 'nama', 
        'email' => 'email', 
        'hp' => 'hp', 
        'password' => 'password'
    ),
    'navigasi-menu' => array(
        'id' => 'id',
        'nama' =>  'nama',
        'level' => 'lvl',
        'induk' => 'parent',
        'jenis' => 'parrent_element',
        'icon' => 'icon',
        'aktif' => 'aktif',
        'url' => 'url',
        'deskripsi' => 'deskripsi',
    ),
    'navigasi-permission' => array(
        'permission' =>  'permission',
    ),
    'pengajuan-biaya' => array(
        'nomor_pengajuan' => 'application_number',
        'deadline' => 'deadline',
        'nominal' => 'nominal_diajukan',
        'keterangan' => 'keterangan'
    )
);