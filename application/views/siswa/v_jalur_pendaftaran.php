<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="alert alert-warning alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4 style="text-align: center;"><b> PILIH JALUR PENDAFTARAN</h4></b>
			<h4 style="text-align: center;"><small><b>Silahkan pilih jalur pendaftaran dibawah ini sesuai syarat dan ketentuan dengan
				meng klik link di bawah yang telah di tentukan</b></small></h4>
		</div>
		<br>
		<div class="col-md-12">
			<div class="row">
			<div class="col-md-4">
		    </div>
			<div class="col-md-4">
			
			
			<?php
			$t    =time();
			// echo($t . "<br /> Sekarang: ");
			echo (date("D, d F Y",$t));
			?>
			<br /><br />
		
			<?php if ($state_register==true):?>
			<div class="alert alert-success" role="alert">
				Pendaftaran tutup dalam <b><?=$time_remaining?></b> hari lagi, sampai tanggal <?=$date_close['day']?>/<?=$date_close['month']?>/<?=$date_close['year']?>
			</div>
			<?php elseif ($state_register==false):?>
				<div class="alert alert-danger" role="alert">
				Maaf pendaftaran sudah tutup pada tanggal<?=$date_close['day']?>/<?=$date_close['month']?>/<?=$date_close['year']?>
			</div>
			<?php endif; ?>

			<!-- verifikasi kelulusan -->
				<?php if ($status_daftar==1):?>
				<div class="alert alert-success text-center" role="alert">
					<!-- <strong>Selamat Anda Lulus</strong> -->
					<strong>Selamat Anda Lulus <?= $this->session->userdata('username');
					?>, Silahkan datang ke Sekolah yang Anda Daftar, Untuk Persyaratan klik link dibawa ini <a href="#" onclick="persaratan()"> <br>klik disini</a>  </strong>
				</div>
				<?php elseif ($status_daftar==0):?>
				<div class="alert alert-warning text-center" role="alert">
					<strong>Pendaftaran Anda Masih dalam Proses</strong>
				</div>
				<?php else: ?>
				<div class="alert alert-danger text-center" role="alert">
					<strong>Maaf Pendaftaran Anda Gagal</strong>
				</div>
				<?php endif; ?> 

			</div>
		  </div>
		</div>
		
		<?php if ($this->session->flashdata('success')):?>
		<div id="pesan" class="alert alert-success" role="alert">
			<strong><?=$this->session->flashdata('success');
						?></strong>
		</div>
		<?php endif;?>
		<!-- aler hapus data -->
		<?php if ($this->session->flashdata('error')):?>
		<div id="pesan" class="alert alert-danger" role="alert">
			<strong><?=$this->session->flashdata('error');
						?></strong>
		</div>
		<?php endif; ?>
	</div>
	<!-- /.content-header -->
	<div class="col-md-12 col-sm-12 col-xs-12">
		<h1 style="text-align: center;"> <img style="border-radius: 200px;" src="<?=base_url();?>images/admin.png"></h1>
		<h5 style="text-align: center;">Nisn <?= $this->session->userdata('username');?>: <?= $data_nisn['nisn']?></h5>
		<!-- <h5 style="text-align: center;">  </h5> -->
		<br>
	</div>
	<h5 style="text-align: center;">Pilih Jalur Pendaftar Calon Siswa </h5>
	
	
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-lg-4 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3 style="text-align: center;"><i class="fa fa-user"></i></h3>
							<!-- <p>New Orders</p> -->
						</div>
						<div class="icon">
							<i class="ion ion-bag"></i>
						</div>
						<a href="<?= base_url();?>c_siswa/v_jalur_reguler" class="small-box-footer">Jalur Reguler <i
								class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-4 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3 style="text-align: center;"><i class="fa fa-user"></i></h3>


							<!-- <p>Bounce Rate</p> -->
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="<?=base_url();?>c_siswa/v_jalur_prestasi" class="small-box-footer">Jalur Prestasi <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-4 col-6">
					<!-- small box -->
					<div class="small-box bg-secondary">
						<div class="inner">
							<h3 style="text-align: center;"><i class="fa fa-user"></i></h3>


							<!-- <p>User Registrations</p> -->
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
						<a href="<?=base_url();?>c_siswa/v_jalur_pindahan" class="small-box-footer">Jalur Pindahan <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<!-- <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div> -->

				</div>
				<!-- ./col -->
			</div>

			<!-- /.row -->
			<!-- Main row -->
			<!-- data grafik -->

	</section>
	<!-- /.content -->
</div>



<!-- Modal -->
<div class="modal fade" id="persaratan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Persyaratan Pendaftaran Ulang</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body">
				<tr>
					<td>1. Foto copy Raport semester akhir</td>
					<hr>
					<td>2. Foto copy ijazah</td>
					<hr>
					<td>3. Foto copy SKHU</td>
					<hr>
					<td>4. Photo 3x4 3 buah</td>
					<hr>
					<td>5. Foto & print bukti kelulusan anda</td>
					
				</tr>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script>

	function persaratan(){
	$("#persaratan").modal("show")
	}

</script>