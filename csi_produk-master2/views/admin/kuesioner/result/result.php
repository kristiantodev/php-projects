<section class="content">
    <div class="container-fluid">
        <div class="card">
          <div class="body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tab-col-red tab-nav-right" role="tablist">
              <?php
              $no = 1;
              foreach($responden as $row => $key): ?>
                <li role="presentation" class="<?=$no==1?"active":""?>"><a href="#<?=$key->customer_id?>" data-toggle="tab"><?=$no++;?></a></li>
              <?php endforeach; ?>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <?php
              $no = 1;
              foreach($responden as $res): ?>
                <div role="tabpanel" class="tab-pane fade in <?=$no==1?"active":""?>" id="<?=$res->customer_id?>">
                    <b>Nama Pelanggan : <?=$res->customer_name;?></br><hr></b>

                    <table class="table table-sm table-highlight table-bordered nowrap" id="mytable">
                      <thead>
                        <tr>
                          <th width="3%">No</th>
                          <th width="77%">Pertanyaan (Layanan)</th>
                          <th width="20%" colspan="2" class="text-center">Respon</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $a = "A"; foreach(getData('tbl_indikator_penilaian','*',['indicator_type'=> 'layanan']) as $row): ?>
                        <tr>
                          <th><?=$a++?></th>
                          <th><?=$row->indikator_name;?></th>
                          <th>Kinerja</th>
                          <th>Harapan</th>
                        </tr>
                        <?php
                        $noo = 1;
                        foreach(getData('tbl_indikator_pertanyaan',"*",['id_indikator'=>$row->id_indikator]) as $indi): ?>
                          <tr>
                            <td><?=$noo++?></td>
                            <td><?=$indi->pertanyaan?></td>
                            <td class="text-center">
                              <?php echo (getReality('tbl_respon',"respon_perception_answer",$res->customer_id, $indi->id_pertanyaan) != null) ? getReality('tbl_respon',"respon_perception_answer",$res->customer_id, $indi->id_pertanyaan)->respon_perception_answer : '0' ; ?>
                            </td>
                            <td class="text-center">
                              <?php echo (getReality('tbl_respon',"respon_reality_answer",$res->customer_id, $indi->id_pertanyaan) != null) ? getReality('tbl_respon',"respon_reality_answer",$res->customer_id, $indi->id_pertanyaan)->respon_reality_answer : '0' ; ?>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                    <table class="table table-sm table-highlight table-bordered nowrap" id="mytable">
                      <thead>
                        <tr>
                          <th width="3%">No</th>
                          <th width="77%">Pertanyaan (Produk)</th>
                          <th width="20%" colspan="2" class="text-center">Respon</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $a = "A"; foreach(getData('tbl_indikator_penilaian','*',['indicator_type'=> 'produk']) as $row): ?>
                        <tr>
                          <th><?=$a++?></th>
                          <th><?=$row->indikator_name;?></th>
                          <th>Kinerja</th>
                          <th>Harapan</th>
                        </tr>
                        <?php
                        $noo = 1;
                        foreach(getData('tbl_indikator_pertanyaan',"*",['id_indikator'=>$row->id_indikator]) as $indi): ?>
                          <tr>
                            <td><?=$noo++?></td>
                            <td><?=$indi->pertanyaan?></td>
                            <td class="text-center">
                              <?php echo (getReality('tbl_respon',"respon_perception_answer",$res->customer_id, $indi->id_pertanyaan) != null) ? getReality('tbl_respon',"respon_perception_answer",$res->customer_id, $indi->id_pertanyaan)->respon_perception_answer : '0' ; ?>
                            </td>
                            <td class="text-center">
                              <?php echo (getReality('tbl_respon',"respon_reality_answer",$res->customer_id, $indi->id_pertanyaan) != null) ? getReality('tbl_respon',"respon_reality_answer",$res->customer_id, $indi->id_pertanyaan)->respon_reality_answer : '0' ; ?>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                </div>
              <?php $no++; endforeach; ?>
            </div>
          </div>
        </div>

    </div>
</section>
