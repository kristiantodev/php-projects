
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <?php
                                $query= $this->db->query("SELECT * from siswa ");
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
                <h1 class="page-title">Data <b>Siswa</b></h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox ibox-success">
                    <div class="ibox-head">
                        <div class="ibox-title">
                             <a href="" data-toggle="modal" data-target="#ModalTambahSiswa" class="btn btn-light">
                              <i class="fa fa-plus-circle"></i> &nbsp; Tambah
                            </a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="50">Nomor</th>
                                    <th>No Induk</th>
                                    <th>Nama</th>
                                    <th>Lahir - Kelamin</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($siswa as $u){ 
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $u->no_induk ?></td>
                                    <td><?php echo $u->nama ?></td>
                                    <td><?php echo $u->tgl_lahir ?> - <?php echo $u->jenkel ?></td>
                                    <td><?php echo $u->kelas ?></td>
                                    <td width="100">
                                        <button type="button" data-toggle="modal" data-target="#ModalEditSiswa" id="btn-edit-siswa" class="btn btn-primary" 
                                        data-id="<?= $u->id;?>"
                                        data-no_induk="<?= $u->no_induk;?>"
                                        data-nama="<?= $u->nama;?>"
                                        data-tgl_lahir="<?= $u->tgl_lahir;?>"
                                        data-jenkel="<?= $u->jenkel;?>"
                                        data-kelas="<?= $u->kelas;?>"
                                        >
                                            <i class="fa fa-pencil"></i>
                                        </button>

                                        <a href="Delete_Siswa/<?= $u->id?>" class="btn btn-danger btn-hapus">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>



