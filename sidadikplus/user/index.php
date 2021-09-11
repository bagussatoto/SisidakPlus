<?php
session_start();
require("../config/database.php");
require("../config/function.php");
require("../config/functions.crud.php");


if (isset($_SESSION['id_siswa'])) {
  $siswa = fetch($koneksi, 'siswa', ['id_siswa' => $_SESSION['id_siswa']]);
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>SIDADIK | <?= $setting['nama_sekolah'] ?></title>

    <link rel="shortcut icon" href="../<?= $setting['logo'] ?>" />
    <!-- General CSS Files -->

    <link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">

    <link rel='stylesheet' href='../dist/css/AdminLTE.css' />
    <link rel='stylesheet' href='../dist/css/costum.css' />


    <!-- CSS Libraries
    <link rel="stylesheet" href="../assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="../assets/modules/weather-icon/css/weather-icons.min.css">
    <link rel="stylesheet" href="../assets/modules/weather-icon/css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="../assets/modules/summernote/summernote-bs4.css"> -->

    <!-- CSS TOASTR -->
    <link rel="stylesheet" href="../assets/modules/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href="../assets/modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="../assets/modules/summernote/summernote-bs4.css">

    <!-- CSS DATATABLE -->
    <link rel="stylesheet" href="../assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="../assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/modules/bootstrap-daterangepicker/daterangepicker.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <!-- Start GA -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script> -->

    <script src="../assets/modules/jquery.min.js"></script>
    <!-- JS Libraies -->
    <script src="../assets/modules/izitoast/js/iziToast.min.js"></script>
    <script src="../assets/modules/sweetalert/sweetalert.min.js"></script>
    <!-- JS Libraies -->
    <script src="../assets/modules/cleave-js/dist/cleave.min.js"></script>



    <!-- <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-94034622-3');
    </script> -->
    <!-- /END GA -->
    <style>
      .modal-backdrop {
        position: inherit;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 900;
        background-color: #000;

      }
    </style>
    <!-- Smartsupp Live Chat script -->
    <!-- <script type="text/javascript">
      var _smartsupp = _smartsupp || {};
      _smartsupp.key = '77ed94a8e63dac9adf98be37bff919ff119b315b';
      window.smartsupp || (function(d) {
        var s, c, o = smartsupp = function() {
          o._.push(arguments)
        };
        o._ = [];
        s = d.getElementsByTagName('script')[0];
        c = d.createElement('script');
        c.type = 'text/javascript';
        c.charset = 'utf-8';
        c.async = true;
        c.src = 'https://www.smartsuppchat.com/loader.js?';
        s.parentNode.insertBefore(c, s);
      })(document);
    </script> -->
  </head>

  <body>
    <div id="app">

      <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
          <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">

              <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i>
              </a>
            </ul>

          </form>




        </nav>

        <script>
          // Function ini dijalankan ketika Halaman ini dibuka pada browser
          $(function() {
            setInterval(timestamp, 1000); //fungsi yang dijalan setiap detik, 1000 = 1 detik
          });

          //Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
          function timestamp() {
            $.ajax({
              url: 'waktu.php',
              success: function(data) {
                $('#timestamp').html(data);
              },
            });
          }
        </script>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../assets/css/user.css">

        </head>

        <body>
          <div id="app">
            <div class="main-wrapper main-wrapper-1">
              <div class="navbar-bg"></div>
              <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                  <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                  </ul>

                </form>
                <ul class="navbar-nav navbar-right">


                  <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                      <img alt="image" src="../<?= $siswa['file_foto'] ?>" class="rounded-circle mr-1">
                      <div class="d-sm-none d-lg-inline-block"><?= $siswa['nama_siswa'] ?></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">


                      <div class="dropdown-divider"></div>
                      <a href="logout.php" class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                      </a>
                    </div>
                  </li>
                </ul>
              </nav>
              <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                  <div class="sidebar-brand" style="background-color:#1c6ecc">
                    <img src="../<?= $setting['logo_sidadik'] ?>" width="200" alt="SIDADIK">&nbsp;
                  </div>
                  <div class="menu-header">

                    <ul>
                      <li>
                        <a style="color:#f2ee07" href="." class="btn-logout">
                          <span class="fa fa-home "></span><br>Home
                        </a>
                      </li>
                      <li>
                        <a style="color:#f2b707" class="btn-logout" href="?pg=dataku">
                          <span class="fa fa-user-cog "></span><br>Profil
                        </a>
                      </li>
                      <li>
                        <a style="color:#f27907" href="logout.php" class="btn-logout"> <span class="fa fa-sign-out-alt  "></span><br>Keluar</a>
                      </li>
                    </ul>
                  </div>
                  <div class="sidebar-brand sidebar-brand-sm">
                    <a href="#">SM</a>
                  </div>


                  <?php include "menu.php" ?>

                </aside>
              </div>

              <!-- Main Content -->
              <div class="main-content">
                <section class="section">
                  <?php include "content.php"; ?>
                </section>
              </div>
              <footer class="main-footer">
                <div class="footer-left">
                  Copyright &copy; <?= date('Y') ?> SIDADIK <div class="bullet"></div> <?= $setting['nama_sekolah'] ?>
                </div>
                <div class="footer-right">
                  <a href="https://<?= $setting['web'] ?>">SIDADIK 2.0.1</a>
                </div>
              </footer>
            </div>
          </div>

          <!-- General JS Scripts -->

          <script src="../assets/modules/popper.js"></script>
          <script src="../assets/modules/tooltip.js"></script>
          <script src="../assets/modules/bootstrap/js/bootstrap.min.js"></script>
          <script src="../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
          <script src="../assets/modules/moment.min.js"></script>
          <script src="../assets/js/stisla.js"></script>

          <!-- JS Libraies -->
          <!-- <script src="../assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
    <script src="../assets/modules/chart.min.js"></script>
    <script src="../assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="../assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../assets/modules/summernote/summernote-bs4.js"></script>
    <script src="../assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script> -->

          <!-- JS DATATABLE -->
          <script src="../assets/modules/datatables/datatables.min.js"></script>
          <script src="../assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
          <script src="../assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
          <script src="../assets/modules/jquery-ui/jquery-ui.min.js"></script>

          <!-- Page Specific DATATABLE -->
          <script src="../assets/js/page/modules-datatables.js"></script>
          <script src="../assets/modules/select2/dist/js/select2.full.min.js"></script>
          <script src="../assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
          <script src="../assets/modules/summernote/summernote-bs4.js"></script>

          <!-- Page Specific JS File -->
          <script src="../assets/js/page/index-0.js"></script>


          <!-- Template JS File -->
          <script src="../assets/js/scripts.js"></script>
          <script src="../assets/js/custom.js"></script>
          <!-- <script type='text/javascript' data-cfasync='false'>
      window.purechatApi = {
        l: [],
        t: [],
        on: function() {
          this.l.push(arguments);
        }
      };
      (function() {
        var done = false;
        var script = document.createElement('script');
        script.async = true;
        script.type = 'text/javascript';
        script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript';
        document.getElementsByTagName('HEAD').item(0).appendChild(script);
        script.onreadystatechange = script.onload = function(e) {
          if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
            var w = new PCWidget({
              c: '3a902ebc-63db-4345-b136-90e1351bd3bd',
              f: true
            });
            done = true;
          }
        };
      })();
    </script> -->
        </body>

  </html>
<?php
} else {
  include "login.php";
}

?>