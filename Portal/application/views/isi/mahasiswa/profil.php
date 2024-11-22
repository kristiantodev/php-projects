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
              <h5 class="box-title">My Profil</h5>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/mahasiswa/profil/') ?>" method="post" enctype="multipart/form-data">
              
               <table>  
               <tr>
               <td width="250">                  
               <div class="col-4">
                            <div class="product-img">
                  <img src="<?php echo base_url('assets/images/mahasiswa/'.$mhsprofil->foto) ?>" width='170' height='180' alt="">
                  <div class="fileupload btn btn-outline btn-success">
                    <span><i class="ion-upload mr-5"></i>Change Foto Profil</span>
                    <input type="file" name="foto" class="upload">
                  </div>
                </div>
          </div>
          </td>
          <td width="500">

               <div class="form-group">
                            <h5>NIM <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" readonly value="<?php echo $this->session->userdata('nim'); ?>" name="nim" class="form-control"> </div>
                </div>

                <div class="form-group">
                            <h5>Nama Mahasiswa <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" readonly value="<?php echo $mhsprofil->nama ?>" name="nama" class="form-control"> </div>
                </div>

                <div class="form-group">
                            <h5>Angkatan <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" readonly value="<?php echo $mhsprofil->angkatan?>" name="angkatan" class="form-control"> </div>
                </div>
                <div class="form-group">
                            <h5>Password <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="password" value="<?php echo $mhsprofil->password?>" name="password" class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"> </div>
                <font color="red"><?php echo form_error('password') ?></font>
                </div>

  
                           
                         <input type="hidden" name="old_image" value="<?php echo $mhsprofil->foto?>" />
                         </td>
                         </tr>
                         </table>


                        <hr>
                        <p align="center">
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