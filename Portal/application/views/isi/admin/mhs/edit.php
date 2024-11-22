   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
           <?php if ($this->session->flashdata('success')): ?>
                               <div class='alert bg-success alert-dismissible'>
                               <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                                   <h4><i class="icon fa fa-check-square"></i> Success !!</h4>
                        <?php echo $this->session->flashdata('success'); ?></div>
                            <?php endif; ?>
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

<form action="<?php base_url('page/admin/mhs/edit') ?>" method="post" enctype="multipart/form-data">
               <div class="row">
          <div class="col-md-6">
            <h5>NIM<span class="text-danger">*</span></h5>
            <input type="text" readonly value="<?php echo $mhs->nim?>" name="nim" class="form-control <?php echo form_error('nim') ? 'is-invalid':'' ?>">
             <font color="red"><?php echo form_error('nim') ?></font>
          </div>
          <div class="col-md-6">
           <h5>Nama Mahasiswa <span class="text-danger">*</span></h5>
            <input type="text" name="nama" value="<?php echo $mhs->nama?>" class="form-control">
          </div>

          <div class="col-md-6">
          <br>
            <h5> Angkatan <span class="text-danger">*</span></h5>
            <input type="number" name="angkatan" value="<?php echo $mhs->angkatan?>" class="form-control">
          </div>
        <br>
          <div class="col-md-6">
           <br>
            <h5>Password<span class="text-danger">*</span></h5>
            <input type="password" name="password" value="<?php echo $mhs->password?>" class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>">
             <font color="red"><?php echo form_error('password') ?></font>
          </div>
          </div>
          <input type="hidden" name="old_image" value="<?php echo $mhs->foto?>" class="form-control">
        
                        <hr>
                        <button type="submit" class="btn btn-outline btn-success"><b><i class='fa fa-upload'></i> &nbsp;&nbsp;Edit</b>&nbsp;&nbsp;</button>  
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