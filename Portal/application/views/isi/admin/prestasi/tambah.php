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
              <h5 class="box-title">Form Tambah Foto Gallery</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/admin/prestasi/tambah') ?>" method="post" enctype="multipart/form-data">
                      <div class='row'>
                      <div class="col-md-6">
            <h5>Nama Mahasiswa<span class="text-danger">*</span></h5>
            <input type="text" name="nm_mhs" class="form-control <?php echo form_error('nm_mhs') ? 'is-invalid':'' ?>">
             <font color="red"><?php echo form_error('nm_mhs') ?></font>
          </div>

          <div class="col-md-6">
           <h5>Jurusan<span class="text-danger">*</span></h5>
            <input type="text" name="jenis_prestasi" class="form-control">
          </div>
          </div>
          <br>
                         <div class="form-group">
                            <h5>Foto <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <div class="input-group">
                                 <div class="input-group-addon bg-dark">
                                  &nbsp;&nbsp;<i class="fa fa-picture-o"></i>&nbsp;&nbsp;
                                 </div>
                                <input type="file" name="foto" class="form-control"> 
                                            <div class="input-group-addon bg-dark">
                                            <i class="fa fa-exclamation-circle"></i>&nbsp; Max : 2 MB. Format : .jpg, .png, .gif.
                                            </div>
                                </div>
                           </div>
                         </div>
                         <div class="form-group">
                            <h5>Detail Prestasi <span class="text-danger">*</span></h5>
                            <div class="controls">
                               <textarea name="detail_prestasi" id="editor1" class="form-control <?php echo form_error('detail_prestasi') ? 'is-invalid':'' ?>"></textarea>
                              <font color="red"><?php echo form_error('detail_prestasi') ?></font>
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