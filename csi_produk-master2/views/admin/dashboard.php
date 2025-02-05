<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>
        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">analytics</i>
                    </div>
                    <div class="content">
                        <div class="text">CSI</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?=getCsi();?><sup style="font-size: 20px">%</sup></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">help</i>
                    </div>
                    <div class="content">
                        <div class="text">ASPEK PENILAIAN</div>
                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?=getRow('tbl_indikator_penilaian',"COUNT(id_indikator) as total")->total?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">report</i>
                    </div>
                    <div class="content">
                        <div class="text">KUESIONER</div>
                        <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?=getRow('tbl_indikator_pertanyaan',"COUNT(id_pertanyaan) as total")->total?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person_add</i>
                    </div>
                    <div class="content">
                        <div class="text">RESPONDEN</div>
                        <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"><?=getRow('tbl_customers',"COUNT(customer_id) as total")->total?></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix">
          <div class="card">
            <div class="body text-center">
              <h2>
                Sistem Penilaian Kepuasan Pelanggan <br>
                <?=appSetting()->nama_perusahaan;?> <br>
                <?=appSetting()->alamat?>
              </h2>
            </div>
          </div>

        </div>
    </div>
</section>
