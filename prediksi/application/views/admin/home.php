<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                      <div class="col-md-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="profile-widgets py-3">
                              <div class="text-center">
                                <div class="">
                                    <img src="assets/image1/logo_cic.jpg" alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                </div>
                                <div class="mt-3 ">
                                    <a href="#" class="text-dark font-weight-medium font-size-16">UNIVERSITAS CATUR INSAN CENDEKIA</a>
                                    <p class="text-body mt-1 mb-1">Jln. Kesambi No. 202 Kota Cirebon</p>
                                </div>
                                <div class="mt-4">
                                  <ui class="list-inline social-source-list">
                                    <li class="list-inline-item">
                                        <div class="avatar-xs">
                                            <a href="http://www.facebook.com/stmik.cic.3" class="avatar-title rounded-circle">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="avatar-xs">
                                            <a href="http://www.cic.ac.id" class="avatar-title rounded-circle bg-info">
                                                <i class="fas fa-home"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="avatar-xs">
                                            <a href="http://www.instagram.com/universitas_cic" class="avatar-title rounded-circle bg-pink">
                                                <i class="mdi mdi-instagram"></i>
                                            </a>
                                        </div>
                                    </li>
                                  </ui>
                                  </div>
                              </div>
                            </div>
                          </div> <!--card body -->
                        </div>
                      </div><!--col md -->
                      <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Chart Jumlah Dosen Berdasarkan Golongan</h4>

                                    <canvas id="grafik" height="175"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page-content -->

          <script src="<?= base_url('assets/')?>libs/jquery/jquery.min.js"></script>
              <script src="<?php echo base_url();?>assets/Chart.min.js"></script>
           <script src="<?php echo base_url();?>assets/widget-charts2.js"></script>         

    <script>
    
$(function () {

'use strict';

    if( $('#grafik').length > 0 ){
        var ctx2 = document.getElementById("grafik").getContext("2d");
        var data2 = {
            labels: [
            <?php foreach ($hasil as $h): ?>
            "<?php echo $h->angkatan ?>",
            <?php endforeach; ?>
            ],
            datasets: [
                {
                    label: "Jumlah Lulusan",
                    backgroundColor: "#3650ab",
                    borderColor: "#3650ab",
                    data: [
         <?php foreach ($hasil as $h): ?>
            <?php echo $h->total ?>,
            <?php endforeach; ?>
            ]
                }
            ]
        };
        
        var hBar = new Chart(ctx2, {
            type:"bar",
            data:data2,
            
            options: {
                tooltips: {
                    mode:"label"
                },
                scales: {
                    yAxes: [{
                        stacked: true,
                        gridLines: {
                            color: "rgba(135,135,135,0)",
                        },
                        ticks: {
                            fontFamily: "Poppins",
                            fontColor:"#878787"
                        }
                    }],
                    xAxes: [{
                        stacked: true,
                        gridLines: {
                            color: "rgba(135,135,135,0)",
                        },
                        ticks: {
                            fontFamily: "Poppins",
                            fontColor:"#878787"
                        }
                    }],
                    
                },
                elements:{
                    point: {
                        hitRadius:40
                    }
                },
                animation: {
                    duration:   3000
                },
                responsive: true,
                maintainAspectRatio:false,
                legend: {
                    display: false,
                },
                
                tooltip: {
                    backgroundColor:'rgba(33,33,33,1)',
                    cornerRadius:0,
                    footerFontFamily:"'Poppins'"
                }
                
            }
        });
    }




  }); // End of use strict
    </script>             