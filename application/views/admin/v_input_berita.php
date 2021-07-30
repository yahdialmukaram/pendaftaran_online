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
                        <h2>Data Berita</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <button type="button" class="btn btn-primary fa fa-upload " data-toggle="modal" data-target="#exampleModal">
                    Tambah Berita
                  </button>
                    <div class="x_content">

                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr style="background-color: rgb(27, 27, 27);">
                                    <th style="width: 1%;">No</th>
                                    <th>Judul</th>
                                    <th style="width: 13%;">image</th>
                                    <th style="width: 50%;">isi</th>
                                    <th>Tanggal</th>
                                    <th style="width: 9%;">Opsi</th>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; 
                        foreach ($berita as $key => $value):?>
                                <tr>
                                    <td>
                                        <?=$no++?>
                                    </td>
                                    <td>
                                        <?=$value['judul'];?>
                                    </td>
                                    <td><img style="width: 130px;height: 130px; border-radius:50%" src="<?=base_url();?>uploads/original_image/<?=$value['image'];?>"></td>
                                    <td>
                                        <?=$value['isi'];?>
                                    </td>
                                    <td>
                                        <?=$value['tanggal'];?>
                                    </td>
                                    <td>
                                        <a href="<?=base_url();?>controller/edit_berita/<?=$value['id_berita']?>" class="btn btn-primary btn-xs"><i class="fa fa-wrench"></i> Edit</a>
                                        <a href="#" onclick="delete_berita(<?=$value['id_berita']?>);" class="btn btn-danger btn-xs"> <i class="fa fa-trash"> Delete</i> </a>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
            </div>
            <div class="modal-body">

                <form action="<?=base_url();?>controller/save_berita" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Judul</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" name="judul" class="form-control" required placeholder="masukan judul">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Image</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="file" name="image" class="form-control" required>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Isi Berita</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <textarea name="isi" id=""cols="100" rows="7" class="form-control"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Tanggal</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
									<div class='input-group date' id='tanggal_awal'>
										<input type='text' name="tanggal" class="form-control" required />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
									</div>
								</div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- modal konfirmasi hapus data -->
<div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form action="<?=base_url();?>controller/delete_berita" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Hapus</h5>

                </div>
                <div class="modal-body">Yakin Akan Hapus Data ini ?
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
    function delete_berita(id) {
        $("#id").val(id);
        $("#konfirmasi").modal("show");
    }
</script>