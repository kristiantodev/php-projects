   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Profil Dosen</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url();?>page/dosen/dashboard"><i class="mdi mdi-home-outline"></i></a></li>
          
            </ol>
          </nav>
        </div>
      </div>
      <div class="right-title">
      <a href="<?php echo site_url('page/dosen/profil/edit/'.$this->session->userdata('id_user')) ?>" type="button" class="btn btn-outline btn-rounded btn-primary mb-5"><i class="fa fa-pencil"></i> Edit Profil</a>
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
        
        <div class="col-12 col-lg-4">
          <div class="box box-default">
            <div class="box-header with-border">
            <div class="ribbon ribbon-bookmark ribbon-left bg-primary"><i class="fa fa-cogs"></i>&nbsp;&nbsp;<b> Setting Akun</b>&nbsp;&nbsp;</div>  
             
            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Nav tabs -->
              <center>
          <img src="<?php echo base_url('assets/images/user/'.$myuser->avatar) ?>" class="user-image rounded-circle" alt="User Image" height="125" widht="130">
           <hr>
           <b><?php echo $myuser->nm_user?></b>
            </center>
           <hr>
           <center>
           <a href="<?php echo site_url('page/dosen/profil/akun/'.$this->session->userdata('id_user')) ?>" type="button" class="btn btn-outline btn-rounded btn-primary mb-5">&nbsp;&nbsp;<i class="fa fa-pencil"></i> &nbsp;Ganti Foto Profil&nbsp;&nbsp;</a>
           </center>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->  
      
        <div class="col-12 col-lg-8">
          <div class="box box-default">
            <div class="box-header with-border">
            <div class="ribbon ribbon-bookmark ribbon-left bg-primary"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;<b>My Profile</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-fill" role="tablist">
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home11" role="tab"><span class="hidden-sm-up"><i class="fa fa-user-circle"></i></span> <span class="hidden-xs-down"><i class="fa fa-user-circle"></i> &nbsp;&nbsp;Profilku</span></a> </li>
          </ul>
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">
          <div class="tab-pane active" id="home11" role="tabpanel">
            <div class="pad">
           
               
              <div class="table-responsive">
        <table id="invoice-list" class="table table-hover no-wrap" data-page-size="10">
          <thead>
          <!--
            <tr>
              <th colspan="6" class="bg-secondary"><b><center>MY PROFIL</center></b></th> -->
              
             
            </tr>
          </thead>
          <tbody>
            <tr>
              <td width="200"><b>NIDN</b></td>
              <td width="60"><b>:</b></td>
              <td><b><?php echo $myprofil->nidn?></b></td>
            </tr>
            <tr>
              <td>Nama Dosen</td>
              <td width="60">:</td>
              <td><?php echo $myprofil->nm_lengkap?></td>
            </tr>
             <tr>
              <td>Jenis Kelamin</td>
              <td width="60">:</td>
              <td><?php echo $myprofil->jk?></td>
            </tr>
             <tr>
              <td>Alamat</td>
              <td width="60">:</td>
              <td><?php echo $myprofil->alamat?></td>
            </tr>
            <tr>
              <td>Jabatan Struktural</td>
              <td width="60">:</td>
              <td><?php echo $myprofil->jabatan_struktural?></td>
            </tr>
             <tr>
              <td>Jabatan Fungsional</td>
              <td width="60">:</td>
              <td><?php echo $myprofil->jabatan_fungsional?></td>
            </tr>
             <tr>
              <td>Pendidikan Tertinggi</td>
              <td width="60">:</td>
              <td><?php echo $myprofil->pend_tertinggi?></td>
            </tr>
             <tr>
              <td>Status Ikatan Kerja</td>
              <td width="60">:</td>
              <td><?php echo $myprofil->status_ikatan_kerja?></td>
            </tr>
            <tr>
              <td>Pendidikan</td>
              <td width="60">:</td>
              <td>S1 - <?php echo $myprofil->s1?><br>
                  S2 - <?php echo $myprofil->s2?>
              </td>
            </tr>
           

            
          </tbody>
        </table>
      </div>


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

<!-- modal -->
<div class="modal modal-danger fade" id="modal-danger">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Konfirmasi Penghapusan</h4>
      <a type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></a>
      </div>
      <div class="modal-body">
      <p>Apakah anda yakin akan menghapus data ini ?</p>
      </div>
      <div class="modal-footer">
      <a type="button" class="btn btn-outline btn-white" data-dismiss="modal">Close</a>
      <a href="#" id="btn-delete" type="button" class="btn btn-outline btn-white float-right">Hapus</a>
      </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  

  <script>
function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
}
</script>