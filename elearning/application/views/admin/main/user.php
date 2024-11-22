
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <?php
                                $query= $this->db->query("SELECT * from user ");
                                $num = $query->num_rows();
                              ?>
                                <h2 class="m-b-5 font-strong"><?= $num ?></h2>
                                <div class="m-b-5"><b>Akses Pengguna</b></div><i class="ti-user widget-stat-icon"></i>
                                <div><i class="fa fa-level-down m-r-5"></i>Aplikasi E-Learning</div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>
            <div class="flash-data" data-flashdata="<?=$this->session->flashdata('message') ?>"></div>

            <div class="page-heading">
                <h1 class="page-title">Data <b>User</b></h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox ibox-warning">
                    <div class="ibox-head">
                        <div class="ibox-title">
                             <a href="" data-toggle="modal" data-target="#ModalTambahUser" class="btn btn-light">
                              <i class="fa fa-plus-circle"></i> &nbsp; Tambah
                            </a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="50">Nomor</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($user as $u){ 
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $u->nama ?></td>
                                    <td><?php echo $u->username ?></td>
                                    <td><?php echo $u->level ?></td>
                                    <td width="100">
                                        <button type="button" data-toggle="modal" data-target="#ModalEditUser" id="btn-edit" class="btn btn-primary" 
                                        data-id="<?= $u->id;?>"
                                        data-username="<?= $u->username;?>"
                                        data-password="<?= $u->password;?>"
                                        data-nama="<?= $u->nama;?>"
                                        data-level="<?= $u->level;?>"
                                        >
                                            <i class="fa fa-pencil"></i>
                                        </button>

                                        <a href="Delete_User/<?= $u->id?>" class="btn btn-danger btn-hapus">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>



