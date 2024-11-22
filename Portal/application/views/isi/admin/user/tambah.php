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
              <h5 class="box-title">Form Tambah User Login</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/admin/user/tambah') ?>" method="post" enctype="multipart/form-data">
               <div class="form-group">
                            <h5>Username <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="username" class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('username') ?></font>
                </div>

                <div class="form-group">
                            <h5>Password <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('password') ?></font>
                </div>

        <div class="row">
          <div class="col-md-3">
            <h5>Level User <span class="text-danger">*</span></h5>
           <div class="demo-radio-button">
          <input name="level" value="Administrator" type="radio" id="radio_30" class="with-gap radio-col-navy"/>
          <label for="radio_30">Administrator</label>         
          <input name="level" value="Kaprodi" type="radio" id="radio_39" class="with-gap radio-col-navy"/>
          <label for="radio_39">Kaprodi</label>
          <input name="level" value="BAAK" type="radio" id="radio_40" class="with-gap radio-col-navy"/>
          <label for="radio_40">BAAK</label>
        </div>

          </div>
          <div class="col-md-9">
            <h5>Nama User <span class="text-danger">*</span></h5>
            <input type="text" name="nm_user" class="form-control" required> </div>
          </div>

          <div class="row">
          <div class="col-md-3">
            <h5>Status User <span class="text-danger">*</span></h5>
           <div class="demo-radio-button">
          <input name="status" value="Aktif" type="radio" id="radio_48" class="with-gap radio-col-navy" checked />
          <label for="radio_48">Aktif</label>         
          <input name="status" value="Tidak Aktif" type="radio" id="radio_49" class="with-gap radio-col-navy" />
          <label for="radio_49">Tidak Aktif</label>
        </div>

          </div>
          <div class="col-md-9">
            <h5>Foto <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <div class="input-group">
                                 <div class="input-group-addon bg-dark">
                                  &nbsp;&nbsp;<i class="fa fa-picture-o"></i>&nbsp;&nbsp;
                                 </div>
                                <input type="file" name="avatar" class="form-control"> 
                                            <div class="input-group-addon bg-dark">
                                            <i class="fa fa-exclamation-circle"></i>&nbsp; Max : 2 MB. Format : .jpg, .png, .gif.
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