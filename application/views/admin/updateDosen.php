 <div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12"> <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-pencil"></i> Edit Dosen</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>adminController/updateDosen" >
                            <?php echo validation_errors();?>
                                <div class="form-group">
                                <label class="col-lg-2 control-label">NIDN</label>
                                    <div class="col-lg-5"> 
                                        <input class="form-control" name="nidn" value="<?php echo $dosen[0]->nidn ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Nama</label>
                                    <div class="col-lg-5">
                                        <input class="form-control" type="text" name="nama" placeholder="nama" value="<?php echo $dosen[0]->nama ?>">
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-5">
                                        <input type="text" name="password" class="form-control" placeholder="Password tidak bisa dirubah" readonly>
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
  