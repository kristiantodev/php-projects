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
              <h5 class="box-title">Form Tambah Materi Download</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/dosen/materi/tambah') ?>" method="post" enctype="multipart/form-data">
               <div class="form-group">
                            <h5>Judul Materi<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="nm_materi" class="form-control <?php echo form_error('nm_materi') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('nm_materi') ?></font>
                        </div>
               <div class="row">
          <div class="col-md-4">
            <h5>Mata Kuliah<span class="text-danger">*</span></h5>

            <select name="kode_mk" id="select" class="form-control <?php echo form_error('kode_mk') ? 'is-invalid':'' ?>">
                  <option value="">-- Pilih Matkul--</option>
                  
                  <?php foreach ($matkulku as $matkul): ?>
                  <option value="<?php echo $matkul->kode_mk ?>"><?php echo $matkul->nama_mk ?></option>
                  <?php endforeach; ?>
                </select>
                <font color="red"><?php echo form_error('kode_mk') ?></font>
          </div>
          <div class="col-md-4">
           <h5>Pertemuan Ke-<span class="text-danger">*</span></h5>
            <input type="text" name="pertemuan_ke" class="form-control">
          </div>
          <div class="col-md-4">
            <h5>Status<span class="text-danger">*</span></h5>
           <div class="demo-radio-button">
          <input name="status" value="Publish" type="radio" id="radio_30" class="with-gap radio-col-navy" checked />
          <label for="radio_30">Publish Umum</label>         
          <input name="status" value="Privasi" type="radio" id="radio_39" class="with-gap radio-col-navy" />
          <label for="radio_39">Privasi</label>
        </div>
          </div>
        </div>
        
        <div class="form-group">
                            <h5>Link Materi<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="link_materi" class="form-control"> </div>
                        </div>

        <div class="form-group">
                            <h5>File Materi <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <div class="input-group">
                                 <div class="input-group-addon bg-dark">
                                  &nbsp;&nbsp;<i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;
                                 </div>
                                <input type="file" name="file" class="form-control"> 
                                            <div class="input-group-addon bg-dark">
                                            <i class="fa fa-exclamation-circle"></i>&nbsp; Max : 2 MB. Format : Gambar atau Berkas.
                                            </div>
                                </div>
                           </div>
                         </div>
        
                        <hr>
                        <b>* NOTE :</b> Bisa dengan Upload File, Melalui URL, atau keduanya.
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