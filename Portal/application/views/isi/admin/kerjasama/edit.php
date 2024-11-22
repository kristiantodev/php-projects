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
              <h5 class="box-title">Form Edit Kerjasama</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/admin/kerjasama/edit') ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id_kerjasama" value="<?php echo $kerjasama->id_kerjasama?>"/>
              <div class="form-group">
                            <h5>Nama Perusahaan <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="nm_perusahaan" class="form-control <?php echo form_error('nm_perusahaan') ? 'is-invalid':'' ?>" value="<?php echo $kerjasama->nm_perusahaan?>"> </div>
                        <font color="red"><?php echo form_error('nm_perusahaan') ?></font>
                        </div>
                          <div class="row">
                <div class="col-md-6">
                  <h5>Tahun Mulai <span class="text-danger">*</span></h5>
                  <input type="number" value="<?php echo $kerjasama->thn_mulai?>" name="thn_mulai" class="form-control">
                </div>

                <div class="col-md-6">
                  <h5>Tahun Berakhir <span class="text-danger">* </span></h5>
                  <input type="number" name="thn_berakhir" value="<?php echo $kerjasama->thn_berakhir?>" class="form-control">
                 <br>
                </div>
                </div>
                    <div class="form-group">
                            <h5>Keterangan <span class="text-danger">*</span></h5>
                            <div class="controls">
                               <textarea id="editor1" name="keterangan" rows="10" cols="80">
                               <?php echo $kerjasama->keterangan?>
                    </textarea>
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