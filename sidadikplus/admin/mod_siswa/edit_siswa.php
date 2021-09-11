<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>
<?php $siswa = fetch($koneksi, 'siswa', ['id_siswa' => dekripsi($_GET['id'])]); ?>

<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card author-box card-primary">
            <div class="card-header">
                <h4>Data Siswa</h4>

            </div>
            <div class="card-body">
                <div class="author-box-left">
                    <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle author-box-picture">
                    <div class="clearfix"></div>
                    <br>
                    <div class="author-box-job">Status Siswa</div>
                    <?php if ($siswa['status'] == 1) { ?>
                        <span class="badge badge-success">Aktif</span>
                    <?php } elseif ($siswa['status'] == 2) { ?>
                        <span class="badge badge-danger">Mutasi </span>
                    <?php } else { ?>
                        <span class="badge badge-warning">Alumni</span>
                    <?php } ?>
                </div>
                <div class="author-box-details">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Data Siswa</h4>
                                </div>

                                <ul class="nav nav-pills nav-fill" id="myTab3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="data-diri" data-toggle="tab" href="#datadiri" role="tab" aria-controls="diri" aria-selected="true">Data Diri</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="data-ayah" data-toggle="tab" href="#dataayah" role="tab" aria-controls="ayah" aria-selected="false">Data Ayah</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="data-ibu" data-toggle="tab" href="#dataibu" role="tab" aria-controls="ibu" aria-selected="false">Data Ibu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="data-wali" data-toggle="tab" href="#datawali" role="tab" aria-controls="wali" aria-selected="false">Data Wali</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="data-dokumen" data-toggle="tab" href="#datadokumen" role="tab" aria-controls="wali" aria-selected="false">Data Dokumen</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent2">

                                    <!-- DATA DIRI -->
                                    <div class="tab-pane fade show active" id="datadiri" role="tabpanel" aria-labelledby="data-diri">
                                        <form id="form-datadiri">
                                            <input type="hidden" value="<?= $siswa['id_siswa'] ?>" name="id_siswa" class="form-control" required="">

                                            <div class="form-group">
                                                <label>Nama Siswa</label>
                                                <input class="form-control" type="text" name="nama_siswa" value="<?= $siswa['nama_siswa'] ?>" required="required" />
                                            </div>
                                            <div class="form-group">
                                                <label>Kewarganegaraan</label>
                                                <select class='form-control' name='warga_siswa' required>
                                                    <option value=''>Pilih Kewarganegaraan</option>";
                                                    <?php foreach ($kewarganegaraan as $val) { ?>
                                                        <?php if ($siswa['warga_siswa'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>NISN</label>
                                                <input class="form-control" onkeypress="return hanyaAngka(this);" maxlength="10" minlength="10" type="text" name="nisn" value="<?= $siswa['nisn'] ?>" required="required" />

                                            </div>

                                            <div class="form-group ">
                                                <label>NIS</label>
                                                <input class="form-control" onkeypress="return hanyaAngka(this);" type="text" name="nis" value="<?= $siswa['nis'] ?>" required="required" />

                                            </div>

                                            <div class="form-group ">
                                                <label>NIK</label>
                                                <input class="form-control" onkeypress="return hanyaAngka(this);" maxlength="16" minlength="16" type="text" name="nik" value="<?= $siswa['nik'] ?>" required="required" />
                                            </div>

                                            <div class="form-group ">
                                                <label>Tempat Lahir</label>
                                                <input class="form-control" type="text" name="tempat_lahir" value="<?= $siswa['tempat_lahir'] ?>" required="required" />

                                            </div>

                                            <div class="form-group ">
                                                <label>Tanggal Lahir</label>
                                                <input class="form-control" type="date" name="tgl_lahir" value="<?= $siswa['tgl_lahir'] ?>" required="required" />
                                            </div>

                                            <div class="form-group ">
                                                <div class="text"><strong>Jenis Kelamin</strong></div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline1" name="jk" class="custom-control-input" value="L" <?php if ($siswa['jk'] == 'L') echo 'checked' ?>>
                                                    <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="customRadioInline2" name="jk" class="custom-control-input" value="P" <?php if ($siswa['jk'] == 'P') echo 'checked' ?>>
                                                    <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <label>Anak Ke-</label>
                                                <input class="form-control" type="text" name="anak_ke" value="<?= $siswa['anak_ke'] ?>" required="required" />
                                            </div>

                                            <div class="form-group ">
                                                <label>Jml Saudara</label>
                                                <input class="form-control" type="text" name="saudara" value="<?= $siswa['saudara'] ?>" required="required" />
                                            </div>

                                            <div class="form-group ">
                                                <label>Agama</label>
                                                <select class='form-control' name='agama' required>
                                                    <option value=''>Pilih Agama</option>";
                                                    <?php foreach ($agama as $val) { ?>
                                                        <?php if ($siswa['agama'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>Cita-cita</label>
                                                <select class='form-control' name='cita' required>
                                                    <option value=''>Pilih Cita-cita</option>";
                                                    <?php foreach ($cita as $val) { ?>
                                                        <?php if ($siswa['cita'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>No HP Siswa</label>
                                                <input class="form-control" onkeypress="return hanyaAngka(this);" maxlength="13" minlength="10" type="text" name="no_hp" value="<?= $siswa['no_hp'] ?>" required="required" />
                                            </div>

                                            <div class="form-group ">
                                                <label>Email</label>
                                                <input class="form-control" type="email" name="email" value="<?= $siswa['email'] ?>" />
                                            </div>

                                            <div class="form-group ">
                                                <label>Hobi</label>
                                                <select class='form-control' name='hobi' required>
                                                    <option value=''>Pilih hobi</option>";
                                                    <?php foreach ($hobi as $val) { ?>
                                                        <?php if ($siswa['hobi'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div><br>

                                            <div class="form-group">
                                                <div class="text"><strong>Status Tempat Tinggal</strong></div>
                                                <select class='form-control' name='status_tinggal_siswa' required>
                                                    <option value=''>Pilih status tinggal</option>";
                                                    <?php foreach ($status_tinggal_siswa as $val) { ?>
                                                        <?php if ($siswa['status_tinggal_siswa'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>


                                            <div class="form-group ">
                                                <label>Provinsi</label>
                                                <input class="form-control" type="text" name="prov" value="<?= $siswa['prov'] ?>" required />
                                                <!--<select class='form-control' id="form_prov" name='prov' required>
                                                                        <?php
                                                                        $a = mysqli_query($koneksi, "SELECT * FROM siswa INNER JOIN wilayah ON siswa.prov = wilayah.kode");
                                                                        while ($row = mysqli_fetch_array($a)) {
                                                                        ?>
                                                                            <option value=""><?= $row['nama'] ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                        <?php
                                                                        $daerah = mysqli_query($koneksi, "SELECT kode,nama FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=2 ORDER BY nama");
                                                                        while ($d = mysqli_fetch_array($daerah)) {
                                                                        ?>

                                                                            <option value="<?php echo $d['kode']; ?>"><?php echo $d['nama']; ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>-->
                                            </div>

                                            <div class="form-group ">
                                                <label>Kabupaten</label>
                                                <input class="form-control" type="text" name="kab" value="<?= $siswa['kab'] ?>" required />
                                                <!--<select class='form-control' id="form_kab" name='kab' required>
                                                                        <option value="<?= $siswa['kab'] ?>"><?= $siswa['kab'] ?></option>
                                                                    </select>-->
                                            </div>

                                            <div class="form-group ">
                                                <label>Kecamatan</label>
                                                <input class="form-control" type="text" name="kec" value="<?= $siswa['kec'] ?>" required />
                                                <!--<select class='form-control' id="form_kec" name='kec' required>
                                                                        <option value="<?= $siswa['kec'] ?>"><?= $siswa['kec'] ?></option>
                                                                    </select>-->
                                            </div>

                                            <div class="form-group ">
                                                <label>Desa</label>
                                                <input class="form-control" type="text" name="desa" value="<?= $siswa['desa'] ?>" required />
                                                <!--<select class='form-control' id="form_des" name='desa' required>
                                                                        <option value="<?= $siswa['desa'] ?>"><?= $siswa['desa'] ?></option>
                                                                    </select>-->
                                            </div>

                                            <div class="form-group">
                                                <label>Nama Jalan/Dusun</label>
                                                <input class="form-control" type="text" name="alamat_siswa" value="<?= $siswa['alamat_siswa'] ?>" required="required" />
                                            </div>

                                            <div class="form-group">
                                                <label>Titik Kordinat</label>
                                                <input class="form-control" type="text" name="kordinat" value="<?= $siswa['kordinat'] ?>" required="required" />
                                            </div>

                                            <div class="form-group ">
                                                <label>Kode Pos</label>
                                                <input class="form-control" onkeypress="return hanyaAngka(this);" maxlength="6" minlength="6" type="text" name="kodepos_siswa" value="<?= $siswa['kodepos_siswa'] ?>" required="required" />
                                            </div>

                                            <div class="form-group ">
                                                <label>Transportasi</label>
                                                <select class='form-control' name='transportasi' required>
                                                    <option value=''>Pilih transportasi</option>";
                                                    <?php foreach ($transportasi as $val) { ?>
                                                        <?php if ($siswa['transportasi'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>Jarak Tempuh</label>
                                                <select class='form-control' name='jarak' required>
                                                    <option value=''>Pilih jarak</option>";
                                                    <?php foreach ($jarak as $val) { ?>
                                                        <?php if ($siswa['jarak'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>Waktu Tempuh</label>
                                                <select class='form-control' name='waktu' required>
                                                    <option value=''>Pilih waktu</option>";
                                                    <?php foreach ($waktu as $val) { ?>
                                                        <?php if ($siswa['waktu'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Biaya Sekolah</label>
                                                <select class='form-control' name='biaya_sekolah' required>
                                                    <option value=''>Pilih biaya sekolah</option>";
                                                    <?php foreach ($biaya_sekolah as $val) { ?>
                                                        <?php if ($siswa['biaya_sekolah'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>Keb Khusus</label>
                                                <select class='form-control' name='keb_khusus' required>
                                                    <option value=''></option>";
                                                    <?php foreach ($keb_khusus as $val) { ?>
                                                        <?php if ($siswa['keb_khusus'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>Keb Disabilitas</label>
                                                <select class='form-control' name='keb_disabilitas' required>
                                                    <option value=''></option>";
                                                    <?php foreach ($keb_disabilitas as $val) { ?>
                                                        <?php if ($siswa['keb_disabilitas'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <div class="text"><strong>PRA SEKOLAH</strong></div>
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="checkbox" id="tk" name="tk" value="Y" <?php if ($siswa['tk'] == 'Y') echo 'checked' ?>>
                                                    <label class="form-check-label" for="tk">Pernah TK/RA</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="checkbox" id="paud" name="paud" value="Y" <?php if ($siswa['paud'] == 'Y') echo 'checked' ?>>
                                                    <label class="form-check-label" for="paud">Pernah PAUD</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="text"><strong>IMUNISASI</strong></div>
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="checkbox" id="hepatitis" name="hepatitis" value="Y" <?php if ($siswa['hepatitis'] == 'Y') echo 'checked' ?>>
                                                    <label class="form-check-label" for="hepatitis">Hepatitis B</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="checkbox" id="polio" name="polio" value="Y" <?php if ($siswa['polio'] == 'Y') echo 'checked' ?>>
                                                    <label class="form-check-label" for="polio">Polio</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="checkbox" id="bcg" name="bcg" value="Y" <?php if ($siswa['bcg'] == 'Y') echo 'checked' ?>>
                                                    <label class="form-check-label" for="bcg">BCG</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="checkbox" id="campak" name="campak" value="Y" <?php if ($siswa['campak'] == 'Y') echo 'checked' ?>>
                                                    <label class="form-check-label" for="campak">Campak</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="checkbox" id="dpt" name="dpt" value="Y" <?php if ($siswa['dpt'] == 'Y') echo 'checked' ?>>
                                                    <label class="form-check-label" for="dpt">DPT</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="checkbox" id="covid" name="covid" value="Y" <?php if ($siswa['covid'] == 'Y') echo 'checked' ?>>
                                                    <label class="form-check-label" for="covid">Covid</label>
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label>No KIP</label>
                                                <input class="form-control" type="text" name="no_kip" value="<?= $siswa['no_kip'] ?>" />
                                            </div>

                                            <div class="form-group ">
                                                <label>No KKS</label>
                                                <input class="form-control" type="text" name="no_kks" value="<?= $siswa['no_kks'] ?>" />
                                            </div>

                                            <div class="form-group ">
                                                <label>No PKH</label>
                                                <input class="form-control" type="text" name="no_pkh" value="<?= $siswa['no_pkh'] ?>" />
                                            </div>

                                            <div class="form-group ">
                                                <label>No KK</label>
                                                <input class="form-control" type="text" onkeypress="return hanyaAngka(this);" maxlength="16" minlength="16" name="no_kk" value="<?= $siswa['no_kk'] ?>" required="required" />
                                            </div>

                                            <div class="form-group ">
                                                <label>Kepala Keluarga</label>
                                                <input class="form-control" type="text" name="kepala_keluarga" value="<?= $siswa['kepala_keluarga'] ?>" required="required" />
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" id="btnsimpan" name="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- DATA AYAH -->
                                    <div class="tab-pane fade" id="dataayah" role="tabpanel" aria-labelledby="data-ayah">
                                        <form id="form-dataayah">
                                            <input type="hidden" value="<?= $siswa['id_siswa'] ?>" name="id_siswa" class="form-control" required="">

                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input class="form-control" type="text" name="nama_ayah" value="<?= $siswa['nama_ayah'] ?>" required="required" />
                                            </div>

                                            <div class="form-group">
                                                <div class="text"><strong>Status Ayah</strong></div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="status_ayah" name="status_ayah" class="custom-control-input" value="Masih Hidup" <?php if ($siswa['status_ayah'] == 'Masih Hidup') echo 'checked' ?>>
                                                    <label class="custom-control-label" for="status_ayah">Masih Hidup</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="meninggal" name="status_ayah" class="custom-control-input" value="Sudah Meninggal" <?php if ($siswa['status_ayah'] == 'Sudah Meninggal') echo 'checked' ?>>
                                                    <label class="custom-control-label" for="meninggal">Sudah Meninggal</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="tidak_diketahui" name="status_ayah" class="custom-control-input" value="Tidak Diketahui" <?php if ($siswa['status_ayah'] == 'Tidak Diketahui') echo 'checked' ?>>
                                                    <label class="custom-control-label" for="tidak_diketahui">Tidak Diketahui</label>
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label>Kewarganegaraan</label>
                                                <select class='form-control' name='warga_ayah' required>
                                                    <option value=''>Pilih Kewarganegaraan</option>";
                                                    <?php foreach ($kewarganegaraan as $val) { ?>
                                                        <?php if ($siswa['warga_ayah'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>NIK</label>
                                                <input class="form-control" onkeypress="return hanyaAngka(this);" maxlength="16" minlength="16" type="text" name="nik_ayah" value="<?= $siswa['nik_ayah'] ?>" required="required" />
                                            </div>

                                            <div class="form-group ">
                                                <label>Tempat Lahir</label>
                                                <input class="form-control" type="text" name="tempat_lahir_ayah" value="<?= $siswa['tempat_lahir_ayah'] ?>" required="required" />
                                            </div>

                                            <div class="form-group ">
                                                <label>Tanggal Lahir</label>
                                                <input class="form-control" type="date" name="tgl_lahir_ayah" value="<?= $siswa['tgl_lahir_ayah'] ?>" required="required" />
                                            </div>

                                            <div class="form-group ">
                                                <label>Pendidikan</label>
                                                <select class='form-control' name='pendidikan_ayah' required>
                                                    <option value=''>Pilih Pendidikan</option>";
                                                    <?php foreach ($pendidikan as $val) { ?>
                                                        <?php if ($siswa['pendidikan_ayah'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>Pekerjaan</label>
                                                <select class='form-control' name='pekerjaan_ayah' required>
                                                    <option value=''>Pilih Pekerjaan</option>";
                                                    <?php foreach ($pekerjaan as $val) { ?>
                                                        <?php if ($siswa['pekerjaan_ayah'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>Penghasilan</label>
                                                <select class='form-control' name='penghasilan_ayah' required>
                                                    <option value=''>Pilih Penghasilan</option>";
                                                    <?php foreach ($penghasilan as $val) { ?>
                                                        <?php if ($siswa['penghasilan_ayah'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>No HP Ayah</label>
                                                <input class="form-control" onkeypress="return hanyaAngka(this);" maxlength="13" minlength="10" type="text" name="no_hp_ayah" value="<?= $siswa['no_hp_ayah'] ?>" required="required" />
                                            </div>

                                            <div class="form-group">
                                                <div class="text"><strong>Domisili Ayah</strong></div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="domisili_ayah" name="domisili_ayah" class="custom-control-input" value="Dalam Negeri" <?php if ($siswa['domisili_ayah'] == 'Dalam Negeri') echo 'checked' ?>>
                                                    <label class="custom-control-label" for="domisili_ayah">Dalam Negeri</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="luar_negeri" name="domisili_ayah" class="custom-control-input" value="Luar Negeri" <?php if ($siswa['domisili_ayah'] == 'Luar Negeri') echo 'checked' ?>>
                                                    <label class="custom-control-label" for="luar_negeri">Luar Negeri</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Status Tinggal</label>
                                                <select class='form-control' name='status_tmp_tinggal_ayah' required>
                                                    <option value=''></option>";
                                                    <?php foreach ($statustinggal as $val) { ?>
                                                        <?php if ($siswa['status_tmp_tinggal_ayah'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>Provinsi</label>
                                                <input class="form-control" type="text" name="prov_ayah" value="<?= $siswa['prov_ayah'] ?>" />
                                                <!--<select class='form-control' id="form_prov_ayah" name='prov_ayah' required>
                                                                        <option value=""><?= $siswa['prov_ayah'] ?></option>
                                                                        <?php
                                                                        $daerah = mysqli_query($koneksi, "SELECT kode,nama FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=2 ORDER BY nama");
                                                                        while ($d = mysqli_fetch_array($daerah)) {
                                                                        ?>
                                                                            <option value="<?php echo $d['kode']; ?>"><?php echo $d['nama']; ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>-->
                                            </div>
                                            <div class="form-group ">
                                                <label>Kabupaten</label>
                                                <input class="form-control" type="text" name="kab_ayah" value="<?= $siswa['kab_ayah'] ?>" />
                                                <!--<select class='form-control' id="form_kab_ayah" name='kab_ayah' required>
                                                                        <option value="<?= $siswa['kab_ayah'] ?>"><?= $siswa['kab_ayah'] ?></option>
                                                                    </select>-->
                                            </div>
                                            <div class="form-group ">
                                                <label>Kecamatan</label>
                                                <input class="form-control" type="text" name="kec_ayah" value="<?= $siswa['kec_ayah'] ?>" />
                                                <!--<select class='form-control' id="form_kec_ayah" name='kec_ayah' required>
                                                                        <option value="<?= $siswa['kec_ayah'] ?>"><?= $siswa['kec_ayah'] ?></option>
                                                                    </select>-->
                                            </div>
                                            <div class="form-group ">
                                                <label>Desa</label>
                                                <input class="form-control" type="text" name="desa_ayah" value="<?= $siswa['desa_ayah'] ?>" />
                                                <!--<select class='form-control' id="form_des_ayah" name='desa_ayah' required>
                                                                        <option value="<?= $siswa['desa_ayah'] ?>"><?= $siswa['desa_ayah'] ?></option>
                                                                    </select>-->
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Jalan/Dusun</label>
                                                <input class="form-control" type="text" name="alamat_ayah" value="<?= $siswa['alamat_ayah'] ?>" required="required" />
                                            </div>

                                            <div class="form-group">
                                                <label>Kode Pos</label>
                                                <input class="form-control" type="text" name="kodepos_ayah" value="<?= $siswa['kodepos_ayah'] ?>" required="required" />
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" id="btnsimpan" name="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- DATA IBU -->
                                    <div class="tab-pane fade" id="dataibu" role="tabpanel" aria-labelledby="data-ibu">
                                        <form id="form-dataibu">
                                            <input type="hidden" value="<?= $siswa['id_siswa'] ?>" name="id_siswa" class="form-control" required="">

                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input class="form-control" type="text" name="nama_ibu" value="<?= $siswa['nama_ibu'] ?>" required="required" />
                                            </div>

                                            <div class="form-group">
                                                <div class="text-info"><strong>Status ibu</strong></div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="status_ibu" name="status_ibu" class="custom-control-input" value="Masih Hidup" <?php if ($siswa['status_ibu'] == 'Masih Hidup') echo 'checked' ?>>
                                                    <label class="custom-control-label" for="status_ibu">Masih Hidup</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="meninggal_ibu" name="status_ibu" class="custom-control-input" value="Sudah Meninggal" <?php if ($siswa['status_ibu'] == 'Sudah Meninggal') echo 'checked' ?>>
                                                    <label class="custom-control-label" for="meninggal_ibu">Sudah Meninggal</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="tidak_diketahui_ibu" name="status_ibu" class="custom-control-input" value="Tidak Diketahui" <?php if ($siswa['status_ibu'] == 'Tidak Diketahui') echo 'checked' ?>>
                                                    <label class="custom-control-label" for="tidak_diketahui_ibu">Tidak Diketahui</label>
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label>Kewarganegaraan</label>
                                                <select class='form-control' name='warga_ibu' required>
                                                    <option value=''>Pilih Kewarganegaraan</option>";
                                                    <?php foreach ($kewarganegaraan as $val) { ?>
                                                        <?php if ($siswa['warga_ibu'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>NIK</label>
                                                <input class="form-control" onkeypress="return hanyaAngka(this);" maxlength="16" minlength="16" type="text" name="nik_ibu" value="<?= $siswa['nik_ibu'] ?>" required="required" />
                                            </div>

                                            <div class="form-group ">
                                                <label>Tempat Lahir</label>
                                                <input class="form-control" type="text" name="tempat_lahir_ibu" value="<?= $siswa['tempat_lahir_ibu'] ?>" required="required" />
                                            </div>

                                            <div class="form-group ">
                                                <label>Tanggal Lahir</label>
                                                <input class="form-control" type="date" name="tgl_lahir_ibu" value="<?= $siswa['tgl_lahir_ibu'] ?>" required="required" />
                                            </div>

                                            <div class="form-group ">
                                                <label>Pendidikan</label>
                                                <select class='form-control' name='pendidikan_ibu' required>
                                                    <option value=''>Pilih Pendidikan</option>";
                                                    <?php foreach ($pendidikan as $val) { ?>
                                                        <?php if ($siswa['pendidikan_ibu'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>Pekerjaan</label>
                                                <select class='form-control' name='pekerjaan_ibu' required>
                                                    <option value=''>Pilih Pekerjaan</option>";
                                                    <?php foreach ($pekerjaan as $val) { ?>
                                                        <?php if ($siswa['pekerjaan_ibu'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>Penghasilan</label>
                                                <select class='form-control' name='penghasilan_ibu' required>
                                                    <option value=''>Pilih Penghasilan</option>";
                                                    <?php foreach ($penghasilan as $val) { ?>
                                                        <?php if ($siswa['penghasilan_ibu'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>Nama</label>
                                                <input class="form-control" onkeypress="return hanyaAngka(this);" maxlength="13" minlength="10" type="text" name="no_hp_ibu" value="<?= $siswa['no_hp_ibu'] ?>" required="required" />
                                            </div>

                                            <div class="form-group">
                                                <div class="text"><strong>Status Tinggal Ibu</strong></div>
                                                <select class="form-control" name="status_tinggal_ibu" value="<?= $siswa['status_tinggal_ibu'] ?>">
                                                    <option value=""><?= $siswa['status_tinggal_ibu'] ?></option>
                                                    <option value="Sama Dengan Ayah">Sama Dengan Ayah</option>
                                                    <option value="Beda Dengan Ayah">Beda Dengan Ayah</option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <div class="text"><strong>Domisili ibu</strong></div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="domisili_ibu" name="domisili_ibu" class="custom-control-input" value="Dalam Negeri" <?php if ($siswa['domisili_ibu'] == 'Dalam Negeri') echo 'checked' ?> readonly>
                                                    <label class="custom-control-label" for="domisili_ibu">Dalam Negeri</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="luar_negeri_ibu" name="domisili_ibu" class="custom-control-input" value="Luar Negeri" <?php if ($siswa['domisili_ibu'] == 'Luar Negeri') echo 'checked' ?> readonly>
                                                    <label class="custom-control-label" for="luar_negeri_ibu">Luar Negeri</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Status Tempat Tinggal Ibu</label>
                                                <select class='form-control' name='status_tmp_tinggal_ibu' readonly>
                                                    <option value=''></option>";
                                                    <?php foreach ($statustinggal as $val) { ?>
                                                        <?php if ($siswa['status_tmp_tinggal_ibu'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>Provinsi</label>
                                                <input class="form-control" type="text" name="prov_ibu" value="<?= $siswa['prov_ibu'] ?>" readonly />
                                                <!--<select class='form-control' id="form_prov_ibu" name='prov_ibu' readonly>
                                                                        <option value=""><?= $siswa['prov_ibu'] ?></option>
                                                                        <?php
                                                                        $daerah = mysqli_query($koneksi, "SELECT kode,nama FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=2 ORDER BY nama");
                                                                        while ($d = mysqli_fetch_array($daerah)) {
                                                                        ?>
                                                                            <option value="<?php echo $d['kode']; ?>"><?php echo $d['nama']; ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>-->
                                            </div>

                                            <div class="form-group ">
                                                <label>Kabupaten</label>
                                                <input class="form-control" type="text" name="kab_ibu" value="<?= $siswa['kab_ibu'] ?>" readonly />
                                                <!--<select class='form-control' id="form_kab_ibu" name='kab_ibu' readonly>
                                                                        <option value="<?= $siswa['kab_ibu'] ?>"><?= $siswa['kab_ibu'] ?></option>
                                                                    </select>-->
                                            </div>

                                            <div class="form-group ">
                                                <label>Kecamatan</label>
                                                <input class="form-control" type="text" name="kec_ibu" value="<?= $siswa['kec_ibu'] ?>" readonly />
                                                <!--<select class='form-control' id="form_kec_ibu" name='kec_ibu' readonly>
                                                                        <option value="<?= $siswa['kec_ibu'] ?>"><?= $siswa['kec_ibu'] ?></option>
                                                                    </select>-->
                                            </div>

                                            <div class="form-group ">
                                                <label>Desa</label>
                                                <input class="form-control" type="text" name="desa_ibu" value="<?= $siswa['desa_ibu'] ?>" readonly />
                                                <!--<select class='form-control' id="form_des_ibu" name='desa_ibu' readonly>
                                                                        <option value="<?= $siswa['desa_ibu'] ?>"><?= $siswa['desa_ibu'] ?></option>
                                                                    </select>-->
                                            </div>

                                            <div class="form-group">
                                                <label>Nama Jalan/Dusun</label>
                                                <input class="form-control" type="text" name="alamat_ibu" value="<?= $siswa['alamat_ibu'] ?>" readonly />
                                            </div>

                                            <div class="form-group">
                                                <label>Kode Pos</label>
                                                <input class="form-control" type="text" name="kodepos_ibu" value="<?= $siswa['kodepos_ibu'] ?>" readonly />
                                            </div>


                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" id="btnsimpan" name="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- DATA WALI -->
                                    <div class="tab-pane fade" id="datawali" role="tabpanel" aria-labelledby="data-wali">
                                        <form id="form-datawali">
                                            <input type="hidden" value="<?= $siswa['id_siswa'] ?>" name="id_siswa" class="form-control" required="">


                                            <div class="form-group">
                                                <div class="text-info"><strong>Status wali</strong></div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="status_wali" name="status_wali" class="custom-control-input" value="Sama Dengan Ayah" <?php if ($siswa['status_wali'] == 'Sama Dengan Ayah') echo 'checked' ?>>
                                                    <label class="custom-control-label" for="status_wali">Sama Dengan Ayah</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="Sama Dengan Ibu_wali" name="status_wali" class="custom-control-input" value="Sama Dengan Ibu" <?php if ($siswa['status_wali'] == 'Sama Dengan Ibu') echo 'checked' ?>>
                                                    <label class="custom-control-label" for="Sama Dengan Ibu_wali">Sama Dengan Ibu</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="Lainnya_wali" name="status_wali" class="custom-control-input" value="Lainnya" <?php if ($siswa['status_wali'] == 'Lainnya') echo 'checked' ?>>
                                                    <label class="custom-control-label" for="Lainnya_wali">Lainnya</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input class="form-control" type="text" name="nama_wali" value="<?= $siswa['nama_wali'] ?>" readonly />
                                            </div>


                                            <div class="form-group ">
                                                <label>Kewarganegaraan</label>
                                                <select class='form-control' name='warga_wali' readonly>
                                                    <option value=''>Pilih Kewarganegaraan</option>";
                                                    <?php foreach ($kewarganegaraan as $val) { ?>
                                                        <?php if ($siswa['warga_wali'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>NIK</label>
                                                <input class="form-control" onkeypress="return hanyaAngka(this);" maxlength="16" minlength="16" type="text" name="nik_wali" value="<?= $siswa['nik_wali'] ?>" readonly />
                                            </div>

                                            <div class="form-group ">
                                                <label>Tempat Lahir</label>
                                                <input class="form-control" type="text" name="tempat_lahir_wali" value="<?= $siswa['tempat_lahir_wali'] ?>" readonly />
                                            </div>

                                            <div class="form-group ">
                                                <label>Tanggal Lahir</label>
                                                <input class="form-control" type="date" name="tgl_lahir_wali" value="<?= $siswa['tgl_lahir_wali'] ?>" readonly />
                                            </div>

                                            <div class="form-group ">
                                                <label>Pendidikan</label>
                                                <select class='form-control' name='pendidikan_wali' readonly>
                                                    <option value=''>Pilih Pendidikan</option>";
                                                    <?php foreach ($pendidikan as $val) { ?>
                                                        <?php if ($siswa['pendidikan_wali'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>Pekerjaan</label>
                                                <select class='form-control' name='pekerjaan_wali' readonly>
                                                    <option value=''>Pilih Pekerjaan</option>";
                                                    <?php foreach ($pekerjaan as $val) { ?>
                                                        <?php if ($siswa['pekerjaan_wali'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>Penghasilan</label>
                                                <select class='form-control' name='penghasilan_wali' readonly>
                                                    <option value=''>Pilih Penghasilan</option>";
                                                    <?php foreach ($penghasilan as $val) { ?>
                                                        <?php if ($siswa['penghasilan_wali'] == $val) { ?>
                                                            <option value='<?= $val ?>' selected><?= $val ?> </option>
                                                        <?php  } else { ?>
                                                            <option value='<?= $val ?>'><?= $val ?> </option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group ">
                                                <label>No HP</label>
                                                <input class="form-control" onkeypress="return hanyaAngka(this);" maxlength="13" minlength="10" type="text" name="no_hp_wali" value="<?= $siswa['no_hp_wali'] ?>" readonly />
                                            </div>

                                            <div class="form-group">
                                                <div class="text"><strong>Domisili wali</strong></div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="domisili_wali" name="domisili_wali" class="custom-control-input" value="Dalam Negeri" <?php if ($siswa['domisili_wali'] == 'Dalam Negeri') echo 'checked' ?> readonly>
                                                    <label class="custom-control-label" for="domisili_wali">Dalam Negeri</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="luar_negeri_wali" name="domisili_wali" class="custom-control-input" value="Luar Negeri" <?php if ($siswa['domisili_wali'] == 'Luar Negeri') echo 'checked' ?> readonly>
                                                    <label class="custom-control-label" for="luar_negeri_wali">Luar Negeri</label>
                                                </div>
                                            </div>

                                            <div class="form-group ">
                                                <label>Provinsi</label>
                                                <input class="form-control" type="text" name="prov_wali" value="<?= $siswa['prov_wali'] ?>" readonly />
                                                <!--<select class='form-control' id="form_prov_wali" name='prov_wali' readonly>
                                                                        <option value=""><?= $siswa['prov_wali'] ?></option>
                                                                        <?php
                                                                        $daerah = mysqli_query($koneksi, "SELECT kode,nama FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=2 ORDER BY nama");
                                                                        while ($d = mysqli_fetch_array($daerah)) {
                                                                        ?>
                                                                            <option value="<?php echo $d['kode']; ?>"><?php echo $d['nama']; ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>-->
                                            </div>
                                            <div class="form-group ">
                                                <label>Kabupaten</label>
                                                <input class="form-control" type="text" name="kab_wali" value="<?= $siswa['kab_wali'] ?>" readonly />
                                                <!--<select class='form-control' id="form_kab_wali" name='kab_wali' readonly>
                                                                        <option value="<?= $siswa['kab_wali'] ?>"><?= $siswa['kab_wali'] ?></option>
                                                                    </select>-->
                                            </div>
                                            <div class="form-group ">
                                                <label>Kecamatan</label>
                                                <input class="form-control" type="text" name="kec_wali" value="<?= $siswa['kec_wali'] ?>" readonly />
                                                <!--<select class='form-control' id="form_kec_wali" name='kec_wali' readonly>
                                                                        <option value="<?= $siswa['kec_wali'] ?>"><?= $siswa['kec_wali'] ?></option>
                                                                    </select>-->
                                            </div>
                                            <div class="form-group ">
                                                <label>Desa</label>
                                                <input class="form-control" type="text" name="desa_wali" value="<?= $siswa['desa_wali'] ?>" readonly />
                                                <!--<select class='form-control' id="form_des_wali" name='desa_wali' readonly>
                                                                        <option value="<?= $siswa['desa_wali'] ?>"><?= $siswa['desa_wali'] ?></option>
                                                                    </select>-->
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Dusun/Jalan</label>
                                                <input class="form-control" type="text" name="alamat_wali" value="<?= $siswa['alamat_wali'] ?>" readonly />
                                            </div>

                                            <div class="form-group">
                                                <label>Kode Pos</label>
                                                <input class="form-control" type="text" name="kodepos_wali" value="<?= $siswa['kodepos_wali'] ?>" readonly />
                                            </div>


                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" id="btnsimpan" name="submit" class="btn btn-primary">Simpan</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- DATA DOKUMEN -->
                                    <div class="tab-pane fade" id="datadokumen" role="tabpanel" aria-labelledby="data-dokumen">
                                        <form id="form-berkas">
                                            <input type="hidden" value="<?= $siswa['id_siswa'] ?>" name="id_siswa" class="form-control" required="">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table style="font-size: 12px" class="table table-bordered table-md" id="table-1">
                                                        <thead>
                                                            <tr>
                                                                <th style="width:20px">Dokumen</th>
                                                                <th>Keterangan</th>
                                                                <th>Upload</th>
                                                                <th>File</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:20px">1. Foto</td>
                                                                <td style="width:20px">File scan Foto jpeg/jpg/png Max. 1Mb<br>
                                                                    <h6><strong> Resmi Dengan Latar Belakang Merah</strong></h6>
                                                                </td>
                                                                <td>

                                                                    <div class="form-group" style="width:20px">
                                                                        <input type="file" name="file_foto">
                                                                    </div>
                                                                    <button type="submit" name="simpan-foto" id="simpan-foto" class="btn btn-primary btn-sm">Unggah</button>

                                                                </td>
                                                                <td style="width:60px;  text-align:center">
                                                                    <p><a href="../<?= $siswa['file_foto'] ?>" target="blank"><img class="img-fluid" width="80" height="100" src="../<?= $siswa['file_foto'] ?>"></a></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:20px">2. Akte Kelahiran</td>
                                                                <td style="width:20px">File scan Akte Kelahiran format jpeg/jpg/png Max. 1Mb</td>
                                                                <td>

                                                                    <div class="form-group" style="width:20px">
                                                                        <input type="file" name="file_akte">
                                                                    </div>
                                                                    <button type="submit" name="simpan-akte" id="simpan-akte" class="btn btn-primary btn-sm">Unggah</button>

                                                                </td>
                                                                <td style="width:60px; text-align:center">
                                                                    <p><a href="../<?= $siswa['file_akte'] ?>" target="blank"><img class="img-fluid" width="160" height="200" src="../<?= $siswa['file_akte'] ?>"></a></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:20px">3. Kartu Keluarga</td>
                                                                <td style="width:20px">File scan Kartu Keluarga format jpeg/jpg/png Max. 1Mb</td>
                                                                <td>

                                                                    <div class="form-group" style="width:20px">
                                                                        <input type="file" name="file_kk">
                                                                    </div>
                                                                    <button type="submit" name="simpan-kk" id="simpan-kk" class="btn btn-primary btn-sm">Unggah</button>

                                                                </td>
                                                                <td style="width:60px;  text-align:center">
                                                                    <p><a href="../<?= $siswa['file_kk'] ?>" target="blank"><img class="img-fluid" width="320" height="400" src="../<?= $siswa['file_kk'] ?>"></a></p>
                                                                </td>
                                                            <tr>
                                                                <td style="width:20px">4. Ijazah</td>
                                                                <td style="width:20px">File scan Ijazah format jpeg/jpg/png Max. 1Mb</td>
                                                                <td>

                                                                    <div class="form-group" style="width:20px">
                                                                        <input type="file" name="file_ijazah">
                                                                    </div>
                                                                    <button type="submit" name="simpan-ijazah" id="simpan-ijazah" class="btn btn-primary btn-sm">Unggah</button>

                                                                </td>
                                                                <td style="width:60px;  text-align:center">
                                                                    <p><a href="../<?= $siswa['file_ijazah'] ?>" target="blank"><img class="img-fluid" width="160" height="200" src="../<?= $siswa['file_ijazah'] ?>"></a></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:20px">5. Kartu KIP/KKS/PKH</td>
                                                                <td style="width:20px">File scan Kartu KIP/KKS/PKH jpeg/jpg/png Max. 1Mb</td>
                                                                <td>

                                                                    <div class="form-group" style="width:20px">
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
                                        </form>
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

<script>
    $('.form-control').keyup(function(event) {
        $(this).val($(this).val().toUpperCase());
    });
    $(document).ready(function() {
        $('#form-datadiri').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'mod_siswa/crud_siswa.php?pg=simpan',
                data: $(this).serialize(),
                beforeSend: function() {
                    $('#btnsimpan').prop('disabled', true);
                },
                success: function(data) {
                    $('#btnsimpan').prop('disabled', false);
                    iziToast.success({
                        title: 'Jos . . .',
                        message: 'Data Berhasil disimpan',
                        position: 'topRight'
                    });
                }
            });
            return false;
        });
    });
</script>

<!-- simpan ayah -->
<script>
    $('.form-control').keyup(function(event) {
        $(this).val($(this).val().toUpperCase());
    });
    $(document).ready(function() {
        $('#form-dataayah').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'mod_siswa/crud_siswa.php?pg=dataayah',
                data: $(this).serialize(),
                beforeSend: function() {
                    $('#btnsimpan').prop('disabled', true);
                },
                success: function(data) {
                    $('#btnsimpan').prop('disabled', false);
                    iziToast.success({
                        title: 'Jos . . .',
                        message: 'Data Berhasil disimpan',
                        position: 'topRight'
                    });
                }
            });
            return false;
        });
    });
</script>
<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
</script>
<!-- simpan ibu -->
<script>
    $('.form-control').keyup(function(event) {
        $(this).val($(this).val().toUpperCase());
    });
    $(document).ready(function() {
        $('#form-dataibu').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'mod_siswa/crud_siswa.php?pg=dataibu',
                data: $(this).serialize(),
                beforeSend: function() {
                    $('#btnsimpan').prop('disabled', true);
                },
                success: function(data) {
                    $('#btnsimpan').prop('disabled', false);
                    iziToast.success({
                        title: 'Jos . . .',
                        message: 'Data Berhasil disimpan',
                        position: 'topRight'
                    });
                }
            });
            return false;
        });
    });
</script>

<!-- simpan wali -->
<script>
    $('.form-control').keyup(function(event) {
        $(this).val($(this).val().toUpperCase());
    });
    $(document).ready(function() {
        $('#form-datawali').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'mod_siswa/crud_siswa.php?pg=datawali',
                data: $(this).serialize(),
                beforeSend: function() {
                    $('#btnsimpan').prop('disabled', true);
                },
                success: function(data) {
                    $('#btnsimpan').prop('disabled', false);
                    iziToast.success({
                        title: 'Jos . . .',
                        message: 'Data Berhasil disimpan',
                        position: 'topRight'
                    });
                }
            });
            return false;
        });
    });
</script>

<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
</script>

<!-- daerah siswa -->
<script type="text/javascript">
    $(document).ready(function() {



        // ambil data kabupaten ketika data memilih provinsi
        $('body').on("change", "#form_prov", function() {
            var id = $(this).val();
            var data = "id=" + id + "&data=kabupaten";
            $.ajax({
                type: 'POST',
                url: "mod_siswa/daerah_siswa.php",
                data: data,
                success: function(hasil) {
                    $("#form_kab").html(hasil);

                }
            });
        });

        // ambil data kecamatan/kota ketika data memilih kabupaten
        $('body').on("change", "#form_kab", function() {
            var id = $(this).val();
            var data = "id=" + id + "&data=kecamatan";
            $.ajax({
                type: 'POST',
                url: "mod_siswa/daerah_siswa.php",
                data: data,
                success: function(hasil) {
                    $("#form_kec").html(hasil);

                }
            });
        });

        // ambil data desa ketika data memilih kecamatan/kota
        $('body').on("change", "#form_kec", function() {
            var id = $(this).val();
            var data = "id=" + id + "&data=desa";
            $.ajax({
                type: 'POST',
                url: "mod_siswa/daerah_siswa.php",
                data: data,
                success: function(hasil) {
                    $("#form_des").html(hasil);

                }
            });
        });


    });
</script>

<!-- daerah ayah -->
<script type="text/javascript">
    $(document).ready(function() {

        // sembunyikan form kabupaten, kecamatan dan desa
        $("#form_kab_ayah").show();
        $("#form_kec_ayah").show();
        $("#form_des_ayah").show();

        // ambil data kabupaten ketika data memilih provinsi
        $('body').on("change", "#form_prov_ayah", function() {
            var id = $(this).val();
            var data = "id=" + id + "&data=kabupaten";
            $.ajax({
                type: 'POST',
                url: "mod_siswa/daerah_ayah.php",
                data: data,
                success: function(hasil) {
                    $("#form_kab_ayah").html(hasil);
                    $("#form_kab_ayah").show();
                    $("#form_kec_ayah").show();
                    $("#form_des_ayah").show();
                }
            });
        });

        // ambil data kecamatan/kota ketika data memilih kabupaten
        $('body').on("change", "#form_kab_ayah", function() {
            var id = $(this).val();
            var data = "id=" + id + "&data=kecamatan";
            $.ajax({
                type: 'POST',
                url: "mod_siswa/daerah_ayah.php",
                data: data,
                success: function(hasil) {
                    $("#form_kec_ayah").html(hasil);
                    $("#form_kec_ayah").show();
                    $("#form_des_ayah").show();
                }
            });
        });

        // ambil data desa ketika data memilih kecamatan/kota
        $('body').on("change", "#form_kec_ayah", function() {
            var id = $(this).val();
            var data = "id=" + id + "&data=desa";
            $.ajax({
                type: 'POST',
                url: "mod_siswa/daerah_ayah.php",
                data: data,
                success: function(hasil) {
                    $("#form_des_ayah").html(hasil);
                    $("#form_des_ayah").show();
                }
            });
        });


    });
</script>

<!-- daerah ibu -->
<script type="text/javascript">
    $(document).ready(function() {

        // sembunyikan form kabupaten, kecamatan dan desa
        $("#form_kab_ibu").show();
        $("#form_kec_ibu").show();
        $("#form_des_ibu").show();

        // ambil data kabupaten ketika data memilih provinsi
        $('body').on("change", "#form_prov_ibu", function() {
            var id = $(this).val();
            var data = "id=" + id + "&data=kabupaten";
            $.ajax({
                type: 'POST',
                url: "mod_siswa/daerah_ibu.php",
                data: data,
                success: function(hasil) {
                    $("#form_kab_ibu").html(hasil);
                    $("#form_kab_ibu").show();
                    $("#form_kec_ibu").show();
                    $("#form_des_ibu").show();
                }
            });
        });

        // ambil data kecamatan/kota ketika data memilih kabupaten
        $('body').on("change", "#form_kab_ibu", function() {
            var id = $(this).val();
            var data = "id=" + id + "&data=kecamatan";
            $.ajax({
                type: 'POST',
                url: "mod_siswa/daerah_ibu.php",
                data: data,
                success: function(hasil) {
                    $("#form_kec_ibu").html(hasil);
                    $("#form_kec_ibu").show();
                    $("#form_des_ibu").show();
                }
            });
        });

        // ambil data desa ketika data memilih kecamatan/kota
        $('body').on("change", "#form_kec_ibu", function() {
            var id = $(this).val();
            var data = "id=" + id + "&data=desa";
            $.ajax({
                type: 'POST',
                url: "mod_siswa/daerah_ibu.php",
                data: data,
                success: function(hasil) {
                    $("#form_des_ibu").html(hasil);
                    $("#form_des_ibu").show();
                }
            });
        });


    });
</script>

<!-- daerah wali -->
<script type="text/javascript">
    $(document).ready(function() {

        // sembunyikan form kabupaten, kecamatan dan desa
        $("#form_kab_wali").show();
        $("#form_kec_wali").show();
        $("#form_des_wali").show();

        // ambil data kabupaten ketika data memilih provinsi
        $('body').on("change", "#form_prov_wali", function() {
            var id = $(this).val();
            var data = "id=" + id + "&data=kabupaten";
            $.ajax({
                type: 'POST',
                url: "mod_siswa/daerah_wali.php",
                data: data,
                success: function(hasil) {
                    $("#form_kab_wali").html(hasil);
                    $("#form_kab_wali").show();
                    $("#form_kec_wali").show();
                    $("#form_des_wali").show();
                }
            });
        });

        // ambil data kecamatan/kota ketika data memilih kabupaten
        $('body').on("change", "#form_kab_wali", function() {
            var id = $(this).val();
            var data = "id=" + id + "&data=kecamatan";
            $.ajax({
                type: 'POST',
                url: "mod_siswa/daerah_wali.php",
                data: data,
                success: function(hasil) {
                    $("#form_kec_wali").html(hasil);
                    $("#form_kec_wali").show();
                    $("#form_des_wali").show();
                }
            });
        });

        // ambil data desa ketika data memilih kecamatan/kota
        $('body').on("change", "#form_kec_wali", function() {
            var id = $(this).val();
            var data = "id=" + id + "&data=desa";
            $.ajax({
                type: 'POST',
                url: "mod_siswa/daerah_wali.php",
                data: data,
                success: function(hasil) {
                    $("#form_des_wali").html(hasil);
                    $("#form_des_wali").show();
                }
            });
        });


    });
</script>

<!-- STATUS IBU -->
<script>
    $("select[name=status_tinggal_ibu]").change(function() {
        var status_tinggal_ibu = $(this).val();

        if (status_tinggal_ibu == 'Beda Dengan Ayah') {
            $("input[name=domisili_ibu]").removeAttr("readonly");
        } else if (status_tinggal_ibu == 'Sama Dengan Ayah') {
            $("input[name=domisili_ibu]").val($("input[name=domisili_ayah]").val());
        } else {
            $("input[name=domisili_ibu]").Attr("readonly", true);
        }
    });

    $("select[name=status_tinggal_ibu]").change(function() {
        var status_tinggal_ibu = $(this).val();

        if (status_tinggal_ibu == 'Beda Dengan Ayah') {
            $("select[name=status_tmp_tinggal_ibu]").removeAttr("readonly");
        } else if (status_tinggal_ibu == 'Sama Dengan Ayah') {
            $("select[name=status_tmp_tinggal_ibu]").val($("select[name=status_tmp_tinggal_ayah]").val());
        } else {
            $("select[name=status_tmp_tinggal_ibu]").Attr("readonly", true);
        }
    });

    $("select[name=status_tinggal_ibu]").change(function() {
        var status_tinggal_ibu = $(this).val();

        if (status_tinggal_ibu == 'Beda Dengan Ayah') {
            $("input[name=prov_ibu]").removeAttr("readonly");
        } else if (status_tinggal_ibu == 'Sama Dengan Ayah') {
            $("input[name=prov_ibu]").val($("input[name=prov_ayah]").val());
        } else {
            $("input[name=prov_ibu]").Attr("readonly", true);
        }
    });

    $("select[name=status_tinggal_ibu]").change(function() {
        var status_tinggal_ibu = $(this).val();

        if (status_tinggal_ibu == 'Beda Dengan Ayah') {
            $("input[name=kab_ibu]").removeAttr("readonly");
        } else if (status_tinggal_ibu == 'Sama Dengan Ayah') {
            $("input[name=kab_ibu]").val($("input[name=kab_ayah]").val());
        } else {
            $("input[name=kab_ibu]").Attr("readonly", true);
        }
    });

    $("select[name=status_tinggal_ibu]").change(function() {
        var status_tinggal_ibu = $(this).val();

        if (status_tinggal_ibu == 'Beda Dengan Ayah') {
            $("input[name=kec_ibu]").removeAttr("readonly");
        } else if (status_tinggal_ibu == 'Sama Dengan Ayah') {
            $("input[name=kec_ibu]").val($("input[name=kec_ayah]").val());
        } else {
            $("input[name=kec_ibu]").Attr("readonly", true);
        }
    });

    $("select[name=status_tinggal_ibu]").change(function() {
        var status_tinggal_ibu = $(this).val();

        if (status_tinggal_ibu == 'Beda Dengan Ayah') {
            $("input[name=desa_ibu]").removeAttr("readonly");
        } else if (status_tinggal_ibu == 'Sama Dengan Ayah') {
            $("input[name=desa_ibu]").val($("input[name=desa_ayah]").val());
        } else {
            $("input[name=desa_ibu]").Attr("readonly", true);
        }
    });

    $("select[name=status_tinggal_ibu]").change(function() {
        var status_tinggal_ibu = $(this).val();

        if (status_tinggal_ibu == 'Beda Dengan Ayah') {
            $("input[name=alamat_ibu]").removeAttr("readonly");
        } else if (status_tinggal_ibu == 'Sama Dengan Ayah') {
            $("input[name=alamat_ibu]").val($("input[name=alamat_ayah]").val());
        } else {
            $("input[name=alamat_ibu]").Attr("readonly", true);
        }
    });

    $("select[name=status_tinggal_ibu]").change(function() {
        var status_tinggal_ibu = $(this).val();

        if (status_tinggal_ibu == 'Beda Dengan Ayah') {
            $("input[name=kodepos_ibu]").removeAttr("readonly");
        } else if (status_tinggal_ibu == 'Sama Dengan Ayah') {
            $("input[name=kodepos_ibu]").val($("input[name=kodepos_ayah]").val());
        } else {
            $("input[name=kodepos_ibu]").Attr("readonly", true);
        }
    });
</script>


<!-- STATUS WALI -->

<script>
    $("input[name=status_wali]").change(function() {
        var status_wali = $(this).val();

        if (status_wali == 'Lainnya') {
            $("input[name=nama_wali]").removeAttr("readonly");
        } else if (status_wali == 'Sama Dengan Ayah') {
            $("input[name=nama_wali]").val($("input[name=nama_ayah]").val());
        } else if (status_wali == 'Sama Dengan Ibu') {
            $("input[name=nama_wali]").val($("input[name=nama_ibu]").val());
        } else {
            $("input[name=nama_wali]").attr("readonly", true);
        }
    });

    $("input[name=status_wali]").change(function() {
        var status_wali = $(this).val();

        if (status_wali == 'Lainnya') {
            $("select[name=warga_wali]").removeAttr("readonly");
        } else if (status_wali == 'Sama Dengan Ayah') {
            $("select[name=warga_wali]").val($("select[name=warga_ayah]").val());
        } else if (status_wali == 'Sama Dengan Ibu') {
            $("select[name=warga_wali]").val($("select[name=warga_ibu]").val());
        } else {
            $("select[name=warga_wali]").attr("readonly", true);
        }
    });

    $("input[name=status_wali]").change(function() {
        var status_wali = $(this).val();

        if (status_wali == 'Lainnya') {
            $("input[name=nik_wali]").removeAttr("readonly");
        } else if (status_wali == 'Sama Dengan Ayah') {
            $("input[name=nik_wali]").val($("input[name=nik_ayah]").val());
        } else if (status_wali == 'Sama Dengan Ibu') {
            $("input[name=nik_wali]").val($("input[name=nik_ibu]").val());
        } else {
            $("input[name=nik_wali]").attr("readonly", true);
        }
    });

    $("input[name=status_wali]").change(function() {
        var status_wali = $(this).val();

        if (status_wali == 'Lainnya') {
            $("input[name=tempat_lahir_wali]").removeAttr("readonly");
        } else if (status_wali == 'Sama Dengan Ayah') {
            $("input[name=tempat_lahir_wali]").val($("input[name=tempat_lahir_ayah]").val());
        } else if (status_wali == 'Sama Dengan Ibu') {
            $("input[name=tempat_lahir_wali]").val($("input[name=tempat_lahir_ibu]").val());
        } else {
            $("input[name=tempat_lahir_wali]").attr("readonly", true);
        }
    });

    $("input[name=status_wali]").change(function() {
        var status_wali = $(this).val();

        if (status_wali == 'Lainnya') {
            $("input[name=tgl_lahir_wali]").removeAttr("readonly");
        } else if (status_wali == 'Sama Dengan Ayah') {
            $("input[name=tgl_lahir_wali]").val($("input[name=tgl_lahir_ayah]").val());
        } else if (status_wali == 'Sama Dengan Ibu') {
            $("input[name=tgl_lahir_wali]").val($("input[name=tgl_lahir_ibu]").val());
        } else {
            $("input[name=tgl_lahir_wali]").attr("readonly", true);
        }
    });

    $("input[name=status_wali]").change(function() {
        var status_wali = $(this).val();

        if (status_wali == 'Lainnya') {
            $("select[name=pendidikan_wali]").removeAttr("readonly");
        } else if (status_wali == 'Sama Dengan Ayah') {
            $("select[name=pendidikan_wali]").val($("select[name=pendidikan_ayah]").val());
        } else if (status_wali == 'Sama Dengan Ibu') {
            $("select[name=pendidikan_wali]").val($("select[name=pendidikan_ibu]").val());
        } else {
            $("select[name=pendidikan_wali]").attr("readonly", true);
        }
    });

    $("input[name=status_wali]").change(function() {
        var status_wali = $(this).val();

        if (status_wali == 'Lainnya') {
            $("select[name=pekerjaan_wali]").removeAttr("readonly");
        } else if (status_wali == 'Sama Dengan Ayah') {
            $("select[name=pekerjaan_wali]").val($("select[name=pekerjaan_ayah]").val());
        } else if (status_wali == 'Sama Dengan Ibu') {
            $("select[name=pekerjaan_wali]").val($("select[name=pekerjaan_ibu]").val());
        } else {
            $("select[name=pekerjaan_wali]").attr("readonly", true);
        }
    });

    $("input[name=status_wali]").change(function() {
        var status_wali = $(this).val();

        if (status_wali == 'Lainnya') {
            $("select[name=penghasilan_wali]").removeAttr("readonly");
        } else if (status_wali == 'Sama Dengan Ayah') {
            $("select[name=penghasilan_wali]").val($("select[name=penghasilan_ayah]").val());
        } else if (status_wali == 'Sama Dengan Ibu') {
            $("select[name=penghasilan_wali]").val($("select[name=penghasilan_ibu]").val());
        } else {
            $("select[name=penghasilan_wali]").attr("readonly", true);
        }
    });

    $("input[name=status_wali]").change(function() {
        var status_wali = $(this).val();

        if (status_wali == 'Lainnya') {
            $("input[name=no_hp_wali]").removeAttr("readonly");
        } else if (status_wali == 'Sama Dengan Ayah') {
            $("input[name=no_hp_wali]").val($("input[name=no_hp_ayah]").val());
        } else if (status_wali == 'Sama Dengan Ibu') {
            $("input[name=no_hp_wali]").val($("input[name=no_hp_ibu]").val());
        } else {
            $("input[name=no_hp_wali]").attr("readonly", true);
        }
    });

    $("input[name=status_wali]").change(function() {
        var status_wali = $(this).val();

        if (status_wali == 'Lainnya') {
            $("input[name=prov_wali]").removeAttr("readonly");
        } else if (status_wali == 'Sama Dengan Ayah') {
            $("input[name=prov_wali]").val($("input[name=prov_ayah]").val());
        } else if (status_wali == 'Sama Dengan Ibu') {
            $("input[name=prov_wali]").val($("input[name=prov_ibu]").val());
        } else {
            $("input[name=prov_wali]").attr("readonly", true);
        }
    });

    $("input[name=status_wali]").change(function() {
        var status_wali = $(this).val();

        if (status_wali == 'Lainnya') {
            $("input[name=kab_wali]").removeAttr("readonly");
        } else if (status_wali == 'Sama Dengan Ayah') {
            $("input[name=kab_wali]").val($("input[name=kab_ayah]").val());
        } else if (status_wali == 'Sama Dengan Ibu') {
            $("input[name=kab_wali]").val($("input[name=kab_ibu]").val());
        } else {
            $("input[name=kab_wali]").attr("readonly", true);
        }
    });

    $("input[name=status_wali]").change(function() {
        var status_wali = $(this).val();

        if (status_wali == 'Lainnya') {
            $("input[name=kec_wali]").removeAttr("readonly");
        } else if (status_wali == 'Sama Dengan Ayah') {
            $("input[name=kec_wali]").val($("input[name=kec_ayah]").val());
        } else if (status_wali == 'Sama Dengan Ibu') {
            $("input[name=kec_wali]").val($("input[name=kec_ibu]").val());
        } else {
            $("input[name=kec_wali]").attr("readonly", true);
        }
    });

    $("input[name=status_wali]").change(function() {
        var status_wali = $(this).val();

        if (status_wali == 'Lainnya') {
            $("input[name=desa_wali]").removeAttr("readonly");
        } else if (status_wali == 'Sama Dengan Ayah') {
            $("input[name=desa_wali]").val($("input[name=desa_ayah]").val());
        } else if (status_wali == 'Sama Dengan Ibu') {
            $("input[name=desa_wali]").val($("input[name=desa_ibu]").val());
        } else {
            $("input[name=desa_wali]").attr("readonly", true);
        }
    });

    $("input[name=status_wali]").change(function() {
        var status_wali = $(this).val();

        if (status_wali == 'Lainnya') {
            $("input[name=alamat_wali]").removeAttr("readonly");
        } else if (status_wali == 'Sama Dengan Ayah') {
            $("input[name=alamat_wali]").val($("input[name=alamat_ayah]").val());
        } else if (status_wali == 'Sama Dengan Ibu') {
            $("input[name=alamat_wali]").val($("input[name=alamat_ibu]").val());
        } else {
            $("input[name=alamat_wali]").attr("readonly", true);
        }
    });

    $("input[name=status_wali]").change(function() {
        var status_wali = $(this).val();

        if (status_wali == 'Lainnya') {
            $("input[name=kodepos_wali]").removeAttr("readonly");
        } else if (status_wali == 'Sama Dengan Ayah') {
            $("input[name=kodepos_wali]").val($("input[name=kodepos_ayah]").val());
        } else if (status_wali == 'Sama Dengan Ibu') {
            $("input[name=kodepos_wali]").val($("input[name=kodepos_ibu]").val());
        } else {
            $("input[name=kodepos_wali]").attr("readonly", true);
        }
    });
</script>

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
                    title: 'Jos . . . ',
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
                    title: 'Jos . . .  ',
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
    $('#form-akte').on('submit', function(e) {
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
                    title: 'Jos . . .  ',
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
                    title: 'Jos . . .  ',
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
                    title: 'Jos . . .  ',
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