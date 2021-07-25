

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
        

 
            <!-- isi konten -->

            <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="alert alert-warning alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<marquee><h5> -- Selamat datang di SDIT Qurrata A'yun Kabupaten Tanah Datar --  </h5></marquee>
			
			<h4 style="text-align: center;"><b> PILIH SEKOLAH TUJUAN</h4></b>
			<h5 style="text-align: center;"><b>Silahkan pilih sekolah dibawah ini sesuai syarat dan ketentuan dengan
				meng klik link di bawah yang telah di tentukan</b></h5>
		</div>
		<br>
		<div class="col-md-12">
			<div class="row">
			<div class="col-md-4">
		    </div>
			<div class="col-md-4">

			<!-- alert  -->
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
			<!-- end alert -->

			<?php
			$t =time();
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
			<div class="alert alert-success text-center" role="alert">
				<strong>Peringkat</strong>
				<h5>Peringkat Anda : 
					<?php if ($peringkat['peringkat']==null) {
						echo"Peringkat Belum Ada";
					} else {
						echo $peringkat['peringkat'];
					} ?>
					</h5>
			</div>

		
								
		
	
			</div>
		  </div>
		</div>
		
	</div>
	<!-- /.content-header -->
	<div class="col-md-12 col-sm-12 col-xs-12">
		<h1 style="text-align: center;"> <img style="border-radius: 200px;" src="<?=base_url();?>images/admin.png"></h1>
	
		<h5 style="text-align: center;">Nik <?= $this->session->userdata('username');?>: <?= $find_nik['nik']?></h5>

		<br>
	</div>
	<h5 style="text-align: center;">Pilih Sekolah Tujuan </h5>
	
	
              
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
	
			<!-- Main content -->
              <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div style="text-align: center;" class="count"><i class="fa fa-user"></i></div>
                  <h5 style="text-align: center;">SDIT Qurrata A'yun</i>
				  <br>
				  <br>
				  <?php if ($status_daftar==false):?>
				  <a href="<?=base_url('c_siswa/v_sdit1');?>" class="btn btn-success btn-sm sembunyi">Klik di sini </a>
				  <?php endif; ?>
                  </h5>
                </div>
              </div>
 
              <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div style="text-align: center;" class="count"><i class="fa fa-user"></i></div>
                  <h5 style="text-align: center;">SDIT Qurrata A'yun 2 Lintau</i>
				  <br>
				  <br>  
				  <?php if ($status_daftar==false):?>
				  <a href="<?=base_url('c_siswa/v_sdit2');?>" class="btn btn-success btn-sm sembunyi">Klik di sini </a>
				  <?php endif; ?>
                  </h5>
                </div>
              </div>
  
 
              <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div style="text-align: center;" class="count"><i class="fa fa-user"></i></div>
                  <h5 style="text-align: center;">SDIT Qurrata A'yun 3 Batusangkar</i>
				  <br>
				  <br> 
				  <?php if ($status_daftar==false):?>
				  <a href="<?=base_url('c_siswa/v_sdit3');?>" class="btn btn-success btn-sm sembunyi">Klik di sini </a>
				  <?php endif; ?>
                  </h5>
                </div>
              </div>

				<!-- ./col -->
				<div class="col-lg-3 col-6">
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


<!-- 	
	</div>
        </div> -->
        <!-- /page content -->
