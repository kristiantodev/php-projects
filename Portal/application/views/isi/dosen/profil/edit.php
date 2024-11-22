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
              <h5 class="box-title">Form Edit Profil Dosen</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/dosen/profil/edit') ?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id_user" value="<?php echo $dosen->id_user ?>" class="form-control">
              <input type="hidden" name="tgl_ditambah" value="<?php echo $dosen->tgl_ditambah ?>" class="form-control">
              <div class="row">
                <div class="col-md-6">
                  <h5>NIDN <span class="text-danger">*</span></h5>
                  <input type="text" name="nidn" value="<?php echo $dosen->nidn ?>" class="form-control">
                </div>

                <div class="col-md-6">
                  <h5>Nama Dosen <span class="text-danger">*</span></h5>
                  <input type="text" name="nm_lengkap" value="<?php echo $dosen->nm_lengkap ?>" class="form-control <?php echo form_error('nm_lengkap') ? 'is-invalid':'' ?>">
                  <font color="red"><?php echo form_error('nm_lengkap') ?></font>
                  <br>
                </div>


                <div class="col-md-6">
                  <h5>Jenis Kelamin <span class="text-danger">*</span></h5>
                  <div class="demo-radio-button">
                  <?php if ($dosen->jk == "L"){ ?>
          <input name="jk" value="L" type="radio" id="radio_30" class="with-gap radio-col-navy" checked />
          <label for="radio_30">Laki-laki</label>         
          <input name="jk" value="P" type="radio" id="radio_39" class="with-gap radio-col-navy" />
          <label for="radio_39">Perempuan</label>
          <?php }else{ ?> 
          <input name="jk" value="L" type="radio" id="radio_30" class="with-gap radio-col-navy"/>
          <label for="radio_30">Laki-laki</label>         
          <input name="jk" value="P" type="radio" id="radio_39" class="with-gap radio-col-navy"  checked />
          <label for="radio_39">Perempuan</label>
          <?php } ?>
        </div>
                </div>
            

                 <div class="col-md-6">
                  <h5>Alamat / Kota<span class="text-danger">*</span></h5>
                  <input type="text" name="alamat" value="<?php echo $dosen->alamat ?>" class="form-control">
                  <br>
                </div>

                <div class="col-md-6">
                  <h5>Jabatan Fungsional<span class="text-danger">*</span></h5>
                  <input type="text" name="jabatan_fungsional" value="<?php echo $dosen->jabatan_fungsional ?>" class="form-control">
                  <br>
                </div>

                <div class="col-md-6">
                  <h5>Pendidikan Tertinggi<span class="text-danger">*</span></h5>
                  <input type="text" name="pend_tertinggi" value="<?php echo $dosen->pend_tertinggi ?>" class="form-control">
                  <br>
                </div>

                 <div class="col-md-6">
                  <h5>Status Ikatan Kerja <span class="text-danger">*</span></h5>
                  <input type="text" name="status_ikatan_kerja" value="<?php echo $dosen->status_ikatan_kerja ?>" class="form-control">
               
                </div>
                <div class="col-md-6">
                  <h5>Jabatan Struktural<span class="text-danger">*</span></h5>
                  <input type="text" name="jabatan_struktural" value="<?php echo $dosen->jabatan_struktural ?>" class="form-control">
                <br>
                </div>

                <div class="col-md-6">
                  <h5>Pendidikan Tinggi I<span class="text-danger">*</span></h5>
                  <input type="text" name="s1" value="<?php echo $dosen->s1 ?>" class="form-control">
               
                </div>
                <div class="col-md-6">
                  <h5>Pendidikan Tinggi II<span class="text-danger">*</span></h5>
                  <input type="text" name="s2" value="<?php echo $dosen->s2 ?>" class="form-control">
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