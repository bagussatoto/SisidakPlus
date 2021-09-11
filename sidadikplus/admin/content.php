<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<?php
if ($pg == '') {
    include "home.php";
} elseif ($pg == 'siswa') {
    include "mod_siswa/siswa.php";
} elseif ($pg == 'mutasi') {
    include "mod_mutasi/mutasi.php";
} elseif ($pg == 'berkas') {
    include "mod_berkas/upload.php";
} elseif ($pg == 'berkas_sidadik') {
    include "mod_siswa/siswa_berkas.php";
} elseif ($pg == 'ubahsiswa') {
    include "mod_siswa/edit_siswa.php";
} elseif ($pg == 'detail') {
    include "mod_siswa/detail.php";
} elseif ($pg == 'kelas') {
    cek_login_admin();
    include "mod_kelas/kelas.php";
} elseif ($pg == 'jurusan') {
    cek_login_admin();
    include "mod_jurusan/jurusan.php";
} elseif ($pg == 'user-profile') {
    include "mod_user/user-profile.php";
} elseif ($pg == 'pengumuman') {
    include "mod_pengumuman/pengumuman.php";
} elseif ($pg == 'user') {
    cek_login_admin();
    include "mod_user/user.php";
} elseif ($pg == 'setting') {
    cek_login_admin();
    include "mod_setting/setting.php";
} elseif ($pg == 'profil_lembaga') {
    include "mod_setting/profil_lembaga.php";
} elseif ($pg == 'kartu_pelajar') {
    cek_login_admin();
    include "mod_kartu/kartu_pelajar.php";
} elseif ($pg == 'kartu_nisn') {
    cek_login_admin();
    include "mod_kartu/kartu_nisn.php";
} elseif ($pg == 'setting_kartu') {
    cek_login_admin();
    include "mod_kartu/setting_kartu.php";
} elseif ($pg == 'desain_pelajar') {
    cek_login_admin();
    include "mod_kartu/desain_pelajar.php";
} elseif ($pg == 'desain_nisn') {
    cek_login_admin();
    include "mod_kartu/desain_nisn.php";
} elseif ($pg == 'desain_cap') {
    cek_login_admin();
    include "mod_kartu/desain_cap.php";
} elseif ($pg == 'upload_foto') {
    include "mod_kartu/upload_foto.php";
} elseif ($pg == 'ubah_kelas') {
    include "mod_siswa/ubah_kelas.php";
} elseif ($pg == 'kelass') {
    include "mod_siswa/kelas.php";
}
