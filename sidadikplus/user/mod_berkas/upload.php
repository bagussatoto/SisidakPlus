<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<div class="section-header">
    <div class="section-header-back">
        <a href="." class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Data Dokumen Sidadik</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href='.'>Dashboard</a></div>
        <div class="breadcrumb-item active">Upload</a></div>

    </div>
</div>

<td>
    <div class="section-body">

        <h2 class="section-title">Fitur Upload Berkas</h2>
        <p class="section-lead">
            Berkas yang di Upload Wajib Berbentuk Gambar/Foto
        </p>

</td>

<form id="form-berkas">
    <div class="card" id="berkas-card">
        <div class="card-body">
            <div class="table-responsive">
                <table style="font-size: 12px" class="table table-bordered table-md" id="table-1">
                    <thead>
                        <tr>
                            <th>Dokumen</th>
                            <th>Keterangan</th>
                            <th>Upload</th>
                            <th style="text-align:center">File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1. Foto</td>
                            <td>File scan Foto jpeg/jpg/png Max. 1Mb<br>
                                <h6><strong> Resmi Dengan Latar Belakang Merah</strong></h6>
                            </td>
                            <td>

                                <div class="form-group">
                                    <input type="file" name="file_foto">
                                </div>
                                <button type="submit" name="simpan-foto" id="simpan-foto" class="btn btn-primary btn-sm">Unggah</button>

                            </td>
                            <td text-align:center">
                                <p><a href="../<?= $siswa['file_foto'] ?>" target="blank"><img class="img-fluid" width="80" height="100" src="../<?= $siswa['file_foto'] ?>"></a></p>
                            </td>
                        </tr>
                        <tr>
                            <td>2. Akte Kelahiran</td>
                            <td>File scan Akte Kelahiran format jpeg/jpg/png Max. 1Mb</td>
                            <td>

                                <div class="form-group">
                                    <input type="file" name="file_akte">
                                </div>
                                <button type="submit" name="simpan-akte" id="simpan-akte" class="btn btn-primary btn-sm">Unggah</button>

                            </td>
                            <td style="width:60px; text-align:center">
                                <p><a href="../<?= $siswa['file_akte'] ?>" target="blank"><img class="img-fluid" width="160" height="200" src="../<?= $siswa['file_akte'] ?>"></a></p>
                            </td>
                        </tr>
                        <tr>
                            <td>3. Kartu Keluarga</td>
                            <td>File scan Kartu Keluarga format jpeg/jpg/png Max. 1Mb</td>
                            <td>

                                <div class="form-group">
                                    <input type="file" name="file_kk">
                                </div>
                                <button type="submit" name="simpan-kk" id="simpan-kk" class="btn btn-primary btn-sm">Unggah</button>

                            </td>
                            <td style="width:60px;  text-align:center">
                                <p><a href="../<?= $siswa['file_kk'] ?>" target="blank"><img class="img-fluid" width="320" height="400" src="../<?= $siswa['file_kk'] ?>"></a></p>
                            </td>
                        <tr>
                            <td>4. Ijazah</td>
                            <td>File scan Ijazah format jpeg/jpg/png Max. 1Mb</td>
                            <td>

                                <div class="form-group">
                                    <input type="file" name="file_ijazah">
                                </div>
                                <button type="submit" name="simpan-ijazah" id="simpan-ijazah" class="btn btn-primary btn-sm">Unggah</button>

                            </td>
                            <td style="width:60px;  text-align:center">
                                <p><a href="../<?= $siswa['file_ijazah'] ?>" target="blank"><img class="img-fluid" width="160" height="200" src="../<?= $siswa['file_ijazah'] ?>"></a></p>
                            </td>
                        </tr>
                        <tr>
                            <td>5. Kartu KIP/KKS/PKH</td>
                            <td>File scan Kartu KIP/KKS/PKH jpeg/jpg/png Max. 1Mb</td>
                            <td>

                                <div class="form-group">
                                    <input type="file" name="file_kip">
                                </div>
                                <button type="submit" name="simpan-kip" id="simpan-kip" class="btn btn-primary btn-sm">Unggah</button>

                            </td>
                            <td style="width:60px;  text-align:center">
                                <p><a href="../<?= $siswa['file_kip'] ?>" target="blank"><img class="img-fluid" width="160" height="200" src="../<?= $siswa['file_kip'] ?>"></a></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-whitesmoke text-md-right">
            <button type="submit" class="btn btn-primary" id="save-btn">Save Changes</button>
            <button class="btn btn-secondary" type="button">Reset</button>
        </div>
    </div>
</form>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-berkas').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_berkas/crud_berkas.php?pg=ubah',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Jos . . .',
                    message: data,
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>




<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-foto').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_berkas/crud_berkas.php?pg=ubah',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Jos . . . ',
                    message: 'Data berhasil disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-kk').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_berkas/crud_berkas.php?pg=ubah',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Jos . . . ',
                    message: 'Data berhasil disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-akta').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_berkas/crud_berkas.php?pg=ubah',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Jos . . . ',
                    message: 'Data berhasil disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-ijazah').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_berkas/crud_berkas.php?pg=ubah',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Jos . . . ',
                    message: 'Data berhasil disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $('#form-kip').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_berkas/crud_berkas.php?pg=ubah',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Jos . . . ',
                    message: 'Data berhasil disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);


            }
        });
    });
</script>