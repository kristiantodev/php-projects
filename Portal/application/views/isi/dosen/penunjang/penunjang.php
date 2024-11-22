   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Daftar Kegiatan Penunjang</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url();?>page/dosen/dashboard"><i class="mdi mdi-home-outline"></i></a></li>
          
            </ol>
          </nav>
        </div>
      </div>
      <div class="right-title">
      <a href="<?php echo site_url();?>page/dosen/penunjang/tambah" type="button" class="btn btn-outline btn-rounded btn-primary mb-5"><i class="fa fa-plus"></i> Tambah Kegiatan</a>
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
        <div class="ribbon ribbon-bookmark ribbon-right bg-primary"><i class="fa  fa-file-photo-o"></i>&nbsp;&nbsp;<b> Daftar Kegiatan Penunjang - <?php echo $myuser->nm_user?></b></div>           
            <div class="box-header with-border">
            

            </div>
            <!-- /.box-header -->
            <div class="box-body">
        <div class="table-responsive">
          <table id="example1" class="table table-hover table-striped display nowrap" style="width:100%">
          <thead class="bg-dark">
            <tr>
                            <th align="center" class="bg-primary" width="4"><b>No</th>
                            <th><b>Sertifikat</th>
                            <th><b>Nama Acara</th>
                            <th width="20"><b>Tahun</th>
                            <th><b>Status</th>
                            <th><b>Privasi</th>

                          
                            <th align="right"><b>Action</b></th>
            </tr>
          </thead>
          <tbody>
          <?php $no=1;
          function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
          foreach ($penunjangku as $penunjang): ?>
            <tr>
               <td align="center" class="bg-dark"><b><?php echo $no++; ?></b></td>
               <td align="center">
              <?php if ($penunjang->url_sertifikat == "" OR $penunjang->sertifikat != "default.jpg"){ ?>
                 <a href="<?php echo base_url('assets/images/sertifikat/'.$penunjang->sertifikat) ?>" data-toggle="lightbox" data-penunjang="multiimages" data-title="Keterangan Foto : <?php echo $penunjang->nm_acara ?>">
                 <img src="<?php echo base_url('assets/images/sertifikat/'.$penunjang->sertifikat) ?>" width="95" height="50" class="all studio" alt="penunjang" /></a>
              <?php }else{ ?>
                <a href="<?php echo $penunjang->url_sertifikat ?>" target="blank">Lihat Sertifikat</a>
              <?php } ?> 
               </td>
               
                  <td scope="row"><span data-toggle="tooltip" data-original-title="<?php echo $penunjang->nm_acara ?>"><?php echo limit_words($penunjang->nm_acara,8);?>...</span></td>
                  <td scope="row"><?php echo $penunjang->tahun ?></td>
                  <td scope="row"><?php echo $penunjang->status_kepanitiaan ?></td>
                  <td scope="row">
                   <?php if ($penunjang->privasi == "Umum"){ ?>
                       <span class="badge badge-success">&nbsp;<?php echo $penunjang->privasi ?>&nbsp;</span>
                 <?php }else{ ?>
                      <span class="badge badge-danger">&nbsp;<?php echo $penunjang->privasi ?>&nbsp;</span>
                <?php } ?>
                  </td>
              
                                                    
                                                    
                     <td align="center">

                     <a href="<?php echo site_url('page/dosen/penunjang/edit/'.$penunjang->id_penunjang) ?>" data-toggle="tooltip" class="btn btn-info btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Edit"><span class="icon-label"><i class="fa fa-pencil"></i> </span><span class="btn-text"></span></a>
                     <a onclick="deleteConfirm('<?php echo site_url('page/dosen/penunjang/delete/'.$penunjang->id_penunjang) ?>')" href="#!" data-toggle="tooltip" class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                     
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