<!-- Begin Page Content -->
                <div class="container-fluid">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('sukses'); ?>"></div>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Dimensi</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a data-toggle="modal" data-target="#bb">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-plus"></i> Tambah Data</button>
                                </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="20">No.</th>
                                            <th>Nama Dimensi</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php $no=1;
         foreach ($dimensies as $dimensi): ?>            
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $dimensi->nama_dimensi ?></td>
                                            <td>
                                                <a data-toggle="modal" data-target="#modal-edit<?php echo $dimensi->id_dimensi ?>" class="btn btn-primary waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Ubah"><font color="white"><i class="fas fa-pencil-alt"></i></font></span></a>
                <a onclick="deleteConfirm('<?php echo site_url('adm/dimensi/hapus/'.$dimensi->id_dimensi); ?>')" href="#!" data-toggle="tooltip" class="btn btn-danger waves-effect waves-light tombol-hapus" data-original-title="Hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                                            </td>
                                            
                                        </tr>
                                       <?php endforeach; ?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Modal -->
                  <div class="modal fade text-left" id="bb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Form Tambah Dimensi</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm/dimensi/add'); ?>" method="post">
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Nama Dimensi</label>
                          <input type="text" name="nama_dimensi" class="form-control  round <?php echo form_error('nama_dimensi') ? 'is-invalid':'' ?>" id="email" placeholder="Nama Dimensi" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
                        </fieldset>
                         
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;Simpan
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>

                   <!-- Modal -->
 <?php $no=0; foreach ($dimensies as $dimensi): ?>
                  <div class="modal fade text-left" id="modal-edit<?php echo $dimensi->id_dimensi ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Edit Data Dimensi</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm/dimensi/edit'); ?>" method="post">
                      <input type="hidden" readonly value="<?=$dimensi->id_dimensi;?>" name="id_dimensi" class="form-control" >
                      <div class="modal-body">
                                     
      <fieldset class="form-group floating-label-form-group">
                          <label for="email">Nama Dimensi</label>
                          <input type="text" name="nama_dimensi" value="<?=$dimensi->nama_dimensi;?>" class="form-control  round <?php echo form_error('nama_dimensi') ? 'is-invalid':'' ?>" id="email" placeholder="Nama Dimensi" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
                        </fieldset>

                        
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;Edit Dimensi
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>
 <?php endforeach; ?>


                  <!-- modal -->
<div class="modal modal-danger fade" id="modal-danger">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
      <h5 class="modal-title"><font color='white'>Konfirmasi Penghapusan</font></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
      </div>
      <div class="modal-body">
      <p>Apakah anda yakin akan menghapus data ini ?</p>
      </div>
      <div class="modal-footer">
      <a type="button" class="btn btn-secondary" data-dismiss="modal"><font color='white'><i class="fas fa-times"></i>&nbsp;Batal</font></a>
      <a href="#" id="btn-delete" type="button" class="btn btn-danger mr-1"><i class="fas fa-trash"></i>&nbsp;Hapus</a>
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
