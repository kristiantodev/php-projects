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
              <h4 class="card-title mb-4">Detail User</h4>
              <?= form_open_multipart('');?>
              <input type="hidden" id="id" name="id" value="<?= $user->id_user; ?>'">
              <div class="form-group row">
                  <label for="nidn" class="col-sm-3 text-center col-form-label">NIDN</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nidn" name="nidn" placeholder="Masukan NIDN" value="<?= $user->nidn?>" readonly>
                    <?= form_error('nidn','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-sm-3 text-center col-form-label">Nama User</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama User" value="<?= $user->nama_u?>" readonly>
                    <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="username" class="col-sm-3 text-center col-form-label">Username</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username " value="<?= $user->username?>" readonly>
                    <?= form_error('username','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-sm-3 text-center col-form-label">Password</label>
                  <div class="col-sm-7">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password " value="<?= $user->password?>" readonly>
                    <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="jk" class="col-sm-3 text-center col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-7">
                      <div class="radio radio-inline">
                        <label>
                          <input <?=$user->jk =='Laki-laki'?"checked":""?> type="radio" name="jk" value="Laki-laki"> Laki-laki
                          <input <?=$user->jk =='Perempuan'?"checked":""?> type="radio" name="jk" value="Perempuan"> Perempuan 
                        </label>   
                      </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="id_prodi" class="col-sm-3 text-center col-form-label">Jurusan</label>
                  <div class="col-sm-7">
                     <input type="text" class="form-control" id="id_prodi" name="id_prodi" placeholder="Masukan Prodi" value="<?= $user->prodi?>" readonly>
                    <!-- <select name="id_prodi" id="id_prodi" class="form-control" data-style="btn-default btn-outline">
                      <option>Pilih Program Studi</option>
                        <?php foreach ($prodi as $key => $dataP):
                          if ($user->id_prodi==$dataP['id_prodi']) {
                            $selected = "selected";
                          } else {
                            $selected ="";
                          }?>
                        <option <?= $selected; ?> value="<?= $dataP['id_prodi']; ?>">
                          <?= $dataP['prodi'] ; ?>
                        </option>
                      <?php endforeach; ?>
                    </select> -->
                    <?= form_error('id_prodi','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="alamat" class="col-sm-3 text-center col-form-label">Alamat</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" value="<?= $user->alamat?>" readonly>
                    <?= form_error('alamat','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="level" class="col-sm-3 text-center col-form-label">Level</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" value="<?= $user->level?>" readonly>
                    <?= form_error('level','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 text-center col-form-label">Foto</label>
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="<?= base_url("assets/uploads/foto/").$user->image;?>" class="img-thumbnail">
                            </div>
                        </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="text-right col-sm-8 mx-auto">
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
                    

                