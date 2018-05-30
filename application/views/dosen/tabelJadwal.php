<div id="page-wrapper" class="page-wrapper-cls">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12"> <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-calendar"></i> Jadwal Bimbingan</h3>
                </div>
                <div class="panel-body">
                    <div class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search" action="<?=base_url('dosenController/cari');?>" method="post">
                            <div class="form-group">
                                <label>Cari NPM / Nama</label>
                                <input type="text" class="form-control" placeholder="Search" name="cari">
                            </div>
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>
                        </form>
                    </div>
            
                    <br>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Jadwal</th>
                                    <th>Hari</th>
                                    <th>Waktu Mulai</th>
                                    <th>Waktu Akhir</th>
                                    <th>Kode Kelas</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jadwal as $jdwl){
                                    echo "<tr><td>". $jdwl->kd_jadwal;
                                    echo "</td><td>". $jdwl->nama_hari;
                                    echo "</td><td>". $jdwl->waktu_mulai;
                                    echo "</td><td>". $jdwl->waktu_akhir;
                                    echo "</td><td>". $jdwl->kd_kelas;
                                    echo "</td></tr>";
                                }
                                ?>
                                   </tbody>
                        </table>
                    </div>      
                 </div>            
            </div>
        </div>
    </div>
</div>
</div>