<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18">My Profile</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="mb-4 text-center" >Foto Profil</h3>
                                    <div class="col-md-12">
                                        <img class="rounded mr-2" alt="" width="380" height ="380"src="<?= base_url('assets/uploads/foto/').$session['image'] ?>" data-holder-rendered="true">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title mb-3">Detail Profile</h4>

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills nav-justified" role="tablist">
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link active" data-toggle="tab" href="#profil" role="tab">
                                                <span class="d-none d-sm-block">Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-toggle="tab" href="#editprofile" role="tab">
                                                <span class="d-none d-sm-block">Edit Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-toggle="tab" href="#editfoto" role="tab">
                                                <span class="d-none d-sm-block">Edit Foto</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content p-3 text-muted">
                                        <div class="tab-pane active" id="profil" role="tabpanel">
                                          <div class="form-group row">
                                              <label for="nidn" class="col-sm-3 text-center col-form-label">NIDN</label>
                                              <div class="col-sm-7">
                                                <input type="text" class="form-control" id="nidn" name="nidn" value="<?= $user->nidn?>" readonly>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="nama" class="col-sm-3 text-center col-form-label">Nama User</label>
                                              <div class="col-sm-7">
                                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user->nama_u?>" readonly>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="username" class="col-sm-3 text-center col-form-label">Username</label>
                                              <div class="col-sm-7">
                                                <input type="text" class="form-control" id="username" name="username"  value="<?= $user->username?>" readonly>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="username" class="col-sm-3 text-center col-form-label">Jenis Kelamin</label>
                                              <div class="col-sm-7">
                                                <input type="text" class="form-control" id="username" name="username"  value="<?= $user->jk?>" readonly>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="alamat" class="col-sm-3 text-center col-form-label">Jurusan</label>
                                              <div class="col-sm-7">
                                                <input type="text" class="form-control" value="<?= $user->prodi?>" readonly>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                              <label for="alamat" class="col-sm-3 text-center col-form-label">Alamat</label>
                                              <div class="col-sm-7">
                                                <input type="text" class="form-control" value="<?= $user->alamat?>" readonly>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="editprofile" role="tabpanel">
                                            <?= form_open_multipart('user_profile/edit_profile');?>
                                            <input type="hidden" id="id" name="id" value="<?= $user->id_user; ?>'">
                                                <div class="form-group row">
                                                  <label for="nidn" class="col-sm-3 text-center col-form-label">NIDN</label>
                                                  <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="nidn" name="nidn" placeholder="Masukan NIDN User" value="<?= $user->nidn?>">
                                                    <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
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
                                                <div class="form-group">
                                                    <div class="col-sm-10 text-right">
                                                        <button type="submit" class="btn btn-info btn-sm">
                                                            <i class="fa fa-save"></i> Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="editfoto" role="tabpanel">
                                            <?= form_open_multipart('user_profile/edit_foto');?>
                                            <input type="hidden" id="id2" name="id2" value="<?= $user->id_user; ?>'"> 
                                                <div class="form-group row">
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <img src="<?= base_url("assets/uploads/foto/").$user->image;?>" class="img-thumbnail">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                  <input type="file" class="form-control" name="image" id="image" for="image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-4 ml-md-auto">
                                                        <button type="submit" class="btn btn-info btn-sm">
                                                            <i class="fa fa-save"></i> Simpan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page-content -->

                