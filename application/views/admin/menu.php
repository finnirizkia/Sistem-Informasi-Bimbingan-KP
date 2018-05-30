    <nav  class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li>
              <div class="user-img-div">
                <img src="<?=base_url('assets/img/admin.png')?>" class="img-circle" />
              </div>
            </li>
            <li><a href="<?php echo base_url(); ?>adminController"><i class="fa fa-dashboard"></i>Dashboard</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-sitemap "></i>Data Master<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li><a href="<?php echo base_url(); ?>adminController/viewMahasiswa"><i class="fa fa-user "></i>Mahasiswa</a>
                  </li>
                  <li><a href="<?php echo base_url(); ?>adminController/viewDosen"><i class="fa fa-user-secret "></i>Dosen</a>
                  </li>
                  <li><a href="<?php echo base_url(); ?>adminController/viewKelas"><i class="fa fa-bank "></i>Kelas</a>
                  </li>
                </ul>
              </li>
              <li><a href="<?php echo base_url(); ?>adminController/viewJadwal"><i class="fa fa-calendar"></i>Jadwal</a>
              </li>
        </ul>
    </div>
</nav>

