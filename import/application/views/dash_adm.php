

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                <h3 class="page-title"><b><i class='fa fa-home'></i>&nbsp;Dashboard Sistem Kepuasan</b></h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Alumni dan Pengguna Lulusan</li>
                                    </ol>
               <div class="state-information d-none d-sm-block">
                                        <div class="state-graph">
                                            <div id="header-chart-1"></div>
                                        </div>
                                        <div class="state-graph">
                                            <div id="header-chart-2"></div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                       
                        <div class="page-content-wrapper">
                            <div class="row">
             <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Alumni</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50"><a href='<?php echo site_url();?>adm/alumni' class="text-white">Total</a></h6>
                                                    <h4 class="mb-3 mt-0"><b> 

<?php echo $this->db->count_all_results('alumni');?>
                                                    Alumni</b></h4>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-graduation-cap display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Alumni</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50"><a href="<?php echo site_url();?>adm/periode" class="text-white">Periode Aktif</a></h6>
                                                    <h4 class="mb-3 mt-0"><b><?=$periodeku->nm_periode;?> <?=$periodeku->tahun;?></b></h4>
                                                   
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-clock  display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Alumni</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50"><a href="<?php echo site_url();?>adm/stakeholder" class="text-white">Total</a></h6>
                                                    <h4 class="mb-3 mt-0"><b>
<?php echo $this->db->count_all_results('stakeholder');?>
 P.Lulusan</b></h4>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fab fa-black-tie display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                   
                            </div>
                            <!-- end row -->

                             

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <center><h4 class="mt-0 header-title"><b>Kepuasan Alumni
                                            (<?php echo $this->db->where('id_periode', $periodeku->id_periode)->count_all_results('kep_alumni');?> Penilaian)</b></h4></center>
            
                                                        
                                            <canvas id="chart_alum" height="180"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                           <center> <h4 class="mt-0 header-title"><b>Kepuasan Pengguna Lulusan (<?php $array = array('id_periode' => $periodeku->id_periode, 'status_isi' => 1);
  echo $total = $this->db->where($array)->count_all_results('kep_plulusan');?> Penilaian)</b></h4></center>
            
                                                       
                                            <canvas id="chart_stake" height="180"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                                        <div class="row">
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <center><h4 class="mt-0 header-title"><b>Kepuasan Alumni</b></h4></center>
                                                                  
                                            <canvas id="chart_88" height="300"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                           <center> <h4 class="mt-0 header-title"><b>Kepuasan Pengguna Lulusan</b></h4></center>
            
                                                       
                                            <canvas id="chart_89" height="300"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->


                               <div class="row">
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <center><h4 class="mt-0 header-title"><b>Jumlah Responden Kepuasan Alumni</b></h4></center>
                                                                  
                                            <canvas id="grafik" height="180"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                           <center> <h4 class="mt-0 header-title"><b>Jumlah Responden Kepuasan Pengguna Lulusan</b></h4></center>
            
                                                       
                                            <canvas id="grafik2" height="180"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                               
                            


                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->
               
   <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
                <!-- ChartJS -->
    <script src="<?php echo base_url();?>assets/Chart.min.js"></script>
    <!-- Superieur Admin for Chart purposes -->
    <script src="<?php echo base_url();?>assets/widget-charts2.js"></script>

 <script>
    
$(function () {

'use strict';
if( $('#chart_stake').length > 0 ){
        var ctx6 = document.getElementById("chart_stake").getContext("2d");
        var data6 = {
             labels: [
            "Tingkat Kinerja/Kepuasan",
            "Tingkat Harapan/Kepentingan"
        ],
         datasets: [
            {
                data: [<?php echo number_format($stake->rata2_kinerja,2); ?>, <?php echo number_format($stake->rata2_harapan,2); ?>],
                backgroundColor: [
                    "#00a0df",
                    "#c3cc34"
                ],
                hoverBackgroundColor: [
                    "#00acf0",
                    "#d0d962"
                ]
            }]
        };
        
        var pieChart  = new Chart(ctx6,{
            type: 'pie',
            data: data6,
            options: {
                animation: {
                    duration:   3000
                },
                responsive: true,
                legend: {
                    labels: {
                    fontFamily: "Poppins",
                    fontColor:"#878787"
                    }
                },
                tooltip: {
                    backgroundColor:'rgba(33,33,33,1)',
                    cornerRadius:0,
                    footerFontFamily:"'Poppins'"
                },
                elements: {
                    arc: {
                        borderWidth: 0
                    }
                }
            }
        });
    }


    if( $('#chart_alum').length > 0 ){
        var ctx6 = document.getElementById("chart_alum").getContext("2d");
        var data6 = {
             labels: [
            "Tingkat Kinerja/Kepuasan",
            "Tingkat Harapan/Kepentingan"
        ],
        datasets: [
            {
                data: [<?php echo number_format($alum->rata2_kinerja,2); ?>, <?php echo number_format($alum->rata2_harapan,2); ?>],
                backgroundColor: [
                    "#00a0df",
                    "#c3cc34"
                ],
                hoverBackgroundColor: [
                    "#00acf0",
                    "#d0d962"
                ]
            }]
        };
        
        var pieChart  = new Chart(ctx6,{
            type: 'pie',
            data: data6,
            options: {
                animation: {
                    duration:   3000
                },
                responsive: true,
                legend: {
                    labels: {
                    fontFamily: "Poppins",
                    fontColor:"#878787"
                    }
                },
                tooltip: {
                    backgroundColor:'rgba(33,33,33,1)',
                    cornerRadius:0,
                    footerFontFamily:"'Poppins'"
                },
                elements: {
                    arc: {
                        borderWidth: 0
                    }
                }
            }
        });
    }

    if( $('#grafik').length > 0 ){
        var ctx2 = document.getElementById("grafik").getContext("2d");
        var data2 = {
            labels: [
<?php foreach ($grafikku as $grafik): ?>
          "<?php echo $grafik->nm_prodi ?>",
         <?php endforeach; ?>
            ],
            datasets: [
                {
                    label: "Total Responden",
                    backgroundColor: "#0293c9",
                    borderColor: "#0293c9",
                    data: [
<?php foreach ($grafikku as $grafik): ?>
          <?php echo $grafik->total ?>,
         <?php endforeach; ?>
                    ]
                }
            ]
        };
        
        var hBar = new Chart(ctx2, {
            type:"horizontalBar",
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
                            fontColor:"#324148"
                        }
                    }],
                    xAxes: [{
                        stacked: true,
                        gridLines: {
                            color: "rgba(135,135,135,0)",
                        },
                        ticks: {
                            fontFamily: "Poppins",
                            fontColor:"#324148"
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


    if( $('#grafik2').length > 0 ){
        var ctx2 = document.getElementById("grafik2").getContext("2d");
        var data2 = {
            labels: [
<?php foreach ($grafikku2 as $grafik2): ?>
          "<?php echo $grafik2->nm_instansi ?>",
         <?php endforeach; ?>
            ],
            datasets: [
                {
                    label: "Total Dinilai",
                    backgroundColor: "#c3cc34",
                    borderColor: "#c3cc34",
                    data: [
<?php foreach ($grafikku2 as $grafik2): ?>
          <?php echo $grafik2->total ?>,
         <?php endforeach; ?>
                    ]
                }
            ]
        };
        
        var hBar = new Chart(ctx2, {
            type:"horizontalBar",
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
                            fontColor:"#324148"
                        }
                    }],
                    xAxes: [{
                        stacked: true,
                        gridLines: {
                            color: "rgba(135,135,135,0)",
                        },
                        ticks: {
                            fontFamily: "Poppins",
                            fontColor:"#324148"
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


    if( $('#chart_88').length > 0 ){
        var ctx2 = document.getElementById("chart_88").getContext("2d");
        var data2 = {
            labels: [
                 <?php foreach ($grafikku3 as $grafik3): ?>
            "<?php echo $grafik3->tahun ?>",
<?php endforeach; ?>
            ],
            datasets: [
                {
                    label: "Tingkat Kinerja",
                    backgroundColor: "#0293c9",
                    borderColor: "#0293c9",
                    data: [
<?php foreach ($grafikku3 as $grafik3): ?>
                    <?php echo $grafik3->rata2_kinerja ?>,

                    <?php endforeach; ?>
                    ]
                },
                {
                    label: "Tingkat Harapan",
                    backgroundColor: "#c3cc34",
                    borderColor: "#c3cc34",
                    data: [
<?php foreach ($grafikku3 as $grafik3): ?>
                    <?php echo $grafik3->rata2_harapan ?>,

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

if( $('#chart_89').length > 0 ){
        var ctx2 = document.getElementById("chart_89").getContext("2d");
        var data2 = {
            labels: [
                 <?php foreach ($grafikku4 as $grafik4): ?>
            "<?php echo $grafik4->tahun ?>",
<?php endforeach; ?>
            ],
            datasets: [
                {
                    label: "Tingkat Kinerja",
                    backgroundColor: "#0293c9",
                    borderColor: "#0293c9",
                    data: [
<?php foreach ($grafikku4 as $grafik4): ?>
                    <?php echo $grafik4->rata2_kinerja ?>,

                    <?php endforeach; ?>
                    ]
                },
                {
                    label: "Tingkat Harapan",
                    backgroundColor: "#c3cc34",
                    borderColor: "#c3cc34",
                    data: [
<?php foreach ($grafikku4 as $grafik4): ?>
                    <?php echo $grafik4->rata2_harapan ?>,

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