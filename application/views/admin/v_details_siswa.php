<!-- page content -->
<div class="right_col" role="main">
	<div class="">

		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h3> Data Calon Siswa SDIT Qurrata A'yun </h3>

						<div class="clearfix"></div>
					</div>

					<!-- alert simpan data -->
					<?php if ($this->session->flashdata('success')):?>
					<div id="pesan" class="aler alert-success" role="alert">
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
							<h2 class="card-title"> <u></u></h2>
                            <br>
						</div>
						<form id="save_data_diri" enctype="multipart/form-data" class="form-horizontal form-label-right"
							method="POST" action="<?=base_url();?><?=$details['id_siswa']?>">
							<div class="col-md-6">

								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">No registrasi</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="no_registrasi" value="<?=$details['no_registrasi']?>"
											class="form-control" placeholder="">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Siswa</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="nama" value="<?=$details['nama']?>"
											class="form-control" placeholder="">
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Nik</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="nik" value="<?=$details['nik']?>"
											class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Domisili</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="alamat" value="<?=$details['alamat']?>"
											class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="alamat" value="<?=$details['alamat']?>"
											class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="tanggal_lahir"
											value="<?=$details['tanggal_lahir']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="jenis_kelamin"
											value="<?=$details['jenis_kelamin']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Anak ke</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="anak_ke"
											value="<?=$details['anak_ke']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Keluarga</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="jumlah_keluarga"
											value="<?=$details['jumlah_keluarga']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Bahasa dirumah</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="bahasa_dirumah"
											value="<?=$details['bahasa_dirumah']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Jarak Tempuh</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="jarak_tempuh"
											value="<?=$details['jarak_tempuh']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Gol Darah</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="golongan_darah"
											value="<?=$details['golongan_darah']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Keadaan Fisik</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="keadaan_fisik"
											value="<?=$details['keadaan_fisik']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Penyakit</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="penyakit"
											value="<?=$details['penyakit']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Penyakit di derita</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="penyakit_diderita"
											value="<?=$details['penyakit_diderita']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Bakat</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="bakat"
											value="<?=$details['bakat']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Hafalan</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="hafalan" value="<?=$details['hafalan']?>"
											class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Kemampuan Membaca</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="kemampuan_baca" value="<?=$details['kemampuan_baca']?>"
											class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="kewarganegaraan"
											value="<?=$details['kewarganegaraan']?>" class="form-control"
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
											value="<?=$details['nama_ayah']?>" class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">No Hp Orang Tua
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="no_hp_ortu"
											value="<?=$details['no_hp_ortu']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Agama
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="agama" value="<?=$details['agama']?>"
											class="form-control" placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Status Perkawinan
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="status_perkawinan"
											value="<?=$details['status_perkawinan']?>" class="form-control"
											placeholder="">
									</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Ortu
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="alamat_orang_tua"
											value="<?=$details['alamat_orang_tua']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Status Rumah
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="status_rumah"
											value="<?=$details['status_rumah']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Ayah
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="pendidikan_ayah"
											value="<?=$details['pendidikan_ayah']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan Ayah
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="pekerjaan_ayah"
											value="<?=$details['pekerjaan_ayah']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Penghasilan Ayah
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="penghasilan_ayah"
											value="<?=$details['penghasilan_ayah']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Ibu
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="nama_ibu"
											value="<?=$details['nama_ibu']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Penedidikan ibu
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="pendidikan_ibu"
											value="<?=$details['pendidikan_ibu']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan Ibu
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="pekerjaan_ibu"
											value="<?=$details['pekerjaan_ibu']?>" class="form-control"
											placeholder="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">penhasilan Ibu
									</label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type disabled="text" name="penghasilan_ibu"
											value="<?=$details['penghasilan_ibu']?>" class="form-control"
                                        placeholder="">
									</div>
								</div>
                                <hr>
                                <div class="form-group">
								<div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <a href="<?=base_url('controller/v_data_siswa');?>" class="btn btn-primary btn-sm"> << Previous</a>
									
								</div>
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
