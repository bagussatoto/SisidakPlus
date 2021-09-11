<?php
require "../../config/database.php";
require "../../config/function.php";
require "../../config/functions.crud.php";
session_start();
if (!isset($_SESSION['id_user'])) {
    die('Anda tidak diijinkan mengakses langsung');
}
if ($pg == 'live') {
    $data = [

        'livechat' => $_POST['livechat'],
        'nolivechat' => $_POST['nolivechat'],

    ];
    $where = [
        'id_setting' => 1
    ];
    $exec = update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);
}

if ($pg == 'ubah') {
    $data = [

        'nama_sekolah' => $_POST['nama_sekolah'],
        'nsm' => $_POST['nsm'],
        'npsn' => $_POST['npsn']

    ];
    $where = [
        'id_setting' => 1
    ];
    $exec = update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);
    if ($exec) {
        $ektensi = ['jpg', 'png'];
        if ($_FILES['logo']['name'] <> '') {
            $logo = $_FILES['logo']['name'];
            $temp = $_FILES['logo']['tmp_name'];
            $ext = explode('.', $logo);
            $ext = end($ext);
            if (in_array($ext, $ektensi)) {
                $dest = 'assets/img/logo/logo' . rand(1, 1000) . '.' . $ext;
                $upload = move_uploaded_file($temp, '../../' . $dest);
                if ($upload) {
                    $data2 = [
                        'logo' => $dest
                    ];
                    $exec = update($koneksi, 'setting', $data2, $where);
                } else {
                    echo "gagal";
                }
            }
        }
    } else {
        echo "Gagal menyimpan";
    }
}

if ($pg == 'profile') {
    $nama = str_replace("'", "`", $_POST['nama']);
    $data = [
        'nsm' => $_POST['nsm'],
        'npsn' => $_POST['npsn'],
        'jenjang' => $_POST['jenjang'],
        'nama_sekolah' => ucwords(strtoupper($nama)),
        'status' => $_POST['status'],

    ];
    $where = [
        'id_setting' => 1

    ];
    $exec = update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);

    echo "Jos . . .";
}

if ($pg == 'alamat') {
    $data = [
        'alamat' => $_POST['alamat'],
        'provinsi' => $_POST['provinsi'],
        'kab' => $_POST['kab'],
        'kec' => $_POST['kec'],

    ];
    $where = [
        'id_setting' => 1

    ];
    $exec = update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);

    echo "Jos . . .";
}

if ($pg == 'kontak') {
    $data = [
        'no_telp' => $_POST['no_telp'],
        'email' => $_POST['email'],
        'web' => $_POST['web'],

    ];
    $where = [
        'id_setting' => 1

    ];
    $exec = update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);

    echo "Jos . . .";
}

if ($pg == 'kepala') {
    $data = [
        'kepala' => $_POST['kepala'],
        'nip' => $_POST['nip'],


    ];
    $where = [
        'id_setting' => 1

    ];
    $exec = update($koneksi, 'setting', $data, $where);
    echo mysqli_error($koneksi);

    echo "Jos . . .";
}
