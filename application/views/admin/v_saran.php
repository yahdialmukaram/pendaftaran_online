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
						<h2>Data Kritik $ Saran</h2>
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
									<th>Nama Siswa</th>
									<th>Email</th>
									<th>Subject</th>
									<th>Message</th>
									<th>Opsi</th>
									</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; 
                       			 foreach ($saran as $key => $value):?>
								<tr>
                                    <td><?=$no++?></td>
                                    <td><?=$value['nama']?></td>
                                    <td><?=$value['email']?></td>
                                    <td><?=$value['subject']?></td>
                                    <td><?=$value['message']?></td>
									<td>
                                        
										<a href="#" onclick="delete_saran(<?=$value['id_saran']?>)" class="btn btn-danger btn-xs"><i class="fa fa-trash">
											Delete Saran </i></a>
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

   <!-- modal konfirmasi hapus data -->
   <div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<form action="<?=base_url();?>controller/delete_saran" method="post">
			<div class="modal-header">
				<h5 class="modal-title">Konfirmasi Hapus</h5>
					
			</div>
			<div class="modal-body">Yakin Akan Hapus Saran ?
				<input type="hidden" name="id" id="id">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
				<button type="submit" class="btn btn-primary">Ya</button>
			</div></form>
		</div>
	</div>
</div>
<script>
function delete_saran(id){
  $("#id").val(id);
  $("#konfirmasi").modal("show");
}
</script>