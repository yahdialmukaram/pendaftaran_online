<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_right">
				<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

				</div>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Data Nilai</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
							<li><a class="close-link"><i class="fa fa-close"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>

					<div class="x_content">

						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th style="width: 1%;">No</th>
									<th>No Registrasi</th>
									<th>Nama Siswa</th>
									<th>Tes Qiroah</th>
									<th>Wawancara Ortu</th>
									<th>Paquyuban</th>
									<th>Nilai Akhir</th>
									<th>Rangking</th>
									<th>Status</th>
									</th>

								</tr>
							</thead>
							<tbody>

								<?= $no =1 ;$peringkat=3;
                        foreach ($nilai as $key => $value):?>

								<tr>
									<?php $newNumber=$no++ ?>
									<td><?= $newNumber?></td>
									<td><?= $value['no_registrasi']?></td>
									<td><?= $value['nama']?></td>
									<td><?= $value['qiroah']?></td>
									<td><?= $value['wawancara_ortu']?></td>
									<td><?= $value['paquyuban']?></td>
									<td><?= $value['nilai_akhir']?></td>
									<td> <?php if ($newNumber<=$peringkat):?>
										<label for="" class="label label-danger">Peringkat <?=$newNumber?>
										</label>
										<?php endif; ?>
									</td>
									<td>
                    <?php if ($peringkat>=$newNumber):?>
                    <label for="" class="label label-success">Lulus</label>
                    <?php elseif ($peringkat<=$newNumber) :?>
                    <label for="" class="label label-danger">tidak Lulus</label>
                    <?php endif;?>
                    <a href="#" class="label label-primary">Send SMS</a>
                  </td>
								</tr>
							</tbody>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


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
							<input type="text" name="username" class="form-control" required placeholder="masukan username">
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
							<input type="password" name="password" class="form-control" required placeholder="masukan password">
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
