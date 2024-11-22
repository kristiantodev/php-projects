<section class="pt-4 pt-md">
  <div class="container">
    <div class="box box-primary">
      <div class="box-body">
        <h2 class="text-center">CSI Result</h2>
        <div class="col-lg-12 col-xs-12">
          <?php
          $mis_layanan = 0;
          $mis_produk = 0;
          foreach ($total_layanan as $key => $value) {
            $mis_layanan += $value->perception/$responden;
          }
          foreach ($total_produk as $key => $value) {
            $mis_produk += $value->perception/$responden;
          }
          $ws_layanan = 0;
          $ws_produk = 0;
          foreach ($total_layanan as $key => $value) {
            $wf_layanan = ($value->perception/$responden) / $mis_layanan;
            $mss_layanan = $value->reality / $responden;
            $ws_layanan += $wf_layanan * $mss_layanan;
          }
          foreach ($total_produk as $key => $value) {
            $wf_produk = ($value->perception/$responden) / $mis_produk;
            $mss_produk = $value->reality / $responden;
            $ws_produk += $wf_produk * $mss_produk;
          }
          $result_layanan = number_format($ws_layanan/4 , 2)*100;
          $result_produk = number_format($ws_produk/4 , 2)*100;
           ?>
        </div>
        <table class="table table-hover text-center">
          <thead>
            <tr>
              <th>Kepuasan Terhadap Layanan</th>
              <th>Kepuasan Terhadap Produk</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <h3 class="text-center"><strong><?= $result_layanan ?><sup style="font-size: 20px">%</sup></strong></h3>
                <?php if ($result_layanan <= 25) {
                    $ket = "Kurang";
                } elseif ($result_layanan >= 26 && $result_layanan <= 50) {
                    $ket = "Cukup";
                } elseif ($result_layanan >= 51 && $result_layanan <= 75) {
                    $ket = "Baik";
                } else {
                    $ket = "Sangat Baik";
                } ?>
                <p class="text-center"><strong><?= $ket ?><strong></p>
              </td>
              <td>
                <h3 class="text-center"><strong><?= $result_produk ?><sup style="font-size: 20px">%</sup></strong></h3>
                <?php if ($result_produk <= 25) {
                    $ket = "Kurang";
                } elseif ($result_produk >= 26 && $result_produk <= 50) {
                    $ket = "Cukup";
                } elseif ($result_produk >= 51 && $result_produk <= 75) {
                    $ket = "Baik";
                } else {
                    $ket = "Sangat Baik";
                } ?>
                <p class="text-center"><strong><?= $ket ?><strong></p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</section>
