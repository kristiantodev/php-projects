
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <?php
                                $query1= $this->db->query("SELECT * from materi ");
                                $num1 = $query1->num_rows();
                              ?>
                                <h2 class="m-b-5 font-strong"><?= $num1 ?></h2>
                                <div class="m-b-5">MATERI AJAR</div><i class="ti-user widget-stat-icon"></i>
                                <div><i class="fa fa-level-down m-r-5"></i><small>Aplikasi E-Learning SMP Tri Budi Mulia</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <?php
                                $query2= $this->db->query("SELECT * from user ");
                                $num2 = $query2->num_rows();
                              ?>
                                <h2 class="m-b-5 font-strong"><?= $num2 ?></h2>
                                <div class="m-b-5">PENGGUNA</div><i class="ti-user widget-stat-icon"></i>
                                <div><i class="fa fa-level-down m-r-5"></i><small>Aplikasi E-Learning SMP Tri Budi Mulia</small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ibox bg-primary color-white widget-stat">
                            <div class="ibox-body">
                                <?php
                                $query= $this->db->query("SELECT * from siswa ");
                                $num3 = $query->num_rows();
                              ?>
                                <h2 class="m-b-5 font-strong"><?= $num3 ?></h2>
                                <div class="m-b-5">SISWA</div><i class="ti-user widget-stat-icon"></i>
                                <div><i class="fa fa-level-down m-r-5"></i><small>Aplikasi E-Learning SMP Tri Budi Mulia</small></div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>
            <!-- END PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title"><b>Aplikasi</b> ELEARNING SMP TRI BUDI MULIA</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                </ol>
            </div>

            <div class="row">
                    <div class="col-md-12">
                        <div class="ibox ibox-warning">
                            <div class="ibox-head">
                                <div class="ibox-title">Apa saja yang bisa dilakukan ?</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="ibox-remove"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                
                            </div>
                        </div>
                    </div>
                </div>
            