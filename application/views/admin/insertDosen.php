<div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12"> <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="glyphicon glyphicon-plus"></i> Tambah Data Dosen</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>adminController/insertDosen" >
                                <?php echo validation_errors();?>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">NIDN</label>
                                    <div class="col-lg-5">
                                        <input type="text" name="nidn" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Nama</label>
                                    <div class="col-lg-5">
                                        <input type="text" name="nama" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-5">
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group" style="float: center; text-align: center;">
                                    <button class="db-btn-round-fill-green"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="<?=base_url('adminController/viewDosen');?>" class="db-btn-round-fill-grey"><i class="fa fa-undo"> Kembali</i></a>
                                </div>
                            </form>
                         </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>