<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>assets/images/stmik.png">

    <title><?php echo $title; ?></title>
  
  <!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
  
  <!-- Data Table-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor_components/datatable/datatables.min.css"/>
  
  <!-- Bootstrap extend-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-extend.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/master_style.css">

  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor_plugins/iCheck/flat/blue.css">
  <script type="text/javascript" src="chartjs/Chart.js"></script>

  <!-- Superieur Admin skins -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skins/_all-skins.css">

</head>

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo -->
    <div class="logo-mini">
      <span class="light-logo"><img src="<?php echo base_url();?>assets/images/logo/logo-dark.png" alt="logo"></span>
      <span class="dark-logo"><img src="<?php echo base_url();?>assets/images/logo/logo-dark.png" alt="logo"></span>
    </div>
      <!-- logo-->
      <div class="logo-lg">
      <span class="light-logo"><img src="<?php echo base_url();?>assets/images/logo/logo-dark-text.png" alt="logo"></span>
        <span class="dark-logo"><img src="<?php echo base_url();?>assets/images/logo/logo-dark-text.png" alt="logo"></span>
    </div>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
    <div>
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      </a>
    </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav"> 
     <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/images/mahasiswa/'.$mhsprofil->foto) ?>" class="user-image rounded-circle" alt="User Image"><font size="2"> &nbsp;<?php echo $mhsprofil->nama ?>&nbsp;</font>
            <i class="fa fa-cog fa-spin"></i>
                  </a>
            <ul class="dropdown-menu animated flipInY">
              <!-- User image -->
              <li class="user-header bg-img" style="background-image: url(<?php echo base_url();?>assets/images/user-info.jpg)" data-overlay="3">
          <div class="flexbox align-self-center">           
            <img src="<?php echo base_url('assets/images/mahasiswa/'.$mhsprofil->foto) ?>" class="float-left rounded-circle" alt="User Image">            
          <h4 class="user-name align-self-center">
            <span><?php echo $mhsprofil->nama ?></span>
            <small>Mahasiswa</small>
            
          </h4>
          </div>

              </li>
              <!-- Menu Body -->
              <li class="user-body">
        

          
          <a class="dropdown-item" href="<?php echo base_url(). 'mahasiswa/logout' ?>"><i class="ion-log-out"></i> Logout</a>
          <div class="dropdown-divider"></div>

              </li>
            </ul>
          </li>                
                    
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
      
      <!-- sidebar menu-->
     <ul class="sidebar-menu" data-widget="tree">
     <li class="user-profile treeview  active bg-img" style="background-image: url(<?php echo base_url();?>assets/images/user-info.jpg)" data-overlay="3">
          <a href="#">
      <img src="<?php echo base_url('assets/images/mahasiswa/'.$mhsprofil->foto) ?>" class="user-image rounded-circle" alt="user">
              <span>
        <span class="d-block font-weight-600 font-size-16"><?php echo $mhsprofil->nama ?></span>
        <span class="email-id">Mahasiswa</span>
        </span>
          </a>
        </li>
        

        <?php
        $hal = $this->uri->segment(3);
        ?>

        <li class="header nav-small-cap">&nbsp;&nbsp;
        <i class="mdi mdi-drag-horizontal mr-5"></i>
        <i class="mdi mdi-drag-horizontal mr-5"></i>
        &nbsp;&nbsp;&nbsp;
         <b>MENU MAHASISWA </b>
         &nbsp;&nbsp;&nbsp;
         <i class="mdi mdi-drag-horizontal mr-5"></i>
         <i class="mdi mdi-drag-horizontal mr-5"></i>
       </li>


         <li class="<?=($hal=='profil')?'active':'';?>">
          <a href="<?php echo site_url();?>page/mahasiswa/profil">
            <i class="fa fa-home"></i>&nbsp;&nbsp;
      <span>My Profil</span>
          </a>
        </li>  
    
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>&nbsp;&nbsp;
            <span>Pilih Dosen</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <?php foreach ($dosenku2 as $dosen): ?>
            <li><a href="<?php echo site_url('blog/download_materi/'.$dosen->id_user) ?>" target="blank"><i class="mdi mdi-toggle-switch-off"></i><?php echo $dosen->nm_lengkap ?></a></li>
          <?php endforeach; ?>   
          </ul>
        </li>

<li>
          <a href="<?php echo site_url();?>welcome/" target='blank'>
            <i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;
      <span>Lihat Website</span>
          </a>
        </li>
        
    
      </ul>
    </section>
  </aside>