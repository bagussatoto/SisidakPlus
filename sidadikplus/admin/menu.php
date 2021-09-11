 <?php
    $akhir  = new DateTime($setting['tgl_pengumuman']); //Waktu awal
    $awal = new DateTime(); // Waktu sekarang atau akhir
    $diff  = $awal->diff($akhir);

    ?>

 <ul class="sidebar-menu ">
     <li class="menu-header bg-warning"></li>

     <li class="dropdown ">
         <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-friends"></i> <span>Data Siswa</span></a>
         <ul class="dropdown-menu">
             <li><a class="nav-link" href="?pg=siswa">Siswa Aktif</a></li>
             <li><a class="nav-link" href="?pg=berkas_sidadik">Dokumen Siswa</a></li>
             <li><a class="nav-link" href="?pg=mutasi">Siswa Mutasi</a></li>
             <li><a class="nav-link" href="?pg=ubah_kelas">Ubah Kelas</a></li>
         </ul>
     </li>




     <!--<li class="dropdown ">
         <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-friends"></i> <span>Data Kelas</span></a>
         <?php
            $query = mysqli_query($koneksi, "SELECT id_siswa,kelas from siswa group by kelas");
            while ($siswa = mysqli_fetch_array($query)) {;
            ?>
             <ul class="dropdown-menu">
                 <li><a class="nav-link" href="?pg=kelass"><?= $siswa['kelas'] ?></a></li>
             </ul>
         <?php } ?>
     </li>-->




     <li class="dropdown ">
         <a href="#" class="nav-link has-dropdown"><i class="fas fa-id-card"></i></i> <span>Cetak Kartu</span></a>
         <ul class="dropdown-menu">
             <li><a class="nav-link" href="?pg=kartu_pelajar">Kartu Pelajar</a></li>
             <li><a class="nav-link" href="?pg=kartu_nisn">Kartu NISN</a></li>
             <li>
                 <a class="nav-link has-dropdown">Desain Kartu</a>
                 <ul class="dropdown-menu sub-menu">
                     <li><a class="nav-link" href="?pg=desain_pelajar">Pelajar</a></li>
                     <li><a class="nav-link" href="?pg=desain_nisn">NISN</a></li>
                     <li><a class="nav-link" href="?pg=desain_cap">Cap dan TTD</a></li>
                 </ul>
             </li>
     </li>
 </ul>
 </li>

 <?php if ($user['level'] == 'admin') { ?>
     <li class="dropdown ">
         <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire fa-fw"></i> <span>Setting Data</span></a>
         <ul class="dropdown-menu">
             <li><a class="nav-link" href="?pg=profil_lembaga">Lembaga</a></li>
             <li><a class="nav-link" href="?pg=kelas">Data Kelas</a></li>
             <li><a class="nav-link" href="?pg=jurusan">Jurusan</a></li>
             <li><a class="nav-link" href="?pg=pengumuman">Pengumuman</a></li>
         </ul>
     </li>
 <?php } ?>
 <?php if ($user['level'] == 'admin') { ?>
     <li class="dropdown ">
         <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i> <span>Akun</span></a>
         <ul class="dropdown-menu">
             <li><a class="nav-link" href="?pg=user">Setting Akun</a></li>
         </ul>
     </li>
 <?php } ?>


 <?php if ($akhir <= $awal) { ?>
 <?php } ?>

 </ul>