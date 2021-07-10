
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
      
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>Details Diri Calon Siswa</b></h2>
             
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                 
                    <form action="<?=base_url();?><?=$details['id_siswa']?>" method="post" data-parsley-validate class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Nik
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type disabled="text" name="nik" value="<?=$details['nik']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                        </div>
					  </div>

                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Nama
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="nama" value="<?=$details['nama']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Alamat
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="alamat" value="<?=$details['alamat']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Tempat Lahir
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="tempat_lahir" value="<?=$details['tempat_lahir']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Tanggal Lahir
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="tanggal_lahir" value="<?=$details['tanggal_lahir']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Jenis Kelamin
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="jenis_kelamin" value="<?=$details['jenis_kelamin']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Anak Ke-
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="anak_ke" value="<?=$details['anak_ke']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Jumlah Keluarga
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="jumlah_keluarga" value="<?=$details['jumlah_keluarga']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Bahasa dirumah
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="bahasa_dirumah" value="<?=$details['bahasa_dirumah']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Jarak Tempuh
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="jarak_tempuh" value="<?=$details['jarak_tempuh']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Golongan Darah
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="golongan_darah" value="<?=$details['golongan_darah']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Keadaan Fisik
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="keadaan_fisik" value="<?=$details['keadaan_fisik']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Penyakit
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="penyakit" value="<?=$details['penyakit']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Penyakit diderita
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="penyakit_diderita" value="<?=$details['penyakit_diderita']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Minat/Bakat
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="bakat" value="<?=$details['bakat']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Hafalan
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="hafalan" value="<?=$details['hafalan']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Kemampuan Baca Al-Quran
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="kemampuan_baca" value="<?=$details['kemampuan_baca']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Kewarganegaraan
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="kewarganegaraan" value="<?=$details['kewarganegaraan']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                      <div class="ln_solid"></div>
                
                <br>
                      <h2><b>Data Diri Orang Tua Siswa</b></h2>
                      <!-- <label class="control-label col-md-5 col-sm-3 col-xs-12" for="first-name">Nama Ayah -->
                      <hr>
                      <br>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Nama Ayah
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="nama_ayah" value="<?=$details['nama_ayah']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">No Hp Orang Tua
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="no_hp_ortu" value="<?=$details['no_hp_ortu']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Agama
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="agama" value="<?=$details['agama']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Status Perkawinan
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="status_perkawinan" value="<?=$details['status_perkawinan']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Alamat Orang Tua
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="alamat_orang_tua" value="<?=$details['alamat_orang_tua']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
				
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Status Rumah
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="status_rumah" value="<?=$details['status_rumah']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Pendidikan Ayah
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="pendidikan_ayah" value="<?=$details['pendidikan_ayah']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Pekerjaan Ayah
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="pekerjaan_ayah" value="<?=$details['pekerjaan_ayah']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Penghasilan Ayah
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="penghasilan_ayah" value="<?=$details['penghasilan_ayah']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Nama Ibu
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="nama_ibu" value="<?=$details['nama_ibu']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Pendidikan Ibu
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="pendidikan_ibu" value="<?=$details['pendidikan_ibu']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Pekerjaan Ibu
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="pekerjaan_ibu" value="<?=$details['pekerjaan_ibu']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Penghasilan Ibu
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type disabled="text" name="penghasilan_ibu" value="<?=$details['penghasilan_ibu']?>" id="first-name"  class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
				
                  

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="<?=base_url();?>controller/v_data_siswa"class=" btn btn-primary fa fa-reply" > Beck</a>
                        
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>    
          </div>
        </div>
        <!-- /page content -->

    