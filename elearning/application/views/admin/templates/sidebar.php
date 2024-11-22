        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="<?= base_url('vendor/backend/') ?>img/admin-avatar.png" width="45px" />
                    </div>
                    <?php 
                      $nama1 = $this->session->userdata('nama');
                      $nama = $this->db->query("SELECT * FROM user WHERE username = '$nama1' ");
                      foreach ($nama->result_array() as $nm) {
                          $namalengkap = $nm['nama'];
                          $levell = $nm['level'];
                      } 
                      ?>
                    <div class="admin-info">
                        <div class="font-strong"><?=$namalengkap;?></div><small><?=$levell;?></small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="<?= base_url('Admin/') ?>"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">MAIN MENU</li>

                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-list"></i>
                            <span class="nav-label">Data Learning </span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url('Admin/Mapel') ?>">Mata Pelajaran</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Admin/Materi') ?>">Materi</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-user"></i>
                            <span class="nav-label">Data User </span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url('Admin/Siswa') ?>">Siswa / Murid</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Admin/Guru') ?>">Guru</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-question"></i>
                            <span class="nav-label">Data Quiz </span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="<?= base_url('Admin/Quiz') ?>">Quiz</a>
                            </li>
                            <li>
                                <a href="<?= base_url('Admin/Jawaban') ?>">Jawaban</a>
                            </li>
                            <li>
                                <a href="" data-toggle="modal" data-target="#ModalLaporan">Laporan</a>
                            </li>
                        </ul>
                    </li>
                    

                    <li class="heading">DATA AKSES</li>

                    <li>
                        <a href="<?= base_url('Admin/User')?>"><i class="sidebar-item-icon fa fa-lock"></i>
                            <span class="nav-label">User</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('Auth/Out')?>"><i class="sidebar-item-icon fa fa-power-off"></i>
                            <span class="nav-label">Keluar</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->