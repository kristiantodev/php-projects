
              <!-- Menu Body -->
              <li class="user-body">

          <a class="dropdown-item" href="<?php echo site_url();?>page/admin/myprofil/ganti_password"><i class="ion ion-settings"></i> Ganti Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url(). 'login/logout' ?>"><i class="ion-log-out"></i> Logout</a>
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
      <img src="<?php echo base_url('assets/images/user/'.$myuser->avatar) ?>" class="user-image rounded-circle" alt="user">
              <span>
        <span class="d-block font-weight-600 font-size-16"><?php echo $myuser->nm_user?></span>
        <span class="email-id"><?php echo $this->session->userdata('level'); ?></span>
        </span>
          </a>
        </li>
        

        <?php
        $hal = $this->uri->segment(3);
        ?>

        <li class="header nav-small-cap">&nbsp;&nbsp;
        <i class="mdi mdi-drag-horizontal mr-5"></i>
        <i class="mdi mdi-drag-horizontal mr-5"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <b>MENU ADMIN </b>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <i class="mdi mdi-drag-horizontal mr-5"></i>
         <i class="mdi mdi-drag-horizontal mr-5"></i>
       </li>


         <li class="<?=($hal=='dashboard')?'active':'';?><?=($hal=='buku_tamu')?'active':'';?>">
          <a href="<?php echo site_url();?>page/admin/dashboard">
            <i class="fa fa-home"></i>&nbsp;&nbsp;
      <span>Dashboard</span>
          </a>
        </li>  
    
        <li class="<?=($hal=='user')?'active':'';?>">
          <a href="<?php echo site_url();?>page/admin/user">
            <i class="fa fa-user-plus"></i>&nbsp;&nbsp;
      <span>Pengguna</span>
          </a>
        </li> 

        <li class="treeview <?=($hal=='kegiatan')?'active':'';?><?=($hal=='kerjasama')?'active':'';?><?=($hal=='link')?'active':'';?><?=($hal=='mhsprestasi')?'active':'';?><?=($hal=='kategori')?'active':'';?><?=($hal=='pengumuman')?'active':'';?><?=($hal=='artikel')?'active':'';?><?=($hal=='agenda')?'active':'';?>">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;
            <span>Master Portal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">       
            <li class="<?=($hal=='artikel')?'active':'';?>"><a href="<?php echo site_url();?>page/admin/artikel"><i class="mdi mdi-toggle-switch-off"></i>Berita</a></li>
            <li class="<?=($hal=='kegiatan')?'active':'';?>"><a href="<?php echo site_url();?>page/admin/kegiatan"><i class="mdi mdi-toggle-switch-off"></i>Kegiatan</a></li>
			<li class="<?=($hal=='kategori')?'active':'';?>"><a href="<?php echo site_url();?>page/admin/kategori"><i class="mdi mdi-toggle-switch-off"></i>Kategori Informasi</a></li>
            <li class="<?=($hal=='agenda')?'active':'';?>"><a href="<?php echo site_url();?>page/admin/agenda"><i class="mdi mdi-toggle-switch-off"></i>Agenda</a></li>
			<li class="<?=($hal=='agenda')?'active':'';?>"><a href="<?php echo site_url();?>page/admin/agenda"><i class="mdi mdi-toggle-switch-off"></i>Info PMB</a></li>
            <li class="<?=($hal=='pengumuman')?'active':'';?>"><a href="<?php echo site_url();?>page/admin/pengumuman"><i class="mdi mdi-toggle-switch-off"></i>Pengumuman</a></li>
            <li class="<?=($hal=='peristiwa')?'active':'';?>"><a href="<?php echo site_url();?>page/admin/peristiwa"><i class="mdi mdi-toggle-switch-off"></i>Hari & Peristiwa Penting</a></li>
            <li class="<?=($hal=='mhsprestasi')?'active':'';?>"><a href="<?php echo site_url();?>page/admin/prestasi"><i class="mdi mdi-toggle-switch-off"></i>Mahasiswa Berprestasi</a></li>
            <li class="<?=($hal=='link')?'active':'';?>"><a href="<?php echo site_url();?>page/admin/link"><i class="mdi mdi-toggle-switch-off"></i>Link</a></li>
          </ul>
        </li>

        <li class="treeview <?=($hal=='gallery')?'active':'';?><?=($hal=='slider')?'active':'';?>">
          <a href="#">
            <i class="fa fa-image"></i>&nbsp;&nbsp;
            <span>Media</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?=($hal=='gallery')?'active':'';?>"><a href="<?php echo site_url();?>page/admin/gallery"><i class="mdi mdi-toggle-switch-off"></i>Galeri</a></li>
            <li class="<?=($hal=='slider')?'active':'';?>"><a href="<?php echo site_url();?>page/admin/slider"><i class="mdi mdi-toggle-switch-off"></i>Slider</a></li>
          </ul>
        </li>



        <li class="<?=($hal=='grafik')?'active':'';?>">
          <a href="<?php echo site_url();?>page/admin/grafik">
            <i class="fa fa-bar-chart"></i>&nbsp;&nbsp;
      <span>Statistik</span>
          </a>
        </li>

        <li class="treeview <?=($hal=='himatif')?'active':'';?><?=($hal=='background')?'active':'';?><?=($hal=='profil')?'active':'';?><?=($hal=='banner')?'active':'';?>">
          <a href="#">
            <i class="fa  fa-gears"></i>&nbsp;&nbsp;
            <span>Setting Website</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?=($hal=='banner')?'active':'';?>"><a href="<?php echo site_url();?>page/admin/banner"><i class="mdi mdi-toggle-switch-off"></i>Banner</a></li>
            <li class="<?=($hal=='profil')?'active':'';?>"><a href="<?php echo site_url();?>page/admin/profil"><i class="mdi mdi-toggle-switch-off"></i>Tentang Universitas</a></li>
            </ul>
        </li>
       


        
    
     