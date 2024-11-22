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
              <h5 class="box-title">Form Tambah Publikasi</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/dosen/publikasi/tambah') ?>" method="post" enctype="multipart/form-data">
               <div class="form-group">
                            <h5>Judul Publikasi (Jurnal / Prosiding)<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="judul_publikasi" class="form-control <?php echo form_error('judul_publikasi') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('judul_publikasi') ?></font>
                        </div>
               <div class="row">
          <div class="col-md-6">
           <h5>Jenis Publikasi<span class="text-danger">*</span></h5>
        <div class="demo-radio-button">
          <input name="jenis_publikasi" value="Jurnal" type="radio" id="radio_48" class="with-gap radio-col-navy" checked />
          <label for="radio_48">Jurnal</label>         
          <input name="jenis_publikasi" value="Prosiding" type="radio" id="radio_49" class="with-gap radio-col-navy" />
          <label for="radio_49">Prosiding</label>
        </div>
          </div>
          <div class="col-md-6">
            <h5>Status<span class="text-danger">*</span></h5>
           <div class="demo-radio-button">
          <input name="status" value="Publish" type="radio" id="radio_30" class="with-gap radio-col-navy" checked />
          <label for="radio_30">Publish Umum</label>         
          <input name="status" value="Hanya Saya" type="radio" id="radio_39" class="with-gap radio-col-navy" />
          <label for="radio_39">Hanya Saya</label>
        </div>
          </div>
        </div>

        <div class="form-group">
                            <h5>File Publikasi <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <div class="input-group">
                                 <div class="input-group-addon bg-dark">
                                  &nbsp;&nbsp;<i class="fa fa-picture-o"></i>&nbsp;&nbsp;
                                 </div>
                                <input type="file" name="file" class="form-control"> 
                                            <div class="input-group-addon bg-dark">
                                            <i class="fa fa-exclamation-circle"></i>&nbsp; Max : 2 MB. Format : Gambar atau Berkas.
                                            </div>
                                </div>
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