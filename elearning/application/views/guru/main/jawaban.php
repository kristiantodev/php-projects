
        <div class="content-wrapper">
            
            <div class="flash-data" data-flashdata="<?=$this->session->flashdata('message') ?>"></div>

            <div class="page-heading">
                <h1 class="page-title">Data <b>Jawaban</b></h1>
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
                             
                        </div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="50">Nomor</th>
                                    <th>Nilai</th>
                                    <th>Kode Materi</th>
                                    <th>Kode Quiz</th>
                                    <th>Jawaban</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;

                                foreach($jawaban as $u){ 
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php
                                            if ($u->nilai =='') { ?>
                                            <span class="badge bg-danger">Belum dinilai</span>
                                        <?php } else { ?>
                                                <span class="badge bg-success"><?=$u->nilai ?></span>
                                        <?php } ?>
                                    </td>
                                    <td><?php echo $u->kode_quiz ?></td>
                                    <td><?php echo $u->kode_materi ?></td>
                                    <td><?php echo $u->jawaban ?></td>
                                    <td width="120">
                                        <button type="button" data-toggle="modal" data-target="#ModalEditNilai" id="btn-nilai" class="btn btn-primary" 
                                        data-id="<?= $u->id;?>"
                                        data-soal="<?= $u->soal;?>"
                                        data-kode_quiz="<?= $u->kode_quiz;?>"
                                        data-jawaban="<?= $u->jawaban;?>"
                                        data-no_induk="<?= $u->no_induk;?>"
                                        >
                                        <i class="fa fa-pencil"></i> Beri nilai
                                        </button>
                                    </td>
                                   
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>


