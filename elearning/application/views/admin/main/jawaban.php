
        <div class="content-wrapper">
            
            <div class="flash-data" data-flashdata="<?=$this->session->flashdata('message') ?>"></div>

            <div class="page-heading">
                <h1 class="page-title">Data <b>Quiz Pembelajaran</b></h1>
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
                             <a href="" data-toggle="modal" data-target="#ModalTambahQuiz" class="btn btn-light">
                              <i class="fa fa-plus-circle"></i> &nbsp; Tambah
                            </a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="50">Nomor</th>
                                    <th>Kode Quiz</th>
                                    <th>Kode Materi</th>
                                    <th>Soal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;

                                foreach($quiz as $u){ 
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $u->kode_quiz ?></td>
                                    <td><?php echo $u->kode_materi ?></td>
                                    <td><?php echo $u->soal ?></td>
                                    <td width="20">
                                        <!-- <button type="button" data-toggle="modal" data-target="#ModalEditQuiz" id="btn-edit-quiz" class="btn btn-primary" 
                                        data-id="<?= $u->id;?>"
                                        data-kode_quiz="<?= $u->kode_quiz;?>"
                                        data-kode_materi="<?= $u->kode_materi;?>"
                                        data-soal="<?= $u->soal;?>"
                                        data-pembuat="<?= $u->pembuat;?>"
                                        >
                                        <i class="fa fa-pencil"></i>
                                        </button>

                                        <a href="Delete_Quiz/<?= $u->id?>" class="btn btn-danger btn-hapus">
                                            <i class="fa fa-trash"></i>
                                        </a> -->
                                        <a href="Jawaban_Quiz/<?= $u->kode_quiz?>" class="btn btn-success">
                                            <i class="fa fa-file-text"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>



