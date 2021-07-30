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

  
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Berita</h5>
            </div>
            <div class="modal-body">

                <form action="<?=base_url();?>controller/update_berita/<?=$edit_berita['id_berita']?>" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Judul</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" name="judul" value="<?=$edit_berita['judul']?>" class="form-control" required placeholder="masukan judul">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Image</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="file" name="image"  value="<?=$edit_berita['image']?> class="form-control">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Isi Berita</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <textarea name="isi" id=""cols="100" rows="7" class="form-control"> <?=$edit_berita['isi']?></textarea>
                            <br>
                        </div>
                    </div>
              

            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <a href="<?=base_url();?>controller/v_input_berita" class="btn btn-primary btn-sm fa fa-mail-reply"> Back</a>
                <button type="submit" class="btn btn-primary btn-sm fa fa-save"> Update</button>
            </div>
            </form>
        </div>
    </div>
</div>

    </div>
</div>


