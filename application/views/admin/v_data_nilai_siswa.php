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
                        <h2>Data Nilai Pendaftaran Calon Siswa SDIT Qurrata A'yun Kabupaten Tanah Datar </h2>
                        <!-- <h4 style="text-align: center;"><b>Data Nilai Pendaftaran Calon Siswa SDIT Qurrata A'yun Kabupaten Tanah Datar </b></h4> -->
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                   
                    <a href="<?=base_url();?>cetak/print_data_nilai" target="_blank" class="btn btn-warning btn-sm fa fa-print"> Print Data Keluaran Nilai</a>
                    <div class="x_content">

                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr style="background-color: rgb(27, 27, 27);">
                                    <th style="width: 1%;">No</th>
                                    <th>No Registrasi</th>
                                    <th>Nama Siswa</th>
                                    <th>Tes Qiroah</th>
                                    <th>Wawancara Ortu</th>
                                    <th>Paquyuban</th>
                                    <th>Nilai Akhir</th>
                                    <th>Rangking</th>
                                    <th>Status</th>
                                    <th>Verifikasi</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $no =1 ;
                        foreach ($nilai as $key => $value):?>

                                <tr>

                                    <td>
                                        <?= $no++?>
                                    </td>
                                    <td>
                                        <?= $value['no_registrasi']?>
                                    </td>
                                    <td>
                                        <?= $value['nama']?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?= $value['qiroah']?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?= $value['wawancara_ortu']?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?= $value['paquyuban']?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?= number_format( $value  ['nilai_akhir'])?>
                                    </td>
                                    <td>
                                        <label for="" class="label label-danger">Peringkat <?=$value['peringkat']?>
										</label>
                                    </td>
                                    <td>
                                        <?php if ($value['peringkat']<=$limit_lulus):?>
                                        <label for="" class="label label-success">Lulus</label>
                                        <?php else:?>
                                        <label for="" class="label label-danger">Tidak Lulus</label>
                                        <?php endif;?>
                                    </td>


                                    <?php if ($value['status_sms']== 0 ):?>
                                    <td> <a href="#" onclick="verifikasi(<?=$value['id_user']?>);" class="label label-primary">Send SMS</a></td>
                                    <?php elseif ($value['status_sms']==1) :?>
                                    <td> <a href="#" class="label label-success">SMS Terkirim</a></td>
                                    <?php endif?>

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


<!-- Button trigger modal veririkasi -->
<!-- Modal verifikasi-->
<div class="modal fade" id="verifikasi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-sm">
            <form class="form-verifikasi" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Verifikasi SMS</h5>

                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="id" value="" class="id_user">
                    <div class="text"></div>
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
    function verifikasi(id) {
        $(".form-verifikasi").attr("action", '<?=base_url();?>controller/update_status/verifikasi')
        $("#id").val(id);
        $(".text").text("Yakin akan verifikasi SMS ke data ini ?")
        $("#verifikasi").modal("show");

    }

    // function cancel_verifikasi(id) {
    // 	$(".form-verifikasi").attr("action", '<?=base_url();?>controller/update_status/cancel')
    // 	$(".id_user").val(id);
    // 	$(".text").text("Yakin akan batalkan verifikasi untuk data ini  ?")
    // 	$("#verifikasi").modal("show");
    // }
</script>