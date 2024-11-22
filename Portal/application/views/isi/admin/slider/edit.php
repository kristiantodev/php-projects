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
              <h5 class="box-title">Form Edit Slider</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/admin/slider/edit') ?>" method="post" enctype="multipart/form-data">
             <input type="hidden" name="id_slider" value="<?php echo $slider->id_slider?>"/>
             <center><img src="<?php echo base_url('assets/images/slider/'.$slider->foto) ?>" width='360' height='250' alt=""></center>
          
                         <div class="form-group">
                            <h5>Ganti Foto Slider<span class="text-danger">*</span></h5>
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
                         <input type="hidden" name="old_image" value="<?php echo $slider->foto ?>"/>
                         <div class="form-group">
                            <h5>Keterangan <span class="text-danger">*</span></h5>
                            <div class="controls">
                               <textarea name="keterangan" id="editor1" class="form-control <?php echo form_error('nm_album') ? 'is-invalid':'' ?>"><?php echo $slider->keterangan ?></textarea>
                              <font color="red"><?php echo form_error('keterangan') ?></font>
                        </div>
                        <br>
                        <div class="form-group">
                            <h5>Jadikan Foto Awal Slider<span class="text-danger">*</span></h5>
                  
                                <select name="status" id="select" class="form-control <?php echo form_error('page') ? 'is-invalid':'' ?>">
                                 <?php if ($slider->status == "active"){ ?>
                                 <option value="-">Tidak</option>
                                 <option value="active" selected>Ya</option>
                                 <?php }else{ ?>
                                  <option value="-" selected>Tidak</option>
                                 <option value="active">Ya</option>
                                 <?php } ?>

                                </select>
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