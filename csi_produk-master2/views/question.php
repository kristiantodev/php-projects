<section class="pt-4 pt-md">
  <div class="container">
    <form action="<?php echo site_url('questionnaire/setAnswer'); ?>" method="post">
    <table class="table table-sm table-borderless">
      <tr>
        <th width="15%">Name</th>
        <td>: <?=$customer->customer_name?></td>
        <th width="15%">Jenis Kelamin</th>
        <td>: <?=($customer->customer_gender === 'L') ? "Laki-Laki":"Perempuan"; ?></td>
      </tr>
      <tr>
        <th>Pekerjaan</th>
        <td>: <?=$customer->customer_profession?></td>
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
    <hr class="bg-primary" style="border: 5px solid blue">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12">
        <h3 class="text-center">Keterangan Skala Penilaian</h3>
        <table class="table table-hover">
          <tr>
            <th>Tingkat Kinerja/Persepsi</th>
            <th>Tingkat Kepentingan/Harapan</th>
          </tr>
          <tr>
            <td>
              <ol style="1">
                <li>Kurang</li>
                <li>Cukup</li>
                <li>Baik</li>
                <li>Sangat Baik</li>
              </ol>
            </td>
            <td>
              <ol style="1">
                <li>Kurang Penting</li>
                <li>Cukup</li>
                <li>Penting</li>
                <li>Sangat Penting</li>
              </ol>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <input type="hidden" name="customer_token" value="<?=$this->uri->segment(2);?>">
    <table class="table table-hover table-bordered table-sm table-striped" width='100%'>
      <thead>
        <tr class="text-white bg-primary">
          <th></th>
          <th class="text-center" width='70%'>Pertanyaan (Layanan)</th>
          <th class="text-center">Kinerja</th>
          <th class="text-center">Harapan</th>
        </tr>
    <?php
    $abjad = 'A';
    foreach (getData('tbl_indikator_penilaian','*',['indicator_type'=>'layanan']) as $key => $value) { ?>
        <tr class="text-center bg-success">
          <td><?=$abjad++?></td>
          <td><?=$value->indikator_name?></td>
          <td>1 2 3 4</td>
          <td>1 2 3 4</td>
        </tr>
      </thead>
      <tbody>
    <?php
    $no = 1;
    foreach ($this->Pertanyaan->only('tbl_indikator_pertanyaan', ['id_indikator'=>$value->id_indikator]) as $key => $row) { ?>
      <input type="hidden" name="customer_id[<?=$row->id_pertanyaan?>]" value="<?=$customer->customer_id?>">
      <input type="hidden" name="indicator_type[<?=$row->id_pertanyaan?>]" value="layanan">
      <input type="hidden" name="id_indikator[<?=$row->id_pertanyaan?>]" value="<?=$row->id_indikator?>">
      <input type="hidden" name="id_pertanyaan[<?=$row->id_pertanyaan?>]" value="<?=$row->id_pertanyaan?>">
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row->pertanyaan; ?></td>
          <td class="text-center">
            <input type="radio" class="presepsi[<?=$row->id_pertanyaan?>]" name="presepsi[<?=$row->id_pertanyaan?>]" value="1">
            <input type="radio" class="presepsi[<?=$row->id_pertanyaan?>]" name="presepsi[<?=$row->id_pertanyaan?>]" value="2">
            <input type="radio" class="presepsi[<?=$row->id_pertanyaan?>]" name="presepsi[<?=$row->id_pertanyaan?>]" value="3">
            <input type="radio" class="presepsi[<?=$row->id_pertanyaan?>]" name="presepsi[<?=$row->id_pertanyaan?>]" value="4">
          </td>
          <td class="text-center">
            <input type="radio" class="reality[<?=$row->id_pertanyaan?>]" name="reality[<?=$row->id_pertanyaan?>]" value="1" required>
            <input type="radio" class="reality[<?=$row->id_pertanyaan?>]" name="reality[<?=$row->id_pertanyaan?>]" value="2" required>
            <input type="radio" class="reality[<?=$row->id_pertanyaan?>]" name="reality[<?=$row->id_pertanyaan?>]" value="3" required>
            <input type="radio" class="reality[<?=$row->id_pertanyaan?>]" name="reality[<?=$row->id_pertanyaan?>]" value="4" required>
          </td>
        </tr>
    <?php } } ?>
      </tbody>
    </table>
    <table class="table table-hover table-bordered table-sm table-striped" width='100%'>
      <thead>
        <tr class="text-white bg-primary">
          <th></th>
          <th class="text-center" width='70%'>Pertanyaan (Produk)</th>
          <th class="text-center">Kinerja</th>
          <th class="text-center">Harapan</th>
        </tr>
    <?php
    $abjad = 'A';
    foreach (getData('tbl_indikator_penilaian','*',['indicator_type'=>'produk']) as $key => $value) { ?>
        <tr class="text-center bg-success">
          <td><?=$abjad++?></td>
          <td><?=$value->indikator_name?></td>
          <td>1 2 3 4</td>
          <td>1 2 3 4</td>
        </tr>
      </thead>
      <tbody>
    <?php
    $no = 1;
    foreach ($this->Pertanyaan->only('tbl_indikator_pertanyaan', ['id_indikator'=>$value->id_indikator]) as $key => $row) { ?>
      <input type="hidden" name="customer_id[<?=$row->id_pertanyaan?>]" value="<?=$customer->customer_id?>">
      <input type="hidden" name="indicator_type[<?=$row->id_pertanyaan?>]" value="produk">
      <input type="hidden" name="id_indikator[<?=$row->id_pertanyaan?>]" value="<?=$row->id_indikator?>">
      <input type="hidden" name="id_pertanyaan[<?=$row->id_pertanyaan?>]" value="<?=$row->id_pertanyaan?>">
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row->pertanyaan; ?></td>
          <td class="text-center">
            <input type="radio" required class="presepsi[<?=$row->id_pertanyaan?>]" name="presepsi[<?=$row->id_pertanyaan?>]" value="1">
            <input type="radio" required class="presepsi[<?=$row->id_pertanyaan?>]" name="presepsi[<?=$row->id_pertanyaan?>]" value="2">
            <input type="radio" required class="presepsi[<?=$row->id_pertanyaan?>]" name="presepsi[<?=$row->id_pertanyaan?>]" value="3">
            <input type="radio" required class="presepsi[<?=$row->id_pertanyaan?>]" name="presepsi[<?=$row->id_pertanyaan?>]" value="4">
          </td>
          <td class="text-center">
            <input type="radio" required class="reality[<?=$row->id_pertanyaan?>]" name="reality[<?=$row->id_pertanyaan?>]" value="1">
            <input type="radio" required class="reality[<?=$row->id_pertanyaan?>]" name="reality[<?=$row->id_pertanyaan?>]" value="2">
            <input type="radio" required class="reality[<?=$row->id_pertanyaan?>]" name="reality[<?=$row->id_pertanyaan?>]" value="3">
            <input type="radio" required class="reality[<?=$row->id_pertanyaan?>]" name="reality[<?=$row->id_pertanyaan?>]" value="4">
          </td>
        </tr>
    <?php } } ?>
      </tbody>
    </table>
    <button type="submit" name="submit" class="btn btn-primary lift">Submit</button>
  </form> <!-- / form -->
  </div> <!-- / .container -->
</section>
<div class="container">
  <hr style="border: 5px solid blue">
</div>
