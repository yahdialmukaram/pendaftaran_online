
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url();?>assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
		  <div class="alert alert-warning alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-ban"></i> Peringatan</h4>
				Peringatan dalam pengisian data. Isilah data sesui dengan yang ada pada lapor calon siswa. Semua data pada
				kolom di bawah wajib di isi, jika tidak ada cukup di isi dengan " - ".
								</div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulir Data Siswa</h1>
          </div>
  
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
   
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">IDENTITAS SISWA</h3>
              </div>
              <!-- /.card-body -->
			  <form class="form-horizontal">
                <div class="card-body">
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal Mendaftar</label>
                    <div class="col-sm-8">
                      <input type disabled="text" class="form-control" id="inputEmail3" placeholder="">
                    </div>
                  </div>
                              <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Nik</label>
                                <div class="col-sm-8">
                                  <input type ="text" class="form-control" id="inputEmail3" placeholder="" required>
                                  <small>  <font color="red">nik wajib isi</font></small>    
                                </div>
                              </div>
    
				  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Siswa</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama_siswa" placeholder="input nama siswa" required>
                      <small>  <font color="red">nama siswa wajib isi</font></small>    
                    </div>
                  </div>

				  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
					<select name="jenis_kalmin" class="form-control">
										<option value="0">--pilih--</option>
                    <option value="L">Laki Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                  <small>  <font color="red">jenis kalamin wajib isi</font></small>    
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tempat/Tgl Lahir</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="tempat_lahir" placeholder="tempat lahir"required>
                      <small>  <font color="red">tempat dan tanggal lahir wajib isi</font></small>    
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input"required data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Asal Sekolah</label>
                    <div class="col-sm-8">
                    <textarea class="form-control" name="asal_sekolah" id="" cols="30"
                            rows="2"required></textarea>
                            <small>  <font color="red">asal sekolah wajib isi</font></small>    
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                    <textarea class="form-control" name="alamat" id="" cols="30"
                            rows="2"required></textarea>
                            <small>  <font color="red">alamat sekolah wajib isi</font></small>    
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Telp/No.Hp</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="telepon" placeholder="no telepon"required>
                      <small>  <font color="red">no telepon wajib isi</font></small>    
                    </div>
                  </div>
				 
				  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="email" placeholder="input email"required>
                      <small>  <font color="red">email wajib isi</font></small>    
                    </div>
                  </div>
				  
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                     
                    </div>
                  </div>
                </div>
             </div>
          </div>
          <!-- right column -->
          <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">IDENTITAS ORANG TUA/WALI</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-10">
                      <!-- text input -->
                      <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Ayah</label>
                    <div class="col-sm-8">
                      <input type ="text" class="form-control" id="nama_ayah" placeholder="input nama ayah"required>
                      <small>  <font color="red">nama ayah wajib isi</font></small>    
                    </div>
                  </div>
                      <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
                    <div class="col-sm-8">
                      <input type ="text" class="form-control" id="pekerjaan_ayah" placeholder="input pekerjaan ayah"required>
                      <small>  <font color="red">pekerjaan ayah wajib isi</font></small>    
                    </div>
                  </div>
                      <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Ibu</label>
                    <div class="col-sm-8">
                      <input type ="text" class="form-control" id="nama_ibu" placeholder="input nama ibu"required>
                      <small>  <font color="red">nama ibu wajib isi</font></small>    
                    </div>
                  </div>
                      <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Pekerjaan Ibu</label>
                    <div class="col-sm-8">
                      <input type ="text" class="form-control" id="pekerjaan_ibu" placeholder="input pekerjaan ibu"required>
                      <small>  <font color="red">pekerjaan ibu wajib isi</font></small>    
                    </div>
                  </div>
                      <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat Orang Tua</label>
                    <div class="col-sm-8">
                    <textarea class="form-control" name="alamat_orang_tua" id="" cols="30"
                            rows="2"required></textarea>
                            <small>  <font color="red">alamat orang tua wajib isi</font></small>    
                    </div>
                  </div>
                      <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">No.Telp.Ortu</label>
                    <div class="col-sm-8">
                      <input type ="text" class="form-control" id="telepon_orang_tua" placeholder="input telepon ortu"required>
                      <small>  <font color="red">telepon ortu wajib isi</font></small>    
                    </div>
                  </div>
                  </div>
                  </div>
           <hr>
                  <div class="card-footer">
                  <button type="submit" class="btn btn-info fa fa-save"> Save</button>
                  <!-- <button type="rised" class="btn btn-warning fa fa-car">Exit</button> -->
                </div>
                </form>
              </div>
            </div>
           </div>
         </div>
        </div><!-- /.container-fluid -->
    </section>
    </div>
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper --
  <-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019-2020 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url();?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url();?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url();?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=base_url();?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=base_url();?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url();?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url();?>assets/plugins/moment/moment.min.js"></script>
<script src="<?=base_url();?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url();?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url();?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url();?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url();?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>assets/dist/js/demo.js"></script>
</body>
</html>
