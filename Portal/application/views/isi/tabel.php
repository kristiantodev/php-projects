   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="page-title">Mahasiswa</h3>
        <div class="d-inline-block align-items-center">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item" aria-current="page">Table</li>
              <li class="breadcrumb-item active" aria-current="page">Table Mahasiswa</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="right-title">
      
      </div>
    </div>
  </div>
    <!-- Main content -->
    <section class="content">
      <div class="row">
		  
		<div class="col-12">
         
         <div class="box bt-4 border-primary ribbon-wrapper-reverse">
         <div class="ribbon ribbon-bookmark ribbon-vertical-r bg-primary"><i class="fa fa-users"></i></div>
            <div class="box-header with-border">
              <br>
              <div class="box-controls pull-right">
                  <button class="btn btn-purple btn-wth-icon icon-wthot-bg btn-sm"><span class="icon-label"><i class="fa fa-plus"></i> </span><span class="btn-text">&nbsp;Tambah Data</span></button>&nbsp;&nbsp;
                  <button class="btn btn-success btn-wth-icon icon-wthot-bg btn-sm"><span class="icon-label"><i class="fa fa-check-square-o"></i> </span><span class="btn-text">&nbsp;Verifikasi</span></button>&nbsp;&nbsp;
                  <button class="btn btn-yellow btn-wth-icon icon-wthot-bg btn-sm"><span class="icon-label"><i class="fa fa-print"></i> </span><span class="btn-text">&nbsp;Cetak Data</span></button>&nbsp;&nbsp;
                  <button class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm"><span class="icon-label"><i class="fa fa-file-pdf-o"></i> </span><span class="btn-text">&nbsp;Export to Pdf</span></button>&nbsp;&nbsp;
                  <button class="btn btn-success btn-wth-icon icon-wthot-bg btn-sm"><span class="icon-label"><i class="fa fa-file-excel-o"></i> </span><span class="btn-text">&nbsp;Export to Excel</span></button>&nbsp;&nbsp;
                  <button class="btn btn-info btn-wth-icon icon-wthot-bg btn-sm"><span class="icon-label"><i class="fa fa-file-word-o"></i> </span><span class="btn-text">&nbsp; Export to Docx</span></button>
                </div>  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example5" class="table table-striped table-hover display nowrap" style="width:100%">
					<thead>
						<tr class="bg-dark">
							              <th><b>NIM</th>
                            <th><b>Nama</th>
                            <th><b>Tempat, Tgl Lahir</th>
                            <th><b>Jenis Beasiswa</th>
                            <th><b>Jurusan</th>
                            <th align="right"><b>Action</b></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($pmrku as $pmr): ?>
						<tr>
							
							 <td scope="row"><?php echo $pmr->nis ?></td>
                                                    <td><?php echo $pmr->nm_siswa ?></td>
                                                    <td><?php echo $pmr->tmp_lahir ?>, <?php echo $pmr->tgl_lahir ?></td>
                                                    <td>
                                                    <?php if ($pmr->unit_pmr == "Full"){ ?>
                                                        <span class="badge badge-info"><?php echo $pmr->unit_pmr ?></span>
                                                        <?php }else if($pmr->unit_pmr == "SemiFull") { ?>
                                                        <span class="badge badge-success"><?php echo $pmr->unit_pmr ?></span>
                                                        <?php }else{ ?>
                                                        <span class="badge badge-danger"><?php echo $pmr->unit_pmr ?></span>
                                                        <?php } ?>

                                                    </td>
                                                    <td><?php echo $pmr->status ?></td>
                                                    
                                                    <td  width="110">
                                                    <a href="#" data-toggle="tooltip" class="btn btn-info btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Edit"><span class="icon-label"><i class="fa fa-pencil"></i> </span><span class="btn-text"></span></a>
                                                    <a href="#" data-toggle="tooltip" class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Hapus"><span class="icon-label"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                                                    <a href="#" data-toggle="tooltip" class="btn btn-yellow btn-wth-icon icon-wthot-bg btn-sm" data-original-title="View Berkas"><span class="icon-label"><i class="fa fa-bookmark"></i> </span><span class="btn-text"></span></a>
                                                    <button class="btn btn-purple btn-wth-icon icon-wthot-bg btn-sm"><span class="icon-label"><i class="fa fa-plus"></i> </span><span class="btn-text">&nbsp;Tambah Data</span></button>&nbsp;&nbsp;
                                                                                           
                                                    </td>

						</tr>
					<?php endforeach; ?>
					</tbody>
					<tfoot>
						<tr>
							<th>NIM</th>
                            <th>Nama</th>
                            <th>Tempat, Tgl Lahir</th>
                            <th>Jenis Beasiswa</th>
                            <th>Jurusan</th>
                            <th align="right">Action</th>

						</tr>
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