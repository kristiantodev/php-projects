            <footer class="page-footer">
                <div class="font-13">2022 © <b>SMP TRI BUDI MULIA</b> - All rights reserved.</div>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>

    <!-- Modal -->

    <!-- Materi -->

     <div class="modal fade" id="ModalLaporan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title " id="exampleModalLabel" style="color:white;">Cetak Laporan</h5>
            
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="post" action="<?= base_url('Guru/Laporan'); ?>">

                    <label>Pilih Mapel :</label>
                    <div class="form-group">
                        <select name="mapel" class="form-control">
                            <?php
      $this->db->select('*');
      $this->db->from('materi');
      $mapel = $this->db->get()->result();

      $grafik = $this->db->query("SELECT DISTINCT kelas FROM siswa");
      $kelas = $grafik->result();

                             foreach ($mapel as $k): ?>
                  <option value="<?php echo $k->mapel ?>"><?php echo $k->kode_materi ?> <?php echo $k->mapel ?></option>
                  <?php endforeach; ?>
                        </select>
                    </div>

                    <label>Pilih Kelas : </label>
                    <div class="form-group">
                        <select name="kelas" class="form-control">
                             <?php foreach ($kelas as $kel): ?>
                  <option value="<?php echo $kel->kelas ?>"><?php echo $kel->kelas ?></option>
                  <?php endforeach; ?>
                        </select>
                    </div>

            </div>   
            <div class="modal-footer">

                <button type="button" class="btn btn-light-secondary"
                    data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tutup</span>
                </button>
                <button type="submit" id="but_add" class="btn btn-success ml-1 btn-konfirm"
                    >
                    <i class="bx bx-print d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Cetak Laporan</span>
                </button>
            </div>
            </form>  
        </div>   
        
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModalEditMateri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Perbarui data</h5>
            
          </div>
          <div class="modal-body">
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= base_url('Guru/Update_Materi'); ?>">
                <input type="hidden" placeholder="Username" name="id" id="id-materi" class="form-control" >
                <input type="text" placeholder="Username" id="pdf-materi" class="form-control" >
                <label>Kode Materi : </label>
                <div class="form-group">
                    <input type="text" placeholder="Kode Materi" id="kode_materi-materi" name="kode_materi" class="form-control" required>
                </div>

                <label>Judul : </label>
                <div class="form-group">
                    <input type="text" placeholder="Judul" id="judul-materi" name="judul" class="form-control" required>
                </div>

                <label>Mata Pelajaran : </label>
                <div class="form-group">
                    <select class="form-control" name="mapel" id="mapel-materi">
                    <?php
                      $nama = $this->db->query("SELECT * FROM mapel WHERE status = 'Aktif' ");
                      foreach ($nama->result_array() as $nm) {
                          $mapel = $nm['mapel'];
                      ?>
                        <option><?=$mapel ?></option>
                    <?php } ?>
                    </select>
                </div>

                <label>Isi Materi : </label>
                <div class="form-group">
                    <textarea name="isi" class="form-control" rows="6" id="isi-materi"></textarea>
                </div>

                <label>File PDF :  </label>
                <div class="form-group">
                    <input type="file" placeholder="pdf" id="pdf-materi" name="pdf" class="form-control">
                </div>

                <label>Guru Pengajar </label>
                <div class="form-group">
                    <select class="form-control" name="guru">
                    <?php 
                      $nama1 = $this->session->userdata('nama');
                      $nama = $this->db->query("SELECT * FROM user WHERE username = '$nama1' ");
                      foreach ($nama->result_array() as $nm) {
                          $namalengkap = $nm['nama'];
                          $levell = $nm['level'];
                      } 
                      ?>
                        <option><?=$namalengkap ?></option>
                    </select>
                </div>

                <label>Untuk Kelas </label>
                <div class="form-group">
                    <select class="form-control" name="kelas" id="kelas-materi">
                        <option>VII</option>
                        <option>VIII</option>
                        <option>IX</option>
                    </select>
                </div>

        </div>   
        <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary"
                data-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Tutup</span>
            </button>
            <button type="submit" class="btn btn-primary ml-1"
                >
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Perbarui</span>
            </button>
        </div>
        </form>
        
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModalTambahMateri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title " id="exampleModalLabel" style="color:white;">Tambah data</h5>
            
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="post" action="<?= base_url('Guru/Add_Materi'); ?>" enctype="multipart/form-data">
                            
                <label>Kode Materi : </label>
                <div class="form-group">
                    <input type="text" placeholder="Kode Materi" name="kode_materi" class="form-control" required>
                </div>

                <label>Judul : </label>
                <div class="form-group">
                    <input type="text" placeholder="Judul" name="judul" class="form-control" required>
                </div>

                <label>Mata Pelajaran : </label>
                <div class="form-group">
                    <select class="form-control" name="mapel">
                    <?php
                      $nama = $this->db->query("SELECT * FROM mapel WHERE status = 'Aktif' ");
                      foreach ($nama->result_array() as $nm) {
                          $mapel = $nm['mapel'];
                      ?>
                        <option><?=$mapel ?></option>
                    <?php } ?>
                    </select>
                </div>

                <label>Isi Materi : </label>
                <div class="form-group">
                    <textarea name="isi" class="form-control" rows="6"></textarea>
                </div>

                <label>File PDF :  </label>
                <div class="form-group">
                    <input type="file" placeholder="pdf" name="pdf" class="form-control" required>
                </div>

                <label>Guru Pengajar </label>
                <div class="form-group">
                    <select class="form-control" name="guru">
                    <?php 
                      $nama1 = $this->session->userdata('nama');
                      $nama = $this->db->query("SELECT * FROM user WHERE username = '$nama1' ");
                      foreach ($nama->result_array() as $nm) {
                          $namalengkap = $nm['nama'];
                          $levell = $nm['level'];
                      } 
                      ?>
                        <option><?=$namalengkap ?></option>
                    </select>
                </div>

                <label>Untuk Kelas </label>
                <div class="form-group">
                    <select class="form-control" name="kelas">
                        <option>VII</option>
                        <option>VIII</option>
                        <option>IX</option>
                    </select>
                </div>

            </div>   
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary"
                    data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tutup</span>
                </button>
                <button type="submit" id="but_add" class="btn btn-success ml-1 btn-konfirm"
                    >
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tambah</span>
                </button>
            </div>
            </form>  
        </div>   
        
        </div>
      </div>
    </div>

    <!-- Quiz -->

    <div class="modal fade" id="ModalEditQuiz" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Perbarui data</h5>
            
          </div>
          <div class="modal-body">
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= base_url('Guru/Update_Quiz'); ?>">
                <input type="hidden" placeholder="Username" name="id" id="id-quiz" class="form-control" >
                <input type="hidden" placeholder="Username" name="pembuat" id="pembuat-quiz" class="form-control" >
                <label>Kode Quiz : </label>
                <div class="form-group">
                    <input type="text" placeholder="Kode Quiz" name="kode_quiz" id="kode_quiz-quiz" class="form-control" required>
                </div>

                <label>Kode Materi </label>
                <div class="form-group">
                    <select class="form-control" name="kode_materi" id="kode_materi-quiz">
                    <?php
                      $nama = $this->db->query("SELECT * FROM materi  ");
                      foreach ($nama->result_array() as $nm) {
                          $kode_materi = $nm['kode_materi'];
                      ?>
                        <option><?=$kode_materi ?></option>
                    <?php } ?>
                    </select>
                </div>

                
                <label>Isi Soal :  </label>
                <div class="form-group">
                    <textarea name="soal" class="form-control" rows="6" id="soal-quiz"></textarea>
                </div>

        </div>   
        <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary"
                data-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Tutup</span>
            </button>
            <button type="submit" class="btn btn-primary ml-1"
                >
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Perbarui</span>
            </button>
        </div>
        </form>
        
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModalTambahQuiz" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title " id="exampleModalLabel" style="color:white;">Tambah data</h5>
            
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="post" action="<?= base_url('Guru/Add_Quiz'); ?>">
                <input type="hidden" value="<?=$this->session->userdata('nama');?>" name="pembuat"  class="form-control" >
                <label>Kode Quiz : </label>
                <div class="form-group">
                    <input type="text" placeholder="Kode Quiz" name="kode_quiz" class="form-control" required>
                </div>

                <label>Kode Materi </label>
                <div class="form-group">
                    <select class="form-control" name="kode_materi">
                    <?php
                      $nama = $this->db->query("SELECT * FROM materi  ");
                      foreach ($nama->result_array() as $nm) {
                          $kode_materi = $nm['kode_materi'];
                      ?>
                        <option><?=$kode_materi ?></option>
                    <?php } ?>
                    </select>
                </div>

                <label>Isi Soal : </label>
                <div class="form-group">
                    <textarea name="soal" class="form-control" rows="6"></textarea>
                </div>

            </div>   
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary"
                    data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tutup</span>
                </button>
                <button type="submit" id="but_add" class="btn btn-success ml-1 btn-konfirm"
                    >
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tambah</span>
                </button>
            </div>
            </form>  
        </div>   
        
        </div>
      </div>
    </div>

    <div class="modal fade" id="ModalEditNilai" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Perbarui data</h5>
            
          </div>
          <div class="modal-body">
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= base_url('Guru/Nilai'); ?>">
                <input type="hidden" placeholder="Username" name="id" id="id-quiz" class="form-control" >
                <input type="text" readonly name="no_induk" id="no_induk-quiz" class="form-control" >
                <input type="hidden" readonly name="kode_quiz" id="kode_quiz-quiz" class="form-control" >

                <label>Soal yang diberikan:  </label>
                <div class="form-group">
                    <textarea name="soal" class="form-control" rows="3" readonly id="soal-quiz"></textarea>
                </div>
                <label>Jawaban siswa :  </label>
                <div class="form-group">
                    <textarea name="jawaban" class="form-control" rows="3" readonly id="jawaban-quiz"></textarea>
                </div>
                <label>Nilai :  </label>
                <div class="form-group">
                    <input type="number"name="nilai" id="nilai-quiz" class="form-control" >
                </div>

        </div>   
        <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary"
                data-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Tutup</span>
            </button>
            <button type="submit" class="btn btn-primary ml-1"
                >
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Perbarui</span>
            </button>
        </div>
        </form>
        
        </div>
      </div>
    </div>



    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="<?= base_url('vendor/backend/') ?>vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url('vendor/backend/') ?>vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="<?= base_url('vendor/backend/') ?>vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url('vendor/backend/') ?>vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="<?= base_url('vendor/backend/') ?>vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="<?= base_url('vendor/backend/') ?>vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="<?= base_url('vendor/backend/') ?>vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="<?= base_url('vendor/backend/') ?>vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="<?= base_url('vendor/backend/') ?>vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="<?= base_url('vendor/backend/') ?>vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <script src="<?= base_url('vendor/backend/') ?>js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="<?= base_url('vendor/backend/') ?>js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
    <script src="<?= base_url('vendor/backend/') ?>vendors/summernote/dist/summernote.min.js" type="text/javascript"></script>
    <script src="<?= base_url('vendor/backend/') ?>vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>

    <script type="text/javascript">
        $(function() {
            $('#summernote').summernote();
            $('#summernote_air').summernote({
                airMode: true
            });
        });
    </script>

        <!-- Modal Kalo nak buat per id button -->
    <!-- User -->
    <script type="text/javascript">
        $(document).on('click','#btn-edit',function(){
            $('.modal-body #id-akun').val($(this).data('id'));
            $('.modal-body #username-akun').val($(this).data('username'));
            $('.modal-body #password-akun').val($(this).data('password'));
            $('.modal-body #nama-akun').val($(this).data('nama'));
            $('.modal-body #level-akun').val($(this).data('level'));
        });
    </script>

    <script type="text/javascript">
        $(document).on('click','#btn-edit-siswa',function(){
            $('.modal-body #id-siswa').val($(this).data('id'));
            $('.modal-body #no_induk-siswa').val($(this).data('no_induk'));
            $('.modal-body #tgl_lahir-siswa').val($(this).data('tgl_lahir'));
            $('.modal-body #jenkel-siswa').val($(this).data('jenkel'));
            $('.modal-body #kelas-siswa').val($(this).data('kelas'));
        });
    </script>

    <script type="text/javascript">
        $(document).on('click','#btn-edit-mapel',function(){
            $('.modal-body #id-mapel').val($(this).data('id'));
            $('.modal-body #kode_mapel-mapel').val($(this).data('kode_mapel'));
            $('.modal-body #mapel-mapel').val($(this).data('mapel'));
            $('.modal-body #status-mapel').val($(this).data('status'));
        });
    </script>

    <script type="text/javascript">
        $(document).on('click','#btn-edit-materi',function(){
            $('.modal-body #id-materi').val($(this).data('id'));
            $('.modal-body #kode_materi-materi').val($(this).data('kode_materi'));
            $('.modal-body #judul-materi').val($(this).data('judul'));
            $('.modal-body #mapel-materi').val($(this).data('mapel'));
            $('.modal-body #isi-materi').val($(this).data('isi'));
            $('.modal-body #guru-materi').val($(this).data('guru'));
            $('.modal-body #kelas-materi').val($(this).data('kelas'));
            $('.modal-body #pdf-materi').val($(this).data('pdf'));

        });
    </script>

    <script type="text/javascript">
        $(document).on('click','#btn-edit-quiz',function(){
            $('.modal-body #id-quiz').val($(this).data('id'));
            $('.modal-body #kode_quiz-quiz').val($(this).data('kode_quiz'));
            $('.modal-body #kode_materi-quiz').val($(this).data('kode_materi'));
            $('.modal-body #soal-quiz').val($(this).data('soal'));
            $('.modal-body #pembuat-quiz').val($(this).data('pembuat'));

        });
    </script>

    <script type="text/javascript">
        $(document).on('click','#btn-nilai',function(){
            $('.modal-body #id-quiz').val($(this).data('id'));
            $('.modal-body #soal-quiz').val($(this).data('soal'));
            $('.modal-body #jawaban-quiz').val($(this).data('jawaban'));
            $('.modal-body #no_induk-quiz').val($(this).data('no_induk'));
            $('.modal-body #nilai-quiz').val($(this).data('nilai'));
            $('.modal-body #kode_quiz-quiz').val($(this).data('kode_quiz'));

        });
    </script>
    <!-- Akhir Modal -->

    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
    
    <!-- Sweet Alerrt -->
    <script src="<?= base_url('vendor/backend/');?>js/extensions/sweetalert2.js"></script>
    <script src="<?= base_url('vendor/backend/');?>sweetalert2/package/dist/sweetalert2.all.js"></script>

    <script type="text/javascript">
        const dataflash = $('.flash-data').data('flashdata');
        if (dataflash){
            Swal.fire({
                title: 'Berhasil',
                text: 'Data anda telah selesai ' + dataflash,
                icon: 'success'
            });
        }

        const dataflash2 = $('.flash-data2').data('flashdata2');
        if (dataflash2){
            Swal.fire({
                title: 'Gagal',
                text: 'File yang anda upload ' + dataflash2,
                icon: 'error'
            });
        }


        $('.btn-hapus').on('click', function(e){
                e.preventDefault();
                const href = $(this).attr('href');
                Swal.fire({
                  title: 'Apakah anda yakin?',
                  text: "Data yang telah dihapus tidak dapat dikembalikan kembali.",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Hapus!'
                }).then((result) => {
                  if (result.isConfirmed) {
                    document.location.href = href;
                  }
                })
        });

        $('.btn-infor').on('click', function(){
            Swal.fire({
            title: 'File Kosong',
            text: 'File tidak ada include PDF didalamnya. ',
            icon: 'info'
            });
        });
    </script>

    
</body>

</html>