<link href="<?php echo base_url(); ?>assets/style.css" rel="stylesheet" />
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('sukses'); ?>"></div>



      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <h3 class="page-title"><b><i class="fas fa-mars-double"></i>&nbsp; Kategori Sayur</b></h3>
            <ol class="breadcrumb">
              <!-- <li class="breadcrumb-item active">Lapak Toko Sayur Mayur Om Hendrik</li> -->
            </ol>

            <div class="state-information d-none d-sm-block">

              <a data-toggle="modal" data-target="#bb">
                <button type="button" class="btn btn-success waves-effect waves-light" style="background-color: #00ff2a;color:#fff;border:none;">
                  <i class="fa fa-plus"></i> Tambah Data</button>
              </a>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end row -->

    <div class="page-content-wrapper">
      <div class="row">
        <div class="col-12">
          <div class="card m-b-20">
            <div class="card-body">

              <table id="datatable2" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                  <tr>
                    <th width="9"><b>No</b></th>
                    <th><b>kategori Distributor</b></th>
                    <th width="150"><b>Aksi</b></th>
                  </tr>
                </thead>


                <tbody>
                  <?php $no = 1;
                  foreach ($kategoriku as $kategori) : ?>

                    <tr>
                      <td width="7" align="center"><?php echo $no++; ?></td>
                      <td><?php echo $kategori->nm_kategori ?></td>
                      <td>

                        <a data-toggle="modal" data-target="#modal-edit<?php echo $kategori->id_kategori ?>" class="btn btn-success waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Ubah">
                            <font color="white"><i class="fas fa-pencil-alt"></i></font>
                          </span></a>
                        <a onclick="deleteConfirm('<?php echo site_url('adm/kategori/hapus/' . $kategori->id_kategori); ?>')" href="#!" data-toggle="tooltip" class="btn btn-danger waves-effect waves-light tombol-hapus" data-original-title="Hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                        </a>

                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div> <!-- end col -->
    </div> <!-- end row -->






  </div>
  <!-- end page content-->

</div> <!-- container-fluid -->

</div> <!-- content -->



<!-- Modal -->
<div class="modal text-left" id="bb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h6 class="modal-title">
          <font color='white'>Form Kategori</font>
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo site_url('adm/kategori/add'); ?>" method="post">
        <div class="modal-body">
          <fieldset class="form-group floating-label-form-group">
            <label for="email">Kategori</label>
            <input type="text" name="nm_kategori" class="form-control  round <?php echo form_error('nm_kategori') ? 'is-invalid' : '' ?>" id="email" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
            <font color="red"><?php echo form_error('nm_kategori') ?></font>
          </fieldset>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal" value="close">
            <i class="fas fa-times"></i>&nbsp;Keluar
          </button>
          <button type="submit" class="btn btn-success">
            <i class="fa fa-save"></i>&nbsp;Simpan
          </button>

        </div>
      </form>
    </div>
  </div>
</div>




<!-- Modal -->
<?php $no = 0;
foreach ($kategoriku as $kategori) : ?>
  <div class="modal text-left" id="modal-edit<?php echo $kategori->id_kategori ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h6 class="modal-title">
            <font color='white'>Edit Data Kategori</font>
          </h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo site_url('adm/kategori/edit'); ?>" method="post">
          <input type="hidden" readonly value="<?= $kategori->id_kategori; ?>" name="id_kategori" class="form-control">
          <div class="modal-body">
            <fieldset class="form-group floating-label-form-group">
              <label for="email">kategori Distributor</label>
              <input type="text" value="<?php echo $kategori->nm_kategori ?>" required name="nm_kategori" class="form-control  round <?php echo form_error('nm_kategori') ? 'is-invalid' : '' ?>" id="email">
              <font color="red"><?php echo form_error('nm_kategori') ?></font>
            </fieldset>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal" value="close">
              <i class="fas fa-times"></i>&nbsp;Keluar
            </button>
            <button type="submit" class="btn btn-success">
              <i class="fa fa-save"></i>&nbsp;Save
            </button>

          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>




<!-- modal -->
<div class="modal modal-danger" id="modal-danger">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title">
          <font color='white'>Konfirmasi Penghapusan</font>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin akan menghapus data ini ?</p>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-dismiss="modal">
          <font color='white'><i class="fas fa-times"></i>&nbsp;Batal</font>
        </a>
        <a href="#" id="btn-delete" type="button" class="btn btn-danger mr-1"><i class="fas fa-trash"></i>&nbsp;Hapus</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->



<script>
  function deleteConfirm(url) {
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
</script>