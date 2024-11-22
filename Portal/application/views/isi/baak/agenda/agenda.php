   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Daftar Agenda Kegiatan Universitas CIC</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url();?>page/baak/dashboard"><i class="mdi mdi-home-outline"></i></a></li>
          
            </ol>
          </nav>
        </div>
      </div>
      <div class="right-title">
      <a href="<?php echo site_url();?>page/baak/agenda/tambah" type="button" class="btn btn-outline btn-rounded btn-primary mb-5"><i class="fa fa-plus"></i> Tambah Agenda</a>
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
        <div class="ribbon ribbon-bookmark ribbon-right bg-primary"><i class="fa fa-book"></i>&nbsp;&nbsp;<b> Agenda Kegiatan</b></div>           
            <div class="box-header with-border">
            

            </div>
            <!-- /.box-header -->
            <div class="box-body">
        <div class="table-responsive">
          <table id="example1" class="table table-hover table-striped display nowrap" style="width:100%">
          <thead class="bg-dark">
            <tr>
                            <th align="center" class="bg-primary" width="4"><b>No</th>
                            <th align="center"><b>Nama agenda</th>
                            <th align="center"><b>Mulai</th>
                            <th align="center"><b>Selesai</th>
                            <th align="center"><b>Waktu</th>
                            <th align="center"><b>Tempat</th>
                            <th align="center"><b>Status</th>
                            <th align="center"><b>Action</b></th>
            </tr>
          </thead>
          <tbody>
          <?php $no=1;
         foreach ($agendaku as $agenda): ?>
            <tr>
               <td align="center" class="bg-dark"><b><?php echo $no++; ?></b></td>
                <td scope="row"><?php echo $agenda->nm_agenda ?></td>
                <td scope="row">
           <?php if ($agenda->tgl_agenda == "0000-00-00"){ ?>
          <center>-</center>
           <?php }else{ ?>

                <?php echo $agenda->tgl_agenda ?>

                <?php } ?>

                </td>
                <td scope="row"><?php echo $agenda->tgl_selesai?></td>
                <td scope="row"><?php echo $agenda->waktu_agenda ?></td>
                <td scope="row"><?php echo $agenda->tempat_agenda ?></td>
                <td scope="row">
                  <?php
                   $today=date ("Y-m-d");
                   $tgl_agenda = strtotime($agenda->tgl_selesai);
                   $tgl_today = strtotime($today);
                   if ($tgl_today <= $tgl_agenda){ ?>
                       <span class="badge badge-success">&nbsp;&nbsp;<?php echo $agenda->status ?>&nbsp;&nbsp;</span>
                 <?php }else{ ?>
                      <span class="badge badge-danger">&nbsp;<?php echo $agenda->status_after ?>&nbsp;</span>
                <?php } ?>
                </td>
                                               
                 <td  width="110" align="center">
                 <a href="<?php echo site_url('page/baak/agenda/edit/'.$agenda->id_agenda) ?>" data-toggle="tooltip" class="btn btn-info btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Edit"><span class="icon-label"><i class="fa fa-pencil"></i> </span><span class="btn-text"></span></a>
                 <a onclick="deleteConfirm('<?php echo site_url('page/baak/agenda/delete/'.$agenda->id_agenda) ?>')" href="#!" data-toggle="tooltip" class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
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