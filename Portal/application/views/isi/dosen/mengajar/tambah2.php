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
              <form action="<?=site_url('page/dosen/riwayat_mengajar/insert')?>" method="post" enctype="multipart/form-data">
               <div class="row">
          
          <div class="col-md-12">
           <h5>Pilih Mata Kuliah yang Diajar<span class="text-danger"> *</span> NOTE : Jika sudah dipilih tidak perlu dipilih lagi</h5>
           <br>
            
              <div class="demo-checkbox"> 
            
                  <?php $no=21; $no2=21; foreach ($matkulku as $matkul):?>
                  
                    <input type="checkbox" name="pilihanku[]" value="<?php echo $matkul->kode_mk ?>" id="md_checkbox_<?php echo $no++; ?>" class="filled-in chk-col-navy"

                    />
                    <label for="md_checkbox_<?php echo $no2++; ?>"><?php echo $matkul->nama_mk ?></label>
                  
                  <?php endforeach;?>
               
              </div>
                
          </div>
          
        </div>
        
                        <hr>
                        <p>
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