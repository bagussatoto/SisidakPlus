<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <title>SIDADIK | <?= $setting['nama_sekolah'] ?></title>
    <!-- META DISKRIPSI-->
    <meta name="description" content="Sistem Data Pendidikan <?= $setting['nama_sekolah'] ?>, Tahun <?= date('Y') ?> ">
    <meta name="keywords" content="sidadik, sistem data pendidikan" />

    <!-- Vendor -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />

    <link href="assets/modules/home/Chart.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">

    <link href="assets/modules/home/front.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= $setting['logo'] ?>" />

    <link rel="stylesheet" href="assets/css/1.css">
    <link rel="stylesheet" href="assets/css/2.css">
    <link rel="stylesheet" href="assets/css/3.css">

    <link rel="stylesheet" href="assets/css/components2.css">



    <link rel="stylesheet" href="assets/modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">
    <!--WAKTU JALAN-->
    <link rel="stylesheet" type="text/css" href="assets/front/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/front/vendor/countdowntime/flipclock.css">
    <link rel="stylesheet" type="text/css" href="assets/front/css/main.css">
    <!--===============================================================================================-->


    <!-- Start GA -->

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-94034622-3');
    </script>
    <?php
    $akhir  = new DateTime();
    $awal = new DateTime();
    $diff  = $awal->diff($akhir);
    ?>
</head>

<body data-spy="scroll" data-target="#menu" data-offset="100">
    <div class="home-wrapper" id="home">
        <div class="home-header">
            <div class="container p-0">
                <nav class="navbar navbar-expand-lg navbar-light" id="navbar-header">
                    <a class="navbar-brand" href="javascript:;">
                        <img src="<?= $setting['logo'] ?>" height="75" />
                        <div class="home-header-text d-none d-sm-block">
                            <h4>Sistem Data Pendidikan</h4>
                            <h5><?= $setting['nama_sekolah'] ?></h5>
                            <h6>Tahun 2021</h6>
                        </div>
                        <span class="logo-mini-unbk d-block d-sm-none">SIDADIK</span>
                        <span class="logo-mini-tahun d-block d-sm-none">-<?= $setting['nama_sekolah'] ?></span>
                    </a>
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#home" id="link-home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./admin" id="link-jadwal">Admin</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="home-banner">
            <div class="home-banner-bg home-banner-bg-color"></div>
            <div class="home-banner-bg home-banner-bg-img"></div>
            <div class="container mt-5">
                <div class="row">

                    <div class="col-sm-8">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel" data-slide-to="1"></li>
                                <li data-target="#carousel" data-slide-to="2"></li>


                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div>
                                        <h5 data-animation="animated fadeInDownBig">
                                            Selamat Datang Di Sistem Data Pendidikan <?= $setting['nama_sekolah'] ?>
                                        </h5>
                                        <br />
                                        <p data-animation="animated slideInRight" data-delay="1s">
                                            Aplikasi Database Siswa <?= $setting['nama_sekolah'] ?> Tahun <?= date('Y') ?>
                                        </p>
                                        <p data-animation="animated slideInRight" data-delay="2s">
                                            Lengkapi data diri kamu melalui login aplikasi SIDADIK
                                        </p>
                                        <p data-animation="animated flipInX" data-delay="3s">
                                            <a href="" class="btn btn-warning nav-link">
                                                TUTORIALNYA DI SINI
                                                <span class="fa fa-chevron-down"></span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div>
                                        <h5 data-animation="animated fadeInDownBig">
                                            Upload Berkas Dokumen Yang Dibutuhkan
                                        </h5>
                                        <h5 data-animation="animated fadeInDownBig">

                                        </h5>
                                        <ul>
                                            <li data-animation="animated fadeInDownBig" data-delay="1s">
                                                Akte Kelahiran
                                            </li>
                                            <li data-animation="animated flipInX" data-delay="2s">
                                                Kartu Keluarga
                                            </li>
                                            <li data-animation="animated flipInX" data-delay="3s">
                                                KIP/PKH/KKS (Jika Memiliki)
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div>
                                        <h5 data-animation="animated fadeInDownBig">
                                            DARI SEKARANG !!!
                                        </h5>
                                        <h5 data-animation="animated fadeInDownBig">
                                            Peduli Dengan Data Diri Demi Masa Depan Yang Cemerlang
                                        </h5>
                                        <ul>
                                            <li data-animation="animated fadeInDownBig" data-delay="1s">
                                                Login
                                            </li>
                                            <li data-animation="animated flipInX" data-delay="2s">
                                                Lengkapi Data
                                            </li>
                                            <li data-animation="animated flipInX" data-delay="3s">
                                                Upload Berkas
                                            </li>
                                        </ul>
                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>
                    <div class="col-sm-4">

                        <div class="card card-login">

                            <div class="card-body">
                                <img src="assets/img/logo/logone.png" alt="" width="100%">
                                <br>
                                <p>
                                <h3 style="color:green; font-family:monospace; text-align:center ">LOGIN SISWA</h3>
                                </p>
                                <form id="form-login">
                                    <div class="form-group">
                                        <span class="fa fa-user"></span>
                                        <input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" name="username" placeholder="Masukkan NISN" required autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <span class="fa fa-key"></span>
                                        <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-block btn-login" id="btnsimpan">
                                        Masuk
                                    </button>


                                </form>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-content">
            <section id="tentang">
            </section>
            <?php if ($awal <= $akhir) { ?>
                <div class="home-banner">
                    <div class="home-banner-bg home-banner-bg-color"></div>
                    <div class="home-banner-bg home-banner-bg-img"></div>
                    <div class="container mt-5">
                        <div class="row">

                            <div class="col-sm-8">


                                <div class="carousel-item active">
                                    <div>
                                        <h5 data-animation="animated fadeInDownBig">
                                            Selamat Datang Di web SIDADIK Online
                                        </h5>
                                        <br />
                                        <p data-animation="animated slideInRight" data-delay="1s">
                                            Aplikasi Penerimaan Peserta didik baru Tahun Pelajaran 2021/2022 <?= $setting['nama_sekolah'] ?>.
                                        </p>
                                        <p data-animation="animated slideInRight" data-delay="2s">
                                            Pensiswaan Siswa dan Siswi Baru Tahun 2021 ini Belum Dibuka.
                                        </p>
                                        <p data-animation="animated flipInX" data-delay="3s">
                                            <a href="" class="btn btn-success nav-link">
                                                Pensiswaan Dibuka Dalam
                                                <span class="fa fa-chevron-down"></span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <center>
                                    <div class="cd100"></div>
                                </center>

                            </div>
                            <div class="col-sm-4">
                                <div class="card card-login bg-info">
                                    <div class="card-body">
                                        <div class="avatar bg-info" align="center">
                                            <img src="<?= $setting['logo_SIDADIK'] ?>" alt="" height="70%" width="70%">
                                        </div>
                                        <br>
                                        <form id="form-login">
                                            <div class="form-group">
                                                <span class="fa fa-user"></span>
                                                <input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" name="username" placeholder="Masukkan NISN" required autocomplete="off" disabled>
                                            </div>
                                            <div class="form-group">
                                                <span class="fa fa-key"></span>
                                                <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" disabled>
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-block btn-login" id="btnsimpan">
                                                Masuk
                                            </button>


                                        </form>
                                        <br>
                                        <a href="#tentang" class="btn btn-primary btn-block btn-login">
                                            siswa Disini</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- DATA SISWA -->
            <section class="bg-light statistik" id="statistik">
                <div class="container">

                    <div class="row mt-12">
                        <div class="col-sm-4">
                            <div class="card mt-2">
                                <div class="card-header bg-primary">Jumlah Siswa</div>
                                <div class="card-body">
                                    <h2 class="text-center"><?= rowcount($koneksi, 'siswa', ['status' => 1]) ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card mt-2">
                                <div class="card-header bg-warning">Laki-laki</div>
                                <div class="card-body">
                                    <h2 class="text-center"><?= mysqli_num_rows(mysqli_query($koneksi, "select * from siswa where jk = 'L'")) ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card mt-2">
                                <div class="card-header bg-success">Perempuan</div>
                                <div class="card-body">
                                    <h2 class="text-center"><?= mysqli_num_rows(mysqli_query($koneksi, "select * from siswa where jk = 'P'")) ?></h2>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </section>
            <!-- PENGUMUMAN -->
            <section class="bg-light statistik" id="persyaratan">
                <div class="container">
                    <div class="row mt-12">
                        <div class="col-sm-12">
                            <div class="card mt-2">
                                <div class="card-header bg-danger">Pengumuman</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 animated bounceIn">
                                            <div class="card">

                                                <div class="card-body">
                                                    <div class="activities">
                                                        <?php $query = mysqli_query($koneksi, "SELECT * FROM pengumuman where jenis='2'");
                                                        while ($data = mysqli_fetch_array($query)) {
                                                        ?>
                                                            <div class="activity">
                                                                <div class="activity-icon bg-primary text-white shadow-primary">
                                                                    <i class="fas fa-bullhorn"></i>
                                                                </div>
                                                                <div class="activity-detail">
                                                                    <div class="mb-2">
                                                                        <span class="text-job text-primary"><?= $data['tgl'] ?></span>
                                                                        <span class="bullet"></span>
                                                                        <a class="text-job" href="#">View</a>

                                                                    </div>
                                                                    <h5><?= $data['judul'] ?></h5>
                                                                    <p><?= $data['pengumuman'] ?></p>
                                                                </div>
                                                            </div>
                                                        <?php } ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
    <script>
        var baseURL = '/';
        var uniqueID = 'd8ac8098665d68759eeda768373bb6c2';
        var chartData = JSON.parse('[{"title":"SMK","data":[91.61,7.81,0.58]},{"title":"MA","data":[88.33,11.07,0.6]},{"title":"SMA","data":[89.69,8.33,1.98]},{"title":"SMP","data":[59.15,24.1,16.75]},{"title":"MTs","data":[79.46,19.25,1.29]},{"title":"Nasional","data":[74.84,17.31,7.85]}]');
        var chartLabel = JSON.parse('["Mandiri","Sekolah Lain","UNKP"]');
    </script>

    <!-- Vendor -->
    <script src="assets/modules/home/jquery-3.2.1.min.js"></script>
    <script src="assets/modules/home/jquery.form.min.js"></script>
    <script src="assets/modules/home/bootstrap.min.js"></script>
    <script src="assets/modules/home/popper.min.js"></script>
    <script src="assets/modules/home/wow.min.js"></script>
    <script src="assets/modules/home/Chart.min.js"></script>

    <!-- Assets -->
    <script src="assets/modules/home/front.min.js"></script>
    <!-- Assets -->

    <script src="assets/modules/izitoast/js/iziToast.min.js"></script>
    <script src="assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="assets/modules/popper.js"></script>
    <script src="assets/modules/tooltip.js"></script>
    <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/modules/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>
    <!-- JS Libraies -->
    <script src="assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="assets/modules/izitoast/js/iziToast.min.js"></script>
    <!-- Page Specific JS File -->
    <!-- JS DATATABLE -->
    <script src="assets/modules/datatables/datatables.min.js"></script>
    <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
<script type="text/javascript">
    $('.loader').fadeOut('slow');
    $(document).ready(function() {
        $('.klikmenu').click(function() {
            var menu = $(this).data('id');
            if (menu == "beranda") {
                $('#btnsiswa').show();
                $('#isi_load').load('home.php');
            } else if (menu == "login") {
                $('#isi_load').load('login.php');
            }
        });
        // halaman yang di load default pertama kali
        $('#isi_load').load('home.php');
    });
</script>
<script>
    $('#form-login').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'crud_web.php?pg=login',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#btnsimpan').prop('disabled', true);
            },
            success: function(data) {
                var json = $.parseJSON(data);
                $('#btnsimpan').prop('disabled', false);
                if (json.pesan == 'ok') {
                    iziToast.success({
                        title: 'Jos . . .',
                        message: 'Login Berhasil',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.href = "user";
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Maaf!',
                        message: json.pesan,
                        position: 'topCenter'
                    });
                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });
    if (jQuery().daterangepicker) {
        if ($(".datepicker").length) {
            $('.datepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                singleDatePicker: true,
            });
        }
        if ($(".datetimepicker").length) {
            $('.datetimepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD hh:mm'
                },
                singleDatePicker: true,
                timePicker: true,
                timePicker24Hour: true,
            });
        }
        if ($(".daterange").length) {
            $('.daterange').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                drops: 'down',
                opens: 'right'
            });
        }
    }
    if (jQuery().select2) {
        $(".select2").select2();
    }
</script>
<script>
    $('#form-siswa').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'crud_web.php?pg=simpan',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#btnsimpan').prop('disabled', true);
            },
            success: function(data) {
                var json = $.parseJSON(data);
                $('#btnsimpan').prop('disabled', false);
                if (json.pesan == 'ok') {
                    iziToast.success({
                        title: 'Jos . . .',
                        message: 'Data berhasil disimpan',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        $('#home').load('konfirmasi.php?id=' + json.id + '&nisn=' + json.nisn + '&pass=' + json.pass + '&nama=' + json.nama);
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Maaf!',
                        message: json.pesan,
                        position: 'topCenter'
                    });
                    document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random();

                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });
    if (jQuery().daterangepicker) {
        if ($(".datepicker").length) {
            $('.datepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                singleDatePicker: true,
            });
        }
        if ($(".datetimepicker").length) {
            $('.datetimepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD hh:mm'
                },
                singleDatePicker: true,
                timePicker: true,
                timePicker24Hour: true,
            });
        }
        if ($(".daterange").length) {
            $('.daterange').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                drops: 'down',
                opens: 'right'
            });
        }
    }
    if (jQuery().select2) {
        $(".select2").select2();
    }
</script>
<script>
    $('#form-siswa2').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'crud_web.php?pg=simpan2',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#btnsimpan').prop('disabled', true);
            },
            success: function(data) {
                var json = $.parseJSON(data);
                $('#btnsimpan').prop('disabled', false);
                if (json.pesan == 'ok') {
                    iziToast.success({
                        title: 'Jos . . .',
                        message: 'Data berhasil disimpan',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        $('#home').load('konfirmasi.php?id=' + json.id + '&nisn=' + json.nisn + '&pass=' + json.pass + '&nama=' + json.nama);
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Maaf!',
                        message: json.pesan,
                        position: 'topCenter'
                    });
                    document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random();

                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });
    if (jQuery().daterangepicker) {
        if ($(".datepicker").length) {
            $('.datepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                singleDatePicker: true,
            });
        }
        if ($(".datetimepicker").length) {
            $('.datetimepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD hh:mm'
                },
                singleDatePicker: true,
                timePicker: true,
                timePicker24Hour: true,
            });
        }
        if ($(".daterange").length) {
            $('.daterange').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                drops: 'down',
                opens: 'right'
            });
        }
    }
    if (jQuery().select2) {
        $(".select2").select2();
    }
</script>
<!--WAKTU JALAN-->
<script src="assets/front/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/front/vendor/bootstrap/js/popper.js"></script>
<script src="assets/front/vendor/countdowntime/flipclock.min.js"></script>
<script src="assets/front/vendor/countdowntime/moment.min.js"></script>
<script src="assets/front/vendor/countdowntime/moment-timezone.min.js"></script>
<script src="assets/front/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
<script src="assets/front/vendor/countdowntime/countdowntime.js"></script>

<script>
    $('.cd100').countdown100({
        /*Set Endtime here*/
        /*Endtime must be > current time*/
        endtimeMonth: <?= $diff->m ?>,
        endtimeDate: <?= $diff->d ?>,
        endtimeHours: <?= $diff->h ?>,
        endtimeMinutes: <?= $diff->i ?>,
        endtimeSeconds: <?= $diff->s ?>,
        timeZone: ""
        // ex:  timeZone: "America/New_York"
        //go to " http://momentjs.com/timezone/ " to get timezone
    });
</script>