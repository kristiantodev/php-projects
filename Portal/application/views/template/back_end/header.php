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
      <!-- logo-->
      <div class="logo-lg">
      <span class="light-logo"><img src="<?php echo base_url();?>assets/images/logo/cic.png" alt="logo"></span>
	  <span class="dark-logo"><img src="<?php echo base_url();?>assets/images/logo/cic.png" alt="logo"></span>
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
              <img src="<?php echo base_url('assets/images/user/'.$myuser->avatar) ?>" class="user-image rounded-circle" alt="User Image"><font size="2"> &nbsp;<?php echo $myuser->nm_user?>&nbsp;</font>
            <i class="fa fa-cog fa-spin"></i>
                  </a>
            <ul class="dropdown-menu animated flipInY">
              <!-- User image -->
              <li class="user-header bg-img" style="background-image: url(<?php echo base_url();?>assets/images/user-info.jpg)" data-overlay="3">
          <div class="flexbox align-self-center">           
            <img src="<?php echo base_url('assets/images/user/'.$myuser->avatar) ?>" class="float-left rounded-circle" alt="User Image">            
          <h4 class="user-name align-self-center">
            <span><?php echo $myuser->nm_user?></span>
            <small><?php echo $this->session->userdata('level'); ?></small>
            
          </h4>
          </div>

              </li>
              
            <?php if ($this->session->userdata('level') == "Administrator"){ ?>

              <?php $this->load->view('template/back_end/menu_admin'); ?>

          <?php }else if($this->session->userdata('level') == "BAAK") { ?>

          <?php $this->load->view('template/back_end/menu_baak'); ?>


          <?php }else if($this->session->userdata('level') == "Kaprodi") { ?>

          <?php $this->load->view('template/back_end/menu_kaprodi'); ?>

          <?php }else{ ?>


        <?php } ?>
             
    
      </ul>
    </section>
  </aside>