<?php
require("../../config/database.php");
require("../../config/function.php");
require("../../config/functions.crud.php");
session_start();
if (!isset($_SESSION['id_user'])) {
    die('Anda tidak diijinkan mengakses langsung');
}
if ($pg == 'ubah') {
    $status = (isset($_POST['status'])) ? 1 : 0;
    $data = [
        'nama_kelas' => $_POST['nama'],
        'status'       => $status
    ];
    $id_kelas = $_POST['id_kelas'];
    update($koneksi, 'kelas', $data, ['id_kelas' => $id_kelas]);
}
if ($pg == 'tambah') {
    $data = [
        'id_kelas'     => $_POST['id_kelas'],
        'nama_kelas'   => $_POST['nama'],
        'status'         => 1
    ];
    $exec = insert($koneksi, 'kelas', $data);
    echo $exec;
}
if ($pg == 'hapus') {
    $id_kelas = $_POST['id_kelas'];
    delete($koneksi, 'kelas', ['id_kelas' => $id_kelas]);
}
