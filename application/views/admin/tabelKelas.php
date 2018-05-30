<div id="page-wrapper" class="page-wrapper-cls">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12"> <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bank"></i> Kelas</h3>
                </div>
                <div class="panel-body">
                    <div class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search" action="<?=base_url('adminController/cari');?>" method="post">
                            <div class="form-group">
                                <label>Cari NPM / Nama</label>
                                <input type="text" class="form-control" placeholder="Search" name="cari">
                            </div>
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>
                        </form>
                    </div>
                    <a href="<?=base_url('adminController/formInsertKelas');?>" class="db-btn-round-fill-green" ><i class="glyphicon glyphicon-plus"></i>Tambah Data</a>
                    <br>
                    <br>

                    <div class="table-responsive">
                       <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Kode Kelas</th>
                                    <th>Kapasitas</th>
                                    <th>Kode Dosen</th>
                                    <th colspan="2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($kelas as $kls){
                                    echo "<tr><td>". $kls->kd_kelas;
                                    echo "</td><td>". $kls->kapasitas;
                                    echo "</td><td>". $kls->nidn;
                                    echo "</td><td>";
                                    echo "<a href='". base_url() ."adminController/formUpdateKelas/". $kls->kd_kelas ."' title='Edit'><i class='fa fa-pencil'></i> Edit</a></td><td>";
                                    echo "<a data-toggle='modal' data-target='#konfirmasi_hapus' data-href='". base_url() ."adminController/deleteKelas/". $kls->kd_kelas ."' title='Hapus'><i class='fa fa-remove'></i>Hapus</a>";
                                    echo "</td></tr>";
                                }
                            ?>

                                <div class="modal fade" id="konfirmasi_hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <b>Anda yakin ingin menghapus data ini ?</b><br><br>
                                             </div>
                                            <div class="modal-footer">
                                                <a class="db-btn-round-fill-green"><i class="fa fa-remove"></i>Hapus</a>
                                                <a class="db-btn-round-fill-grey" data-dismiss="modal"><i class="fa fa-close"></i>Batal</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tbody>
                        </table>
                    </div>      
                 </div>            
            </div>
        </div>
    </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detail.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
 
    //Hapus Data
    $(document).ready(function() {
        $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });
 
  </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>

