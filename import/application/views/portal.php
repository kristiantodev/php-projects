 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                           <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Dimensi</div>
                                           <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-book-open fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Pertanyaan Kuesioner</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">16</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Kuesioner Masuk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                      
                        <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Analisis Dimensi</h6>
                        </div>
                        <div class="card-body">
                               <div class="row">

                                <div class="col-6">
                                    <center><b><font color="#1E90FF" size="5">Kinerja</font></b></center>
                                    <canvas id="chart_7" height="150"></canvas>
                                </div>

                                <div class="col-6">
                                  <center><b><font color="#1E90FF" size="5">Harapan</font></b></center>
                                    <canvas id="chart_77" height="150"></canvas>
                                </div>
                                   
                               </div>    

                            </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
                <!-- ChartJS -->
    <script src="<?php echo base_url();?>assets/Chart.min.js"></script>
    <!-- Superieur Admin for Chart purposes -->
    <script src="<?php echo base_url();?>assets/widget-charts2.js"></script>