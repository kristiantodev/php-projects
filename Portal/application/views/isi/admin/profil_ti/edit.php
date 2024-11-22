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
              <h5 class="box-title">Form Edit Tentang Kami</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/admin/profil/edit') ?>" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id_profil" value="<?php echo $profil_ti->id_profil ?>" class="form-control">
                         <input type="hidden" name="old_image" value="<?php echo $profil_ti->icon ?>" />

            <div class="form-group">
                            <h5>Kata Sambutan Rektor<span class="text-danger">*</span></h5>
            <textarea id="editor6" name="sambutan_kaprodi" rows="10" cols="80"><?php echo $profil_ti->sambutan_kaprodi ?>
                    </textarea>
                    <script>
   CKEDITOR.replace('editor6');
                  </script>
                         </div>

        <div class="row">
          <div class="col-md-6">
            <h5>Visi <span class="text-danger">*</span></h5>
            <textarea id="editor1" name="visi" rows="10" cols="80"> <?php echo $profil_ti->visi ?>
                    </textarea>
          </div>
         
          <div class="col-md-6">
            <h5>Misi<span class="text-danger">*</span></h5>
            <textarea id="editor2" name="misi" rows="10" cols="80"><?php echo $profil_ti->misi ?>
                    </textarea>
                    <script>
   CKEDITOR.replace('editor2');
                  </script>
          </div>
        </div>
<hr>

<div class="row">
          <div class="col-md-6">
            <h5>Tujuan <span class="text-danger">*</span></h5>
            <textarea id="editor3" name="tujuan" rows="10" cols="80"><?php echo $profil_ti->tujuan ?>
                    </textarea>
                    <script>
   CKEDITOR.replace('editor3');
                  </script>
          </div>
         
          <div class="col-md-6">
            <h5>Tentang Universitas CIC <span class="text-danger">*</span></h5>
            <textarea id="editor4" name="tentang" rows="10" cols="80"><?php echo $profil_ti->tentang ?>
                    </textarea>
                    <script>
   CKEDITOR.replace('editor4');
                  </script>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-6">
            <h5>Url Gmap <span class="text-danger">* Embeded Url</span></h5>
            <textarea class="form-control" name="url_gmap" rows="10" cols="60"><?php echo $profil_ti->url_gmap ?></textarea>
          </div>
         
          <div class="col-md-6">
            <h5>Alamat <span class="text-danger">*</span></h5>
            <textarea class="form-control"  name="alamat" rows="10" cols="60"><?php echo $profil_ti->alamat ?></textarea>
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

  <script>
   CKEDITOR.replace('editor2');
  </script>