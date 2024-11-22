<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Aplikasi Prediksi Kelulusan Universitas CIC</title>

    <!-- Favicons -->
    <link href="<?= base_url('assets/')?>image/cic40.png" rel="icon">

    <!-- jquery.vectormap css -->
    <link href="<?= base_url('assets/')?>libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?= base_url('assets/')?>css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('assets/')?>css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('assets/')?>css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-layout="detached" data-topbar="colored">

    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="container-fluid">
                        <div class="float-right">
                            <div class="dropdown d-inline-block d-lg-none ml-2">
                                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block mt-3">
                                <a href="<?= base_url('login/logout')?>" class="btn btn-success btn-sm waves-effect waves-light" onclick="return confirm('Apakah anda ingin logout?')">
                                  <i class="bx bx-power-off"> Logout</i>
                                </a>
                            </div>
                        </div>
                        <div>
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <a href="#" class="logo logo-light">
                                    <img src="<?= base_url('assets/')?>image1/logocic.png" alt="" height="50">
                                </a>
                            </div>
                        </div>
                        <marquee align="center" width="60%">
                          <h3 class="mt-4 text-white">
                            Selamat Datang Di Aplikasi Prediksi Kelulusan Universitas CIC 
                            <i class="far fa-smile-beam"></i> <i class="far fa-smile-beam"></i> <i class="far fa-smile-beam"></i>
                          </h3>
                        </marquee>
                    </div>
                </div>
            </header> 
            <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
          <div class="h-100">
          <div class="user-wid text-center py-4">
              <div class="user-img">
                  <img src="<?= base_url('assets/')?>images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
              </div>
              <div class="mt-3">
                  <a href="#" class="text-dark font-weight-medium font-size-16">Patrick Becker</a>
                  <p class="text-body mt-1 mb-0 font-size-13">UI/UX Designer</p>
              </div>
          </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="<?= base_url('admin')?>" class=" waves-effect">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('mahasiswa')?>" class=" waves-effect">
                        <i class="fa fa-book"></i>
                        <span>Kelola Mahasiswa</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-tasks"></i>
                        <span>Prediksi Kelulusan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('data_akademik')?>">Data Akademik</a></li>
                        <li><a href="<?= base_url('data_nonakademik')?>">Data Non Akademik</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?= base_url('laporan')?>" class=" waves-effect">
                        <i class="fa fa-edit"></i>
                        <span>Kelola Laporan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('mahasiswa')?>" class=" waves-effect">
                        <i class="fa fa-cogs"></i>
                        <span>Kelola User</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                      <div class="col-md-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="profile-widgets py-3">
                              <div class="text-center">
                                <div class="">
                                    <img src="assets/image1/logo_cic.jpg" alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                </div>
                                <div class="mt-3 ">
                                    <a href="#" class="text-dark font-weight-medium font-size-16">UNIVERSITAS CATUR INSAN CENDEKIA</a>
                                    <p class="text-body mt-1 mb-1">Jln. Kesambi No. 202 Kota Cirebon</p>
                                </div>
                                <div class="mt-4">
                                  <ui class="list-inline social-source-list">
                                    <li class="list-inline-item">
                                        <div class="avatar-xs">
                                            <a href="http://www.facebook.com/stmik.cic.3" class="avatar-title rounded-circle">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="avatar-xs">
                                            <a href="http://www.cic.ac.id" class="avatar-title rounded-circle bg-info">
                                                <i class="fas fa-home"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="avatar-xs">
                                            <a href="http://www.instagram.com/universitas_cic" class="avatar-title rounded-circle bg-pink">
                                                <i class="mdi mdi-instagram"></i>
                                            </a>
                                        </div>
                                    </li>
                                  </ui>
                                  </div>
                              </div>
                            </div>
                          </div> <!--card body -->
                        </div>
                      </div><!--col md -->
                      <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Revenue</h4>

                                    <div id="column-chart" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                &copy; <script>document.write(new Date().getFullYear())</script>
                                 Aplikasi Prediksi Kelulusan - Universitas CIC
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                  Created By. <a href="https://www.instagram/rizky_alvin" target="blank"> Rizky Alvin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

    </div>
    <!-- end container-fluid -->
    
    <!-- JAVASCRIPT -->
    <script src="<?= base_url('assets/')?>libs/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/')?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/')?>libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= base_url('assets/')?>libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url('assets/')?>libs/node-waves/waves.min.js"></script>

    <!-- apexcharts -->
    <script src="<?= base_url('assets/')?>libs/apexcharts/apexcharts.min.js"></script>

    <!-- jquery.vectormap map -->
    <script src="<?= base_url('assets/')?>libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= base_url('assets/')?>libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

    <script src="<?= base_url('assets/')?>js/pages/dashboard.init.js"></script>

    <script src="<?= base_url('assets/')?>js/app.js"></script>

</body>

</html>