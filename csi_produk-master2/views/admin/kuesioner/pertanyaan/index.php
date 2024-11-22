<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->

        <?php
        $indicator_type = $this->input->get('indicator_type');
        foreach(getData('tbl_indikator_penilaian', '*', ['indicator_type'=>$indicator_type]) as $row): ?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header headers-black">
                            <h2>
                                Indikator Pertanyaan <strong><?php echo $row->indikator_name; ?></strong>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                    <a href="<?=site_url('admin/kuesioner/indikator_pertanyaan/add/'.$row->id_indikator)?>" class="btn btn-info" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">person_add</i>
                                        <span>Add Question</span>
                                    </a>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="mytable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Question Indicators</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php $no = 1;
                                      foreach($this->Pertanyaan->selectOnly('*',['id_indikator'=>$row->id_indikator]) as $quest):
                                      ?>
                                      <tr id="<?php echo $quest->id_pertanyaan; ?>" data-url="<?=site_url('admin/kuesioner/indikator_pertanyaan/delete')?>">
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $quest->pertanyaan; ?></td>
                                        <td>
                                          <a href="<?=site_url('admin/kuesioner/indikator_pertanyaan/edit/'.$quest->id_pertanyaan)?>"><i class="material-icons">edit</i></a>
                                          <a href="#" class="remove"><i class="material-icons">remove_circle</i></a>
                                        </td>
                                      </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
          <?php endforeach; ?>
    </div>
</section>
