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
              <h5 class="box-title">Form Edit Link Eksternal</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/admin/link/edit') ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id_link" value="<?php echo $link->id_link ?>" class="form-control">
              <div class="row">
                <div class="col-md-6">
                  <h5>Nama Link <span class="text-danger">*</span></h5>
                <input type="text" name="nama_link" value="<?php echo $link->nama_link ?>" class="form-control <?php echo form_error('nama_link') ? 'is-invalid':'' ?>">
                <font color="red"><?php echo form_error('nama_link') ?></font><br>
                </div>
              <div class="col-md-6">
                <h5>Jenis Link <span class="text-danger">*</span></h5>
           <div class="demo-radio-button">
           <?php if ($link->jenis_link == "Internal"){ ?>
          <input name="jenis_link" value="Internal" type="radio" id="radio_30" class="with-gap radio-col-navy" checked />
          <label for="radio_30">Link Internal</label>         
          <input name="jenis_link" value="Eksternal" type="radio" id="radio_39" class="with-gap radio-col-navy" />
          <label for="radio_39">Link Eksternal</label>
 <?php }else{ ?> 
          <input name="jenis_link" value="Internal" type="radio" id="radio_30" class="with-gap radio-col-navy" />
          <label for="radio_30">Link Internal</label>         
          <input name="jenis_link" value="Eksternal" type="radio" id="radio_39" class="with-gap radio-col-navy"  checked />
          <label for="radio_39">Link Eksternal</label>
 <?php } ?>
        </div>
              </div>
            </div>
            <div class="form-group">
                            <h5>URL <span class="text-danger">*</span></h5>
                  <input type="text" name="url" value="<?php echo $link->url ?>" class="form-control <?php echo form_error('url') ? 'is-invalid':'' ?>">
                  <font color="red"><?php echo form_error('url') ?></font>
                        </div>
            <input type="hidden" name="tanggal" value="<?php echo $link->tanggal ?>" class="form-control">
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