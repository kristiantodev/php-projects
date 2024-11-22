<textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<script type="text/javascript">
function printDiv(elementId) {
 var a = document.getElementById('printing-css').value;
 var b = document.getElementById(elementId).innerHTML;
 window.frames["print_frame"].document.title = document.title;
 window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
 window.frames["print_frame"].window.focus();
 window.frames["print_frame"].window.print();
}
</script>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
  <div class="page-content">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Hasil Prediksi K-Means Clustering</h4>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="text-right mb-4">  
                <a href="javascript:printDiv('box');">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-print"></i> &nbsp;&nbsp;Cetak&nbsp;&nbsp;&nbsp;</button>
                                </a>
            </div>
            <?= $this->session->flashdata('message');?>
            <div id="box"> 
            <table border="1" cellpadding="8"  style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                  <tr align="center" bgcolor="#3650ab">

                      <th><b><font color="white">Cluster</font></b></th>
                      <th><b><font color="white">Nama</font></b></th>
                      <th><b><font color="white">IPK</font></b></th>
                      <th><b><font color="white">SKS</font></b></th>
                      <th><b><font color="white">Keuangan</font></b></th>
                      <th><b><font color="white">Cuti</font></b></th>
                      <th><b><font color="white">Status</font></b></th>

                  </tr>
              </thead>
              <tbody>
                  <tr bgcolor="#0293c9">
                    
                    <td align="center"><font color="white"><b>K1</b></font></td>
                    <td><font color="white"><?= $pusat->nama ?></font></td>
                    <td><font color="white"><?= $pusat->ipk ?></font></td>
                    <td><font color="white"><?= $pusat->sks?></font></td>
                    <td><font color="white"><?= $pusat->uang?></font></td>
                    <td><font color="white"><?= $pusat->cuti?></font></td>
                    <td><font color="white"><?= $pusat->stat ?></font></td>

                  </tr> 

                  <tr bgcolor="#b7c11a">
                    
                    <td align="center"><font color="white"><b>K2</b></font></td>
                    <td><font color="white"><?= $pusat2->nama ?></font></td>
                    <td><font color="white"><?= $pusat2->ipk ?></font></td>
                    <td><font color="white"><?= $pusat2->sks?></font></td>
                    <td><font color="white"><?= $pusat2->uang?></font></td>
                    <td><font color="white"><?= $pusat2->cuti?></font></td>
                    <td><font color="white"><?= $pusat2->stat ?></font></td>

                  </tr> 

              </tbody>
            </table>
            <br>
            <h4>Hasil Prediksi K-Means Clustering</h4>
            <table border="1" cellpadding="8" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead bgcolor="#3650ab">
              <tr align="center">
  
                      <th rowspan="2" width="5"><b><font color="white">Nama</font></b></th>
                      <th colspan="5" width="155"><b><font color="white">Kriteria</font></b></th>
                      <th colspan="2"><b><font color="white">C</font></b></th>
                      <th colspan="2"><b><font color="white">Prediksi</font></b></th>
                  </tr>
                  <tr align="center">
                      <th width="5"><b><font color="white">IPK</font></b></th>
                      <th width="5"><b><font color="white">SKS</font></b></th>
                      <th width="5"><b><font color="white">Keuangan</font></b></th>
                      <th width="5"><b><font color="white">Cuti</font></b></th>
                      <th width="5"><b><font color="white">Status</font></b></th>
                      <th><b><font color="white">C1</font></b></th>
                      <th><b><font color="white">C2</font></b></th>
                      <th><b><font color="white">Kelompok</font></b></th>
                      <th><b><font color="white">Keterangan</font></b></th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($nilaiku as $key => $data) : ?>
                    <?php
                     
                     $c1 = sqrt((pow(($pusat->ipk - $data->ipk), 2)+pow(($pusat->sks - $data->sks), 2)+pow(($pusat->uang - $data->uang), 2)+pow(($pusat->cuti - $data->cuti), 2)+pow(($pusat->stat - $data->stat), 2)));
                     $c2 = sqrt((pow(($pusat2->ipk - $data->ipk), 2)+pow(($pusat2->sks - $data->sks), 2)+pow(($pusat2->uang - $data->uang), 2)+pow(($pusat2->cuti - $data->cuti), 2)+pow(($pusat2->stat - $data->stat), 2)));

                     if ($c1 < $c2) {
                       $kelompok = "C1";
                       $ket = "LULUS TEPAT WAKTU";
                       $warna = "#0293c9";
                     }elseif ($c1 > $c2) {
                       $kelompok = "C2";
                       $ket = "LULUS TERLAMBAT";
                       $warna = "#b7c11a";
                       }elseif ($c1 == $c2) {
                       $kelompok = "C1";
                       $ket = "LULUS TEPAT WAKTU";
                       $warna = "#0293c9";
                     }


                     ?>
                  <tr>
                    
                    <td width="155"><?= $data->nama ?></td>
                    <td width="5" align="center"><?= $data->ipk ?></td>
                    <td width="5" align="center"><?= $data->sks?></td>
                    <td width="5" align="center"><?= $data->uang?></td>
                    <td width="5" align="center"><?= $data->cuti?></td>
                    <td width="5" align="center"><?= $data->stat ?></td>
                    <td align="center"><?= $c1 ?></td>
                    <td align="center"><?= $c2 ?></td>
                    <td align="center" bgcolor="<?= $warna ?>"><font color="white"><b><?= $kelompok ?></b></font></td>
                    <td align="center" bgcolor="<?= $warna ?>"><font color="white"><b><?= $ket ?></font></b></td>
                  </tr>
                  <?php endforeach; ?>   
              </tbody>
            </table>
            </div>
            <br>
            <center><h4>Grafik Prediksi K-Means Clustering</h4></center>
<div class="row">
<div class="col-xl-6 col-md-6"> 
            <canvas id="grafik" height="275"></canvas>
            </div>
           <div class="col-xl-6 col-md-6"> 
            <canvas id="grafik2" height="275"></canvas>
            </div>
</div>

          </div>
        </div>
    </div>
    <!-- end col -->
  </div>
  <!-- end row -->
                    
<script src="<?= base_url('assets/')?>libs/jquery/jquery.min.js"></script>
              <script src="<?php echo base_url();?>assets/Chart.min.js"></script>
           <script src="<?php echo base_url();?>assets/widget-charts2.js"></script>         

    <script>
    
$(function () {

'use strict';

if( $('#grafik').length > 0 ){
    var ctx5 = document.getElementById("grafik").getContext("2d");
    var data5 = {
      datasets: [
        {
          label: 'Lulus Tepat Waktu',
          data: [
          <?php foreach ($nilaiku as $key => $data) : ?>
              <?php
               
               $c1 = sqrt((pow(($pusat->ipk - $data->ipk), 2)+pow(($pusat->sks - $data->sks), 2)+pow(($pusat->uang - $data->uang), 2)+pow(($pusat->cuti - $data->cuti), 2)+pow(($pusat->stat - $data->stat), 2)));
               $c2 = sqrt((pow(($pusat2->ipk - $data->ipk), 2)+pow(($pusat2->sks - $data->sks), 2)+pow(($pusat2->uang - $data->uang), 2)+pow(($pusat2->cuti - $data->cuti), 2)+pow(($pusat2->stat - $data->stat), 2)));

              ?>
          <?php if ($c1 < $c2) { ?>
            {
              x: <?php echo $c1 ?>,
              y: <?php echo $c2 ?>,
              r: 15
            },
            <?php } ?>
            <?php endforeach; ?>
          ],
          backgroundColor:"#0293c9",
          hoverBackgroundColor: "#0293c9",
        }]
    };
    
    var bubbleChart = new Chart(ctx5,{
      type:"bubble",
      data:data5,
      options: {
        elements: {
          points: {
            borderWidth: 1,
            borderColor: 'rgb(33, 33, 33)'
          }
        },
        scales: {
          xAxes: [
          {
            ticks: {
              min: 0,
              max: 100,
              fontFamily: "Poppins",
              fontColor:"#878787"
            },
            gridLines: {
              color: "rgba(135,135,135,0)",
            }
          }],
          yAxes: [
          {
            ticks: {
              fontFamily: "Poppins",
              fontColor:"#878787"
            },
            gridLines: {
              color: "rgba(135,135,135,0)",
            }
          }]
        },
        animation: {
          duration: 3000
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
        }
      }
    });
  }


  if( $('#grafik2').length > 0 ){
    var ctx5 = document.getElementById("grafik2").getContext("2d");
    var data5 = {
      datasets: [
        
        {
          label: 'Lulus Terlambat',
          data: [
            <?php foreach ($nilaiku as $key => $data) : ?>
                    <?php
                     
                     $c1 = sqrt((pow(($pusat->ipk - $data->ipk), 2)+pow(($pusat->sks - $data->sks), 2)+pow(($pusat->uang - $data->uang), 2)+pow(($pusat->cuti - $data->cuti), 2)+pow(($pusat->stat - $data->stat), 2)));
                     $c2 = sqrt((pow(($pusat2->ipk - $data->ipk), 2)+pow(($pusat2->sks - $data->sks), 2)+pow(($pusat2->uang - $data->uang), 2)+pow(($pusat2->cuti - $data->cuti), 2)+pow(($pusat2->stat - $data->stat), 2)));

                     ?>
          <?php if ($c1 > $c2) { ?>
            {
              x: <?php echo $c1 ?>,
              y: <?php echo $c2 ?>,
              r: 15
            },
            <?php } ?>
            <?php endforeach; ?>
          ],
          backgroundColor:"#b7c11a",
          hoverBackgroundColor: "#b7c11a",
        }]
    };
    
    var bubbleChart = new Chart(ctx5,{
      type:"bubble",
      data:data5,
      options: {
        elements: {
          points: {
            borderWidth: 1,
            borderColor: 'rgb(33, 33, 33)'
          }
        },
        scales: {
          xAxes: [
          {
            ticks: {
              min: 0,
              max: 100,
              fontFamily: "Poppins",
              fontColor:"#878787"
            },
            gridLines: {
              color: "rgba(135,135,135,0)",
            }
          }],
          yAxes: [
          {
            ticks: {
              fontFamily: "Poppins",
              fontColor:"#878787"
            },
            gridLines: {
              color: "rgba(135,135,135,0)",
            }
          }]
        },
        animation: {
          duration: 3000
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
        }
      }
    });
  }




  }); // End of use strict
    </script>             
                