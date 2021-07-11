<!-- page content -->
<div class="right_col" role="main">
	<div class="">

		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h3>SDIT Qurrata A'yun</h3>

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



						<div class="card-header">
							<h3 class="card-title"> Data Calon Siswa SDIT Qurrata A'yun</h3>
						</div>
						<form id="save_data_diri" enctype="multipart/form-data" class="form-horizontal form-label-right"
							method="POST" action="<?=base_url('c_siswa/save_pendaftaran');?>">
							<div class="col-md-6">

								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Siswa</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="nama" value="<?=$profil_siswa['nama']?>"
											class="form-control" placeholder="">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Nik</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="nik" value="<?=$profil_siswa['nik']?>"
											class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Domisili</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="alamat" value="<?=$profil_siswa['alamat']?>"
											class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="tanggal_lahir"
											value="<?=$profil_siswa['tanggal_lahir']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="jenis_kelamin"
											value="<?=$profil_siswa['jenis_kelamin']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Gol Darah</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="golongan_darah"
											value="<?=$profil_siswa['golongan_darah']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Hafalan</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="hafalan" value="<?=$profil_siswa['hafalan']?>"
											class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="kewarganegaraan"
											value="<?=$profil_siswa['kewarganegaraan']?>" class="form-control"
											placeholder="">
									</div>
								</div>


								<!-- <div class="ln_solid"></div> -->
								<br>
							</div>

							<div class="col-md-6">

								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Ayah
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="nama_ayah"
											value="<?=$profil_siswa['nama_ayah']?>" class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">No Hp Orang Tua
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="no_hp_ortu"
											value="<?=$profil_siswa['no_hp_ortu']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Agama
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="agama" value="<?=$profil_siswa['agama']?>"
											class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Status Perkawinan
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="status_perkawinan"
											value="<?=$profil_siswa['status_perkawinan']?>" class="form-control"
											placeholder="">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Upload Akte
										Kelahiran</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="file" name="akta_kelahiran" value="" class="form-control"
											placeholder="">
										<small>
											<font color="red">Akta kelahiran wajib upload, upload berupa file PDF
											</font>
										</small>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Upload SK Domisili</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="file" name="sk_domisili" value="" class="form-control"
											placeholder="">
										<small>
											<font color="red">SK domisi wajib upload, upload berupa file PDF</font>
										</small>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Sekolah Tujuan</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<select name="nama_sekolah" class='form-control' id=''>
											<!-- <option value='0'>--pilih--</option> -->
											<option>SDIT Qurrata A'yun Batusangkar</option>
											</select>
									</div>
								</div>

							</div>
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-12 col-sm-12 col-xs-12 text-center">
									<button type="submit" class="btn btn-success simpan"><i class="fa fa-save"></i>
										Daftar</button>
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
<!-- /page content -->
