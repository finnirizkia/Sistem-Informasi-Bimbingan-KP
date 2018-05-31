 <div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12"> <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-pencil"></i> Edit Kelas</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>adminController/updateKelas" >
                            <?php echo validation_errors();?>
                                 <div class="form-group">
                                    <label class="col-lg-2 control-label">Kode Kelas</label>
                                    <div class="col-lg-5">
                                        <select name="kd_kelas" class="form-control"  readonly>
                                            <option></option>
                                            <?php if($kelas[0]->kd_kelas=='FT-1.1'):?>
                                            <option value="FT-1.1" selected  readonly>FT-1.1</option>
                                            <option value="FT-1.2">FT-1.2</option>
                                            <option value="FT-1.3">FT-1.3</option>
                                            <option value="FT-1.4">FT-1.4</option>
                                            <?php elseif($kelas[0]->kd_kelas=='FT-1.2'):?>
                                           <option value="FT-1.1">FT-1.1</option>
                                            <option value="FT-1.2" selected  readonly>FT-1.2</option>
                                            <option value="FT-1.3">FT-1.3</option>
                                            <option value="FT-1.4">FT-1.4</option>
                                             <?php elseif($kelas[0]->kd_kelas=='FT-1.3'):?>
                                           <option value="FT-1.1">FT-1.1</option>
                                            <option value="FT-1.2">FT-1.2</option>
                                            <option value="FT-1.3" selected  readonly>FT-1.3</option>
                                            <option value="FT-1.4">FT-1.4</option>
                                            <?php else:?>
                                             <option value="FT-1.1">FT-1.1</option>
                                            <option value="FT-1.2">FT-1.2</option>
                                            <option value="FT-1.3">FT-1.3</option>
                                            <option value="FT-1.4" selected  readonly>FT-1.4</option>                 
                                            <?php endif;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Kapasitas</label>
                                    <div class="col-lg-5">
                                        <input class="form-control" type="text" name="kapasitas" value="<?php echo $kelas[0]->kapasitas ?>">
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">NIDN</label>
                                    <div class="col-lg-5">
                                        <input type="text" name="nidn" class="form-control" value="<?php echo $kelas[0]->nidn ?>">
                                    </div>
                                </div>
                                <div class="form-group" style="float: center; text-align: center;">
                                    <button class="db-btn-round-fill-green"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="<?=base_url('adminController/viewKelas');?>" class="db-btn-round-fill-grey"><i class="fa fa-undo"> Kembali</i></a>
                                </div>
                            </form>
                        </div>    
                </div>
            </div>
        </div>
    </div>
  