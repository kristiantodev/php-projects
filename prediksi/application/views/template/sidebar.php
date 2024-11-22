<?php if ($this->session->userdata('level')=="Admin") { ?>
    <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
          <div class="h-100">
          <div class="user-wid text-center py-4">
              <div class="user-img">
                  <img src="<?= base_url('assets/uploads/foto/').$session['image']?>" alt="" class="avatar-lg mx-auto rounded-circle" widht="120">
              </div>
              <div class="mt-3">
                  <a href="#" class="text-dark font-weight-medium font-size-16"><?= $session['nama_u']?></a>
                  <p class="text-body mt-1 mb-0 font-size-13"><?= $session['prodi']?></p>
              </div>
          </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="<?= base_url('admin')?>" class=" waves-effect">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('mahasiswa')?>" class=" waves-effect">
                        <i class="fa fa-book"></i>
                        <span>Kelola Mahasiswa</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('data_akademik')?>" class="waves-effect">
                        <i class="fa fa-tasks"></i>
                        <span>Prediksi Kelulusan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('user')?>" class=" waves-effect">
                        <i class="fa fa-cogs"></i>
                        <span>Kelola User</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

<?php } else { ?>
    <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
          <div class="h-100">
          <div class="user-wid text-center py-4">
              <div class="user-img">
                  <img src="<?= base_url('assets/uploads/foto/').$session['image']?>" alt="" class="avatar-lg mx-auto rounded-circle" widht="120">
              </div>
              <div class="mt-3">
                  <a href="#" class="text-dark font-weight-medium font-size-16"><?= $session['nama_u']?></a>
                  <p class="text-body mt-1 mb-0 font-size-13"><?= $session['prodi']?></p>
              </div>
          </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="<?= base_url('kaprodi')?>" class=" waves-effect">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('user_profile')?>" class=" waves-effect">
                        <i class="fas fa-user"></i>
                        <span>Kelola Profile</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('data_akademik2')?>" class=" waves-effect">
                        <i class="fa fa-tasks"></i>
                        <span>Prediksi Kelulusan</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

<?php } ?>