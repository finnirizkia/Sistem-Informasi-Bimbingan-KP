<!DOCTYPE html>
<html lang="en">
  <head>
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8" />
    <title>SI Penjadwalan Kerja Praktek</title>
    <meta name="description" content="overview &amp; stats" />
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/font-awesome/4.2.0/css/font-awesome.min.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/font-awesome/4.1.0/css/font-awesome.min.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/fonts/fonts.googleapis.com.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/css/cusstom.css')?>">

    <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">
      <link rel="shortcut icon" href="<?=base_url('assets/img/diskusitiga.jpg')?>">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="" id="brand">Fakultas Teknik</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href=""><i class="fa fa-home"></i>Home</a>
             </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" href="#myModal" ><i class="fa fa-users"></i>Login</a>
              
            </li>
              <li class="nav-item">
              <a class="nav-link" href="about"><i class="fa fa-info"></i>About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section>
      <div id="myModal" class="modal fade">
          <div class="modal-dialog modal-login">  
            <div class="modal-content">
              <div class="modal-header">        
                <h4 class="modal-title">Selamat datang, </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
            <div class="modal-body">
              <form method="POST" id="loginForm" action="<?php echo base_url().'login/verify_login'; ?>">
                <?php echo $this->session->flashdata('notif');?>
                <div class="form-group">
                  <i class="fa fa-user"></i>
                  <input type="text" class="form-control" placeholder="Nama Pengguna" required name="username">
                </div>
                <div class="form-group">
                  <i class="fa fa-lock"></i>
                  <input type="password" class="form-control" placeholder="Kata Sandi" required name="password">         
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary btn-block btn-lg" value="Masuk">
                </div>
              </form>       
        
            </div>
            <div class="modal-footer">
              <a href="#">Lupa Kata Sandi?</a>
            </div>
          </div>
        </div>
    </section>



    <header class="masthead" style="background-image: url('assets/img/diskusi.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Sistem Informasi</h1>
              <span class="subheading">Penjadwalan Bimbingan Kerja Praktek</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="#">
              <h2 class="post-title">
                Jadwal KP Tahun 2018/2019
              </h2>
              <h3 class="post-subtitle">
                Akan dilaksanakan mulai bulai Mei mendatang, mohon untuk segera melengkapi persyaratan.
              </h3>
            </a>
            <p class="post-meta">Diposting oleh
              <a href="#">Finni Rizkia</a>
              pada 29 April 2018</p>
          </div>
        
          <hr>
      </div>
    </div>

    <hr>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="https://twitter.com/FinniRizkia">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://web.facebook.com/finni.rizkia">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/finnirizkia">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Kelompok 3 PWLD 2018</p>
          </div>
        </div>
      </div>
    </footer>
  

  
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.1.11.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.2.1.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.2.1.1.min.js')?>"></script>
    
    
      <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
      <script src="<?php echo base_url('assets/js/style.js')?>"></script>

  </body>

</html>