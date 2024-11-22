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
              <h5 class="box-title">Form Edit Akun</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/dosen/profil/akun') ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id_user" value="<?php echo $user->id_user?>"/>
               <table>  
               <tr>
               <td width="250">                  
               <div class="col-4">
                            <div class="product-img">
                  <img src="<?php echo base_url('assets/images/user/'.$user->avatar) ?>" width='170' height='180' alt="">
                  <div class="fileupload btn btn-outline btn-success">
                    <span><i class="ion-upload mr-5"></i>Change Foto Profil</span>
                    <input type="file" name="avatar" class="upload">
                  </div>
                </div>
          </div>
          </td>
          <td width="500">

               <div class="form-group">
                            <h5>Username <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" readonly value="<?php echo $user->username?>" name="username" class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('username') ?></font>
                </div>

              <input type="hidden" value="<?php echo $user->password?>" name="password">
              <input type="hidden" value="<?php echo $user->level?>" name="level">
                
                <div class="form-group">
                            <h5>Nama User  <span class="text-danger">*</span></h5>
                            <div class="controls">
                                 <input type="text" name="nm_user" value="<?php echo $user->nm_user?>" class="form-control <?php echo form_error('nm_user') ? 'is-invalid':'' ?>" required> </div>
                        <font color="red"><?php echo form_error('username') ?></font>
                </div>

                <input type="hidden" value="<?php echo $user->status?>" name="status">

           
  
         
                         <input type="hidden" name="old_image" value="<?php echo $user->avatar?>" />
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