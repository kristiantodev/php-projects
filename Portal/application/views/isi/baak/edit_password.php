   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
   <?php if ($this->session->flashdata('successs')): ?>
             
                               <div class='alert bg-success alert-dismissible'>
                               <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                                   <h4><i class="icon fa fa-check-square"></i> Success !!</h4>
                        <?php echo $this->session->flashdata('successs'); ?></div>
                            <?php endif; ?> 

                            <?php if ($this->session->flashdata('success')): ?>
             
                               <div class='alert bg-danger alert-dismissible'>
                               <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                                   <h4><i class="icon fa fa-close"></i> Gagal !!</h4>
                        <?php echo $this->session->flashdata('success'); ?></div>
                            <?php endif; ?> 
  </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">          
          
          <div class="box box-solid bg-dark2">
            <div class="box-header">
              <h5 class="box-title">Form Ganti Password</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/admin/myprofil/ganti_password') ?>" method="post" enctype="multipart/form-data">
              
               <div class="form-group">
                            <h5>Password Lama<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="current_password" class="form-control <?php echo form_error('current_password') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('current_password') ?></font>
                </div>

                <div class="form-group">
                            <h5>Password Baru <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="pass_baru" class="form-control <?php echo form_error('pass_baru') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('pass_baru') ?></font>
                </div>

                <div class="form-group">
                            <h5>Ulangi Password Baru <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" name="pass_baru2" class="form-control <?php echo form_error('pass_baru2') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('pass_baru2') ?></font>
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