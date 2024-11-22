<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
  <div class="page-content">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Kelola User</h4>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data User</h4>
            <div class="text-right mb-4">  
                <a href="<?= base_url('user/add') ;?>"class="btn btn-info btn-sm">
                <i class="fa fa-user-plus "></i> Tambah User
                </a>
            </div>
            <?= $this->session->flashdata('message');?>
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                  <tr>
                      <th>No.</th>
                      <th>Foto</th>
                      <th>NIDN</th>
                      <th>Nama</th>
                      <th>Username</th>
                      <th>Jenis Kelamin</th>
                      <th>Level</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $no =1; foreach ($user as $key => $data) : ?>
                  <td width="40px"><?= $no++?>.</td>
                  <td style="text-align: left;">
                    <img src="<?= base_url("assets/uploads/foto/").$data->image ?>" class="rounded-circle" width="31" height="31">
                  </td>
                  <td><?= $data->nidn ?></td>
                  <td><?= $data->nama_u ?></td>
                  <td><?= $data->username ?></td>
                  <td><?= $data->jk ?></td>
                  <td><?= $data->level ?></td>
                  <td width="100px">
                    <a href="<?= base_url('user/detail/'.$data->id_user);?>" class="btn btn-primary btn-sm" title="Detail">
                          <i class="fa fa-user"></i>
                      </a>
                      <a href="<?= base_url('user/edit/'.$data->id_user);?>" class="btn btn-success btn-sm" title="Edit">
                          <i class="fas fa-pencil-alt"></i>
                      </a>
                      <a href="<?= base_url('user/hapus/'.$data->id_user);?>" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Apakah Anda yakin data <?= $data->nama_u ?> ingin di hapus?')">
                          <i class="fas fa-trash-alt"></i>
                      </a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
    <!-- end col -->
  </div>
  <!-- end row -->
                    

                