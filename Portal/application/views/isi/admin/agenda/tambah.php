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
              <h5 class="box-title">Form Tambah Agenda Kegiatan</h5>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                  
                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('page/admin/agenda/tambah') ?>" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                            <h5>Nama Agenda<span class="text-danger">*</span></h5>
                  <input type="text" name="nm_agenda" class="form-control <?php echo form_error('nm_agenda') ? 'is-invalid':'' ?>">
                  <font color="red"><?php echo form_error('nm_agenda') ?></font>
                        </div>
            
              <div class="row">
                <div class="col-md-6">
                  <h5>Tanggal Mulai<span class="text-danger">* <font size="1">Tahun-Bulan-Tanggal</font></span></h5>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_agenda" class="form-control pull-right">
                </div>
                  
                </div>
                <div class="col-md-6">
                  <h5>Tanggal Selesai<span class="text-danger">* <font size="1">Tahun-Bulan-Tanggal</font></span></h5>
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_selesai" class="form-control pull-right <?php echo form_error('tgl_selesai') ? 'is-invalid':'' ?>" id="date2">
                </div>
                  <font color="red"><?php echo form_error('tgl_selesai') ?></font><br>
                </div>
                
            </div>

            <div class="row">
                <div class="col-md-12">
                  <h5> Tempat <span class="text-danger">*</span></h5>
                  <input type="text" name="tempat_agenda" class="form-control <?php echo form_error('tempat_agenda') ? 'is-invalid':'' ?>">
                  <font color="red"><?php echo form_error('tempat_agenda') ?></font><br>
                </div>
                <div class="col-md-12">
                  <h5>Waktu <span class="text-danger">*</span></h5>
                  <input type="text" name="waktu_agenda" class="form-control <?php echo form_error('waktu_agenda') ? 'is-invalid':'' ?>">
                  <font color="red"><?php echo form_error('waktu_agenda') ?></font><br>
            </div>
<b>* NOTE :</b> &nbsp;Jika Kegiatan berlangsung 1 hari, maka hanya isi Form Tanggal selesai. <br>
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