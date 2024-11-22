   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Setting Banner Website</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url();?>page/admin/dashboard"><i class="mdi mdi-home-outline"></i></a></li>
          
            </ol>
          </nav>
        </div>
      </div>
      <div class="right-title">
      </div>
    </div>
       <?php if ($this->session->flashdata('success')): ?>
                               <div class='alert bg-success alert-dismissible'>
                               <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                                   <h4><i class="icon fa fa-check-square"></i> Success !!</h4>
                        <?php echo $this->session->flashdata('success'); ?></div>
                            <?php endif; ?>
      <?php if ($this->session->flashdata('gagal')): ?>
                               <div class='alert bg-danger alert-dismissible'>
                               <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                                   <h4><i class="icon fa fa-close"></i> GAGAL !!</h4>
                       Format file salah, file harus gif, jpg, atau png.</div>
                            <?php endif; ?>
  </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      
    <div class="col-12">
         
         <div class="box bt-4">
         <div class="ribbon ribbon-bookmark ribbon-vertical-r bg-primary"><i class="fa fa-graduation-cap"></i></div>
        <div class="ribbon ribbon-bookmark ribbon-right bg-primary"><i class="fa fa-book"></i>&nbsp;&nbsp;<b> Setting Banner</b></div>           
            <div class="box-header with-border">
            

            </div>
            <!-- /.box-header -->
            <div class="box-body">
        <img src="<?php echo base_url('assets/images/'.$banner->icon) ?>" height='200' alt=''>
        <hr>
<form action="<?php base_url('page/admin/banner') ?>" method="post" enctype="multipart/form-data">
               <input type="hidden" name="id_profil" value="<?php echo $banner->id_profil ?>" class="form-control">

              <div class="form-group">
                            <h5>Ganti Banner<span class="text-danger">*</span></h5>
                            <div class="controls">
                            <div class="input-group">
                                 <div class="input-group-addon bg-dark">
                                  &nbsp;&nbsp;<i class="fa fa-picture-o"></i>&nbsp;&nbsp;
                                 </div>
                                <input type="file" name="icon" class="form-control"> 
                                            <div class="input-group-addon bg-dark">
                                            <i class="fa fa-exclamation-circle"></i>&nbsp; Max : 2 MB. Format : .jpg, .png, .gif.
                                            </div>
                                </div>
                           </div>
                         </div>
                         
                        <hr>
                        <p align="right">
                        <button type="submit" class="btn btn-outline btn-success"><b><i class='fa fa-save'></i> &nbsp;&nbsp;Simpan</b>&nbsp;&nbsp;</button>&nbsp;&nbsp;
                        <button type="reset" class="btn btn-outline btn-danger"><b><i class='fa fa-close'></i> &nbsp;&nbsp;Reset</b>&nbsp;&nbsp;</button>
                    </p>   
              </form>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->      
        </div>  
      
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


