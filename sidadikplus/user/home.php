<?php defined('BASEPATH') or die("ip anda sudah tercatat oleh sistem kami") ?>



<div class="row">
	<div class="col-12 col-sm-12 col-lg-12">
		<div class="card author-box card-primary">


			<div class="card-header">
				<h2 class="section-title">INFO SIDADIK <?= date('Y') ?></h2>

			</div>
			<div class="card-body">

				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

					Hai <?= $siswa['nama_siswa'] ?> !!!<br />
					Selamat datang di Sistem Data Pendidikan, Silahkan Lengkapi datamu !!!

				</div>


				<div class="row">
					<div class="col-lg-4">

						<div class="activities">
							<div class="activity">
								<div class="activity-icon bg-warning text-white shadow-primary">
									1
								</div>
								<div class="activity-detail">
									<h5>Edit Data</h5>
									<a target="" href="?pg=siswa" type="button" class="badge badge-danger"><i class="fas fa-book    "></i> Lengkapi</a>
								</div>
							</div>

						</div>
					</div>
					<div class="col-lg-4">

						<div class="activities">
							<div class="activity">
								<div class="activity-icon bg-warning text-white shadow-primary">
									2
								</div>
								<div class="activity-detail">
									<h5>Upload Dokumen</h5>
									<a target="" href="?pg=berkas" type="button" class="badge badge-danger"><i class="fas fa-upload    "></i> Unggah</a>
								</div>
							</div>

						</div>
					</div>
					<div class="col-lg-4">

						<div class="activities">
							<div class="activity">
								<div class="activity-icon bg-warning text-white shadow-primary">
									3
								</div>
								<div class="activity-detail">
									<h5>Konfirmasi</h5>
									<a target="" href="https://api.whatsapp.com/send?phone=+62<?= $setting['nolivechat'] ?>&text=<?= $setting['livechat'] ?>" type="button" class="badge badge-danger"><i class="fas fa-check    "></i> Konfirmasi</a>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-8">
						<div class="card">
							<div class="alert alert-info alert-has-icon">
								<div class="alert-icon"><i class=""></i></div>
								<div class="alert-body">
									<div class="alert-body">Pengumuman</div>

								</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-12">
										<div class="card">
											<div class="card-body">
												<div class="activities">
													<?php $query = mysqli_query($koneksi, "SELECT * FROM pengumuman where jenis='1'");
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
																	<a class="text-job" href="#"></a>

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

					<!-- code start -->
					<div class="col-lg-4">
						<a class="twPc-bg twPc-block"></a>

						<div>
							<div class="twPc-button">

								<span class="badge badge-info">NPSN : <?= $setting['npsn'] ?></span>




							</div>

							<a title="" href="" class="twPc-avatarLink">
								<img alt="" src="../<?= $setting['logo'] ?>" class="twPc-avatarImg">
							</a>
							<br>
							<div class="twPc-divUser">
								<div class="twPc-divName">
									<a href="?pg=formulir"><b>NSM : <?= $setting['nsm'] ?></b></a>
								</div>

							</div>


						</div>

						<!-- code end -->


						<div class="box box-solid">

							<!-- /.box-header -->
							<div class="box-body">
								<div id='infoweb'></div>
								<p><b></b></p>

								<ul class="list-group">
									<li class="list-group-item"><img src="../dist/img/support.png" width="45" alt="">
										<a href="https://<?= $setting['web'] ?>" target="_blank" class="btn btn-success">
											<i class="fas fa-globe    "></i> Website Sekolah
										</a>
									</li>
									<li class="list-group-item"><img src="../dist/img/support.png" width="45" alt="">
										<a href="https://api.whatsapp.com/send?phone=+62<?= $setting['nolivechat'] ?>&text=<?= $setting['livechat'] ?>" target="_blank" class="btn btn-primary">
											<i class="fab fa-whatsapp"></i> <?= $setting['nolivechat'] ?>

										</a>
									</li>
									<li class="list-group-item"><img src="../dist/img/support.png" width="45" alt="">
										<a href="#" target="_blank" class="btn btn-danger">
											<i class="fas fa-home"></i> <?= $setting['nsm'] ?>
										</a>
									</li>
								</ul>

							</div>
							<!-- /.box -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>