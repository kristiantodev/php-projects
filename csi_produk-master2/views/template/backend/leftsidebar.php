<?php
defined('BASEPATH') or exit('No direct script access allowed');
$uri1 = $this->uri->segment(1);
$uri2 = $this->uri->segment(2);
$uri3 = $this->uri->segment(3);
$uri4 = $this->uri->segment(4);
$master_data_submenu = [
  'users','kuesioner'
];
$master_data = "";
if (in_array($uri2, $master_data_submenu)) {
  // code...
  $master_data = "active ";
}
?>
<section>
  <!-- Left Sidebar -->
  <aside id="leftsidebar" class="sidebar">
      <!-- User Info -->
      <div class="user-info">
          <div class="image">
              <img src="<?php echo base_url('uploads/avatar/'.$this->session->userdata('user')->foto) ?>" width="48" height="48" alt="User" />
          </div>
          <div class="info-container">
              <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$this->session->userdata('user')->username?></div>
              <div class="email"><?=$this->session->userdata('user')->email?></div>
              <div class="btn-group user-helper-dropdown">
              </div>
          </div>
      </div>
      <!-- #User Info -->
      <!-- Menu -->
      <div class="menu">
          <ul class="list">
              <li class="header">MAIN NAVIGATION</li>
              <li class="<?= $uri1 == '' || $uri1 == 'dashboard' ? 'active' : ''; ?>">
                  <a href="<?=site_url('dashboard')?>">
                      <i class="material-icons">home</i>
                      <span>Home</span>
                  </a>
              </li>
              <?php if(showOnlyTo('1')):?>
                <li class="<?= $uri1 == 'admin' && $uri2 == 'users' ? 'active' : ''; ?>">
                  <a href="<?=site_url('admin/users')?>">
                    <i class="material-icons">people</i>
                    <span>User</span>
                  </a>
                </li>
              <?php endif; ?>
              <?php if(showOnlyTo('2')):?>
              <li class="<?=$master_data?>">
                  <a href="javascript:void(0);" class="menu-toggle">
                      <i class="material-icons">help</i>
                      <span>Kuesioner</span>
                  </a>
                  <ul class="ml-menu">
                    <li class="<?= $uri1 == 'admin' && $uri2 == 'kuesioner' && $uri3 == 'indikator_penilaian' ? 'active' : ''; ?>">
                      <a href="<?=site_url('admin/kuesioner/indikator_penilaian')?>">
                        <span>Indikator Penilaian</span>
                      </a>
                    </li>
                    <li class="<?= $uri1 == 'admin' && $uri2 == 'kuesioner' && $uri3 == 'indikator_pertanyaan' ? 'active' : ''; ?>">
                      <a href="javascript:void(0)" class="menu-toggle">
                        <span>Indikator Pertanyaan</span>
                      </a>
                      <ul class="ml-menu">
                        <li class="<?=($this->input->get('indicator_type') == 'layanan')?'active':''?>">
                          <a href="<?=site_url('admin/kuesioner/indikator_pertanyaan?indicator_type=layanan')?>">Layanan</a>
                        </li>
                        <li class="<?=($this->input->get('indicator_type') == 'produk')?'active':''?>">
                          <a href="<?=site_url('admin/kuesioner/indikator_pertanyaan?indicator_type=produk')?>">Produk</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
              </li>
            <?php endif; ?>
            <?php if(showOnlyTo("1")): ?>
              <li  class="<?= $uri1 == 'admin' && $uri2 == 'company' ? 'active' : ''; ?>">
                  <a href="<?=site_url('admin/company')?>">
                      <i class="material-icons">perm_identity</i>
                      <span>Perusahaan</span>
                  </a>
              </li>
              <?php endif; ?>
              <?php if(showOnlyTo("2")): ?>
              <li>
                  <a href="<?=site_url('admin/kuesioner-result')?>">
                      <i class="material-icons">analytics</i>
                      <span>Hasil Kuesioner</span>
                  </a>
              </li>
              <?php endif; ?>
              <?php if(showOnlyTo("2")): ?>
              <li>
                  <a href="<?=site_url('admin/kuesioner-report')?>">
                      <i class="material-icons">analytics</i>
                      <span>Laporan CSI</span>
                  </a>
              </li>
              <?php endif; ?>
              <li>
                  <a href="<?=site_url('auth/logout')?>">
                      <i class="material-icons"></i>
                      <span>Ubah Password</span>
                  </a>
              </li>
              <li>
                  <a href="<?=site_url('auth/logout')?>">
                      <i class="material-icons">input</i>
                      <span>Logout</span>
                  </a>
              </li>
          </ul>
      </div>
      <!-- #Menu -->
      <!-- Footer -->
      <div class="legal">
          <div class="copyright">
              &copy; 2020 - 2021 <a href="javascript:void(0);"><?=appName()?></a>.
          </div>
          <div class="version">
              <b>Rizki Dewi Setyorini </b>
          </div>
      </div>
      <!-- #Footer -->
  </aside>
  <!-- #END# Left Sidebar -->
</section>
