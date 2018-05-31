 <div id="page-wrapper" class="page-wrapper-cls">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12"> <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-dashboard"></i>Mahasiswa</h3>
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
<a href="<?=base_url('adminController/formInsertMahasiswa');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
<hr>
    <div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>NPM</th>
				<th>Nama</th>
                <th>Kelas</th>
                <th>Angkatan</th>
                <th>Jurusan</th>
				<th colspan="2">Aksi</th>
			</tr>

		</thead>
		<tbody>

		<?php foreach ($mahasiswa as $mhs){
				echo "<tr><td>". $mhs->npm;
				echo "</td><td>". $mhs->nama;
                echo "</td><td>". $mhs->kelas;
				echo "</td><td>". $mhs->angkatan;
                echo "</td><td>". $mhs->jurusan;
				echo "</td><td>";
				echo "<a href='". base_url() ."adminController/formUpdateMahasiswa/". $mhs->npm ."' title='Update'><i class='icon-pencil'></i> Update</a></td><td>";
				echo "<a href='". base_url() ."adminController/deleteMahasiswa/". $mhs->npm ."' title='Delete'><i class='icon-remove'></i>Delete</a>";
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

