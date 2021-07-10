<!-- page content -->
<div class="right_col" role="main">
	<div class="">

		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h3> Jadwal Ujian SDIT Qurrata A'yun</h3>
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

						<div class="clearfix"></div>
					</div>

					<div class="x_content">

						<div class="card-header">
							<!-- <h3 class="card-title"> Data Jadwal</h3> -->
						</div>
						<form id="save_data_diri" enctype="multipart/form-data" class="form-horizontal form-label-right"
							method="POST" action="<?=base_url('controller/save_jadwal');?>">

							<div class='col-md-4'>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Jadwal Mulai</label>
									<div class='input-group date' id='tanggal_awal'>
										<input type='text' name="jadwal_awal" class="form-control" required />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
								</div>
							</div>

							<div class='col-md-4'>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Jadwal Selesai</label>
									<div class='input-group date' id='tanggal_akhir'>
										<input type='text' name="jadwal_akhir" class="form-control" required />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
								</div>
							</div>

							<div class='col-md-4'>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">Kouta</label>
									<div class='input-group date'>
										<input type='number' name="kouta" class="form-control" required />

									</div>
								</div>
							</div>
							<!-- <div class="ln_solid"></div> -->
							<br>
					</div>





				</div>
				<div class="ln_solid"></div>
				<div class="form-group">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<button type="submit" class="btn btn-success simpan"><i class="fa fa-save"></i>
							Save</button>
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
