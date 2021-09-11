<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<?php
if ($pg == '') {
    include "home.php";
} elseif ($pg == 'siswa') {
    include "mod_siswa/siswa.php";
} elseif ($pg == 'berkas') {
    include "mod_berkas/upload.php";
} elseif ($pg == 'blank') {
    include "blank.php";
} elseif ($pg == 'pengumuman') {
    include "mod_pengumuman/pengumuman.php";
} elseif ($pg == 'user') {
    include "mod_user/user.php";
} elseif ($pg == 'setting') {
    include "mod_setting/setting.php";
}
