<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>


<link rel="icon" href="<?php echo base_url();?>assets/images/stmik.png">
<!-- Page Title -->
<title><?php echo $title; ?></title>

<!-- Favicon and Touch Icons -->
<link href="<?php echo base_url();?>assets/images/stmik.png" rel="shortcut icon" type="image/png">
<link href="<?php echo base_url();?>assets/images/stmik.png" rel="apple-touch-icon">
<link href="<?php echo base_url();?>assets/images/stmik.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?php echo base_url();?>assets/images/stmik.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?php echo base_url();?>assets/images/stmik.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?php echo base_url();?>assets/front/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/front/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/front/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/front/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="<?php echo base_url();?>assets/front/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?php echo base_url();?>assets/front/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?php echo base_url();?>assets/front/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?php echo base_url();?>assets/front/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?php echo base_url();?>assets/front/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?php echo base_url();?>assets/front/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?php echo base_url();?>assets/front/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?php echo base_url();?>assets/front/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="<?php echo base_url();?>assets/front/css/colors/theme-skin-color-set-2.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?php echo base_url();?>assets/front/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url();?>assets/front/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/front/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?php echo base_url();?>assets/front/js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?php echo base_url();?>assets/front/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url();?>assets/front/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<style type="text/css">
  a.tooltips {
  position: relative;
  display: inline;
  text-decoration: none;
}
a.tooltips span {
  position: absolute;
  width:140px;
  color: #FFFFFF;
  background: #000000;
  height: 25px;
  line-height: 25px;
  text-align: center;
  visibility: hidden;
  border-radius: 5px;
}
a.tooltips span:after {
  content: '';
  position: absolute;
  bottom: 100%;
  left: 50%;
  margin-left: -8px;
  width: 0; height: 0;
  border-bottom: 8px solid #000000;
  border-right: 8px solid transparent;
  border-left: 8px solid transparent;
}
a:hover.tooltips span {
  visibility: visible;
  opacity: 0.5;
  top: 30px;
  left: 50%;
  margin-left: -76px;
  z-index: 999;
}
</style>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="wrapper" class="clearfix">
  
  
<!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-colored sm-text-center p-0">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget no-border m-0">
              <ul class="list-inline font-13 sm-text-center mt-5">

                <li class="text-white">
        <?php
		$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
		$hr = $array_hr[date('N')];
		$tgl= date('j');
		$array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
		$bln = $array_bln[date('n')];
		$thn = date('Y');
		?>
		<?php echo"Universitas CIC Cirebon | ". $hr . ", " . $tgl . " " . $bln . " " . $thn . ""; ?>
                </li>
               
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="widget no-border m-0 mr-15 pull-right flip sm-pull-none sm-text-center">
              <ul class="styled-icons icon-circled icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                <li>
                <a class="tooltips" href="https://www.facebook.com/stmik.cic.3" target="blank"><i class="fa fa-facebook text-white"></i><span>Facebook </span></a></li>
                <li><a class="tooltips" href="https://twitter.com/stmikcic" target="blank"><i class="fa fa-twitter text-white"></i><span>Twitter </span></a></li>
                <li><a class="tooltips" href="https://www.instagram.com/universitas_cic" target="blank"><i class="fa fa-instagram text-white"></i><span>Instagram </span></a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center">


    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-5">
            <div class="widget no-border m-0">
              <img src="<?php echo base_url('assets/images/cic.png') ?>" height ="100" width='500' alt="">
            </div>
          </div>
		  <div class="col-xs-12 col-sm-1 col-md-3">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-20 mb-20 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-map-marker text-theme-colored font-30 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-11 text-gray text-uppercase">Alamat :</a>
                  <h5 class="font-11 m-0"> Jl. Kesambi No.202, Kesambi, Kota Cirebon</h5>
                </li>
              </ul>
            </div>
          </div>  
          <div class="col-xs-12 col-sm-1 col-md-2">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-20 mb-20 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-phone text-theme-colored font-30 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-11 text-gray text-uppercase">Telephone :</a>
                  <h5 class="font-12 m-0"> 0231-200418</h5>
                </li>
              </ul>
            </div>
          </div>  
		  <div class="col-xs-12 col-sm-1 col-md-2">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-20 mb-20 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-envelope text-theme-colored font-30 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-11 text-gray text-uppercase">Email :</a>
                  <h5 class="font-12 text-black m-0"> info @ cic.ac.id</h5>
                </li>
              </ul>
            </div>
          </div>
		  
		  
          
        </div>
      </div>
    </div>

      
    <div class="header-nav">

      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored">
        <div class="container">
        <?php
        $hal = $this->uri->segment(1);
        ?>
          <nav id="menuzord" class="menuzord pull-left flip bg-theme-colored menuzord-responsive">
            <ul class="menuzord-menu">
              <li class="<?=($hal=='welcome')?'active':'';?> <?=($hal=='')?'active':'';?>"><a href="<?php echo site_url();?>/"><i class="fa fa-home"></i>Beranda</a>
                
              </li>
              <li class="<?=($hal=='about')?'active':'';?>"><a><i class="fa fa-user"></i>&nbsp;&nbsp;Profil Universitas</a>
                <ul class="dropdown">
                  <li><a href="<?php echo site_url();?>about/sambutan_rektor"><i class="fa fa-microphone"></i>&nbsp;&nbsp;Kata Sambutan Rektor</a></li>
                  <li><a href="<?php echo site_url();?>about/visimisi"><i class="fa fa-hand-paper-o"></i>&nbsp;&nbsp;Visi, Misi, dan Tujuan</a></li>
                  <li><a href="<?php echo site_url();?>about/visimisi"><i class="fa fa-home"></i>&nbsp;&nbsp;Sejarah</a></li>
                </ul>
              </li>

              <li class="<?=($hal=='fakultas')?'active':'';?>"><a><i class="fa fa-mortar-board"></i>&nbsp;Fakultas</a>
                <ul class="dropdown">
                  <li><a href="#"><i class="fa fa-desktop"></i>&nbsp;&nbsp;Fakultas Teknologi & Informasi (FTI)</a>
                    <ul class="dropdown">
                      <li><a href="<?php echo site_url();?>fakultas/prodi_ti"><i class="fa fa-plug"></i>&nbsp;&nbsp;S1 - Teknik Informatika</a></li>
					  <li><a href="<?php echo site_url();?>fakultas/prodi_si"><i class="fa fa-tablet"></i>&nbsp;&nbsp;S1 - Sistem Informasi</a></li>
					  <li><a href="<?php echo site_url();?>fakultas/prodi_dkv"><i class="fa fa-edit"></i>&nbsp;&nbsp;S1 - Desain Komunikasi Visual</a></li>
					  <li><a href="<?php echo site_url();?>fakultas/prodi_mi"><i class="fa fa-laptop"></i>&nbsp;&nbsp;D3 - Manajemen Informatika</a></li>
					  <li><a href="<?php echo site_url();?>fakultas/prodi_ka"><i class="fa fa-calculator"></i>&nbsp;&nbsp;D3 - Komputerisasi Akutansi</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo site_url();?>tridharma/penelitian"><i class="fa fa-table"></i>&nbsp;&nbsp;Fakultas Ekonomi & Bisnis (FEB)</a>
				   <ul class="dropdown">
                      <li><a href="<?php echo site_url();?>tridharma/kurikulum"><i class="fa fa-calendar"></i>&nbsp;&nbsp;S1 - Manajemen</a></li>
					  <li><a href="<?php echo site_url();?>tridharma/kurikulum"><i class="fa fa-calculator"></i>&nbsp;&nbsp;S1 - Akuatansi</a></li>
					  <li><a href="<?php echo site_url();?>tridharma/kurikulum"><i class="fa fa-print"></i>&nbsp;&nbsp;D3 - Manajemen Bisnis</a></li>
					</ul>
				  </li>
                  
                </ul>
              </li>

              <li class="<?=($hal=='pengumuman')?'active':'';?>"><a href="<?php echo site_url();?>pengumuman/"><i class="fa fa-bullhorn"></i>&nbsp;Update Informasi</a>
			  <li class="<?=($hal=='artikel')?'active':'';?>"><a href="<?php echo site_url();?>artikel/"><i class="fa fa-newspaper-o"></i>&nbsp;Berita</a>
              <li class="<?=($hal=='kegiatan')?'active':'';?>"><a href="<?php echo site_url();?>kegiatan/"><i class="fa fa-hand-paper-o"></i>&nbsp;Kegiatan</a> 
            <li class="<?=($hal=='gallery')?'active':'';?>"><a href="<?php echo site_url();?>gallery"><i class="fa fa-image"></i>&nbsp;Galeri</a></li>

             

               
<li><a href="#" target="blank"><i class="fa fa-bullhorn"></i>&nbsp;PMB</a>
                
              </li>
              
            </ul>
          
          </nav>
        </div>
      </div>
    </div>
     </div>
  </header>
  
    