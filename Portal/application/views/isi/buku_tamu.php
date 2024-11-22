   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Buku Tamu (Pesan) Pengunjung Website</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url();?>page/admin/dashboard"><i class="mdi mdi-home-outline"></i></a></li>
          
            </ol>
          </nav>
        </div>
      </div>
    </div>
       <?php if ($this->session->flashdata('success')): ?>
             <br>
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
         <div class="ribbon ribbon-bookmark ribbon-vertical-r bg-primary"><i class="fa fa-graduation-cap"></i></div>
        <div class="ribbon ribbon-bookmark ribbon-right bg-primary"><i class="fa fa-book"></i>&nbsp;&nbsp;<b> Buku Tamu</b></div>           
            <div class="box-header with-border">
            

            </div>
            <!-- /.box-header -->
            <div class="box-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home8" role="tab"><span><i class="fa fa-tasks"></i></span> Buku Tamu Hari Ini</a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile8" role="tab"><span><i class="fa fa-book"></i></span> Semua Pesan Buku Tamu</a> </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content tabcontent-border">
          <div class="tab-pane active" id="home8" role="tabpanel">
            <div class="pad">
             

  <div class="table-responsive">
          <table class="table table-hover table-striped display nowrap" style="width:100%">
          <thead class="bg-dark">
            <tr>
              <th align="center" class="bg-primary" width="4"><b>No</th>
              <th><b>Nama</b></th>
              <th><b>Email</b></th>
              <th><b>Subjek</b></th>
              <th><b>Pesan</b></th>

            </tr>
          </thead>
          <tbody>
          <?php $no=1;
          foreach ($tamuku2 as $t): ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $t->nama ?></td>
              <td><?php echo $t->email ?></td>
               <td><?php echo $t->subjek ?></td>
              <td><p align="justify"><?php echo $t->pesan ?><p></td>
              
            </tr>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
            
          </tfoot>
        </table>
        </div>
               
           

             </div>
          </div>
          <div class="tab-pane pad" id="profile8" role="tabpanel">
            <div class="table-responsive">
          <table id="example1" class="table table-hover table-striped display nowrap" style="width:100%">
          <thead class="bg-dark">
            <tr>
              <th align="center" class="bg-primary" width="4"><b>No</th>
               <th width="20"><b>Aksi</b></th>
              <th><b>Nama</b></th>
              <th><b>Email</b></th>
              <th><b>Subjek</b></th>
              <th><b>Tanggal</b></th>
              <th><b>Pesan</b></th>
             

            </tr>
          </thead>
          <tbody>
          <?php $no=1;
         foreach ($tamuku as $tamu): ?>
            <tr>
               <td align="center" class="bg-dark" width="4"><b><?php echo $no++; ?></b></td>
               <td  width="20" align="center">
                 <a onclick="deleteConfirm('<?php echo site_url('page/admin/buku_tamu/delete/'.$tamu->id_tamu) ?>')" href="#!" data-toggle="tooltip" class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                 </td>
                <td scope="row"><?php echo $tamu->nama ?></td>
                <td scope="row"><?php echo $tamu->email ?></td>
                <td scope="row"><?php echo $tamu->subjek ?></td>
                <td scope="row" align="center"><?php echo $tamu->tgl_tamu ?></td>
                <td scope="row"><?php echo $tamu->pesan ?></td>
                                               
                 
            </tr>
          <?php endforeach; ?>
          </tbody>
          <tfoot>
            
          </tfoot>
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
      <a type="button" class="btn btn-outline btn-blue" data-dismiss="modal">Close</a>
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