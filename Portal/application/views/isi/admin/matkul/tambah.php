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
              <h5 class="box-title">Form Tambah Mata Kuliah</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/admin/matkul/tambah') ?>" method="post" enctype="multipart/form-data">
               <div class="row">
          <div class="col-md-6">
            <h5>Kode Matkul <span class="text-danger">*</span></h5>
            <input type="text" name="kode_mk" class="form-control <?php echo form_error('kode_mk') ? 'is-invalid':'' ?>">
             <font color="red"><?php echo form_error('kode_mk') ?></font>
          </div>
          <div class="col-md-6">
           <h5>Nama Matkul <span class="text-danger">*</span></h5>
            <input type="text" name="nama_mk" class="form-control <?php echo form_error('nama_mk') ? 'is-invalid':'' ?>">
             <font color="red"><?php echo form_error('nama_mk') ?></font>
          </div>

          <div class="col-md-6">
          <br>
            <h5>SKS <span class="text-danger">*</span></h5>
            <input type="number" name="sks" class="form-control <?php echo form_error('sks') ? 'is-invalid':'' ?>">
             <font color="red"><?php echo form_error('sks') ?></font>
          </div>
        <br>
          <div class="col-md-6">
           <br>
            <h5>Semester <span class="text-danger">*</span></h5>
            <input type="number" name="semester" class="form-control <?php echo form_error('semester') ? 'is-invalid':'' ?>">
             <font color="red"><?php echo form_error('semester') ?></font>

          </div>
         
          <div class="col-md-6">
           <br>
            <h5>Jenis Matkul <span class="text-danger">*</span></h5>
            <select name="jenis_mk" id="select" required class="form-control <?php echo form_error('Jenis Matkul') ? 'is-invalid':'' ?>">
             <option value="">--Pilih Jenis Matkul--</option>
             <option value="Wajib">Wajib</option>
             <option value="Wajib-Bersyarat">Wajib-Bersyarat</option>
             <option value="Tambahan">Tambahan</option>
             </select>
             <font color="red"><?php echo form_error('jenis_mk') ?></font>
          </div>
          <div class="col-md-6">
           <br>
            <h5>Konsentrasi Matkul <span class="text-danger">*</span></h5>
             <select name="konsentrasi" id="select" required class="form-control <?php echo form_error('konsentrasi') ? 'is-invalid':'' ?>">
             <option value="-">--Pilih Konsentrasi--</option>
             <option value="SE">SE</option>
             <option value="SCN">SCN</option>
             <option value="-">SE-SCN</option>
             </select>
            <font color="red"><?php echo form_error('konsentrasi') ?></font>
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