   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    
  </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">          
          
          <div class="box box-solid bg-dark2">
            <div class="box-header">
              <h5 class="box-title">Form Tambah Riwayat Pendidikan</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/dosen/riwayat_pendidikan/tambah') ?>" method="post" enctype="multipart/form-data">
               <div class="form-group">
                            <h5>Nama Perguruan Tinggi / Institusi <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="perguruan_tinggi" class="form-control <?php echo form_error('perguruan_tinggi') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('perguruan_tinggi') ?></font>
                        </div>
               <div class="row">
          <div class="col-md-4">
            <h5>Gelar Akademik<span class="text-danger">*</span></h5>
            <input type="text" name="gelar_akademik" class="form-control">

          </div>
          <div class="col-md-4">
           <h5>Tahun Ijazah <span class="text-danger">*</span></h5>
            <input type="number" name="tahun_ijazah" class="form-control">
          </div>
          <div class="col-md-4">
            <h5>Jenjang <span class="text-danger">*</span></h5>
            <input type="text" name="jenjang" class="form-control">
          </div>
        </div>
        
                        <hr>
                        <p align="right">
                        <button type="submit" class="btn btn-outline btn-success"><b><i class='fa fa-save'></i> &nbsp;&nbsp;Simpan</b>&nbsp;&nbsp;</button>&nbsp;&nbsp;
                        <button type="reset" class="btn btn-outline btn-danger"><b><i class='fa fa-close'></i> &nbsp;&nbsp;Reset</b>&nbsp;&nbsp;</button>
                    </p>   
              </form>
            </div>
          </div>
          <!-- /.box -->

        
          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->