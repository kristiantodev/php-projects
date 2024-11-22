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
<section class="content">
    <div class="container-fluid">
      <div class="card">
        <h2 class="header">Laporan Kuesioner CSI</h2>
        <div class="body">
          <form class="form-horizontal" action="" method="get">
            <div class="row clearfix">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="jenis">Jenis Kepuasan</label>
              </div>
              <!-- <div class="col-lg-3 col-md-3 col-sm-8 col-xs-7">
                <select class="form-control show-tick" name="indicator_type">
                    <option value="layanan">Layanan</option>
                    <option value="produk">Produk</option>
                </select>
              </div> -->
              <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label">
                <label for="tahun">Tahun</label>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <select class="form-control show-tick" name="tahun">
                  <?php for($i=date('Y'); $i >= 2010; $i--){ ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                <button type="submit" name="submitted" value="filter" class="btn btn-info"><i class="material-icons">search</i> <span>Filter</span></button>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                 <a data-toggle="modal" data-target="#bb2">
                                            <button type="button" class="btn btn-info waves-effect waves-light">
                                    <i class="material-icons">print</i> &nbsp;&nbsp;Cetak Laporan</button>
                                </a>
              </div>
            </div>
          </form>
          <table class="table table-sm js-basic-example dataTable" id="mytable">
            <thead>
              <tr>
                <th width="1%">No</th>
                <th width="40%">Indikator Penilaian</th>
                <th width="15%">Kinerja</th>
                <th width="15%">Harapan</th>
                <th width="15%">Sangat Baik</th>
                <th width="14%">Baik</th>
                <th width="15%">Cukup</th>
                <th width="14%">Kurang</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach ($laporan as $lap): ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $lap->indicator_type ?></td>
                <td><?php echo $lap->avgKinerja ?></td>
                <td><?php echo $lap->avgHarapan ?></td>
                 <td><?php echo number_format(($lap->aa/$lap->total)*100,2) ?> %</td>
                                                  <td><?php echo number_format(($lap->ab/$lap->total)*100,2) ?> %</td>
                                                  <td><?php echo number_format(($lap->ac/$lap->total)*100,2) ?> %</td>
                                                  <td><?php echo number_format(($lap->ad/$lap->total)*100,2) ?> %</td>
              </tr>
              <?php endforeach; ?>
          <!-- <table class="table table-sm js-basic-example dataTable" id="mytable">
            <thead>
              <tr>
                <th width="1%">No</th>
                <th width="40%">Jenis Kepuasan</th>
                <th width="15%">Tahun</th>
                <th width="15%">Jumlah</th>
                <th width="15%">Predikat</th>
                <th width="14%">Action</th>
              </tr>
            </thead>
            <tbody> -->
              <!-- <?php if(!empty($this->input->get('submitted')) && $this->input->get('submitted')=='filter'):
                $mis_layanan = 0;
                $mis_produk = 0;
                foreach ($total_layanan as $key => $value) {
                  $mis_layanan += $value->perception/$responden;
                }
                $ws_layanan = 0;
                foreach ($total_layanan as $key => $value) {
                  $wf_layanan = ($value->perception/$responden) / $mis_layanan;
                  $mss_layanan = $value->reality / $responden;
                  $ws_layanan += $wf_layanan * $mss_layanan;
                }
                $result_layanan = number_format($ws_layanan/4 , 2)*100;
                if ($result_layanan <= 25) {
                    $ket = "Kurang";
                } elseif ($result_layanan >= 26 && $result_layanan <= 50) {
                    $ket = "Cukup";
                } elseif ($result_layanan >= 51 && $result_layanan <= 75) {
                    $ket = "Baik";
                } else {
                    $ket = "Sangat Baik";
                }
                ?>
              <tr>
                <td>1</td>
                <td><?=$indicator_type?></td>
                <td><?=$tahun?></td>
                <td><?=$responden?></td>
                <td><?=$ket?></td>
                <td> <a href="#detail-<?=$indicator_type?>" class="btn btn-primary" data-toggle='modal'>Detail</a> </td>
              </tr>
              <?php endif; ?> -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
</section>
<?php if(!empty($this->input->get('submitted')) && $this->input->get('submitted')=='filter'): ?>
<div class="modal fade" id="detail-<?=$indicator_type?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="<?php echo site_url('admin/users/add'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row clearfix">
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                  <label for="password_2">Password</label>
              </div>
              <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                  <div class="form-group">
                      <div class="form-line">
                          <input type="text" id="password_2" class="form-control" placeholder="Enter your password" value="<?=random_password()?>" name="password">
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit">Save</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php endif; ?>


<!-- Modal -->
                  <div class="modal fade text-left" id="bb2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-lg">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Cetak Laporan</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      
                      <div class="modal-body">
                        <div id="box">
                          <center>
                           <img src="<?php echo base_url() ?>uploads/kop.jpg" alt="" height="135" width="700"></center>
<center><h3>Laporan Hasil Survei<br>Kepuasan Pelanggan Krupuk Padi Kapas Indramayu</h3></center>
                <table class="table" border="1">
            <thead>
              <tr>
                <th width="1%">No</th>
                <th width="40%">Indikator Penilaian</th>
                <th width="15%">Kinerja</th>
                <th width="15%">Harapan</th>
                <th width="15%">Sangat Baik</th>
                <th width="14%">Baik</th>
                <th width="15%">Cukup</th>
                <th width="14%">Kurang</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=1; foreach ($laporan as $lap): ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $lap->indicator_type ?></td>
                <td><?php echo $lap->avgKinerja ?></td>
                <td><?php echo $lap->avgHarapan ?></td>
                 <td><?php echo number_format(($lap->aa/$lap->total)*100,2) ?> %</td>
                                                  <td><?php echo number_format(($lap->ab/$lap->total)*100,2) ?> %</td>
                                                  <td><?php echo number_format(($lap->ac/$lap->total)*100,2) ?> %</td>
                                                  <td><?php echo number_format(($lap->ad/$lap->total)*100,2) ?> %</td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
                              </div>
                      </div>
                      <div class="modal-footer">
                 
                        <center>
        <a href="javascript:printDiv('box');">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-print"></i> &nbsp;&nbsp;Cetak&nbsp;&nbsp;&nbsp;</button>
                                </a></center>
                      </div>
                      
                 
                    </div>
                    </div>
                  </div>
