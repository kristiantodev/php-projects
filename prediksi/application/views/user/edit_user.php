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
              <h4 class="card-title mb-4">Form Edit User</h4>
              <?= form_open_multipart('user/edit');?>
              <input type="hidden" id="id" name="id" value="<?= $user->id_user; ?>'">
                <div class="form-group row">
                  <label for="nidn" class="col-sm-3 text-center col-form-label">NIDN</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nidn" name="nidn" placeholder="Masukan NIDN" value="<?= $user->nidn?>">
                    <?= form_error('nidn','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-sm-3 text-center col-form-label">Nama User</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama User" value="<?= $user->nama_u?>">
                    <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="username" class="col-sm-3 text-center col-form-label">Username</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username " value="<?= $user->username?>">
                    <?= form_error('username','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-sm-3 text-center col-form-label">Password</label>
                  <div class="col-sm-7">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password " value="<?= $user->password?>">
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
                    <select name="id_prodi" id="id_prodi" class="form-control" data-style="btn-default btn-outline">
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
                    </select>
                    <?= form_error('id_prodi','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="alamat" class="col-sm-3 text-center col-form-label">Alamat</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" value="<?= $user->alamat?>">
                    <?= form_error('alamat','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="level" class="col-sm-3 text-center col-form-label">Level</label>
                  <div class="col-sm-7">
                    <select name="level" id="level" class="form-control" data-style="btn-default btn-outline">
                      <option>Pilih Level</option>
                      <option <?= $selected; ?> value="Admin">Administrator</option>
                      <option <?= $selected; ?> value="Kaprodi">Kaprodi</option>
                    </select>
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
                            <div class="col-sm-8"> 
                                  <input type="file" class="form-control" name="image" id="image" for="image">
                            </div>
                        </div>
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
                    

                