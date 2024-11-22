<section class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="header">
        <h2>Add Question Indicators.</h2>
      </div>
      <div class="body">
        <form class="form-horizontal" action="" method="post">
          <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
              <label for="indikator_name">Indikator</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                        <input type="hidden" name="id_indikator" value="<?=$id_indikator?>">
                        <input type="text" id="indikator_name" class="form-control" placeholder="Enter the Assessment Indicator" name="indikator_name" value="<?php echo $indikator_name; ?>">
                        <?php echo form_error('indikator_name'); ?>
                    </div>
                </div>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
              <label for="pertanyaan">Pertanyaan</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" id="pertanyaan" class="form-control" placeholder="Enter the Question Indicator" required name="pertanyaan" value="<?php echo $pertanyaan; ?>">
                        <?php echo form_error('pertanyaan'); ?>
                    </div>
                </div>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
              <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
