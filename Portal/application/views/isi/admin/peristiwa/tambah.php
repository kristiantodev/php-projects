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
              <h5 class="box-title">Post Peristiwa</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/admin/peristiwa/tambah') ?>" method="post" enctype="multipart/form-data">
               <table width="96%">
               <tr>
               <td width="220">
             
                <div class="product-img">
                  <img src="<?php echo base_url();?>assets/images/default.jpg" width='170' height='180' alt="">
                  <div class="fileupload btn btn-outline btn-success">
                    <span><i class="ion-upload mr-5"></i>Upload Foto Peristiwa</span>
                    <input type="file" name="foto" class="upload">
                  </div>
                </div>
                             </td>
                             <td>
                               <div class="form-group">
                            <h5>Judul Peristiwa <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="jdl_peristiwa" class="form-control <?php echo form_error('jdl_peristiwa') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('jdl_peristiwa') ?></font>
                </div>

                <div class="form-group">
                            <h5>Publish ke Website<span class="text-danger">*</span></h5>
                  
                                <select name="status" id="select" required class="form-control <?php echo form_error('page') ? 'is-invalid':'' ?>">
                  
                                 <option value="Ya">Ya</option>
                                 <option value="Tidak">Tidak</option>

                                </select>
                             </div>
                             </td>
                             </tr>
                             <tr>
                             <td width="250"></td>
               <td>
                        
                    <div class="form-group">
                            <h5>Isi Peristiwa <span class="text-danger">*</span></h5>
                            <div class="controls">
                               <textarea id="editor1" name="isi" rows="10" cols="80">
                    </textarea>
                        </div>
                         
                             </td>
                             
                             </table>

                  
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