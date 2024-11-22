<!-- WELCOME
    ================================================== -->
    <section class="pt-4 pt-md-11">
      <div class="container">
        <?php if($customer != null): ?>
            <table class="table table-sm table-borderless">
              <tr>
                <th width="15%">Nama</th>
                <td>: <?=$customer->customer_name?></td>
                <th width="15%">Jenis Kelamin</th>
                <td>: <?=($customer->customer_gender === 'L')?"Laki - Laki":"Perempuan" ?></td>
              </tr>
              <tr>
                <th>Pekerjaan</th>
                <td>: <?=$customer->customer_profession?> </td>
                <th width="15%">IP</th>
                <td>: <?=$customer->customer_ip?></td>
              </tr>
              <tr>
                <th>Hp</th>
                <td>: <?=$customer->customer_hp?></td>
                <th>Browser</th>
                <td>: <?=$this->agent->browser()?></td>
              </tr>
            </table>
        <hr>
      <?php endif; ?>
        <div class="row align-items-center">
          <div class="col-12 col-md-12 col-lg-12 text-center">
            <img src="uploads/<?=appSetting()->logo?>" alt="Logo Perusahaan"><br>
            Logo Perusahaan
            <hr>
          </div>

        </div> <!-- / .row -->
        <div class="row align-items-center">
          <div class="col-3 col-md-3 col-lg-3">
            Company Name
          </div>
          <div class="col-1 col-md-1 col-lg-1">
            :
          </div>
          <div class="col-8 col-md-8 col-lg-8">
            <?=appSetting()->nama_perusahaan?>
          </div>
        </div>
        <hr>
        <div class="row align-items-center">
          <div class="col-3 col-md-3 col-lg-3">
            Telepon
          </div>
          <div class="col-1 col-md-1 col-lg-1">
            :
          </div>
          <div class="col-8 col-md-8 col-lg-8">
            <?=appSetting()->telp?>
          </div>
        </div>
        <hr>
        <div class="row align-items-center">
          <div class="col-3 col-md-3 col-lg-3">
            Website
          </div>
          <div class="col-1 col-md-1 col-lg-1">
            :
          </div>
          <div class="col-8 col-md-8 col-lg-8">
            <?=appSetting()->website?>
          </div>
        </div>
        <hr>
        <div class="row align-items-center">
          <div class="col-3 col-md-3 col-lg-3">
            Alamat
          </div>
          <div class="col-1 col-md-1 col-lg-1">
            :
          </div>
          <div class="col-8 col-md-8 col-lg-8">
            <?=appSetting()->alamat?>
          </div>
        </div>
        <hr>
      </div> <!-- / .container -->
    </section>
