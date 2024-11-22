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
              <h4 class="card-title mb-4">Form Edit Mahasiswa</h4>
              <form method="post" action="<?= base_url('mahasiswa/edit_mahasiswa'); ?>" >
                <input type="hidden" id="id" name="id" value="<?= $mahasiswa->nim; ?>">
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
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Mahasiswa" value="<?= $mahasiswa->nama?>">
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
                    <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Masukan Angkatan" value="<?= $mahasiswa->angkatan?>">
                    <?= form_error('angkatan','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="id_prodi" class="col-sm-3 text-center col-form-label">Jurusan</label>
                  <div class="col-sm-7">
                    <select name="id_prodi" id="id_prodi" class="form-control" data-style="btn-default btn-outline">
                      <option>Pilih Program Studi</option>
                        <?php foreach ($prodi as $key => $dataP):
                          if ($mahasiswa->id_prodi==$dataP['id_prodi']) {
                            $selected = "selected";
                          } else {
                            $selected ="";
                          }?>
                        <option <?= $selected; ?> value="<?= $dataP['id_prodi']; ?>">
                          <?= $dataP['prodi'] ; ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                    <?= form_error('id_prodi','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="alamat" class="col-sm-3 text-center col-form-label">Alamat</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" value="<?= $mahasiswa->alamat?>">
                    <?= form_error('alamat','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="telephone" class="col-sm-3 text-center col-form-label">No Telephone</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Masukan Telephone " value="<?= $mahasiswa->telephone?>">
                    <?= form_error('telephone','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="dosen_wali" class="col-sm-3 text-center col-form-label">Dosen Wali</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="dosen_wali" name="dosen_wali" placeholder="Masukan Dosen Wali" value="<?= $mahasiswa->dosen_wali?>">
                    <?= form_error('dosen_wali','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="ipk" class="col-sm-3 text-center col-form-label">IPK</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="ipk" name="ipk" placeholder="Masukan IPK" value="<?= $nilai->ipk?>">
                    <?= form_error('ipk','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="telephone" class="col-sm-3 text-center col-form-label">SKS</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="sks" name="sks" placeholder="Masukan SKS"  value="<?= $nilai->sks?>">
                    <?= form_error('sks','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="uang" class="col-sm-3 text-center col-form-label">Keuangan</label>
                  <div class="col-sm-7">
                    <div class="radio radio-inline">
                        <label>
                          <input <?=$nilai->uang =='100'?"checked":""?> type="radio" name="uang" id="uang" value="100"> Lunas
                          <input <?=$nilai->uang =='50'?"checked":""?> type="radio" name="uang" id="uang" value="50"> Belum Lunas  
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
                          <input <?=$nilai->cuti =='100'?"checked":""?>  type="radio" name="cuti" id="cuti" value="100"> Tidak Cuti
                          <input <?=$nilai->cuti =='50'?"checked":""?> type="radio" name="cuti" id="cuti" value="50"> Cuti
                        </label>    
                    </div>
                  <?= form_error('cuti','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="stat" class="col-sm-3 text-center col-form-label">Status</label>
                  <div class="col-sm-7">
                    <div class="radio radio-inline">
                        <label>
                          <input <?=$nilai->stat =='100'?"checked":""?> type="radio" name="stat" id="stat" value="100"> Belum Menikah
                          <input <?=$nilai->stat =='50'?"checked":""?> type="radio" name="stat" id="stat" value="50"> Menikah
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
                    

                