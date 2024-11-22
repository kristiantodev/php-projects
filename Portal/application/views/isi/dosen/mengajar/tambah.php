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
              <h5 class="box-title">Form Tambah Riwayat Mengajar</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/dosen/riwayat_mengajar/tambah') ?>" method="post" enctype="multipart/form-data">
               <div class="row">
          
          <div class="col-md-12">
           <h5>Mata Kuliah <span class="text-danger">*</span></h5>
            <select name="kode_mk" id="select" required class="form-control <?php echo form_error('page') ? 'is-invalid':'' ?>">
                  <option value="">-- Pilih Matkul--</option>
                  
                  <?php foreach ($matkulku as $matkul): ?>
                  <option value="<?php echo $matkul->kode_mk ?>"><?php echo $matkul->nama_mk ?></option>
                  <?php endforeach; ?>
                </select>
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