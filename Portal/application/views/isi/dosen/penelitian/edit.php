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
              <form action="<?php base_url('page/dosen/penelitian/edit') ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id_penelitian" value="<?php echo $p->id_penelitian?>"/>
               <input type="hidden" name="id_user" value="<?php echo $p->id_user?>"/>
               <div class="form-group">
                            <h5>Judul Penelitian<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" value="<?php echo $p->judul_penelitian?>" name="judul_penelitian" class="form-control <?php echo form_error('judul_penelitian') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('judul_penelitian') ?></font>
                        </div>
               <div class="row">
          <div class="col-md-4">
            <h5>Tempat Publikasi<span class="text-danger">*</span></h5>
            <input type="text" value="<?php echo $p->tempat_publikasi?>" name="tempat_publikasi" class="form-control">

          </div>
          <div class="col-md-6">
           <h5>Link<span class="text-danger">*</span></h5>
            <input type="text" value="<?php echo $p->link ?>" name="link" class="form-control">
          </div>
          <div class="col-md-2">
            <h5>Tahun <span class="text-danger">*</span></h5>
            <input type="number" value="<?php echo $p->tahun?>" name="tahun" class="form-control">
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