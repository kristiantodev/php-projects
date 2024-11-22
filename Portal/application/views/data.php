<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>assets/images/ap.png">

    <title>My Project - Aplikasi STMIK CIC</title>
  
  <!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
  
  <!-- Data Table-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor_components/datatable/datatables.min.css"/>
  
  <!-- Bootstrap extend-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-extend.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/master_style.css">

  <!-- Superieur Admin skins -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skins/_all-skins.css">

</head>

<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
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
              <img src="<?php echo base_url();?>assets/images/logo/logo-5.jpg" class="user-image rounded-circle" alt="User Image"><font size="2"> &nbsp;Kristianto TI&nbsp;</font>
            <i class="fa fa-cog fa-spin"></i>
                  </a>
            <ul class="dropdown-menu animated flipInY">
              <!-- User image -->
              <li class="user-header bg-img" style="background-image: url(<?php echo base_url();?>assets/images/user-info.jpg)" data-overlay="3">
          <div class="flexbox align-self-center">           
            <img src="<?php echo base_url();?>assets/images/logo/logo-5.jpg" class="float-left rounded-circle" alt="User Image">            
          <h4 class="user-name align-self-center">
            <span>Kristianto TI</span>
            <small>Administrator</small>
          </h4>
          </div>

              </li>
              <!-- Menu Body -->
              <li class="user-body">
            <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
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
        <li class="user-profile treeview">
          <a href="index.html">
      <img src="<?php echo base_url();?>assets/images/logo/logo-5.jpg" class="user-image rounded-circle" alt="user">
              <span>
        <span class="d-block font-weight-600 font-size-16">Kristianto TI</span>
        <span class="email-id">Administrator</span>
        </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
      <ul class="treeview-menu">
            <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>My Profile </a></li>
      <li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
      <li><a href="javascript:void()"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
          </ul>
        </li>
        <li class="header nav-small-cap">&nbsp;&nbsp;
        <i class="mdi mdi-drag-horizontal mr-5"></i>
        <i class="mdi mdi-drag-horizontal mr-5"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <b>MENU UTAMA </b>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <i class="mdi mdi-drag-horizontal mr-5"></i>
         <i class="mdi mdi-drag-horizontal mr-5"></i>
       </li>
    <li class="treeview active">
          <a href="#">
            <i class="mdi mdi-view-dashboard"></i>
            <span>Dashboard</span>
            </a>
        </li>  
    
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-content-copy"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout_boxed.html"><i class="mdi mdi-toggle-switch-off"></i>Boxed</a></li>
            <li><a href="pages/layout_fixed.html"><i class="mdi mdi-toggle-switch-off"></i>Fixed</a></li>
          </ul>
        </li>  
    
        <li class="treeview">
          <a href="#">
            <i class="mdi mdi-tune-vertical"></i>
            <span>Page Layouts </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/page_layout_inner_left_sidebar.html"><i class="mdi mdi-toggle-switch-off"></i>Inner Left Sidebar </a></li>
            <li><a href="pages/page_layout_inner_right_sidebar.html"><i class="mdi mdi-toggle-switch-off"></i>Inner Right Sidebar </a></li>
          </ul>
        </li>   
    <li>
          <a href="pages/auth_login.html">
            <i class="mdi mdi-directions"></i>
      <span>Log Out</span>
          </a>
        </li> 
      </ul>
    </section>
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="page-title">Mahasiswa</h3>
				<div class="d-inline-block align-items-center">
					<nav>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item" aria-current="page">Table</li>
							<li class="breadcrumb-item active" aria-current="page">Table Mahasiswa</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="right-title">
			
			</div>
		</div>
	</div>
	  

    <!-- Main content -->
    <section class="content">
      <div class="row">
		  
		<div class="col-12">
         
         <div class="box bt-3 border-success ribbon-wrapper-reverse">
         <div class="ribbon ribbon-bookmark ribbon-vertical-r bg-success"><i class="fa fa-users"></i></div>
            <div class="box-header with-border">
              <h3 class="box-title">                       </h3>
              <div class="box-controls pull-right">
                  <button class="btn btn-purple btn-wth-icon icon-wthot-bg btn-sm"><span class="icon-label"><i class="fa fa-plus"></i> </span><span class="btn-text">&nbsp;Tambah Data</span></button>&nbsp;&nbsp;
                  <button class="btn btn-success btn-wth-icon icon-wthot-bg btn-sm"><span class="icon-label"><i class="fa fa-check-square-o"></i> </span><span class="btn-text">&nbsp;Verifikasi</span></button>&nbsp;&nbsp;
                  <button class="btn btn-yellow btn-wth-icon icon-wthot-bg btn-sm"><span class="icon-label"><i class="fa fa-print"></i> </span><span class="btn-text">&nbsp;Cetak Data</span></button>&nbsp;&nbsp;
                  <button class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm"><span class="icon-label"><i class="fa fa-file-pdf-o"></i> </span><span class="btn-text">&nbsp;Export to Pdf</span></button>&nbsp;&nbsp;
                  <button class="btn btn-success btn-wth-icon icon-wthot-bg btn-sm"><span class="icon-label"><i class="fa fa-file-excel-o"></i> </span><span class="btn-text">&nbsp;Export to Excel</span></button>&nbsp;&nbsp;
                  <button class="btn btn-info btn-wth-icon icon-wthot-bg btn-sm"><span class="icon-label"><i class="fa fa-file-word-o"></i> </span><span class="btn-text">&nbsp; Export to Docx</span></button>
                </div>  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example5" class="table table-striped table-hover display nowrap" style="width:100%">
					<thead>
						<tr class="bg-success">
							              <th>NIM</th>
                            <th>Nama</th>
                            <th>Tempat, Tgl Lahir</th>
                            <th>Jenis Beasiswa</th>
                            <th>Jurusan</th>
                            <th align="right">Action</th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($pmrku as $pmr): ?>
						<tr>
							
							 <td scope="row"><?php echo $pmr->nis ?></td>
                                                    <td><?php echo $pmr->nm_siswa ?></td>
                                                    <td><?php echo $pmr->tmp_lahir ?>, <?php echo $pmr->tgl_lahir ?></td>
                                                    <td>
                                                    <?php if ($pmr->unit_pmr == "Full"){ ?>
                                                        <span class="badge badge-info"><?php echo $pmr->unit_pmr ?></span>
                                                        <?php }else if($pmr->unit_pmr == "SemiFull") { ?>
                                                        <span class="badge badge-success"><?php echo $pmr->unit_pmr ?></span>
                                                        <?php }else{ ?>
                                                        <span class="badge badge-danger"><?php echo $pmr->unit_pmr ?></span>
                                                        <?php } ?>

                                                    </td>
                                                    <td><?php echo $pmr->status ?></td>
                                                                                    
                                                    <td  width="110">
                                                    <a href="#" data-toggle="tooltip" class="btn btn-info btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Edit"><span class="icon-label"><i class="fa fa-pencil"></i> </span><span class="btn-text"></span></a>
                                                    <a href="#" data-toggle="tooltip" class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Hapus"><span class="icon-label"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                                                    <a href="#" data-toggle="tooltip" class="btn btn-yellow btn-wth-icon icon-wthot-bg btn-sm" data-original-title="View Berkas"><span class="icon-label"><i class="fa fa-bookmark"></i> </span><span class="btn-text"></span></a>
                                                                                           
                                                    </td>

						</tr>
					<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th>NIM</th>
                            <th>Nama</th>
                            <th>Tempat, Tgl Lahir</th>
                            <th>Jenis Beasiswa</th>
                            <th>Jurusan</th>
                            <th align="right">Action</th>

						</tr>
					</tfoot>
				</table>
				</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->      
        </div>  
		  
		
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="#">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">Kris-Proyek TI</a>
		  </li>
		</ul>
    </div>
	  &copy; 2019 <a href="https://www.multipurposethemes.com/">STMIK CIC</a>. All Rights Reserved.
  </footer>
 

      <!-- jQuery 3 -->
	<script src="<?php echo base_url();?>assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- popper -->
	<script src="<?php echo base_url();?>assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo base_url();?>assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="<?php echo base_url();?>assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="<?php echo base_url();?>assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Superieur Admin App -->
	<script src="<?php echo base_url();?>assets/js/template.js"></script>
	
	<!-- Superieur Admin for demo purposes -->
	<script src="<?php echo base_url();?>assets/js/demo.js"></script>
	
	<!-- This is data table -->
    <script src="<?php echo base_url();?>assets/vendor_components/datatable/datatables.min.js"></script>
	
	<!-- Superieur Admin for Data Table -->
	<script src="<?php echo base_url();?>assets/js/pages/data-table.js"></script>
	

</body>
</html>
