   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Daftar File Download pada Website</h3>
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
        <?php if ($this->session->flashdata('empty')): ?>
                               <div class='alert bg-danger alert-dismissible'>
                               <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                                   <h4><i class="icon fa fa-warning"></i> Peringatan !!</h4>
                        <?php echo $this->session->flashdata('empty'); ?></div>
                            <?php endif; ?>
        <?php if ($this->session->flashdata('gagal')): ?>
             
                               <div class='alert bg-danger alert-dismissible'>
                               <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                                   <h4><i class="icon fa fa-close"></i> Gagal !!</h4>
                                   File terlalu besar... Upload File Maxsimal 2 MB.
                        </div>
                            <?php endif; ?>
  </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">



      
    <div class="col-12">
         
         <div class="box bt-4">
         
        <div class="ribbon ribbon-bookmark ribbon-right bg-primary"><i class="fa fa-download"></i>&nbsp;&nbsp;<b>File Download </b></div>           
            <div class="box-header with-border">
            

            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form action="<?php base_url('page/admin/download/') ?>" method="post" enctype="multipart/form-data">
               <div class="form-group">
                            <h5>Keterangan Download<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="nm_download" class="form-control <?php echo form_error('nm_download') ? 'is-invalid':'' ?>"> </div>
                        <font color="red"><?php echo form_error('nm_download') ?></font>
                        </div>
               

        <div class="form-group">
                            <h5>File Download <span class="text-danger">*</span></h5>
                            <div class="controls">
                            <div class="input-group">
                                 <div class="input-group-addon bg-dark">
                                  &nbsp;&nbsp;<i class="fa fa-upload"></i>&nbsp;&nbsp;
                                 </div>
                                <input type="file" name="file" class="form-control"> 
                                            <div class="input-group-addon bg-dark">
                                            <i class="fa fa-exclamation-circle"></i>&nbsp; Max : 2 MB
                                            </div>
                                </div>
                           </div>
                         </div>
        
                        <hr>
                        <button type="submit" class="btn btn-outline btn-success"><b><i class='fa fa-upload'></i> &nbsp;&nbsp;Upload</b>&nbsp;&nbsp;</button>  
              </form>
              <hr>
        <div class="table-responsive">
          <table id="example1" class="table table-hover table-striped display nowrap" style="width:100%">
          <thead class="bg-dark">
            <tr>
                            <th align="center" class="bg-primary" width="4"><b>No</th>
                            <th><b>Nama Download</th>
                            <th align="right"><b>Action</b></th>
            </tr>
          </thead>
          <tbody>
          <?php $no=1;
         foreach ($downloadku as $p): ?>
            <tr>
               <td align="center" class="bg-dark"><b><?php echo $no++; ?></b></td>
                <td scope="row"><?php echo $p->nm_download ?></td>                                                             
                     <td>
                     <a href="<?php echo site_url('page/admin/download/edit/'.$p->id_download) ?>" data-toggle="tooltip" class="btn btn-info btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Edit"><span class="icon-label"><i class="fa fa-pencil"></i> </span><span class="btn-text"></span></a>
                     <a onclick="deleteConfirm('<?php echo site_url('page/admin/download/delete/'.$p->id_download) ?>')" href="#!" data-toggle="tooltip" class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                     <a href="<?= base_url('assets/file/download/'.$p->file)?>" download data-toggle="tooltip" class="btn btn-success btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Download"><span class="icon-label"><i class="fa fa-download"></i> </span><span class="btn-text"></span></a>
                     </td>

            </tr>
          <?php endforeach; ?>
          </tbody>
          <tfoot>
            
          </tfoot>
        </table>
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