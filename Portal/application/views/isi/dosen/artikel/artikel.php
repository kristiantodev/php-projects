   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Daftar Artikel</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url();?>page/dosen/dashboard"><i class="mdi mdi-home-outline"></i></a></li>
          
            </ol>
          </nav>
        </div>
      </div>
      <div class="right-title">
      <a href="<?php echo site_url();?>page/dosen/artikel/tambah" type="button" class="btn btn-outline btn-rounded btn-primary mb-5"><i class="fa fa-send"></i>&nbsp;&nbsp; Post Artikel</a>
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
                                   <h4><i class="icon fa fa-close"></i> Gagal !!</h4>
                                   File yang anda upload harus berformat gif, jpg atau png. Dan berukuran MAX. 2 MB...
                        </div>
                            <?php endif; ?>
  </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      
    <div class="col-12">
         
         <div class="box bt-4">
         <div class="ribbon ribbon-bookmark ribbon-vertical-r bg-primary"><i class="fa fa-graduation-cap"></i></div>
        <div class="ribbon ribbon-bookmark ribbon-right bg-primary"><i class="fa fa-copy"></i>&nbsp;&nbsp;<b> Artikel - <?php echo $myuser->nm_user?></b></div>           
            <div class="box-header with-border">
            

            </div>
            <!-- /.box-header -->
            <div class="box-body">
        <div class="table-responsive">
          <table id="example1" class="table table-hover table-striped display nowrap" style="width:100%">
          <thead class="bg-dark">
            <tr>
                            <th align="center" class="bg-primary" width="4"><b>No</th>
                            <th><b>Judul Artikel</th>
                            <th><b>ID Kategori</th>
                            <th><b>Publish</th>
                            <th align="right"><b>Action</b></th>
            </tr>
          </thead>
          <tbody>
          <?php $no=1;
         foreach ($artikelku as $artikel): ?>
            <tr>
                <td align="center" class="bg-dark"><b><?php echo $no++; ?></b></td>
                <td scope="row"><?php echo $artikel->judul_artikel ?></td>
                 <td scope="row" align="center"><?php echo $artikel->id_kategori ?></td>
                <td scope="row" align="center">
                  <?php if ($artikel->status == "Ya"){ ?>
                       <span class="badge badge-success">&nbsp;&nbsp;<?php echo $artikel->status ?>&nbsp;&nbsp;</span>
                 <?php }else{ ?>
                      <span class="badge badge-danger">&nbsp;&nbsp;<?php echo $artikel->status ?>&nbsp;&nbsp;</span>
                <?php } ?>
                </td>
                                                 
                     <td align="center">
                     <a href="<?php echo site_url('page/dosen/artikel/edit/'.$artikel->id_artikel) ?>" data-toggle="tooltip" class="btn btn-info btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Edit"><span class="icon-label"><i class="fa fa-pencil"></i> </span><span class="btn-text"></span></a>
                     <a onclick="deleteConfirm('<?php echo site_url('page/dosen/artikel/delete/'.$artikel->id_artikel) ?>')" href="#!" data-toggle="tooltip" class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                     <a href="<?php echo base_url().'artikel/'.$artikel->slug;?>" target="blank" data-toggle="tooltip" class="btn btn-warning btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Lihat Artikel"><span class="icon-label"><i class="fa fa-arrows-alt"></i> </span><span class="btn-text"></span></a>
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