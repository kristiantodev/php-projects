   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Informasi Himpunan Mahasiswa Teknik Informatika</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url();?>page/admin/dashboard"><i class="mdi mdi-home-outline"></i></a></li>
          
            </ol>
          </nav>
        </div>
      </div>
      <div class="right-title">
      <a href="<?php echo site_url();?>page/admin/himatif/edit" type="button" class="btn btn-outline btn-rounded btn-primary mb-5"><i class="fa fa-pencil"></i> Edit Profil Himatif</a>
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
        <div class="ribbon ribbon-bookmark ribbon-right bg-primary"><i class="fa fa-mortar-board"></i>&nbsp;&nbsp;<b> Profil Himatif CIC</b></div>           
            <div class="box-header with-border">
            

            </div>
            <!-- /.box-header -->
             <div class="box-body">
              <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-fill" role="tablist">
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home11" role="tab"><span class="hidden-sm-up"><i class="fa fa-user-circle"></i></span> <span class="hidden-xs-down"><i class="fa fa-user-circle"></i> &nbsp;&nbsp;Logo Himatif</span></a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#hehe" role="tab"><span class="hidden-sm-up"><i class="fa  fa-paper-plane"></i></span> <span class="hidden-xs-down"><i class="fa  fa-paper-plane"></i> &nbsp;&nbsp; Himatif CIC</span></a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile11" role="tab"><span class="hidden-sm-up"><i class="fa  fa-paper-plane"></i></span> <span class="hidden-xs-down"><i class="fa  fa-paper-plane"></i> &nbsp;&nbsp; Visi</span></a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages11" role="tab"><span class="hidden-sm-up"><i class="fa fa-hand-paper-o"></i></span> <span class="hidden-xs-down"><i class="fa fa-hand-paper-o"></i> &nbsp;&nbsp;Misi</span></a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#setting11" role="tab"><span class="hidden-sm-up"><i class="fa fa-yelp"></i></span> <span class="hidden-xs-down"><i class="fa fa-yelp"></i> &nbsp;&nbsp;Struktur Organisasi</span></a> </li>
       
         
        </ul>
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">
          <div class="tab-pane active" id="home11" role="tabpanel">
            <div class="pad">
            <center><img src="<?php echo base_url('assets/images/himatif/'.$himatif->logo) ?>" height='200'/></center>
               </div>
          </div>
          <div class="tab-pane pad" id="hehe" role="tabpanel"><?php echo $himatif->info_himatif?></div>
          <div class="tab-pane pad" id="profile11" role="tabpanel"><center><?php echo $himatif->visi?></center></div>
          <div class="tab-pane pad" id="messages11" role="tabpanel"><?php echo $himatif->misi?></div>
          <div class="tab-pane pad" id="setting11" role="tabpanel">
            <img src="<?php echo base_url('assets/images/'.$himatif->struktur_organisasi) ?>" class="img-fullwidth" >

          </div>
        
        </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
            </div>
            


 



      
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

