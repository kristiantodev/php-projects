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
              <h5 class="box-title">Edit Post Pengumuman</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/baak/pengumuman/edit') ?>" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id_pengumuman" value="<?php echo $pengumuman->id_pengumuman?>"/>
               <table width="96%">
               <tr>
               <td width="220">
             
                <div class="product-img">
                  <img src="<?php echo base_url('assets/images/pengumuman/'.$pengumuman->foto) ?>" width='170' height='180' alt="">
                  <div class="fileupload btn btn-outline btn-success">
                    <span><i class="ion-upload mr-5"></i>Change Foto Pengumuman</span>
                    <input type="file" name="foto" class="upload">
                  </div>
                </div>
          
                        <input type="hidden" name="old_image" value="<?php echo $pengumuman->foto ?>"/>
                         <input type="hidden" name="tgl_post" value="<?php echo $pengumuman->tgl_post?>"/>

                             </td>
                             <td>
                               <div class="form-group">
                            <h5>Judul Pengumuman <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" value="<?php echo $pengumuman->jdl_pengumuman?>" name="jdl_pengumuman" class="form-control <?php echo form_error('jdl_pengumuman') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('jdl_pengumuman') ?></font>
                </div>

                <div class="form-group">
                            <h5>Publish ke Website<span class="text-danger">*</span></h5>
                  
                                <select name="status" id="select" required class="form-control <?php echo form_error('page') ? 'is-invalid':'' ?>">
                                 <?php if ($pengumuman->status == "Ya"){ ?>
                                 <option value="Ya" selected>Ya</option>
                                 <option value="Tidak">Tidak</option>
                                <?php }else{ ?>
                                  <option value="Ya">Ya</option>
                                 <option value="Tidak"  selected>Tidak</option>
                                 <?php } ?>
                                </select>
                             </div>


                             </td>
                             </tr>
                             <tr>
                             <td width="250"></td>
               <td>
                        
                    <div class="form-group">
                            <h5>Isi Pengumuman <span class="text-danger">*</span></h5>
                            <div class="controls">
                               <textarea id="editor1" name="isi" rows="10" cols="80"><?php echo $pengumuman->isi?></textarea>
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