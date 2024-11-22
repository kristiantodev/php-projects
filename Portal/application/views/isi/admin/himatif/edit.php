   <script src="<?php echo base_url();?>assets/vendor_components/ckeditor/ckeditor.js"></script>
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
              <h5 class="box-title">Form Edit Profil Himatif</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/admin/himatif/edit') ?>" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id_himatif" value="<?php echo $himatif->id_himatif ?>" class="form-control">
<center><img src="<?php echo base_url('assets/images/himatif/'.$himatif->logo) ?>" height ="150" alt=""><br></center>
              <div class="form-group">
                            <h5>Ganti Logo Himatif<span class="text-danger">*</span></h5>
                            <div class="controls">
                            <div class="input-group">
                                 <div class="input-group-addon bg-dark">
                                  &nbsp;&nbsp;<i class="fa fa-picture-o"></i>&nbsp;&nbsp;
                                 </div>
                                <input type="file" name="logo" class="form-control"> 
                                            <div class="input-group-addon bg-dark">
                                            <i class="fa fa-exclamation-circle"></i>&nbsp; Max : 2 MB. Format : .jpg, .png, .gif.
                                            </div>
                                </div>
                           </div>
                         </div>
                         <input type="hidden" name="old_image" value="<?php echo $himatif->logo ?>" />
<div class="form-group">
                            <h5>Informasi Himatif  <span class="text-danger">*</span></h5>
                            <div class="controls">
                               <textarea id="editor3" name="info_himatif" rows="10" cols="80"><?php echo $himatif->info_himatif ?>
                    </textarea>
                    <script>
   CKEDITOR.replace('editor3');
                  </script>
                        </div>
                        <br>

        <div class="row">
          <div class="col-md-6">
            <h5>Visi <span class="text-danger">*</span></h5>
            <textarea id="editor1" name="visi" rows="10" cols="80"> <?php echo $himatif->visi ?>
                    </textarea>
          </div>
         
          <div class="col-md-6">
            <h5>Misi<span class="text-danger">*</span></h5>
            <textarea id="editor2" name="misi" rows="10" cols="80"><?php echo $himatif->misi ?>
                    </textarea>
                    <script>
   CKEDITOR.replace('editor2');
                  </script>
          </div>
        </div>
<hr>

<div class="form-group">
                            <h5>Ganti Struktur Organisasi<span class="text-danger">*</span></h5>
                            <div class="controls">
                            <div class="input-group">
                                 <div class="input-group-addon bg-dark">
                                  &nbsp;&nbsp;<i class="fa fa-picture-o"></i>&nbsp;&nbsp;
                                 </div>
                                <input type="file" name="struktur_organisasi" class="form-control"> 
                                            <div class="input-group-addon bg-dark">
                                            <i class="fa fa-exclamation-circle"></i>&nbsp; Max : 2 MB. Format : .jpg, .png, .gif.
                                            </div>
                                </div>
                           </div>
                         </div>
                         <input type="hidden" name="old_image2" value="<?php echo $himatif->struktur_organisasi ?>" />
       
         
                    
          
                        <hr>
                        <b>* NOTE :</b> Silahkan Ubah Struktur Organisasi jika sudah selesai masanya.
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

  <script>
   CKEDITOR.replace('editor2');
  </script>