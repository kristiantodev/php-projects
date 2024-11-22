
              <!-- Menu Body -->
              <li class="user-body">

          <a class="dropdown-item" href="<?php echo site_url();?>page/baak/myprofil/ganti_password"><i class="ion ion-settings"></i> Ganti Password</a>
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
         <b>MENU BAAK </b>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <i class="mdi mdi-drag-horizontal mr-5"></i>
         <i class="mdi mdi-drag-horizontal mr-5"></i>
       </li>


         <li class="<?=($hal=='dashboard')?'active':'';?>">
          <a href="<?php echo site_url();?>page/baak/dashboard">
            <i class="fa fa-home"></i>&nbsp;&nbsp;
      <span>Dashboard</span>
          </a>
        </li>  
    
       <li class="treeview <?=($hal=='kegiatan')?'active':'';?><?=($hal=='kerjasama')?'active':'';?><?=($hal=='link')?'active':'';?><?=($hal=='mhsprestasi')?'active':'';?><?=($hal=='kategori')?'active':'';?><?=($hal=='pengumuman')?'active':'';?><?=($hal=='artikel')?'active':'';?><?=($hal=='agenda')?'active':'';?>">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;
            <span>Master Portal BAAK</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">       
            <li class="<?=($hal=='pengumuman')?'active':'';?>"><a href="<?php echo site_url();?>page/baak/pengumuman"><i class="mdi mdi-toggle-switch-off"></i>Pengumuman</a></li>
            <li class="<?=($hal=='agenda')?'active':'';?>"><a href="<?php echo site_url();?>page/baak/agenda"><i class="mdi mdi-toggle-switch-off"></i>Agenda</a></li>
          </ul>
        </li>

        


        
    
     