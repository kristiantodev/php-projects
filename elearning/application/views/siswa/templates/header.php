<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Halaman Siswa</title>

    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('vendor/') ?>ele.jpg">
    <!-- GLOBAL MAINLY STYLES-->
    <link href="<?= base_url('vendor/backend/') ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url('vendor/backend/') ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url('vendor/backend/') ?>vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="<?= base_url('vendor/backend/') ?>vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="<?= base_url('vendor/backend/') ?>vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <link href="<?= base_url('vendor/backend/') ?>vendors/summernote/dist/summernote.css" rel="stylesheet" />
    <link href="<?= base_url('vendor/backend/') ?>vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" />

    <link href="<?= base_url('vendor/backend/');?>sweetalert2/package/dist/sweetalert2.min.css">
    <!-- THEME STYLES-->
    <link href="<?= base_url('vendor/backend/') ?>css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="index.html">
                    <span class="brand">E-
                        <span class="brand-tip">LEARNING</span>
                    </span>
                    <span class="brand-mini">E-L</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li>
                        <form class="navbar-search" action="javascript:;">
                            <div class="rel">
                                <span class="search-icon"><i class="ti-search"></i></span>
                                <input class="form-control" placeholder="Cari disini...">
                            </div>
                        </form>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="<?= base_url('vendor/backend/') ?>img/admin-avatar.png" />

                            <?php 
                              $no_induk = $this->session->userdata('nama');
                              $nama = $this->db->query("SELECT * FROM siswa WHERE no_induk = '$no_induk' ");
                              foreach ($nama->result_array() as $nm) {
                                  $namalengkap = $nm['nama'];
                                  $kelas = $nm['kelas'];
                                  
                              } 
                              ?>
                            <span></span><?= $namalengkap ?><i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
