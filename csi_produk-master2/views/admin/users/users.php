<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Daftar Pengguna</h2>
        </div>
        <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header headers-black">
                            <h2>
                                Pengguna
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                    <a href="#addUser" class="btn btn-primary" role="button" data-toggle='modal' aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">person_add</i>
                                        <span>Tambah Pengguna</span>
                                    </a>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="mytable">
                                    <thead>
                                        <tr>
                                            <th>Foto</th>
                                            <th>Nickname</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Privilege</th>
                                            <th>Is Deleted ?</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($users as $row) { ?>
                                        <tr id="<?php echo $row->id_users; ?>" data-url = "<?=site_url('admin/users/delete')?>">
                                            <td><img src="<?php echo base_url('uploads/avatar/'.$row->foto) ?>" width="48" height="48" alt="User" /></td>
                                            <td><?=$row->nickname?></td>
                                            <td><?=$row->email?></td>
                                            <td><?=$row->username?></td>
                                            <td><?=$row->description?></td>
                                            <td class="text-center"><?=($row->is_deleted == '0')?'No': 'Yes'?></td>
                                            <td>
                                              <?php if($row->is_deleted == '1'): ?>
                                              <a href="<?=site_url('admin/users/edit/'.$row->id_users)?>"><i class="material-icons">edit</i></a>
                                              <a href="#" class="remove"><i class="material-icons">remove_circle</i></a>
                                            <?php else: ?>
                                              <a href="<?=site_url('admin/users/edit/'.$row->id_users)?>"><i class="material-icons">edit</i></a>
                                            <?php endif; ?>
                                            </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
    </div>
</section>

<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="<?php echo site_url('admin/users/add'); ?>" method="post" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="exampleModalLabel">Insert Your Identity</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
              <label for="nickname">Nickname</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="nickname" class="form-control" placeholder="Enter your nickname" name="nickname" value="<?php echo set_value('nickname'); ?>" required oninvalid="this.setCustomValidity('Data Harus Diisi...')" oninput="setCustomValidity('')">
                        <?php echo form_error('nickname'); ?>
                    </div>
                </div>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
              <label for="username">username</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="username" class="form-control" placeholder="Enter your username" name="username" value="<?php echo set_value('username'); ?>" required oninvalid="this.setCustomValidity('Data Harus Diisi...')" oninput="setCustomValidity('')">
                        <?php echo form_error('username'); ?>
                    </div>
                </div>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
              <label for="email_address_2">Email Address</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                        <input type="email" id="email_address_2" class="form-control" placeholder="Enter your email address" name="email" value="<?php echo set_value('email'); ?>" required oninvalid="this.setCustomValidity('Data Harus Diisi...')" oninput="setCustomValidity('')">
                        <?php echo form_error('email'); ?>
                    </div>
                </div>
            </div>
          </div>
          <div class="row clearfix">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                  <label for="password_2">Password</label>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                  <div class="form-group">
                      <div class="form-line">
                          <input type="text" id="password_2" class="form-control" placeholder="Enter your password" value="<?=random_password()?>" name="password" required>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
              <label for="privilege">Privelege</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <select class="form-control show-tick" id="privelege" name="privilege">
                  <?php if($group->num_rows() > 0 ) :
                  foreach($group->result() as $row): ?>
                  <option value="<?=$row->id?>"><?=$row->description?></option>
                <?php endforeach; endif;?>
                </select>
            </div>
            <br>
            <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
              <label for="foto">Foto</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                        <input type="file" name="foto">
                    </div>
                </div>
            </div>
          </div>
         
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit">Save</button>
        </div>
      </div>
    </form>
  </div>
</div>
