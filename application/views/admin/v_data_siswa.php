<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_right">
				<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

				</div>
			</div>
		</div>

		<div class="clearfix"></div>

		<!-- alert simpan data -->
		<?php if ($this->session->flashdata('success')):?>
		<div id="pesan" class="alert alert-success" role="alert">
			<strong><?=$this->session->flashdata('success');?></strong>
		</div>
		<?php endif;?>
		<!-- aler hapus data -->
		<?php if ($this->session->flashdata('error')):?>
		<div id="pesan" class="alert alert-danger" role="alert">
			<strong><?=$this->session->flashdata('error');?></strong>
		</div>
		<?php endif; ?>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Data Calon Siswa</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>

							<li><a class="close-link"><i class="fa fa-close"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>

					<a href="<?=base_url();?>cetak/print_data_siswa" target="_blank"
						class="btn btn-warning btn-sm fa fa-print"> Print Data Siswa</a>
					<div class="x_content">

						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th style="width: 1%;">No</th>
									<th>No Registrasi</th>
									<th>Nik</th>
									<th>Nama Siswa</th>
									<th>Alamat Lengkap</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th>Jenis Kelamin</th>
									<th>Opsi</th>
									</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; 
                       			 foreach ($siswa as $key => $value):?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$value['no_registrasi'];?></td>
									<td><?=$value['nik'];?></td>
									<td><?=$value['nama'];?></td>
									<td><?=$value['alamat'];?></td>
									<td><?=$value['tempat_lahir'];?></td>
									<td><?=$value['tanggal_lahir'];?></td>
									<td><?=$value['jenis_kelamin'];?></td>
									<td>
										<a href="#" class="btn btn-primary btn-sm beri-nilai"
											data-name="<?=$value['nama']?>" data-pendaftaran="<?=$value['no_registrasi']?>"> <i class="fa fa-plus"></i>
											Entri Nilai Siswa</a>

										<a href="<?php echo base_url(); ?>controller/v_details_siswa/<?=$value['id_siswa'];?>"
											class="btn btn-success btn-sm"> <i class="fa fa-search-plus"></i>
											Details Siswa</a>
									</td>
								</tr>
								<?php endforeach; ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


<!-- Modal  nilai-->
<div class="modal fade" id="data_nilai" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog modal-lg " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <h5 style="text-align: center;" class="modal-title">Data Nilai</h5> -->
				<h5 style="text-align: center;"><b>INPUT NILAI SISWA</b></h5>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form id="save_nilai" action="<?=base_url();?>controller/save_nilai" method="POST" enctype="multipart/form-data">
				<table id="nilai" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th style="width: 15%; text-align: center;">No Pendaftaran</th>
							<th style="width: 25%;text-align: center;">Nama Calon Siswa</th>
							<th style="width: 10%;text-align: center;">Tes Qiroah</th>
							<th style="width: 10%;text-align: center;">Wawancara Ortu</th>
							<th style="width: 10%;text-align: center;">Paquyuban</th>
							<th style="width: 10%;text-align: center;">Nilai Akhir</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type="text" name="" id="pendaftaran" value="" class="form-control pendaftaran">
							</td>
							<td>
								<input type="text" name="" id="name" value="" class="form-control name">
							</td>
							<td>
								<input type="number" name="qiroah" onchange="count()" id="qiroah" value="0"
									class="form-control">
							</td>
							<td>
								<input type="number" name="wawancara_ortu" onchange="count()" id="wawancara" value="0"
									class="form-control">
							</td>
							<td>
								<input type="number" name="paquyuban" onchange="count()" id="paquyuban" value="0"
									class="form-control">
							</td>
							<td>
								<input type="number" name="nilai_akhir" readonly id="nilaiakhir" value="0"
									class="form-control">
							</td>

						</tr>

					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary simpan">Save</button>
			</div>
		</form>
		</div>
	</div>
</div>

<!-- modal konfirmasi -->
<div class="modal fade" id="konfirmasi_save" tabindex="-1" role="dialog"
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
<!-- end nilai -->
<script>
	$(".beri-nilai").click(function (e) {
		e.preventDefault();
		let name = $(this).data('name');
		let pendaftaran = $(this).data('pendaftaran');
		$("#pendaftaran").val(pendaftaran);
		$(".pendaftaran").attr('readonly', true);
		$("#name").val(name);
		$(".name").attr('readonly', true);
		$("#data_nilai").modal("show");
	});

	// penjumlahan menggunakan js
	function count() {
		let qiroah = $("#qiroah").val();
		let wawancara = $("#wawancara").val();
		let paquyuban = $("#paquyuban").val();
		let nilaiAkhir;
		nilaiAkhir = (parseInt(qiroah) + parseInt(wawancara) + parseInt(paquyuban)) / 3;
		$("#nilaiakhir").val(nilaiAkhir);

	}

	// sjquery save nilai 
	$('.simpan').click(function(e) {
		$('#konfirmasi_save').modal('show');
		
	});
	$('.konfirmasi').click(function(e) {
		$('#save_nilai').submit();
	});
	// end save nilai

</script>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
			</div>
			<div class="modal-body">

				<form action="<?=base_url();?>controller/add_admin" method="POST" enctype="multipart/form-data">

					<div class="form-group">
						<label class="control-label col-md-12 col-sm-3 col-xs-12">Username</label>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="text" name="username" class="form-control" required
								placeholder="masukan username">
							<small>
								<font color="red">username wajib isi</font>
							</small>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-12 col-sm-3 col-xs-12">Email</label>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="email" name="email" class="form-control" required placeholder="masukan email">
							<small>
								<font color="red">email wajib isi</font>
							</small>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-12 col-sm-3 col-xs-12">Password</label>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="password" name="password" class="form-control" required
								placeholder="masukan password">
							<small>
								<font color="red">password wajib isi</font>
							</small>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-12 col-sm-3 col-xs-12">Level
						</label>
						<div class="col-md-3 col-sm-9 col-xs-12">
							<select name="level" id="" class="form-control">
								<option>admin</option>
							</select>
						</div>
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

<!-- modal konfirmasi hapus data -->
<div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<form action="<?=base_url();?>controller/delete_admin" method="post">
				<div class="modal-header">
					<h5 class="modal-title">Konfirmasi Hapus</h5>

				</div>
				<div class="modal-body">Yakin Akan Hapus Data User ?
					<input type="hidden" name="id" id="id">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
					<button type="submit" class="btn btn-primary">Ya</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	function hapus_admin(id) {
		$("#id").val(id);
		$("#konfirmasi").modal("show");
	}

</script>
