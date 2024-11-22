        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="<?= base_url('vendor/backend/') ?>img/admin-avatar.png" width="45px" />
                    </div>
                    <?php 
                      $no_induk = $this->session->userdata('nama');
                      $nama = $this->db->query("SELECT * FROM siswa WHERE no_induk = '$no_induk' ");
                      foreach ($nama->result_array() as $nm) {
                          $namalengkap = $nm['nama'];
                          $kelas = $nm['kelas'];
                          
                      } 
                      ?>
                    <div class="admin-info">
                        <div class="font-strong"><?=$namalengkap;?></div><small>Siswa Kelas <?=$kelas ?></small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="<?= base_url('Siswa/') ?>"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">MAIN MENU</li>

                    <li>
                        <a href="<?= base_url('Siswa/Materi') ?>"><i class="sidebar-item-icon fa fa-file-text"></i>
                            <span class="nav-label">Materi Pembelajaran</span>
                        </a>
                    </li><li>
                        <a href="<?= base_url('Auth/Out')?>"><i class="sidebar-item-icon fa fa-power-off"></i>
                            <span class="nav-label">Keluar</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->