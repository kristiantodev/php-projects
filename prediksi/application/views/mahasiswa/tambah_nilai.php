<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
  <div class="page-content">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Kelola Penilaian</h4>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-8 mx-auto">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-4">Form Penilaian</h4>
              <form method="post" action="<?= base_url('mahasiswa/nilai/'.$mahasiswa['nim']); ?>" >
                <div class="form-group row">
                  <label for="nim" class="col-sm-3 text-center col-form-label">NIM</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan NIM" value="<?= $mahasiswa['nim'];?>" readonly>
                    <?= form_error('nim','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-sm-3 text-center col-form-label">Nama Mahasiswa</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Mahasiswa" value="<?= $mahasiswa['nama'];?>" readonly>
                    <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="ipk" class="col-sm-3 text-center col-form-label">IPK</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="ipk" name="ipk" placeholder="Masukan IPK" value="<?= set_value('ipk') ?>">
                    <?= form_error('ipk','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="telephone" class="col-sm-3 text-center col-form-label">SKS</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="sks" name="sks" placeholder="Masukan SKS " value="<?= set_value('sks') ?>">
                    <?= form_error('sks','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="uang" class="col-sm-3 text-center col-form-label">Keuangan</label>
                  <div class="col-sm-7">
                    <div class="radio radio-inline">
                        <label>
                          <input type="radio" name="uang" id="uang" value="100"> Lunas
                          <input type="radio" name="uang" id="uang" value="50"> Belum Lunas  
                        </label>    
                    </div>
                  <?= form_error('uang','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="cuti" class="col-sm-3 text-center col-form-label">Cuti</label>
                  <div class="col-sm-7">
                    <div class="radio radio-inline">
                        <label>
                          <input type="radio" name="cuti" id="cuti" value="100"> Tidak Cuti
                          <input type="radio" name="cuti" id="cuti" value="50"> Cuti
                        </label>    
                    </div>
                  <?= form_error('cuti','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="status" class="col-sm-3 text-center col-form-label">Status</label>
                  <div class="col-sm-7">
                    <div class="radio radio-inline">
                        <label>
                          <input type="radio" name="stat" id="stat" value="100"> Belum Menikah
                          <input type="radio" name="stat" id="stat" value="50"> Menikah
                        </label>    
                    </div>
                  <?= form_error('stat','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 mx-auto">
                        <button type="submit" class="btn btn-info btn-sm">
                            <i class="fa fa-save"></i> Simpan</button>
                        <a href="<?= base_url('mahasiswa') ;?>" class="btn btn-dark btn-sm">
                            <i class="fa fa-undo"></i> Kembali
                        </a>
                    </div>
                </div>
            </form>
            </div>
          </div>
      </div>
      <!-- end col -->
  </div>
  <!-- end row -->
                    

                