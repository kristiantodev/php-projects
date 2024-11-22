<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Goa Sunyaragi Cirebon</title>
<link rel="shortcut icon" href="<?php echo base_url();?>assets/cirebon.png">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
<link href="<?php echo base_url();?>assets/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>assets/css/sb-admin-2.min.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="<?php echo base_url();?>assets/cirebon.png" height="50">
                </div>
                <div class="sidebar-brand-text mx-2">SUNYARAGI<sup> CIREBON</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <?php if ($this->session->userdata('level') == "Administrator"): ?>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url();?>adm/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-th-list"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu :</h6>
                        <a class="collapse-item" href="<?php echo site_url();?>adm/dimensi">Dimensi</a>
                        <a class="collapse-item" href="<?php echo site_url();?>adm/kriteria">Kriteria</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url();?>adm/pengguna">
                    <i class="fas fa-fw fa-user-plus"></i>
                    <span>Pengguna</span></a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url();?>adm/settingperusahaan">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>Profil Perusahaan</span></a>
            </li>

<?php else: ?> 

    <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url();?>adm/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main Menu
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-chalkboard-teacher"></i>
                    <span>Kuesioner</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Menu :</h6>
                        <a class="collapse-item" href="<?php echo site_url();?>adm/hasilsurvey">Hasil Kuesioner</a>
                        <a class="collapse-item" href="<?php echo site_url();?>adm/servperf">Analisis Serperv</a>
                    </div>
                </div>
            </li>

            <?php endif; ?> 

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
 <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                      

                        
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('username') ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url();?>assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url(). 'login/logout' ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->