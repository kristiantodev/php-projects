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
              <h5 class="box-title">Form Tambah Kegiatan Penunjang</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/admin/penunjang/tambah') ?>" method="post" enctype="multipart/form-data">
               <div class="form-group">
                            <h5>Nama Acara Kegiatan Penunjang<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="nm_acara" class="form-control <?php echo form_error('nm_acara') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('nm_acara') ?></font>
                        </div>

               <div class="row">
          <div class="col-md-4">
            <h5>Status Kepanitiaan (Ketua/Wakil/Dsb) <span class="text-danger">*</span></h5>
            <input type="text" name="status_kepanitiaan" class="form-control">
          </div>

          <div class="col-md-4">
            <h5>Tahun<span class="text-danger">*</span></h5>
            <input type="number" name="tahun" class="form-control">
          </div>
          
          <div class="col-md-4">
            <h5>Privasi Sertifikat <span class="text-danger">*</span></h5>
            <select name="privasi" id="select" class="form-control <?php echo form_error('Jenis Matkul') ? 'is-invalid':'' ?>">
             <option value="">--Pilih Privasi--</option>
             <option value="Umum">Diakses Umum</option>
             <option value="Private">Hanya Saya</option>
             </select>
          </div>
        </div>
          <br>

        <div class="form-group">
                            <h5>URL Sertifikat<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="url_sertifikat" class="form-control"> </div>
                        </div>
       
        <div class="form-group">
                            <h5>Upload Sertifikat <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <div class="input-group">
                                 <div class="input-group-addon bg-dark">
                                  &nbsp;<i class="fa fa-picture-o"></i>&nbsp;
                                 </div>
                                <input type="file" name="sertifikat" class="form-control"> 
                                            <div class="input-group-addon bg-dark">
                                            <i class="fa fa-exclamation-circle"></i>&nbsp; Max : 2 MB. Format : .jpg, .png, .gif.
                                            </div>
                                </div>
                           </div>
                         </div>
                  <b>* NOTE :</b> Bisa dengan Upload File, atau melalui URL. Pilih salah satu.     
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