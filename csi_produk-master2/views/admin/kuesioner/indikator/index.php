<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header headers-black">
                            <h2>
                                Indikator Penilaian Layanan.
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                    <a href="<?=site_url('admin/kuesioner/indikator_penilaian/add?indicator_type=layanan')?>" class="btn btn-info" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">person_add</i>
                                        <span>Tambah Indikator</span>
                                    </a>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="mytable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Indikator Penilaian</th>
                                            <th>Jumlah Pertanyaan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      $no = 1;
                                      foreach (getData('tbl_indikator_penilaian','*',['indicator_type'=> 'layanan']) as $row) { ?>
                                        <tr id="<?php echo $row->id_indikator; ?>" data-url="<?=site_url('admin/kuesioner/indikator_penilaian/delete')?>">
                                        <td><?=$no++?></td>
                                        <td><?=$row->indikator_name?></td>
                                        <td><?=($this->Pertanyaan->countBy('id_indikator',['id_indikator'=> $row->id_indikator])->jumlah > 0) ? $this->Pertanyaan->countBy('id_indikator',['id_indikator'=> $row->id_indikator])->jumlah : 0?></td>
                                        <td>
                                          <a href="<?=site_url('admin/kuesioner/indikator_penilaian/edit/'.$row->id_indikator)?>"><i class="material-icons">edit</i></a>
                                          <a href="#" class="remove"><i class="material-icons">remove_circle</i></a>
                                        </td>
                                      </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header headers-black">
                            <h2>
                                Indikator Penilaian Produk.
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                    <a href="<?=site_url('admin/kuesioner/indikator_penilaian/add?indicator_type=produk')?>" class="btn btn-info" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">person_add</i>
                                        <span>Tambah Indikator</span>
                                    </a>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="mytable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Indikator Penilaian</th>
                                            <th>Jumlah Pertanyaan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      $no = 1;
                                      foreach (getData('tbl_indikator_penilaian','*',['indicator_type'=> 'produk']) as $row) { ?>
                                        <tr id="<?php echo $row->id_indikator; ?>" data-url="<?=site_url('admin/kuesioner/indikator_penilaian/delete')?>">
                                        <td><?=$no++?></td>
                                        <td><?=$row->indikator_name?></td>
                                        <td><?=($this->Pertanyaan->countBy('id_indikator',['id_indikator'=> $row->id_indikator])->jumlah > 0) ? $this->Pertanyaan->countBy('id_indikator',['id_indikator'=> $row->id_indikator])->jumlah : 0?></td>
                                        <td>
                                          <a href="<?=site_url('admin/kuesioner/indikator_penilaian/edit/'.$row->id_indikator)?>"><i class="material-icons">edit</i></a>
                                          <a href="#" class="remove"><i class="material-icons">remove_circle</i></a>
                                        </td>
                                      </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
    </div>
</section>
