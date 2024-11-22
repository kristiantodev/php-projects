<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
  <div class="page-content">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Kelola Mahasiswa</h4>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-8 mx-auto">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-4">
                <i class="fas fa-download"></i> Import Data Mahasiswa
              </h4>
              <center>
              <a href="<?= base_url('assets/uploads/import/mahasiswa.xlsx' ); ?>" target="blank" class="btn btn-primary btn-sm">
                  <i class="fa fa-download"></i> Download Format
              </a>  
              </center>
              <hr>
              <?= form_open_multipart('mahasiswa/uploaddata') ?>
              <div class="form-group row">
                  <div class="col-sm-12">
                      <div class="row">
                          <div class="col-sm-8"> 
                              <input type="file" class="form-control-file" id="importexcel" name="importexcel" accept=".xlsx,.xls">
                          </div>
                          <div class="col-sm-4">
                              <button type="submit" class="btn btn-info btn-sm">
                              <i class="fa fa-download"></i> Import</button>
                              <a href="<?= base_url('mahasiswa') ;?>" class="btn btn-dark btn-sm">
                                  <i class="fa fa-undo"></i> Back
                              </a>
                          </div>
                      </div>
                </div>
              </div>
              <?= form_close(); ?>
              <hr>
              <small>Note : <br>
                  - Data tidak boleh ada yang kosong, harus terisi semua.<br>
                  - File berekstensi Xlsx atau Xls<br>
                  - Prodi diisi Dengan nomor Id Prodi :
                  1. Teknik Informatika,
                  2. Sistem Informatika,
                  3. Desain Komunikasi Visual,
                  4. Akuntansi,
                  5. Manajemen</small>
            </div>
          </div>
      </div>
      <!-- end col -->
  </div>
  <!-- end row -->
                    

