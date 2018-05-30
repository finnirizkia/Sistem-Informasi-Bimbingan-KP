<div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12"> <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="glyphicon glyphicon-plus"></i> Tambah Data Mahasiswa</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>adminController/insertMahasiswa" >
                            <?php echo validation_errors();?>

                            <div class="form-group">
                                <label class="col-lg-2 control-label">NPM</label>
                                <div class="col-lg-5">
                                   <input type="text" name="npm" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Nama</label>
                                <div class="col-lg-5">
                                    <input type="text" name="nama" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Kelas</label>
                                <div class="col-lg-5">
                                    <select name="kelas" class="form-control" required>
                                        <option></option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Angkatan</label>
                                <div class="col-lg-5">
                                    <select name="angkatan" class="form-control" required>
                                                <option></option>
                                                        <?php
                                                            $now=date('Y');
                                                                for ($i=2010; $i <= $now ; $i++) { 
                                                                    echo "<option value='$i'>$i</option>";
                                                                }
                                                        ?>
                                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Jurusan</label>
                                <div class="col-lg-5">
                                    <select name="jurusan" class="form-control" required>
                                         <option></option>
                                                    <option value="Teknik Industri">Teknik Industri</option>
                                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                                    <option value="Teknik Sipil">Teknik Sipil</option>
                                    </select>
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
                                <a href="<?=base_url('adminController/viewMahasiswa');?>" class="db-btn-round-fill-grey"><i class="fa fa-undo"> Kembali</i></a>
                            </div>
                        </form>
                         </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>

