
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="flash-data" data-flashdata="<?=$this->session->flashdata('message') ?>"></div>

            <div class="page-heading">
                <h1 class="page-title"><b>Quiz</b></h1>
                <p>Anda harus mengisi soal dibawah ini dengan ketentuan: <br>
                    1. Hanya dapat mengisi 1(satu) kali / Jawaban tidak bisa dirubah. <br>
                    2. Soal berbentuk essai </p>
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
                            <?php 
                              $no_induk = $this->session->userdata('nama');
                              $nama = $this->db->query("SELECT * FROM siswa WHERE no_induk = '$no_induk' ");
                              foreach ($nama->result_array() as $nm) {
                                  $namalengkap = $nm['nama'];
                                  $no_induk = $nm['no_induk'];
                                  
                              } 
                              ?>
                            <a href="<?= base_url('Siswa/Jawaban/')?><?=$no_induk ?>" class="btn btn-light">
                                <i class="fa fa-check"></i> Telah dijawab
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
                                    <td width="60"><?php echo $u->kode_quiz ?></td>
                                    <td width="60"><?php echo $u->kode_materi ?></td>
                                    <td><?php echo $u->soal ?></td>
                                    <td width="100">
                                        <button type="button" data-toggle="modal" data-target="#ModalEditQuiz" id="btn-edit-quiz" class="btn btn-primary" 
                                        data-id="<?= $u->id;?>"
                                        data-kode_quiz="<?= $u->kode_quiz;?>"
                                        data-kode_materi="<?= $u->kode_materi;?>"
                                        data-soal="<?= $u->soal;?>"
                                        >
                                            <i class="fa fa-pencil"></i> &nbsp; Kerjakan Quiz
                                        </button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>



