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
              <h5 class="box-title">Form Edit Mahasiswa</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/admin/mahasiswa/edit') ?>" method="post" enctype="multipart/form-data">
               <div class="row">
                <div class="col-md-6">
                  <h5>NIM <span class="text-danger">*</span></h5>
                  <input type="text" readonly value="<?php echo $mahasiswa->nim ?>" name="nim" class="form-control  <?php echo form_error('nim') ? 'is-invalid':'' ?>">
                <font color="red"><?php echo form_error('nim') ?></font>
                </div>

                <div class="col-md-6">
                  <h5>Nama Mahasiswa <span class="text-danger">*</span></h5>
                  <input type="text" value="<?php echo $mahasiswa->nm_mhs ?>" name="nm_mhs" class="form-control">
                  <br>
                </div>

                <div class="col-md-3">
                  <h5>Jenis kelamin <span class="text-danger">*</span></h5>
           <div class="demo-radio-button">
<?php if ($mahasiswa->jk == "L"){ ?>
          <input name="jk" value="L" type="radio" id="radio_30" class="with-gap radio-col-navy" checked />
          <label for="radio_30">Laki-Laki</label>         
          <input name="jk" value="P" type="radio" id="radio_39" class="with-gap radio-col-navy" />
          <label for="radio_39">Perempuan</label>
<?php }else{ ?> 
          <input name="jk" value="L" type="radio" id="radio_30" class="with-gap radio-col-navy" />
          <label for="radio_30">Laki-Laki</label>         
          <input name="jk" value="P" type="radio" id="radio_39" class="with-gap radio-col-navy" checked />
          <label for="radio_39">Perempuan</label>
<?php } ?>
        </div>
                </div>

                <div class="col-md-9">
                  <h5>Angkatan <span class="text-danger">*</span></h5>
                  <input type="number" value="<?php echo $mahasiswa->angkatan ?>" name="angkatan" class="form-control">
                  <br>
                </div>

                <div class="col-md-3">
                  <h5>Status <span class="text-danger">*</span></h5>
           <div class="demo-radio-button">
           <?php if ($mahasiswa->status == "Aktif"){ ?>
          <input name="status" value="Aktif" type="radio" id="radio_48" class="with-gap radio-col-navy" checked />
          <label for="radio_48">Aktif</label>         
          <input name="status" value="Tidak Aktif" type="radio" id="radio_49" class="with-gap radio-col-navy" />
          <label for="radio_49">Tidak Aktif</label>
          <?php }else{ ?> 
          <input name="status" value="Aktif" type="radio" id="radio_48" class="with-gap radio-col-navy" />
          <label for="radio_48">Aktif</label>         
          <input name="status" value="Tidak Aktif" type="radio" id="radio_49" class="with-gap radio-col-navy" checked />
          <label for="radio_49">Tidak Aktif</label>
          <?php } ?>
        </div>
                </div>

                <div class="col-md-9">
                  <h5>Alamat <span class="text-danger">*</span></h5>
                  <textarea name="alamat" class="form-control"><?php echo $mahasiswa->alamat ?></textarea>
                  <br>
                </div>


<div class="col-md-5">
                  <h5>Password <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" value="<?php echo $mahasiswa->password ?>" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('password') ?></font>
                </div>

                <div class="col-md-7">
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
               
  <input type="hidden" name="old_image" value="<?php echo $mahasiswa->foto?>" />

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