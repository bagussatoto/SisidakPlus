<div class='row'>
    <div class="col-lg-4">
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= rowcount($koneksi, 'siswa', ['status' => 1]) ?></h3>
                <p>Jumlah Siswa</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 ">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= mysqli_num_rows(mysqli_query($koneksi, "select * from siswa where jk = 'L'")) ?></h3>
                <p>Laki-laki</p>
            </div>
            <div class="icon">
                <i class="fa fa-edit"></i>
            </div>
            <a href="" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= mysqli_num_rows(mysqli_query($koneksi, "select * from siswa where jk = 'P'")) ?></h3>
                <p>Perempuan</p>
            </div>
            <div class="icon">
                <i class="fa fa-flask"></i>
            </div>
            <a href="" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

</div>
<div style='float:right; margin-top:-220px'>
    <button class='btn  btn-flat  bg-purple'><i class='fa fa-calendar'></i> <?= buat_tanggal('D, d M Y') ?></button>

    <button class='btn btn-flat bg-red'><i class='fa fa-clock'></i> <span id='timestamp' style="font-family:'OCR A Extended'"><?= date('h:i:s') ?> </span></button>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="alert alert-info alert-has-icon">
                <div class="alert-icon"><i class=""></i></div>
                <div class="alert-body">
                    <div class="alert-body">Data Lembaga </div>

                </div>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab5" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab5" data-toggle="tab" href="#home5" role="tab" aria-controls="home" aria-selected="true">
                            <i class="fas fa-home"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab5" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile" aria-selected="false">
                            <i class="fas fa-id-card"></i> Alamat Lembaga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab5" data-toggle="tab" href="#contact5" role="tab" aria-controls="contact" aria-selected="false">
                            <i class="fas fa-mail-bulk"></i> Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="kepala-tab5" data-toggle="tab" href="#kepala5" role="tab" aria-controls="kepala" aria-selected="false">
                            <i class="fas fa-user"></i> Kepala Madrasah</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent5">
                    <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab5">
                        <form id="form-setting1">
                            <div class="card" id="settings-card">

                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">NSM</label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['nsm'] ?>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">NPSN </label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['npsn'] ?>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nama Sekolah</label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['nama_sekolah'] ?>
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label for="site-description" class="form-control-label col-sm-3 text-md-right">Status Sekolah</label>
                                    <div class="col-sm-6 col-md-9">

                                        <?= $setting['status'] ?>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>

                    <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab5">
                        <form id="form-setting2">
                            <div class="card" id="settings-card">

                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Alamat Lengkap</label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['alamat'] ?>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Provinsi </label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['provinsi'] ?>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Kabupaten</label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['kab'] ?>
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label for="site-description" class="form-control-label col-sm-3 text-md-right">Kecamatan</label>
                                    <div class="col-sm-6 col-md-9">

                                        <?= $setting['kec'] ?>

                                    </div>
                                </div>

                            </div>


                        </form>
                        </form>
                    </div>


                    <div class="tab-pane fade" id="contact5" role="tabpanel" aria-labelledby="contact-tab5">
                        <form id="form-setting3">
                            <div class="card" id="settings-card">

                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">No Telpon</label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['no_telp'] ?>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Email </label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['email'] ?>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Website</label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['web'] ?>
                                    </div>
                                </div>



                            </div>

                        </form>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="kepala5" role="tabpanel" aria-labelledby="kepala-tab5">
                        <form id="form-setting3">
                            <div class="card" id="settings-card">

                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Kepala Madrasah</label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['kepala'] ?>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="site-title" class="form-control-label col-sm-3 text-md-right">Nip </label>
                                    <div class="col-sm-6 col-md-9">
                                        <?= $setting['nip'] ?>
                                    </div>
                                </div>




                            </div>

                        </form>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>