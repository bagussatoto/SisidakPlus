<?php
require("../../config/database.php");
require("../../config/function.php");
require("../../config/functions.crud.php");
session_start();
if (!isset($_SESSION['id_user'])) {
    die('Anda tidak diijinkan mengakses langsung');
}
if ($pg == 'ubah') {
    $ektensi = ['jpg', 'jpeg', 'png'];
    if ($_FILES['file_kk']['name'] <> '') {
        $file_kk = $_FILES['file_kk']['name'];
        $temp = $_FILES['file_kk']['tmp_name'];
        $ext = explode('.', $file_kk);
        $ext = end($ext);
        if (in_array($ext, $ektensi)) {
            $dest = 'assets/upload/kk/kk' . rand(1, 1000) . '.' . $ext;
            $upload = move_uploaded_file($temp, '../../' . $dest);
            if ($upload) {
                $data2 = [
                    'file_kk' => $dest
                ];
                $id_siswa = $_POST['id_siswa'];
                $exec = update($koneksi, 'siswa', $data2, ['id_siswa' => $id_siswa]);
            } else {
                echo "gagal";
            }
        }
    }
    if ($_FILES['file_ijazah']['name'] <> '') {
        $file_ijazah = $_FILES['file_ijazah']['name'];
        $temp = $_FILES['file_ijazah']['tmp_name'];
        $ext = explode('.', $file_ijazah);
        $ext = end($ext);
        if (in_array($ext, $ektensi)) {
            $dest = 'assets/upload/ijazah/ijazah' . rand(1, 1000) . '.' . $ext;
            $upload = move_uploaded_file($temp, '../../' . $dest);
            if ($upload) {
                $data2 = [
                    'file_ijazah' => $dest
                ];
                $id_siswa = $_POST['id_siswa'];
                $exec = update($koneksi, 'siswa', $data2, ['id_siswa' => $id_siswa]);
            } else {
                echo "gagal";
            }
        }
    }
    if ($_FILES['file_akte']['name'] <> '') {
        $file_akte = $_FILES['file_akte']['name'];
        $temp = $_FILES['file_akte']['tmp_name'];
        $ext = explode('.', $file_akte);
        $ext = end($ext);
        if (in_array($ext, $ektensi)) {
            $dest = 'assets/upload/akta/akta' . rand(1, 1000) . '.' . $ext;
            $upload = move_uploaded_file($temp, '../../' . $dest);
            if ($upload) {
                $data2 = [
                    'file_akte' => $dest
                ];
                $id_siswa = $_POST['id_siswa'];
                $exec = update($koneksi, 'siswa', $data2, ['id_siswa' => $id_siswa]);
            } else {
                echo "gagal";
            }
        }
    }
    if ($_FILES['file_kip']['name'] <> '') {
        $file_kip = $_FILES['file_kip']['name'];
        $temp = $_FILES['file_kip']['tmp_name'];
        $ext = explode('.', $file_kip);
        $ext = end($ext);
        if (in_array($ext, $ektensi)) {
            $dest = 'assets/upload/kip/kip' . rand(1, 1000) . '.' . $ext;
            $upload = move_uploaded_file($temp, '../../' . $dest);
            if ($upload) {
                $data2 = [
                    'file_kip' => $dest
                ];
                $id_siswa = $_POST['id_siswa'];
                $exec = update($koneksi, 'siswa', $data2, ['id_siswa' => $id_siswa]);
            } else {
                echo "gagal";
            }
        }
    }
    if ($_FILES['file_foto']['name'] <> '') {
        $file_foto = $_FILES['file_foto']['name'];
        $temp = $_FILES['file_foto']['tmp_name'];
        $ext = explode('.', $file_foto);
        $ext = end($ext);
        if (in_array($ext, $ektensi)) {
            $dest = 'assets/upload/foto/foto' . rand(1, 1000) . '.' . $ext;
            $upload = move_uploaded_file($temp, '../../' . $dest);
            if ($upload) {
                $data2 = [
                    'file_foto' => $dest
                ];
                $id_siswa = $_POST['id_siswa'];
                $exec = update($koneksi, 'siswa', $data2, ['id_siswa' => $id_siswa]);
            } else {
                echo "gagal";
            }
        }
    }
} else {
    echo "Gagal menyimpan";
}
