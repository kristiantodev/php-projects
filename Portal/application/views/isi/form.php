   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Welcome Administrator!</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard Administrator</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="right-title">
      </div>
    </div>
    <?php if ($this->session->flashdata('success')): ?>
                               <div class='alert bg-success alert-dismissible'>
                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                   <h4><i class="icon fa fa-warning"></i> Success !!</h4>
                        <?php echo $this->session->flashdata('success'); ?></div>
                            <?php endif; ?>
  </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">          
          
          <div class="box box-solid bg-primary">
            <div class="box-header">
              <h4 class="box-title">CK Editor
             
                                        
              </h4>
                <ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>   
                  <li><a class="box-btn-fullscreen" href="#"></a></li>

                </ul>

            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="<?php base_url('dosen/form') ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                            <h5>Slug <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="slug" class="form-control" required data-validation-required-message="This field is required"> </div>
                        </div>
                         <div class="form-group">
                            <h5>Isi Artikel <span class="text-danger">*</span></h5>
                            <div class="controls">
                               <textarea id="editor1" name="isi" rows="10" cols="80">
                    </textarea>
                        </div>
                    <br>
                    <center>
                        <div class="text-xs-right">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                    </center>
              </form>
            </div>
          </div>
          <!-- /.box -->

        
          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->