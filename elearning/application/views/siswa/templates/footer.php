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

<?php 
  $no_induk = $this->session->userdata('nama');
  $nama = $this->db->query("SELECT * FROM siswa WHERE no_induk = '$no_induk' ");
  foreach ($nama->result_array() as $nm) {
      $namalengkap = $nm['nama'];
      $no_induk = $nm['no_induk'];
      
  } 
  ?>
    <!-- Modal -->

    <!-- Materi -->

    <div class="modal fade" id="ModalEditMateri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Materi Pembelajaran</h5>
            
          </div>
          <div class="modal-body">
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="">
                <input type="hidden" placeholder="Username" name="id" id="id-materi" class="form-control" >
                <label>Kode Materi : </label>
                <div class="form-group">
                    <input type="text" placeholder="Kode Materi" readonly id="kode_materi-materi" name="kode_materi" class="form-control" required>
                </div>

                <label>Judul : </label>
                <div class="form-group">
                    <input type="text" placeholder="Judul" id="judul-materi" name="judul" readonly class="form-control" required>
                </div>

                <label>Mata Pelajaran : </label>
                <div class="form-group">
                    <select class="form-control" name="mapel" id="mapel-materi" readonly>
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
                    <textarea name="isi" class="form-control" rows="10" id="isi-materi" readonly></textarea>
                </div>

                <label>Guru Pengajar </label>
                <div class="form-group">
                    <input type="text" name="guru" id="guru-materi" class="form-control" readonly>
                </div>

                <label>Untuk Kelas </label>
                <div class="form-group">
                    <select class="form-control" name="kelas" id="kelas-materi" readonly>
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
        </div>
        </form>
        
        </div>
      </div>
    </div>

    

    <div class="modal fade" id="ModalEditQuiz" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title" id="exampleModalLabel" style="color: white;">Perbarui data</h5>
            
          </div>
          <div class="modal-body">
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?= base_url('Siswa/Isi_Quiz'); ?>">
                <input type="hidden" placeholder="Username" name="id" id="id-quiz" class="form-control" >
                <input type="hidden" placeholder="Kode Quiz" readonly name="kode_quiz" id="kode_quiz-quiz" class="form-control" required>
                <input type="hidden" placeholder="Kode Quiz" readonly name="kode_materi" id="kode_materi-quiz" class="form-control" required>
                

                <label>Isi Soal : </label>
                <div class="form-group">
                    <textarea name="soal" class="form-control" rows="4" id="soal-quiz" readonly></textarea>
                </div>

                <label>Nama Siswa : </label>
                <div class="form-group">
                    <input type="text"readonly name="siswa" class="form-control" readonly value="<?=$namalengkap;?>">
                </div>
                <label>No Induk Siswa : </label>
                <div class="form-group">
                    <input type="hidden"readonly name="no_induk" class="form-control" readonly value="<?=$no_induk;?>">
                </div>

                <label>Jawaban Anda : </label>
                <div class="form-group">
                    <textarea name="jawaban" class="form-control" rows="6"></textarea>
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
                <span class="d-none d-sm-block">Kirim Jawaban</span>
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

        });
    </script>

    <script type="text/javascript">
        $(document).on('click','#btn-edit-quiz',function(){
            $('.modal-body #id-quiz').val($(this).data('id'));
            $('.modal-body #kode_quiz-quiz').val($(this).data('kode_quiz'));
            $('.modal-body #kode_materi-quiz').val($(this).data('kode_materi'));
            $('.modal-body #soal-quiz').val($(this).data('soal'));

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
                text: 'Gambar yang anda upload ' + dataflash2,
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

        $('.btn-quiz').on('click', function(e){
                e.preventDefault();
                const href = $(this).attr('href');
                Swal.fire({
                  title: 'Kerjakan Quiz?',
                  text: "Pastikan anda mempelajari kembali materi tersebut agar dalam mengerjakan quiz anda tidak salah.",
                  icon: 'info',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Kerjakan Quiz'
                }).then((result) => {
                  if (result.isConfirmed) {
                    document.location.href = href;
                  }
                })
        });
    </script>

    
</body>

</html>