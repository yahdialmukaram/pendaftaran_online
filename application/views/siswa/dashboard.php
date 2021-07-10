

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
			
			
			<?php
			$t    =time();
			// echo($t . "<br /> Sekarang: ");
			echo (date("D, d F Y",$t));
			?>
			<br /><br />
		


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
		<!-- <h5 style="text-align: center;">Nisn <?= $this->session->userdata('username');?>: <?= $data_nik['nik']?></h5> -->
		<!-- <h5 style="text-align: center;">  </h5> -->
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
				  <a href="<?=base_url('c_siswa/v_sdit1');?>">Klik di sini </a>
                  </h5>
                </div>
              </div>
 
              <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div style="text-align: center;" class="count"><i class="fa fa-user"></i></div>
                  <h5 style="text-align: center;">SDIT Qurrata A'yun 2 Lintau</i>
                  </h5>
                </div>
              </div>
  
 
              <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div style="text-align: center;" class="count"><i class="fa fa-user"></i></div>
                  <h5 style="text-align: center;">SDIT Qurrata A'yun 3 Batusangkar</i>
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

<script>

	function persaratan(){
	$("#persaratan").modal("show")
	}

</script>



    



    
          </div>
        </div>
        <!-- /page content -->
