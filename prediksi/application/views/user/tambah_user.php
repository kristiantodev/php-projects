<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
  <div class="page-content">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Kelola User</h4>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-8 mx-auto">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title mb-4">Form Tambah User</h4>
              <form method="post" action="<?= base_url('user/add'); ?>" >
                <div class="form-group row">
                  <label for="nidn" class="col-sm-3 text-center col-form-label">NIDN</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nidn" name="nidn" placeholder="Masukan NIDN" value="<?= set_value('nidn') ?>">
                    <?= form_error('nidn','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-sm-3 text-center col-form-label">Nama User</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama User" value="<?= set_value('nama') ?>">
                    <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="username" class="col-sm-3 text-center col-form-label">Username</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username " value="<?= set_value('username') ?>">
                    <?= form_error('username','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-sm-3 text-center col-form-label">Password</label>
                  <div class="col-sm-7">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password " value="<?= set_value('password') ?>">
                    <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="active" class="col-sm-3 text-center col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-7">
                    <div class="radio radio-inline">
                        <label>
                          <input type="radio" name="jk" id="jk" value="Laki-laki"> Laki-laki
                          <input type="radio" name="jk" id="jk" value="Perempuan"> Perempuan  
                        </label>    
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="id_prodi" class="col-sm-3 text-center col-form-label">Jurusan</label>
                  <div class="col-sm-7">
                    <select name="id_prodi" id="id_prodi" class="form-control" data-style="btn-default btn-outline">
                      <option>Pilih Program Studi</option>
                      <?php foreach ($prodi as $key => $data) : ?> 
                      <option value="<?= $data['id_prodi'];?>">
                        <?= $data['prodi'];?>
                      </option>
                      <?php endforeach ;?>
                    </select>
                    <?= form_error('id_prodi','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="alamat" class="col-sm-3 text-center col-form-label">Alamat</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" value="<?= set_value('alamat') ?>">
                    <?= form_error('alamat','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="level" class="col-sm-3 text-center col-form-label">Level</label>
                  <div class="col-sm-7">
                    <select name="level" id="level" class="form-control" data-style="btn-default btn-outline">
                      <option>Pilih Level</option>
                      <option value="Admin">Administrator</option>
                      <option value="Kaprodi ">Kaprodi</option>
                    </select>
                    <?= form_error('level','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-6 mx-auto">
                        <button type="submit" class="btn btn-info btn-sm">
                            <i class="fa fa-save"></i> Simpan</button>
                        <a href="<?= base_url('user') ;?>" class="btn btn-dark btn-sm">
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
                    

                