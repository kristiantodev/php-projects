<!DOCTYPE html>
<html>

    <head>
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

        <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/morris/morris.css">

        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo-sm-light.png" alt="" class="logo-small">
                            <img src="assets/images/logo-light.png" alt="" class="logo-large">
                        </a>

                    </div>

                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="navbar-right d-flex list-inline float-right mb-0">
                            
    
                            
                            
                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>
    
    
    
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="index.html"><i class="fa fa-home"></i>Beranda</a>
                            </li>

                            <li class="has-submenu">
                                <a href="index.html"><i class="fa fa-graduation-cap"></i>Penelusuran Alumni</a>
                            </li>

                            <li class="has-submenu">
                                <a href="index.html"><i class="fa fa-handshake"></i>Penelusuran Perusahaan</a>
                            </li>

                            <li class="has-submenu">
                                <a href="index.html"><i class="fa fa-lock"></i>Login Pengguna Lulusan</a>
                            </li>

                           

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

        <!-- page wrapper start -->
        <div class="wrapper">
            <div class="page-title-box">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="state-information d-none d-sm-block">
                                <div class="state-graph">
                                    <div id="header-chart-1"></div>
                                    <div class="info">Balance $ 2,317</div>
                                </div>
                                <div class="state-graph">
                                    <div id="header-chart-2"></div>
                                    <div class="info">Item Sold 1230</div>
                                </div>
                            </div>
                            
                            <h4 class="page-title">Dashboard</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Welcome to Agroxa Dashboard</li>
                            </ol>

                        </div>
                    </div>
                </div>
                <!-- end container-fluid -->
            
            </div>
            <!-- page-title-box -->

            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">Orders</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">Orders</h6>
                                            <h3 class="mb-3 mt-0">1,587</h3>
                                            <div class="">
                                                <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-cube-outline display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">Revenue</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">Revenue</h6>
                                            <h3 class="mb-3 mt-0">$46,785</h3>
                                            <div class="">
                                                <span class="badge badge-light text-danger"> -29% </span> <span class="ml-2">From previous period</span>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-buffer display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">Av. Price</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">Average Price</h6>
                                            <h3 class="mb-3 mt-0">15.9</h3>
                                            <div class="">
                                                <span class="badge badge-light text-primary"> 0% </span> <span class="ml-2">From previous period</span>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-tag-text-outline display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">Pr. Sold</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">Product Sold</h6>
                                            <h3 class="mb-3 mt-0">1890</h3>
                                            <div class="">
                                                <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">From previous period</span>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-briefcase-check display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    
                   
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end page content-->

        </div>
        <!-- page wrapper end -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        2018 © Agroxa <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>assets/js/waves.min.js"></script>

        <script src="<?php echo base_url();?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Peity JS -->
        <script src="<?php echo base_url();?>assets/plugins/peity/jquery.peity.min.js"></script>

        <script src="<?php echo base_url();?>assets/plugins/morris/morris.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/raphael/raphael-min.js"></script>

        <script src="<?php echo base_url();?>assets/pages/dashboard.js"></script>        

        <!-- App js -->
        <script src="<?php echo base_url();?>assets/js/app.js"></script>

    </body>

</html>