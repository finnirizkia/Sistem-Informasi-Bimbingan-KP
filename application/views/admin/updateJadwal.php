 <div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12"> <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-pencil"></i> Edit Jadwal</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>adminController/updateJadwal" >
                            <?php echo validation_errors();?>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Kode Jadwal</label>
                                    <div class="col-lg-5"> 
                                        <input class="form-control" name="kd_jadwal" value="<?php echo $jadwal[0]->kd_jadwal ?>" readonly>
                                    <tr>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-lg-2 control-label">Hari</label>
                                    <div class="col-lg-5">
                                        <select name="nama_hari" class="form-control">
                                            <option></option>
                                            <?php if($jadwal[0]->nama_hari=='Senin'):?>
                                            <option value="Senin" selected>Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <?php elseif($jadwal[0]->nama_hari=='Selasa'):?>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa" selected>Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <?php elseif($jadwal[0]->nama_hari=='Rabu'):?>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu" selected>Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <?php elseif($jadwal[0]->nama_hari=='Kamis'):?>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis" selected>Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <?php elseif($jadwal[0]->nama_hari=='Jumat'):?>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat" selected>Jumat</option>
                                            <option value="Sabtu">Sabtu</option>
                                            <?php else:?>
                                            <option value="Senin">Senin</option>
                                            <option value="Selasa">Selasa</option>
                                            <option value="Rabu">Rabu</option>
                                            <option value="Kamis">Kamis</option>
                                            <option value="Jumat">Jumat</option>
                                            <option value="Sabtu" selected>Sabtu</option>                 
                                            <?php endif;?>    
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Waktu Mulai</label>
                                    <div class="col-lg-5">
                                        <input type="time" name="waktu_mulai" class="form-control" value="<?php echo $jadwal[0]->waktu_mulai ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Waktu Akhir</label>
                                    <div class="col-lg-5">
                                        <input type="time" name="waktu_akhir" class="form-control" value="<?php echo $jadwal[0]->waktu_akhir ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Kode Kelas</label>
                                    <div class="col-lg-5">
                                        <input type="text" name="kd_kelas" class="form-control" value="<?php echo $jadwal[0]->kd_kelas ?>">
                                    </div>
                                </div>
                                <div class="form-group" style="float: center; text-align: center;">
                                    <button class="db-btn-round-fill-green"><i class="fa fa-save"></i> Simpan</button>
                                    <a href="<?=base_url('adminController/viewJadwal');?>" class="db-btn-round-fill-grey"><i class="fa fa-undo"> Kembali</i></a>
                                </div>
                            </form>
                        </div>    
                </div>
            </div>
        </div>
    </div>
  
