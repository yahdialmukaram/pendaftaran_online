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

                    <a href="<?=base_url();?>cetak/print_data_siswa" target="_blank" class="btn btn-warning btn-sm fa fa-print"> Print Data Siswa</a>
                    <div class="x_content">

                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr style="background-color: rgb(27, 27, 27);">
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
                                    <td>
                                        <?=$no++?>
                                    </td>
                                    <td>
                                        <?=$value['no_registrasi'];?>
                                    </td>
                                    <td>
                                        <?=$value['nik'];?>
                                    </td>
                                    <td>
                                        <?=$value['nama'];?>
                                    </td>
                                    <td>
                                        <?=$value['alamat'];?>
                                    </td>
                                    <td>
                                        <?=$value['tempat_lahir'];?>
                                    </td>
                                    <td>
                                        <?=$value['tanggal_lahir'];?>
                                    </td>
                                    <td>
                                        <?=$value['jenis_kelamin'];?>
                                    </td>
                                    <td>
                                        <!-- <a href="<?php echo base_url(); ?>controller/v_details_siswa/<?=$value['id_siswa'];?>" class="btn btn-success btn-xs"> <i class="fa fa-search-plus"></i> Details Siswa
                                        </a> -->
                                        <a href="#" onclick="ditails_profil(<?=$value['id_siswa']?>);" class="btn btn-primary btn-sm fa fa-search-plus"> Ditails Data Siswa</a>

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

<div class="modal fade" id="ditails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 style="text-align: center;"><b>Ditails Data Siswa</b></h4>
            </div>
            <div class="modal-body" id="modal_ditails">

                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No registrasi</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="no_registrasi" value="" id="no_registrasi" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nik</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="nik" value="" id="nik" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Siswa</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="nama" value="" id="nama" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Lengkap</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="alamat" value="" id="alamat" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tempat Lahir</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="tempat_lahir" value="" id="tempat_lahir" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="tanggal_lahir" value="" id="tanggal_lahir" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="jenis_kelamin" value="" id="jenis_kelamin" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Anak Ke</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="anak_ke" value="" id="anak_ke" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Keluarga</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="jumlah_keluarga" value="" id="jumlah_keluarga" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bahas di Rumah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="bahasa_dirumah" value="" id="bahasa_dirumah" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jarak Tempuh</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="jarak_tempuh" value="" id="jarak_tempuh" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gol Darah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="golongan_darah" value="" id="golongan_darah" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Keadaan Fisik</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="keadaan_fisik" value="" id="keadaan_fisik" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Penyakit</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="penyakit" value="" id="penyakit" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Penyakit diderita</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="penyakit_diderita" value="" id="penyakit_diderita" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bakat</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="bakat" value="" id="bakat" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Hafalan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="hafalan" value="" id="hafalan" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kemampuan Baca</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="kemampuan_baca" value="" id="kemampuan_baca" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kewarganegaraan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="kewarganegaraan" value="" id="kewarganegaraan" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Ayah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="nama_ayah" value="" id="nama_ayah" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">No HP Ortu</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="no_hp_ortu" value="" id="no_hp_ortu" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="agama" value="" id="agama" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Perkawinan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="status_perkawinan" value="" id="status_perkawinan" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Orang Tua</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="alamat_orang_tua" value="" id="alamat_orang_tua" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Rumah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="status_rumah" value="" id="status_rumah" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Ayah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="pendidikan_ayah" value="" id="pendidikan_ayah" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pekerjaan Ayah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="pekerjaan_ayah" value="" id="pekerjaan_ayah" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Penghasilan Ayah</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type disabled="text" name="penghasilan_ayah" value="" id="penghasilan_ayah" class="form-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <hr>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>


<script>
    function ditails_profil(id) {
        $("#id").val(id);
        $.ajax({
            type: "POST",
            url: "<?=base_url();?>controller/show_profil",
            data: {
                id: id
            },
            dataType: "JSON",
            success: function(response) {
                console.log(response);
                $("#no_registrasi").val(response.no_registrasi);
                $("#nik").val(response.nik);
                $("#nama").val(response.nama);
                $("#alamat").val(response.alamat);
                $("#tempat_lahir").val(response.tempat_lahir);
                $("#tanggal_lahir").val(response.tanggal_lahir);
                $("#jenis_kelamin").val(response.jenis_kelamin);
                $("#anak_ke").val(response.anak_ke);
                $("#jumlah_keluarga").val(response.jumlah_keluarga);
                $("#bahasa_dirumah").val(response.bahasa_dirumah);
                $("#jarak_tempuh").val(response.jarak_tempuh);
                $("#golongan_darah").val(response.golongan_darah);
                $("#keadaan_fisik").val(response.keadaan_fisik);
                $("#penyakit").val(response.penyakit);
                $("#penyakit_diderita").val(response.penyakit_diderita);
                $("#bakat").val(response.bakat);
                $("#hafalan").val(response.hafalan);
                $("#kemampuan_baca").val(response.kemampuan_baca);
                $("#kewarganegaraan").val(response.kewarganegaraan);
                $("#nama_ayah").val(response.nama_ayah);
                $("#no_hp_ortu").val(response.no_hp_ortu);
                $("#agama").val(response.agama);
                $("#status_perkawinan").val(response.status_perkawinan);
                $("#alamat_orang_tua").val(response.alamat_orang_tua);
                $("#status_rumah").val(response.status_rumah);
                $("#pendidikan_ayah").val(response.pendidikan_ayah);
                $("#pekerjaan_ayah").val(response.pekerjaan_ayah);
                $("#penghasilan_ayah").val(response.penghasilan_ayah);

                $("#ditails").modal('show');


            }
        });
    }
</script>

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