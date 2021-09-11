<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<!-- Modal -->
<div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="form-tambah">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>NISN</label>
                        <input type="text" name="nisn" class="form-control nisn" required="">
                    </div>
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" name="nama" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control" style="width: 100%" name="kelas" id="kelas" required>
                            <option value="">Pilih kelas</option>
                            <?php
                            $query = mysqli_query($koneksi, "select * from kelas where status='1'");
                            while ($kelas = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?= $kelas['nama_kelas'] ?>"><?= $kelas['nama_kelas'] ?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Pilihan Jurusan</label>
                        <select class="form-control" name="jurusan" id="jurusan" required>
                            <option value="">Pilih Jurusan</option>
                            <?php
                            $query = mysqli_query($koneksi, "select * from jurusan where status='1'");
                            while ($jurusan = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?= $jurusan['nama_jurusan'] ?>"><?= $jurusan['nama_jurusan'] ?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control password" required="">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="hapusdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="form-konfirmasi">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    Terdapat <b><?= rowcount($koneksi, 'siswa') ?></b> Jumlah data Siswa Akan Di Hapus.


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Hapus Semua</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="importdata" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="form-import">
                <div class="modal-header">
                    <h5 class="modal-title">Import Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="file">Import File Excel</label>
                        <input type="file" class="form-control-file" name="file" id="file" placeholder="" aria-describedby="helpfile" required>
                        <small id="helpfile" class="form-text text-muted">File harus .xls</small>
                    </div>

                    <p><a href="template_excel/importsiswa.xls">Download Format</a></p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Data Siswa Aktif</h4>

                <div class="card-header-action">
                    <a class="btn btn-info" href="mod_siswa/export_excel.php" role="button"> Export Data</a>
                    <button type="button" class="btn btn-icon icon-left btn-warning" data-toggle="modal" data-target="#tambahdata">
                        <i class="far fa-edit"></i> Tambah Data
                    </button>
                    <button type="button" class="btn btn-primary m-b-5" data-toggle="modal" data-target="#importdata"><i class="sidebar-item-icon fa fa-upload"></i>
                        Import Data
                    </button>&nbsp;
                    <button type="button" class="btn btn-icon icon-left btn-danger" data-toggle="modal" data-target="#hapusdata">
                        <i class="fa fa-trash"></i> Hapus Data
                    </button>

                </div>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table style="font-size: 12px" class="table table-bordered table-md" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center" style="width:10px">
                                    No
                                </th>
                                <th>NISN</th>
                                <th>Password</th>
                                <th>Nama Siswa</th>
                                <th style="width:10px">L/P</th>
                                <th>TTL</th>
                                <th>Kelas</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($koneksi, "select * from siswa WHERE status='1'");
                            $no = 0;
                            while ($siswa = mysqli_fetch_array($query)) {
                                $no++;
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $siswa['nisn'] ?></td>
                                    <td><?= $siswa['password'] ?></td>
                                    <td><?= $siswa['nama_siswa'] ?></td>
                                    <td><?= $siswa['jk'] ?></td>
                                    <td><?= $siswa['tempat_lahir'] ?>, <?= $siswa['tgl_lahir'] ?></td>
                                    <td><?= $siswa['kelas'] ?></td>

                                    <td>
                                        <?php if ($siswa['status'] == 1) { ?>
                                            <span class="badge badge-success">Aktif</span>
                                        <?php } elseif ($siswa['status'] == 2) { ?>
                                            <span class="badge badge-danger">Mutasi </span>
                                        <?php } else { ?>
                                            <span class="badge badge-warning">DO/Keluar</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="detail siswa" href="?pg=ubahsiswa&id=<?= enkripsi($siswa['id_siswa']) ?>" class="btn btn-sm btn-info"><i class="fas fa-eye    "></i></a>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-edit<?= $no ?>">
                                            <i class="fas fa-user    "></i>
                                        </button>
                                        <button data-id="<?= $siswa['id_siswa'] ?>" class="hapus btn-sm btn btn-danger"><i class="fas fa-trash    "></i></button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modal-edit<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form id="form-edit<?= $no ?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Ubah Status Siswa</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <input type="hidden" value="<?= $siswa['id_siswa'] ?>" name="id_siswa" class="form-control" required="">

                                                            <div class="form-group">
                                                                <div class="control-label">Pilih Status</div>
                                                                <div class="custom-switches-stacked mt-2">
                                                                    <label class="custom-switch">
                                                                        <input type="radio" name="status" value="1" class="custom-switch-input" checked>
                                                                        <span class="custom-switch-indicator"></span>
                                                                        <span class="custom-switch-description">Aktif</span>
                                                                    </label>
                                                                    <label class="custom-switch">
                                                                        <input type="radio" name="status" value="2" class="custom-switch-input">
                                                                        <span class="custom-switch-indicator"></span>
                                                                        <span class="custom-switch-description">Mutasi</span>
                                                                    </label>
                                                                    <label class="custom-switch">
                                                                        <input type="radio" name="status" value="3" class="custom-switch-input">
                                                                        <span class="custom-switch-indicator"></span>
                                                                        <span class="custom-switch-description">DO/Putus Sekolah</span>
                                                                    </label>
                                                                </div>
                                                            </div><br>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                            </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <script>
                                    $('#form-edit<?= $no ?>').submit(function(e) {
                                        e.preventDefault();
                                        $.ajax({
                                            type: 'POST',
                                            url: 'mod_siswa/crud_siswa.php?pg=status',
                                            data: $(this).serialize(),
                                            success: function(data) {

                                                iziToast.success({
                                                    title: 'Jos . . . ',
                                                    message: 'Status Berhasil diubah',
                                                    position: 'topRight'
                                                });
                                                setTimeout(function() {
                                                    window.location.reload();
                                                }, 2000);
                                                $('#modal-edit<?= $no ?>').modal('hide');
                                                //$('#bodyreset').load(location.href + ' #bodyreset');
                                            }
                                        });
                                        return false;
                                    });
                                </script>
                            <?php }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    //IMPORT FILE PENDUKUNG 
    $('#form-import').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'mod_siswa/crud_siswa.php?pg=import',
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

                $('#importdata').modal('hide');
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
    var cleaveI = new Cleave('.nisn', {

        blocks: [10]

    });

    $('#form-tambah').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'mod_siswa/crud_siswa.php?pg=tambah',
            data: $(this).serialize(),
            beforeSend: function() {
                $('form button').on("click", function(e) {
                    e.preventDefault();
                });
            },
            success: function(data) {

                iziToast.success({
                    title: 'Jos . . .',
                    message: 'data siswa berhasil disimpan',
                    position: 'topRight'
                });
                setTimeout(function() {
                    window.location.reload();
                }, 2000);
                $('#tambahdata').modal('hide');
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });

    $('#table-1').on('click', '.hapus', function() {
        var id = $(this).data('id');
        console.log(id);
        swal({
            title: 'Yakin Bos?',
            text: 'Akan menghapus data ini!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                $.ajax({
                    url: 'mod_siswa/crud_siswa.php?pg=hapus',
                    method: "POST",
                    data: 'id_siswa=' + id,
                    success: function(data) {
                        iziToast.error({
                            title: 'Yups . . .',
                            message: 'Data Siswa Berhasil dihapus',
                            position: 'topRight'
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    }
                });
            }
        })

    });
</script>
<script>
    $('#form-konfirmasi').submit(function(e) {
        e.preventDefault();
        swal({
            title: 'Apa kamu yakin ?',
            text: 'Akan Menghapus data anda ?',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        }).then((result) => {
            if (result) {
                $.ajax({
                    url: 'mod_siswa/crud_siswa.php?pg=konfirmasi',
                    method: "POST",
                    data: $(this).serialize(),
                    success: function(data) {
                        iziToast.success({
                            title: 'Jos . . .!',
                            message: 'Data Berhasil di Hapus',
                            position: 'topRight'
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    }
                });
            }
        })

    });
</script>