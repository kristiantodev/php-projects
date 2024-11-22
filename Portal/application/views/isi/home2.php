   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
    <!-- Main content -->
    <section class="content">
      <div class="row">
      
    <div class="col-12">
         <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xl-3 col-md-6 col-6">
          <!-- small box -->
          <div class="small-box box-inverse bg-primary">
            <div class="inner">
              
         <h3><?php $tgl = date('y-m-d');
               $array2 = array('id_user' => $this->session->userdata('id_user'), 'tgl_kunjungan' => $tgl);
              echo $this->db->where($array2)->count_all_results('statistik');?>x </h3>
              
              <p> Dikunjungi hari ini</p>
             
            </div>
            <div class="icon text-white">
              <i class="fa fa-bar-chart"></i>
            </div>
            <a href="<?php echo site_url();?>page/dosen/grafik" class="small-box-footer">Grafik Kunjungan Harian <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-xl-3 col-md-6 col-6">
          <!-- small box -->
          <div class="small-box box-inverse bg-img">
            <div class="inner">
              <h3><?php echo $this->db->where('id_user', $this->session->userdata('id_user'))->count_all_results('materi');?></h3>

              <p>File Materi</p>
            </div>
            <div class="icon text-white">
              <i class="fa fa-file-pdf-o"></i>
            </div>
            <a href="<?php echo site_url();?>page/dosen/materi" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-xl-3 col-md-6 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php echo $this->db->where('id_user', $this->session->userdata('id_user'))->count_all_results('gallery');?></h3>

              <p>Galeri Foto</p>
            </div>
            <div class="icon text-white">
              <i class="fa fa-image"></i>
            </div>
            <a href="<?php echo site_url();?>page/dosen/gallery" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-xl-3 col-md-6 col-6">
          <!-- small box -->
          <div class="small-box box-inverse bg-img">
            <div class="inner">
              <h3><?php $array = array('id_user' => $this->session->userdata('id_user'), 'tgl_tamu' => date('y-m-d'));
              echo $this->db->where($array)->count_all_results('buku_tamu');?>
              </h3>

              <p>Buku Tamu hari ini</p>
            </div>
            <div class="icon text-white">
              <i class="fa fa-envelope"></i>
            </div>
            <a href="<?php echo site_url();?>page/dosen/buku_tamu" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->


<!-- BATAS -->
 <div class="row">  
    <div class="col-12 col-lg-6">
<!-- Bar CHART -->
           <!-- Bar CHART -->
        <div class="box">
        <div class="box-header with-border bg-pale-primary">
          <h4 class="box-title">Grafik Kunjungan My Blog Tahun <?php echo date('Y'); ?></h4>
        </div>
        <div class="box-body">
          <canvas id="chart_8" height="300"></canvas>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->  
          </div>
          <!-- /.box -->
<div class="col-lg-6 col-12">
          <div class="box">
          <div class="box-header with-border bg-pale-primary">
          <h5 class="box-title">Buku Tamu Hari ini : <?php echo Date('d M Y'); ?></h5>
        </div>
            <div class="box-body">
      <div class="table-responsive">
        <table id="invoice-list" class="table table-hover no-wrap" data-page-size="10">
          <thead class="thead-light">
            <tr>
              <th><b>No.</b></th>
              <th><b>Nama</b></th>
              <th><b>Email</b></th>
              <th><b>Subjek</b></th>
              <th><b>Pesan</b></th>
             
            </tr>
          </thead>
          <tbody>

           <?php $no=1;
          foreach ($tamuku as $tamu): ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $tamu->nama ?></td>
              <td><?php echo $tamu->email ?></td>
               <td><?php echo $tamu->subjek ?></td>
              <td><?php echo $tamu->pesan ?></td>
              
            </tr>
            <?php endforeach; ?>
           
          </tbody>
        </table>
      </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->

          </div>
          </div>


       <!-- BATAS -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->      
        </div>  
      
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->