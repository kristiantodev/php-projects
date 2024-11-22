<!-- Begin Page Content -->
                <div class="container-fluid">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('sukses'); ?>"></div>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pengguna</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a data-toggle="modal" data-target="#bb">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-user-plus"></i> Tambah Pengguna</button>
                                </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="20">No.</th>
                                            <th>Nama Pengguna</th>
                                            <th>Username</th>
                                            <td>Level</td>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                           <?php $no=1;
         foreach ($users as $user): ?>             
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                           <td><?php echo $user->nama_user ?></td>
                                    <td><?php echo $user->username ?></td>
                                     <td><?php echo $user->level ?></td>
                                            <td>
                                                <a data-toggle="modal" data-target="#modal-edit<?php echo $user->id_user ?>" class="btn btn-primary waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Ubah"><font color="white"><i class="fas fa-pencil-alt"></i></font></span></a>
                <a onclick="deleteConfirm('<?php echo site_url('adm/pengguna/hapus/'.$user->id_user); ?>')" href="#!" data-toggle="tooltip" class="btn btn-danger waves-effect waves-light tombol-hapus" data-original-title="Hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                                            </td>
                                            
                                        </tr>
                                       <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Modal -->
                  <div class="modal fade text-left" id="bb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Form Tambah Pengguna</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm/pengguna/add'); ?>" method="post">
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Nama Pengguna</label>
                          <input type="text" name="nama_user" class="form-control  round <?php echo form_error('nama_user') ? 'is-invalid':'' ?>" id="email" placeholder="Nama Pengguna" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
                       <font color="red"><?php echo form_error('nama_user') ?></font>
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Username</label>
                          <input type="text" name="username" class="form-control  round <?php echo form_error('username') ? 'is-invalid':'' ?>" id="email" placeholder="username" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
  
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Password</label>
                          <input type="password" name="password" class="form-control  round <?php echo form_error('password') ? 'is-invalid':'' ?>" id="email" placeholder="Password" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">

                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Level Login</label>
                          <select class="custom-select" name='level' required>
                      <option selected="selected">--Pilih Level Login--</option>
                      <option value="Administrator">Administrator</option>
                      <option value="Direktur">Direktur</option>
                    </select>
                        </fieldset>
                         
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;Simpan
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>

                  <!-- Modal -->
 <?php $no=0; foreach ($users as $user): ?>
                  <div class="modal fade text-left" id="modal-edit<?php echo $user->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Edit Data Pengguna (<?php echo $user->nama_user ?>)</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm/pengguna/edit'); ?>" method="post">
                      <input type="hidden" readonly value="<?=$user->id_user;?>" name="id_user" class="form-control" >
                      <div class="modal-body">
                                     
      <fieldset class="form-group floating-label-form-group">
                          <label for="email">Nama Pengguna</label>
                          <input type="text" name="nama_user" value="<?=$user->nama_user;?>" class="form-control  round <?php echo form_error('nama_user') ? 'is-invalid':'' ?>" id="email" placeholder="Nama Pengguna" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
                       <font color="red"><?php echo form_error('nama_user') ?></font>
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Username</label>
                          <input type="text" name="username" value="<?=$user->username;?>" class="form-control  round <?php echo form_error('username') ? 'is-invalid':'' ?>" id="email" placeholder="username" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
  
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Level Login</label>
                          <select class="custom-select" name='level' required>
                      <option selected="selected" value="<?=$user->id_user;?>"><?php echo $user->level ?></option>
                      <option value="Administrator">Administrator</option>
                      <option value="Direktur">Direktur</option>
                    </select>
                        </fieldset>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;Edit User
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>
 <?php endforeach; ?>



                  <!-- modal -->
<div class="modal modal-danger fade" id="modal-danger">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
      <h5 class="modal-title"><font color='white'>Konfirmasi Penghapusan</font></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
      </div>
      <div class="modal-body">
      <p>Apakah anda yakin akan menghapus data ini ?</p>
      </div>
      <div class="modal-footer">
      <a type="button" class="btn btn-secondary" data-dismiss="modal"><font color='white'><i class="fas fa-times"></i>&nbsp;Batal</font></a>
      <a href="#" id="btn-delete" type="button" class="btn btn-danger mr-1"><i class="fas fa-trash"></i>&nbsp;Hapus</a>
      </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  

  <script>
function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
}
</script>
