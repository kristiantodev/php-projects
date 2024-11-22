<!-- NAVBAR
    ================================================== -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white navbar-fixed-top">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="<?php echo site_url(); ?>">
          <span>Kuesioner Pelanggan </span>
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="material-icons">close</i>
          </button>

          <!-- Navigation -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?=($this->uri->segment(1)===null)?'active':'' ?>">
              <a class="nav-link" aria-expanded="false" href="<?php echo site_url()?>">
                Home
              </a>
            </li>
            <li class="nav-item <?=($this->uri->segment(1)==='profile')?'active':'' ?>">
              <a class="nav-link" aria-expanded="false" href="<?php echo site_url('profile')?>">
                Profil Perusahaan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-expanded="false" href="" data-toggle="modal" data-target="#takeQuestionnaire">
                Kuesioner
              </a>
            </li>
            <li class="nav-item <?=($this->uri->segment(1)==='result')?'active':'' ?>">
              <a class="nav-link" aria-expanded="false" href="<?php echo site_url('result'); ?>">
                Hasil Kepuasan
              </a>
            </li>
          </ul>

        
        <!--   <a class="navbar-btn btn btn-sm btn-primary lift ml-auto" href="<?php echo site_url('login') ?>">
            Login Admin
          </a>
 -->
        </div>

      </div>
    </nav>





 <!-- Modal -->
    <div class="modal fade" id="takeQuestionnaire" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="<?php echo site_url('home/check_ip'); ?>" method="post">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleModalLabel">Isikan biodata</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group row">
                <label for="customer_name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Tn. John" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="customer_gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <select class="form-control" name="customer_gender">
                    <option value="L">Laki - Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="customer_profession" class="col-sm-2 col-form-label">Pekerjaan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="customer_profession" name="customer_profession" placeholder="Pekerjaan">
                </div>
              </div>
              <div class="form-group row">
                <label for="customer_hp" class="col-sm-2 col-form-label">No. Hp</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="customer_hp" name="customer_hp" placeholder="08xxxxxxx">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>