<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?=$title?></title>

	<!-- Bootstrap -->
	<link href="<?=base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?=base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?=base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- Animate.css -->
	<link href="<?=base_url();?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">
	<!-- boostrap-datetimepicker -->
	<link rel="stylesheet"
		href="<?=base_url();?>assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css">
	<!-- Custom Theme Style -->
	<link href="<?=base_url();?>assets/build/css/custom.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url();?>assets/css/css-costume.css">
</head>
<style>
	body {
		color: #73879C;
		background: rgb(250, 250, 250);
		font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
		font-size: 13px;
		font-weight: 400;
		line-height: 1.471;
	}

</style>

<body class="nav-md">
	<div class="">
		<div class="">
			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<nav>

						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
									aria-expanded="false">
									<img src="<?=base_url();?>assets/images/admin.png"
										alt=""><?=$this->session->userdata('username');?>
									<span class=" fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu dropdown-usermenu pull-right">
									<!-- <li><a href="<?=base_url();?>controller/ubah_password"> Ubah Password</a>
									</li> -->
									<!-- <li>
                          <a href="javascript:;">
                            <span class="badge bg-red pull-right">50%</span>
                            <span>Settings</span>
                          </a>
                        </li>
                        <li><a href="javascript:;">Help</a></li> -->
									<li><a href="<?=base_url('c_login/logout');?>"><i
												class="fa fa-sign-out pull-right"></i> Keluar</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Formulir Pengisian Data Diri <?=$this->session->userdata('username')?></h3>
						</div>


					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Data Diri</h2>

									<div class="clearfix"></div>
								</div>

								<!-- alert simpan data -->
					<?php if ($this->session->flashdata('success')):?>
					<div id="pesan" class="alert alert-success" role="alert">
						<storng><?=$this->session->flashata('success');?></strong>
					</div>
					<?php endif?>
					<!-- alet untuk hapus data -->
					<?php if ($this->session->flashdata('error')):?>
					<div id="pesan" class="alert alert-danger" role="alert">
						<strong><?=$this->session->flashdata('error');?></strong>
					</div>
					<?php endif;?>


								<div class="x_content">
									<br />
									<div id="" class="alert alert-warning alert-dismissible">
										<button type="button" class="close" data-dismiss="alert"
											aria-hidden="true">&times;</button>
										<h3><i class="icon fa fa-warning"></i> Peringatan !</h3>
										Sistem mendeteksi anda sebagai user baru, harap isi data terlebih dahulu sebelum
										Lanjut ke menu berikutnya <br>
										Harap isi data dengan sebenar benarnya, jika data tidak sesui dengan sebenarnya,
										admin berhak untuk menonaktifkan account anda !! <br>
										Jika anda klik simpan berarti anda setuju dengan semua ketentuan yang ada
									</div>

							
										<div class="card-header">
											<h3 class="card-title">IDENTITAS SISWA dan ORANG TUA/WALI</h3>
										</div>
										<form id="save_data_diri" enctype="multipart/form-data"
											class="form-horizontal form-label-right" method="POST"
											action="<?=base_url();?>c_siswa/save_data_diri">
											<div class="col-md-6">

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">No Registrasi</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type readonly="text" name="no_registrasi" value="<?=$no_registrasi;?>" class="form-control"
															placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">NIK</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" name="nik" value="" required class="form-control"
															placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type readonly="text" name="nama" value="<?=$this->session->userdata('username');?>" class="form-control"
															placeholder="Nama">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">
														Alamat
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<textarea class="form-control" name="alamat" id="" cols="30"
															rows="4"></textarea>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat
														Lahir</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" name="tempat_lahir" class="form-control"
															placeholder="Tempat Lahir">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal
														Lahir</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<div class="input-group date" id="myDatepicker2">
															<input type="text" name="tanggal_lahir"
																class="form-control">
															<span class="input-group-addon">
																<span class="glyphicon glyphicon-calendar"></span>
															</span>
														</div>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis
														Kelamin
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="jenis_kelamin" id="" class="form-control">
															<option>Laki Laki</option>
															<option>Perempuan</option>
														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Anak ke-
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="anak_ke" id="" class="form-control">
															<option>1</option>
															<option>2</option>
															<option>3</option>
															<option>4</option>
															<option>5</option>
															<option>6</option>
															<option>7</option>
														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah
														Keluarga
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="jumlah_keluarga" id="" class="form-control">
															<option>1</option>
															<option>2</option>
															<option>3</option>
															<option>4</option>
														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Bahasa
														sehari-hari
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="bahasa_dirumah" id="" class="form-control">
															<option>minang</option>
															<option>indinesia</option>
															<option>inggris</option>
															<option>arabiah</option>
														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Jarak
														tempuh ke sekolah
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="jarak_tempuh" id="" class="form-control">
															<option>1-2 km</option>
															<option>3-4 km</option>
															<option>5-6 km</option>
															<option>>6 km </option>
														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Golongan
														darah
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="golongan_darah" id="" class="form-control">
															<option>a</option>
															<option>b</option>
															<option>ab</option>
															<option>o</option>
														</select>
													</div>
												</div>


												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Keadaan
														fisik
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="keadaan_fisik" id="" class="form-control">
															<option>non disabilitas</option>
															<option>disabilitas</option>
														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Penyakit
														yang pernah di derita
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" name="penyakit" value="" class="form-control"
															placeholder="penyakit yang pernah di derita">
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Penyakit
														yang sedang di derita
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" name="penyakit_diderita" value=""
															class="form-control" placeholder="penyakit yang di derita">
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Bakat/minat
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" name="bakat" value="" class="form-control"
															placeholder="bakat/minat">
													</div>
												</div>
                                                
                                                <!-- <div class="ln_solid"></div> -->
                                                <br>
                                            </div>
                                            <div class="col-md-6">

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Surat
														Al-Qur'an yang telah hafal
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" name="hafalan" value="" class="form-control"
															placeholder="hafalan">
													</div>
												</div>

                                                
                                                <div class="form-group">
                                                    <label
                                                        class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                        <input type="text" name="kewarganegaraan" value="" class="form-control"
                                                            placeholder="Kewarganegaraan">
                                                    </div>
                                                </div>
                                                
                                            <div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Kemampuan
														membaca Al-Qur'an
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" name="kemampuan_baca" value=""
															class="form-control" placeholder="isi kemampuan">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama
														ayah</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" name="nama_ayah" value=""
															class="form-control" placeholder="nama ayah">
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor
														HP orang tua</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" name="no_hp_ortu" value="" class="form-control"
															placeholder="nomor hp">
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Agama
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="agama" id="" class="form-control">
															<option>Islam</option>
															<option>Kristen</option>
															<option>Hindu</option>
															<option>Budha</option>
														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Status
														Perkawinan
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="status_perkawinan" id="" class="form-control">
															<option>Menikah</option>
															<option>Cerai</option>
															<option>Cerai mati</option>
														</select>
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat
														orang tua</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" name="alamat_orang_tua" value="" required
															class="form-control" placeholder="Alamat orang tua">
													</div>
												</div>

												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Status
														rumah tinggal
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="status_rumah" id="" class="form-control">
															<option>Kontrakan</option>
															<option>Rumah sendiri</option>
														</select>
													</div>
												</div>

												<div class="form-group">
													<label
														class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan_ayah
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="pendidikan_ayah" id="" class="form-control">
															<option>SD</option>
															<option>SMP</option>
															<option>SMA</option>
															<option>S1</option>
															<option>S2</option>
															<option>S3</option>
														</select>
													</div>
												</div>

												<div class="form-group">
													<label
														class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan_ayah
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="pekerjaan_ayah" id="" class="form-control">
															<option>Tni/Polri</option>
															<option>Pedagang</option>
															<option>Guru</option>
															<option>Wiraswasta</option>
														</select>
													</div>
												</div>

                                                <div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Penghasilan ayah
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="penghasilan_ayah" id="" class="form-control">
															<option>Rp. 500.000.00 perbulan</option>
															<option>Rp. 1000.000.00 perbulan</option>
															<option>Rp. 2000.000.00 perbulan</option>
															<option>Rp. 5000.000.00 perbulan</option>
														</select>
													</div>
												</div>


												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama ibu
														kandung</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" name="nama_ibu" value="" class="form-control"
															placeholder="nama ibu kandung">
													</div>
												</div>

												<div class="form-group">
													<label
														class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan_ibu
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="pendidikan_ibu" id="" class="form-control">
															<option>SD</option>
															<option>SMP</option>
															<option>SMA</option>
															<option>S1</option>
															<option>S2</option>
															<option>S3</option>

														</select>
													</div>
												</div>

												<div class="form-group">
													<label
														class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan_ibu
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="pekerjaan_ibu" id="" class="form-control">
															<option>Pedagang</option>
															<option>Guru</option>
															<option>Wiraswasta</option>
															<option>Urus rumah tangga</option>
														</select>
													</div>
												</div>


												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Penghasilan ibu
													</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select name="penghasilan_ibu" id="" class="form-control">
															<option>Rp. 500.000.00 perbulan</option>
															<option>Rp. 1000.000.00 perbulan</option>
															<option>Rp. 2000.000.00 perbulan</option>
															<option>Rp. 5000.000.00 perbulan</option>
														</select>
													</div>
												</div>

											</div>
											<div class="ln_solid"></div>
											<div class="form-group">
												<div class="col-md-12 col-sm-12 col-xs-12 text-center">
													<button type="button" class="btn btn-success simpan"><i
															class="fa fa-save"></i>
														Simpan</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- modal konfirmasi -->
				<div class="modal fade" id="konfirmasi_daftar" tabindex="-1" role="dialog"
					aria-labelledby="modelTitleId" aria-hidden="true">
					<div class="modal-dialog modal-sm" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Konfirmasi Simpan<button type="button" class="close"
										data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button></h5>

							</div>
							<div class="modal-body">
								Yakin Akan akan menyimpan data ?
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
								<button type="button" class="btn btn-primary konfirmasi">Ya</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /page content -->

				<!-- footer content -->
				<footer>
					<div class="pull-right">
						E-Voting <a href=""></a>
					</div>
					<div class="clearfix"></div>
				</footer>
				<!-- /footer content -->
			</div>
		</div>

		<!-- jQuery -->
		<script src="<?=base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="<?=base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="<?=base_url();?>assets/vendors/fastclick/lib/fastclick.js"></script>
		<!-- NProgress -->
		<script src="<?=base_url();?>assets/vendors/nprogress/nprogress.js"></script>
		<!-- iCheck -->
		<script src="<?=base_url();?>assets/vendors/iCheck/icheck.min.js"></script>
		<!-- moment.js -->
		<script src="<?=base_url();?>assets/vendors/moment/min/moment.min.js"></script>
		  <!-- Datatables -->
		  <script src="<?= base_url();?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?= base_url();?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
		<!-- bootstrap-datetimepicker -->
		<script src="<?=base_url();?>assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js">
		</script>
		<!-- Custom Theme Scripts -->
		<script src="<?=base_url();?>assets/build/js/custom.min.js"></script>

		<script>
			
    $('#myDatepicker2').datetimepicker({
        format: 'DD-MM-YYYY'
    });
    
</script>

		<script>
			$('#tgl_selesai').datetimepicker({
				format: 'DD-MM-YYYY'
			});

			function loadFile(event) {
				var reader = new FileReader();
				reader.onload = function () {
					var output = document.getElementById('output');
					output.src = reader.result;
				};
				console.log(reader);
				reader.readAsDataURL(event.target.files[0]);
			};
			$('.simpan').click(function (e) {
				$('#konfirmasi_daftar').modal('show');
			});
			$('.konfirmasi').click(function (e) {
				$('#save_data_diri').submit();
			});

			// pesan berwatu datatabel
			$('#table').DataTable()
			window.setTimeout(function(){
			$("#pesan").fadeTo(1000,0).slideUp(500,function () { 
			$(this).remove();
			});
			}, 2000);
			// tutup pesan

		</script>

</body>

</html>
