<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['form'] = array(
    'login' => [
        'user' => 'user',
        'pass' => 'password'
    ],
    'user' => array(
        'username' => 'username',
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
    ),
    'profile' => array(
        'tgl_masuk' => 'tgl_masuk',
        'nama' => 'nama_lengkap',
        'nik' => 'nik',
        'nrp' => 'nrp',
        'nope' => 'no_hp',
        'jk' => 'kelamin',
        'tempat_lahir' => 'tempat_lahir',
        'tgl_lahir' => 'tanggal_lahir',
        'sts' => 'status_perkawinan',
        'jml_anak' => 'jml_anak',
        'pendidikan' => 'pendidikan',
        'jabatan' => 'jabatan',
        'agama' => 'agama',
        'bank' => 'bank',
        'norek' => 'no_rek',
        'upah' => 'upah_pokok',
    ),
);