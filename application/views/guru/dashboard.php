<!-- page content -->
<div class="right_col" role="main">
    <div class="">



        <!-- isi konten -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <!-- <div class="alert alert-warning alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<marquee><h5> -- Selamat datang di SDIT Qurrata A'yun Kabupaten Tanah Datar --  </h5></marquee>
			
			<h3 style="text-align: center;"><b> Admin <?=$this->session->userdata('level');?></h3></b>
			
		</div> -->

                <br>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Data Siswa</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>

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

                            <div class="x_content">

                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="background-color: rgb(27, 27, 27);">
                                            <th style="width: 1%;">No</th>
                                            <th style="width: 15%;">No Pendaftaran</th>
                                            <th style="width: 30%;">Nama Siswa</th>
                                            <th>Sekolah Tujuan Daftarh</th>
                                            <th style="text-align: center;" ">Nilai
                                                <?=$jenis_guru?>
                                            </th>
                                            <th style="width: 15%; ">Entri Nilai Siswa</th>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no =1 ;
                        foreach ($pendaftaran as $key => $value):?>
                                        <tr>
                                            <td>
                                                <?=$no++?>
                                            </td>
                                            <td>
                                                <?=$value['no_registrasi']?>
                                            </td>
                                            <td>
                                                <?=$value['nama']?>
                                            </td>
                                            <td>
                                                <?=$value['nama_sekolah']?>
                                            </td>
                                            <td style="text-align: center; ">
                                                <input type="number " name="nilai " value="<?=$value[$jenis_guru]?>" disabled class="form-control">
                                                </td>
                                                <td>
                                                    <a href="#" onclick="nilai_qiroah(<?=$value['id_user']?>)" class="btn btn-primary btn-sm beri-nilai" data-id="<?=$value['id_user']?>"> <i class="fa fa-plus"></i> Entri Nilai </a>
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
            <!-- /.content-header -->
            <!-- /.content -->
        </div>
    </div>
</div>


<!-- Modal  nilai-->
<div class="modal fade" id="data_nilai" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 style="text-align: center;" class="modal-title">Data Nilai</h5> -->
                <h5 style="text-align: center;"><b>Input Nilai <?=$jenis_guru?></b></h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
            </div>
            <div class="modal-body">
                <form id="save_nilai" action="<?=base_url();?>c_guru/save_nilai" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <table id="nilai" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 1%;text-align: center;">Nilai
                                    <?=$jenis_guru?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 3%;" class="">
                                    <input type="text" name="jenis" value="<?=$jenis_guru?>">
                                    <input type="text" name="id_user">
                                    <input type="number" name="nilai" id="" value="" class="form-control">
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary simpan fa fa-save"> Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    function nilai_qiroah(id) {
        $("#id").val(id);
        $("input[name=id_user]").val(id);
        $("input[name=jenis]").attr('hidden', true);
        $("input[name=id_user]").attr('hidden', true);
        $("#data_nilai").modal("show");
    }
</script>