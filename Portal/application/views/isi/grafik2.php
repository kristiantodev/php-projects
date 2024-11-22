   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Grafik Kunjungan  - <?php echo $myuser->nm_user?></h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url();?>page/dosen/dashboard"><i class="mdi mdi-home-outline"></i></a></li>
          
            </ol>
          </nav>
        </div>
      </div>
      </div>


<?php echo form_open("page/dosen/grafik/lihat");?>
               <div class="row">
          <div class="col-md-5">
           <br>
            <h5>Pilih Bulan <span class="text-danger">*</span></h5>
            <select name="bl" id="select" required class="form-control <?php echo form_error('Jenis Matkul') ? 'is-invalid':'' ?>">
             <option value="1">Januari</option>
             <option value="2">Februari</option>
             <option value="3">Maret</option>
             <option value="4">April</option>
             <option value="5">Mei</option>
             <option value="6">Juni</option>
             <option value="7">Juli</option>
             <option value="8">Agustus</option>
             <option value="9">September</option>
             <option value="10">Oktober</option>
             <option value="11">November</option>
             <option value="12">Desember</option>
             </select>
            
          </div>
          <div class="col-md-5">
           <br>
            <h5>Pilih Tahun <span class="text-danger">*</span></h5>
            <select name="year" id="select" required class="form-control <?php echo form_error('Jenis Matkul') ? 'is-invalid':'' ?>">
             <option value="2019">2019</option>
             <option value="2020">2020</option>
             <option value="2021">2021</option>
             <option value="2022">2022</option>
             <option value="2023">2023</option>
             <option value="2024">2024</option>
             <option value="2025">2025</option>
             <option value="2026">2026</option>
             <option value="2027">2027</option>
             <option value="2028">2028</option>
             <option value="2029">2029</option>
             <option value="2030">2030</option>
             </select>
             
          </div>
          <div class="col-md-2">
           <br>
            <h5>Filter<span class="text-danger">*</span></h5>
             <button type="submit" class="btn btn-outline btn-success"><b><i class='fa fa-bar-chart'></i> &nbsp;&nbsp;Tampilkan</b>&nbsp;&nbsp;</button>&nbsp;&nbsp;
          </div>
        </div>
                        
                          
              </form>

      </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
		  
		<div class="col-12">
       


<!-- BATAS -->
 <div class="row">  
    <div class="col-12">
<!-- Bar CHART -->
           <!-- Bar CHART -->
        <div class="box">
        <div class="box-header with-border bg-pale-primary">
          <h4 class="box-title">Bulan ini (<?php echo date('F Y'); ?>)</h4>
        </div>
        <div class="box-body">
          <canvas id="chart_9" height="300"></canvas>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->  
          </div>
          
          </div>
        


       <!-- BATAS -->

            <!-- /.box-body -->
          </div>
          <!-- /.box -->      
        </div>  
		  
		
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->