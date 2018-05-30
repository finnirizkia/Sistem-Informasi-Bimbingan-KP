<nav  class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="main-menu">
            <li>
              <div class="user-img-div">
                <img src="<?=base_url('assets/img/dosen.png')?>" class="img-circle" />
                <h3>Dosen <?php echo $nidn; ?></h3>
              </div>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>dosenController/index/<?php echo $nidn; ?>"><i class="fa fa-dashboard"></i>Dashboard</a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>dosenController/viewJadwal/<?php echo $nidn; ?>"><i class="fa fa-calendar"></i> Jadwal Bimbingan</a></li>
            </li>
        </ul>
    </div>
</nav>
