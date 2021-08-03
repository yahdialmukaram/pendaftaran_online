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
                        <h2>Data User</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <button type="button" class="btn btn-primary fa fa-plus " data-toggle="modal" data-target="#exampleModal">
                    Tambah Admin Sistem
                  </button>
                    <button type="button" class="btn btn-primary fa fa-user " data-toggle="modal" data-target="#data-guru">
                    Tambah Guru
                  </button>
                    <div class="x_content">

                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr style="background-color: rgb(27, 27, 27);">
                                    <th style="width: 1%;">No</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th style="width: 13%;">Waktu</th>
                                    <th>Level</th>
                                    <th>Opsi</th>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; 
                        foreach ($user as $key => $value):?>
                                <tr>
                                    <td>
                                        <?=$no++?>
                                    </td>
                                    <td>
                                        <?=$value['username'];?>
                                    </td>
                                    <td>
                                        <?=$value['email'];?>
                                    </td>
                                    <td>
                                        <?=$value['waktu'];?>
                                    </td>
                                    <td>
                                        <?=$value['level'];?> 
                                        <?=$value['verifikator'];?>
                                    </td>
                                     <td>
                                        <a href="#" onclick="hapus_admin(<?=$value['id_user']?>);" class="btn btn-danger btn-xs"> <i class="fa fa-trash"> Delete</i> </a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
            </div>
            <div class="modal-body">

                <form action="<?=base_url();?>controller/add_admin" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Username</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" name="username" class="form-control" required placeholder="masukan username">
                            <small>  <font color="red">username wajib isi</font></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="email" name="email" class="form-control" required placeholder="masukan email">
                            <small>  <font color="red">email wajib isi</font></small>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Password</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="password" name="password" class="form-control" required placeholder="masukan password">
                            <small>  <font color="red">password wajib isi</font></small>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Level
            </label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                            <select name="level" id="" class="form-control">
                <option>admin</option>
              </select>
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

<div class="modal fade" id="data-guru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Guru</h5>
            </div>
            <div class="modal-body">

                <form action="<?=base_url();?>controller/save_guru" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Username</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="text" name="username" class="form-control" required placeholder="masukan username">
                            <small>  <font color="red">username wajib isi</font></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Email</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="email" name="email" class="form-control" required placeholder="masukan email">
                            <small>  <font color="red">email wajib isi</font></small>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Password</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="password" name="password" class="form-control" required placeholder="masukan password">
                            <small>  <font color="red">password wajib isi</font></small>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Level
                            </label>
                        <div class="col-md-3 col-sm-9 col-xs-12">
                            <select name="level" id="" class="form-control">
                                    <option>guru</option>
                                </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-12 col-sm-3 col-xs-12">Jenis Guru</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <select name="verifikator" id="" class="form-control">
                                  <option value="qiroah">Qiro'ah</option>
                                  <option value="wawancara_ortu">Wancara orang tua</option>
                                  <option value="paquyuban">Paquyuban</option>
                              </select>
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