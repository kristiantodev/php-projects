   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Tentang Universitas CIC</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url();?>page/admin/dashboard"><i class="mdi mdi-home-outline"></i></a></li>
          
            </ol>
          </nav>
        </div>
      </div>
      <div class="right-title">
      <a href="<?php echo site_url('page/admin/profil/edit/'.$profil_ti->id_profil) ?>" type="button" class="btn btn-outline btn-rounded btn-primary mb-5"><i class="fa fa-pencil"></i> Edit Tentang Kami</a>
      </div>
    </div>
     <?php if ($this->session->flashdata('success')): ?>
             
                               <div class='alert bg-success alert-dismissible'>
                               <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                                   <h4><i class="icon fa fa-check-square"></i> Success !!</h4>
                        <?php echo $this->session->flashdata('success'); ?></div>
                            <?php endif; ?>
  </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      
    <div class="col-12">
         
         <div class="box bt-4">
        <div class="ribbon ribbon-bookmark ribbon-right bg-primary"><i class="fa fa-mortar-board"></i>&nbsp;&nbsp;<b> Profil Universitas CIC</b></div>           
            <div class="box-header with-border">
            

            </div>
            <!-- /.box-header -->
             <div class="box-body">
              <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-fill" role="tablist">
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile12" role="tab"><span class="hidden-sm-up"><i class="fa  fa-paper-plane"></i></span> <span class="hidden-xs-down"><i class="fa  fa-paper-plane"></i> &nbsp;&nbsp; Kata Sambutan</span></a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile11" role="tab"><span class="hidden-sm-up"><i class="fa  fa-paper-plane"></i></span> <span class="hidden-xs-down"><i class="fa  fa-paper-plane"></i> &nbsp;&nbsp; Visi</span></a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages11" role="tab"><span class="hidden-sm-up"><i class="fa fa-hand-paper-o"></i></span> <span class="hidden-xs-down"><i class="fa fa-hand-paper-o"></i> &nbsp;&nbsp;Misi</span></a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#setting11" role="tab"><span class="hidden-sm-up"><i class="fa fa-trophy"></i></span> <span class="hidden-xs-down"><i class="fa fa-trophy"></i> &nbsp;&nbsp;Tujuan</span></a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#about11" role="tab"><span class="hidden-sm-up"><i class="fa fa-warning"></i></span> <span class="hidden-xs-down"><i class="fa fa-warning"></i> &nbsp;&nbsp;Tentang Universitas CIC</span></a> </li>
         
        </ul>
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">
          <div class="tab-pane active" id="profile12" role="tabpanel">
            <div class="pad">
            <?php echo $profil_ti->sambutan_kaprodi?>
               </div>
          </div>
         
          <div class="tab-pane pad" id="profile11" role="tabpanel"><center><?php echo $profil_ti->visi?></center></div>
          <div class="tab-pane pad" id="messages11" role="tabpanel"><?php echo $profil_ti->misi?></div>
          <div class="tab-pane pad" id="setting11" role="tabpanel"><?php echo $profil_ti->tujuan?></div>
          <div class="tab-pane pad" id="about11" role="tabpanel"><?php echo $profil_ti->tentang?></div>
        
        </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
            </div>
            


 <div class="row">
        
        <div class="col-12 col-lg-7">
          <div class="box box-default">
            <div class="box-header with-border">
            <div class="ribbon ribbon-bookmark ribbon-right bg-primary"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<b> Lokasi Universitas CIC</b></div>  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Nav tabs -->
             <iframe src="<?php echo $profil_ti->url_gmap?>" width="525" height="375" frameborder="0" style="border:0"></iframe>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->  
      
        <div class="col-12 col-lg-5">
          <div class="box box-default">
            <div class="box-header with-border">
            <div class="ribbon ribbon-bookmark ribbon-right bg-primary"><i class="fa fa-home"></i>&nbsp;&nbsp;<b>Alamat Universitas CIC</b></div>  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home8" role="tab"><span><i class="ion-home"></i></span></a> </li>
          </ul>
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">
          <div class="tab-pane active" id="home8" role="tabpanel">
            <div class="pad">
              <?php echo $profil_ti->alamat?>
              </div>
          </div>
        </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->



      
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

