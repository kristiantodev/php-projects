<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
  <div class="page-content">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Kelola Mahasiswa</h4>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Mahasiswa</h4>
            <div class="text-right mb-4">  
              <a href="<?= base_url('mahasiswa/add') ;?>"class="btn btn-info btn-sm">
                <i class="fa fa-user-plus "></i> Tambah Mahasiswa
              </a>
              <a href="<?= base_url('mahasiswa/import') ;?>" class="btn btn-success btn-sm">
                <i class="fas fa-download"></i> Import Data
              </a>
            </div>
            <?= $this->session->flashdata('message');?>
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                  <tr>
                      <th>Nim</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Angkatan</th>
                      <th>Jurusan</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach ($mahasiswa as $key => $data) : ?>
                  <tr>
                    <td><?= $data->nim?></td>
                    <td><?= $data->nama ?></td>
                    <td><?= $data->jk ?></td>
                    <td><?= $data->angkatan?></td>
                    <td><?= $data->prodi ?></td>
                    <td width="100">
                      <a href="<?= base_url('mahasiswa/detail/'.$data->nim);?>" class="btn btn-primary btn-sm" title="Detail">
                          <i class="fa fa-user"></i>
                      </a>
                      <a href="<?= base_url('mahasiswa/edit_mahasiswa/'.$data->nim);?>" class="btn btn-success btn-sm" title="Edit">
                          <i class="fas fa-pencil-alt"></i>
                      </a>
                      <a href="<?= base_url('mahasiswa/hapus/'.$data->nim);?>" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Apakah Anda yakin data <?= $data->nim ?> ingin di hapus?')">
                          <i class="fas fa-trash-alt"></i>
                      </a>
                      <a href="<?= base_url('mahasiswa/nilai/'.$data->nim);?>" class="btn btn-warning btn-sm" title="Penilaian">
                          <i class="fas fa-book"></i>
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
                    

                