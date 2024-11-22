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
              <h5 class="box-title">Form Edit Kegiatan Penunjang</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/admin/penunjang/edit') ?>" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id_penunjang" value="<?php echo $p->id_penunjang?>"/>
               <input type="hidden" name="id_user" value="<?php echo $p->id_user?>"/>
               <center><img src="<?php echo base_url('assets/images/sertifikat/'.$p->sertifikat) ?>" width='300' height='200' alt=""></center>
               <br>
               <div class="form-group">
                            <h5>Nama Acara Kegiatan Penunjang<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" value="<?php echo $p->nm_acara?>" name="nm_acara" class="form-control <?php echo form_error('nm_acara') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('nm_acara') ?></font>
                        </div>

               <div class="row">
          <div class="col-md-4">
            <h5>Status Kepanitiaan (Ketua/Wakil/Dsb) <span class="text-danger">*</span></h5>
            <input type="text" value="<?php echo $p->status_kepanitiaan?>" name="status_kepanitiaan" class="form-control">
          </div>

          <div class="col-md-4">
            <h5>Tahun<span class="text-danger">*</span></h5>
            <input type="number" value="<?php echo $p->tahun?>" name="tahun" class="form-control">
          </div>
          
          <div class="col-md-4">
            <h5>Privasi Sertifikat <span class="text-danger">*</span></h5>
            <select name="privasi" id="select" class="form-control <?php echo form_error('Jenis Matkul') ? 'is-invalid':'' ?>">
             <?php if ($p->privasi == "Umum"){ ?>
             <option value="Umum" selected>Diakses Umum</option>
             <option value="Private">Hanya Saya</option>
             <?php }else{ ?>
             <option value="Umum">Diakses Umum</option>
             <option value="Private"  selected>Hanya Saya</option>
             <?php } ?>

             </select>
          </div>
        </div>
        
         <br>

         <div class="form-group">
                            <h5>URL Sertifikat<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" value="<?php echo $p->url_sertifikat ?>"  name="url_sertifikat" class="form-control"> </div>
                        </div>

        <div class="form-group">
                            <h5>Ganti / Upload Sertifikat<span class="text-danger">*</span></h5>
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
                         <input type="hidden" name="old_image" value="<?php echo $p->sertifikat ?>" />
                        
                        <hr>
                        <b>* NOTE :</b> Bisa dengan Upload File, atau melalui URL. Pilih salah satu.
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