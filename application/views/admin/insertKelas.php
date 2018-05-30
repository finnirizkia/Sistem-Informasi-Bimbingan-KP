<div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12"> <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="glyphicon glyphicon-plus"></i> Tambah Data Kelas</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>adminController/insertKelas" >
                                <?php echo validation_errors();?>
                                <div class="form-group">
                                        <label class="col-lg-2 control-label">Kelas</label>
                                        <div class="col-lg-5">
                                            <select name="kd_kelas" class="form-control" required>
                                                <option></option>
                                                <option value="FT-1.1">FT-1.1</option>
                                                <option value="FT-1.2">FT-1.2</option>
                                                <option value="FT-1.3">FT-1.3</option>
                                                <option value="FT-1.4">FT-1.4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Kapasitas</label>
                                        <div class="col-lg-5">
                                            <input type="text" name="kapasitas" class="form-control" required>
                                        </div>
                                    </div>
                                       <div class="form-group">
                                        <label class="col-lg-2 control-label">NIDN</label>
                                        <div class="col-lg-5">
                                            <select name="nidn" class="form-control" required>
                                                <option></option>
                                                <option value="100001">100001</option>
                                                <option value="200001">200001</option>
                                                <option value="300001">300001</option>
                                                <option value="400001">400001</option>            
                                            </select>
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
    </div>

