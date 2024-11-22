<section class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="header">
        <h2>Tambah Pengguna</h2>
      </div>
      <div class="body">
        <form class="form-horizontal" action="" method="post">
          <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
              <label for="nickname">Nickname</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="nickname" class="form-control" placeholder="Enter your nickname" name="nickname" value="<?php echo set_value('nickname'); ?>">
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
                        <input type="text" id="username" class="form-control" placeholder="Enter your username" name="username" value="<?php echo set_value('username'); ?>">
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
                        <input type="email" id="email_address_2" class="form-control" placeholder="Enter your email address" name="email" value="<?php echo set_value('email'); ?>">
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
                          <input type="text" id="password_2" class="form-control" placeholder="Enter your password" value="<?=random_password()?>" name="password">
                      </div>
                  </div>
              </div>
          </div>
          <div class="row clearfix">
            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
              <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
