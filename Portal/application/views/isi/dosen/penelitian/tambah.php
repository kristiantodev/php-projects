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
              <h5 class="box-title">Form Tambah Riwayat Penelitian</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/dosen/penelitian/tambah') ?>" method="post" enctype="multipart/form-data">
               <div class="form-group">
                            <h5>Judul Penelitian<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="judul_penelitian" class="form-control <?php echo form_error('judul_penelitian') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('judul_penelitian') ?></font>
                        </div>
               <div class="row">
          <div class="col-md-6">
            <h5>Tempat Publikasi<span class="text-danger">*</span></h5>
            <input type="text" name="tempat_publikasi" class="form-control">

          </div>
          <div class="col-md-6">
            <h5>Tahun <span class="text-danger">*</span></h5>
            <input type="number" name="tahun" class="form-control">
          </div>
        </div>
<br>
        <div class="form-group">
                            <h5>Link/URL<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="link" class="form-control"> </div>
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