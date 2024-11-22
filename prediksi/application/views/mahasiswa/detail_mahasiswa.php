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
              <h4 class="card-title mb-4">Detail Mahasiswa</h4>
              <form method="post" action="" >
                <div class="form-group row">
                  <label for="nim" class="col-sm-3 text-center col-form-label">NIM</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan NIM" value="<?= $mahasiswa->nim?>" readonly>
                    <?= form_error('nim','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-sm-3 text-center col-form-label">Nama Mahasiswa</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Mahasiswa" value="<?= $mahasiswa->nama?>" readonly>
                    <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="active" class="col-sm-3 text-center col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-7">
                    <div class="radio radio-inline">
                        <label>
                          <input <?=$mahasiswa->jk =='Laki-laki'?"checked":""?> type="radio" name="jk" value="Laki-laki"> Laki-laki
                          <input <?=$mahasiswa->jk =='Perempuan'?"checked":""?> type="radio" name="jk" value="Perempuan"> Perempuan 
                        </label>    
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="angkatan" class="col-sm-3 text-center col-form-label">Angkatan</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Masukan Angkatan" value="<?= $mahasiswa->angkatan?>" readonly>
                    <?= form_error('angkatan','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="alamat" class="col-sm-3 text-center col-form-label">Jurusan</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" value="<?= $mahasiswa->prodi?>" readonly>
                    <?= form_error('alamat','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="alamat" class="col-sm-3 text-center col-form-label">Alamat</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" value="<?= $mahasiswa->alamat?>" readonly>
                    <?= form_error('alamat','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="telephone" class="col-sm-3 text-center col-form-label">No Telephone</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Masukan Telephone " value="<?= $mahasiswa->telephone?>" readonly>
                    <?= form_error('telephone','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="dosen_wali" class="col-sm-3 text-center col-form-label">Dosen Wali</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="dosen_wali" name="dosen_wali" placeholder="Masukan Dosen Wali" value="<?= $mahasiswa->dosen_wali?>" readonly>
                    <?= form_error('dosen_wali','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                 <div class="form-group row">
                  <label for="ipk" class="col-sm-3 text-center col-form-label">IPK</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="ipk" name="ipk" placeholder="Masukan IPK" value="<?= $nilai->ipk?>" readonly>
                    <?= form_error('ipk','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="sks" class="col-sm-3 text-center col-form-label">SKS</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="sks" name="sks" placeholder="Masukan SKS " value="<?= $nilai->sks?>" readonly>
                    <?= form_error('sks','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="uang" class="col-sm-3 text-center col-form-label">Keuangan</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="uang" name="uang" placeholder="Masukan Keuangan" value="<?= $nilai->uang?>" readonly>
                    <?= form_error('uang','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="cuti" class="col-sm-3 text-center col-form-label">Cuti</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="cuti" name="cuti" placeholder="Masukan " value="<?= $nilai->cuti?>" readonly>
                    <?= form_error('cuti','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="stat" class="col-sm-3 text-center col-form-label">Status</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="stat" name="stat" placeholder="Masukan " value="<?= $nilai->stat?>" readonly>
                    <?= form_error('stat','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 mx-auto">
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
                    

                