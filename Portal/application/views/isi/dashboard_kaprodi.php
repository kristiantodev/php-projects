   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
		  
		<div class="col-12">
         <!-- Small boxes (Stat box) -->
         <div class='alert bg-success alert-dismissible'>
                               <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                                   <h4><i class="icon fa fa-check-square"></i> Level : Kaprodi</h4>
                        Selamat Datang di Website Portal Universitas Catur Insan Cendekia (CIC) Cirebon</div>
      <div class="row">
        <div class="col-xl-3 col-md-6 col-6">
          <!-- small box -->
          <div class="small-box box-inverse bg-img">
            <div class="inner">
              <h3><?php echo $this->db->count_all_results('users'); ?></h3>

              <p>User / Pengguna</p>
            </div>
            <div class="icon text-white">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo site_url();?>page/admin/user" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-xl-3 col-md-6 col-6">
          <!-- small box -->
          <div class="small-box box-inverse bg-primary">
            <div class="inner">

              <h3><?php echo $this->db->count_all_results('agenda'); ?></h3>

              <p>Agenda Kegiatan</p>
            </div>
            <div class="icon text-white">
              <i class="fa fa-envelope"></i>
            </div>
            <a href="<?php echo site_url();?>page/admin/agenda" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-xl-3 col-md-6 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php $array2 = array('id_user' => "Admin", 'status' => 'Ya');
              echo $this->db->where($array2)->count_all_results('artikel');?></h3>

              <p>Posting Artikel</p>
            </div>
            <div class="icon text-white">
              <i class="fa fa-newspaper-o"></i>
            </div>
            <a href="<?php echo site_url();?>page/admin/artikel" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-xl-3 col-md-6 col-6">
          <!-- small box -->
          <div class="small-box box-inverse bg-img">
            <div class="inner">

              <h3><?php $tgl = date('y-m-d');
               $array2 = array('id_user' => "Admin", 'tgl_kunjungan' => $tgl);
              echo $this->db->where($array2)->count_all_results('statistik');?>x</h3> 

              <p>Dikunjungi hari ini</p>
            </div>
            <div class="icon text-white">
              <i class="fa fa-bar-chart"></i>
            </div>
            <a href="<?php echo site_url();?>page/admin/grafik" class="small-box-footer">Grafik Kunjungan Harian <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->



            <!-- /.box-body -->
          </div>
          <!-- /.box -->      
        </div>  
		  
		
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->