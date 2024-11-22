
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <?php
                                $query= $this->db->query("SELECT * from materi ");
                                $num = $query->num_rows();
                              ?>
                                <h2 class="m-b-5 font-strong"><?= $num ?></h2>
                                <div class="m-b-5"><b>Akses Materi</b></div><i class="ti-user widget-stat-icon"></i>
                                <div><i class="fa fa-level-down m-r-5"></i>Aplikasi E-Learning SMP</div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>
            <div class="flash-data" data-flashdata="<?=$this->session->flashdata('message') ?>"></div>
            <div class="flash-data2" data-flashdata2="<?=$this->session->flashdata('pesan') ?>"></div>

            <div class="page-heading">
                <h1 class="page-title">Data <b>Materi</b></h1>
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
                             <a href="" data-toggle="modal" data-target="#ModalTambahMateri" class="btn btn-light">
                              <i class="fa fa-plus-circle"></i> &nbsp; Tambah
                            </a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="50">Nomor</th>
                                    <th>Kode Materi - Mapel</th>
                                    <th>Judul</th>
                                    <th>Untuk Kelas</th>
                                    <th>File</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($materi as $u){ 
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $u->kode_materi ?> - <?php echo $u->mapel ?></td>
                                    <td><?php echo $u->judul ?></td>
                                    <td><?php echo $u->kelas ?></td>
                                    <td>    
                                        <?php if($u->pdf =='') {?>
                                        <a href="" class="btn btn-danger btn-infor">
                                            <i class="fa fa-download"></i>
                                        </a>
                                        <?php } else {?>
                                        <a href="Download/<?= $u->pdf?>" class="btn btn-primary">
                                            <i class="fa fa-download"></i>
                                        </a>
                                        <?php } ?></td>
                                    <td width="100">
                                        <button type="button" data-toggle="modal" data-target="#ModalEditMateri" id="btn-edit-materi" class="btn btn-primary" 
                                        data-id="<?= $u->id;?>"
                                        data-kode_materi="<?= $u->kode_materi;?>"
                                        data-mapel="<?= $u->mapel;?>"
                                        data-kelas="<?= $u->kelas;?>"
                                        data-judul="<?= $u->judul;?>"
                                        data-isi="<?= $u->isi;?>"
                                        data-guru="<?= $u->guru;?>"
                                        data-pdf="<?= $u->pdf;?>"
                                        >
                                            <i class="fa fa-pencil"></i>
                                        </button>

                                        <a href="Delete_Materi/<?= $u->id?>" class="btn btn-danger btn-hapus">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>



