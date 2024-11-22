 <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: Blog -->
    <section>
      <div class="container">

        <div class="row">
          <div class="col-md-9 blog-pull-right">
          <center>
          <h3 class="text-uppercase mt-0 line-height-1"><b><i class="fa fa-list text-theme-colored font-24 mt-5"></i>&nbsp; Daftar<span class="text-theme-colored"> Kerjasama </b></span></h3>
                <h6 class="text-uppercase letter-space-5 title font-playfair text-uppercase">Program Studi  TEKNIK INFORMATIKA</h6> <hr>
            </center>
            <div class="single-service">

           
             <p align="justify">Selain fokus dalam pendidikan, Program Studi Teknik Informatika Universitas CIC Cirebon
             juga telah melakukan kerjasama dengan berbagai Institusi, baik dengan Institusi Pendidikan, Perusahaan, dan Lembaga Lainnya.
             Berikut beberapa lembaga atau Institusi yang telah bekerjasama bersama kami :</p>
                


            <div data-example-id="hoverable-table" class="bs-example">
              <table class="table table-hover"> 
               <thead>
                <tr class="text-center font-14 font-weight-600 text-white" data-bg-color="#98a0a3">
                            <th width="40"><b>No</th>
                            <th><b>Nama Instansi</th>
                            <th >Tahun Kerjasama</th>
                            <th width="425"><b>Keterangan</th>
            </tr>
                     </thead>
                      <tbody>
                      <?php
             $no=1;
         foreach ($kerjasamaku as $kerjasama): ?>
                       <tr>
               <td align="center" class="bg-dark" width="2"><b><?php echo $no++; ?></b></td>
                <td scope="row"><?php echo $kerjasama->nm_perusahaan ?></td>
                <td scope="row" align="center"><?php echo $kerjasama->thn_mulai ?> - <?php echo $kerjasama->thn_berakhir ?></td>
                <td scope="row"  align="justify"><?php echo $kerjasama->keterangan ?></td>
            </tr>
          <?php endforeach; ?>
                              </tbody>
                               </table> 
                               </div>
                   

                
               
            </div>
          </div>
          <div class="col-sm-12 col-md-3">
            <div class="sidebar sidebar-left">
              <div class="widget">
                <h4 class="widget-title line-bottom"><b><i class="fa fa-exclamation-circle"></i>&nbsp;Tentang<span class="text-theme-color-2"> Kami</span></b></h4>
                <div class="services-list">
                  <ul class="list list-border angle-double-right">
                    <li><a href="<?php echo site_url();?>about/sambutan_kaprodi">Kata Sambutan Kaprodi</a></li>
                    <li><a href="<?php echo site_url();?>about/teknik_informatika">Teknik Informatika</a></li>
                    <li><a href="<?php echo site_url();?>about/visimisi">Visi, Misi, & Tujuan</a></li>
                    <li><a href="<?php echo site_url();?>about/lokasi">Lokasi</a></li>
                    <li  class="active"><a href="<?php echo site_url();?>about/kerjasama">Kerjasama</a></li>
                  </ul>
                </div>
              </div>
              </div>




            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  