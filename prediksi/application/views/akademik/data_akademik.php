<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
  <div class="page-content">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Prediksi Kelulusan Mahasiswa</h4>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="text-right mb-4">  
            </div>


 <div class="row">
<div class="col-xl-9 col-md-9">           
            <?= $this->session->flashdata('message');?>
            <table border="1" cellpadding="5" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
             <form action="<?php echo site_url('laporan_admin'); ?>" method="post">
              <thead bgcolor="#3650ab">
                  <tr>
                      <th colspan ="3"><center><font color="white">Cluster 1 (Lulus Tepat Waktu)</font></center></th>
                      <th colspan ="3"><center><font color="white">Cluster 2 (Lulus Terlambat)</font></center></th>
                  </tr>
                  <tr align="center">
                      <th width="5"><font color="white">Pilih Cluster</font></th>
                      <th><font color="white">Nama</font></th>
                      <th><font color="white">Nilai</font></th>
                      <th width="5"><font color="white">Pilih Cluster</font></th>
                      <th><font color="white">Nama</font></th>
                      <th><font color="white">Nilai</font></th>
                  </tr>
              </thead>
              <tbody>
                  <?php $u=1; foreach ($nilaiku as $key => $data) { ?>
                  <tr align="center">
                       <td rowspan='5' width="5" align="center"><br>
                        <input type="radio" required id="outstanding_<?php echo $u; ?>" name="kluster1" class="required" value="<?= $data->id_nilai ?>" onchange="getVals(this, 'question_<?php echo $u; ?>');">
                        <label class="radio" for="outstanding_<?php echo $u; ?>"></label>
                        <label for="outstanding_<?php echo $u; ?>" class="wrapper"></label>
                      </td>
                       <td rowspan='5' align="center"><?= $data->nama ?>
                       </td>
                       <td align="center"><?= $data->ipk ?></td>
                       <td rowspan='5' width="5" align="center"><br>
                       <input type="radio" required id="poor2_<?php echo $u; ?>" name="kluster2" class="required" value="<?= $data->id_nilai ?>" onchange="getVals(this, 'question2_<?php echo $u; ?>');">
                       <label class="radio" for="poor2_<?php echo $u; ?>"></label>
                       <label for="poor2_<?php echo $u; ?>" class="wrapper"></label>
                      </td>
                       <td rowspan='5' align="center"><br><?= $data->nama ?></td>
                       <td align="center"><?= $data->ipk ?></td>
                  </tr>
                <tr align="center">
                     <td><?= $data->sks ?></td>
                     <td><?= $data->sks ?></td>
                </tr>

                 <tr align="center">
                     <td><?= $data->uang ?></td>
                     <td><?= $data->uang?></td>
                </tr>

                 <tr align="center">
                     <td><?= $data->cuti?></td>
                     <td><?= $data->cuti?></td>
                </tr>

                 <tr align="center">
                     <td><?= $data->stat?></td>
                     <td><?= $data->stat?></td>
                </tr>  
                  <?php $u++; } ?>   
              </tbody>
            </table>
            </div>

            <div class="col-xl-3 col-md-3">
                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-search"></i>&nbsp;&nbsp;Tampilkan Hasil Prediksi
                                </button>
                </form>
            </div>
            </div>




          </div>
        </div>
    </div>
    <!-- end col -->
  </div>
  <!-- end row -->
                    

                