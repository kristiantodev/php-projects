 <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
 

    <!-- Section: Blog -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
                  <center>
          <h3 class="text-uppercase mt-0 line-height-1"><b><i class="fa fa-list text-theme-colored font-24 mt-5"></i>&nbsp; Daftar Kegiatan<span class="text-theme-colored"> Pengabdian Kepada Masyarakat</b></span></h3>
                <h6 class="text-uppercase letter-space-5 title font-playfair text-uppercase">Program Studi  TEKNIK INFORMATIKA</h6> <hr>
           
            <div>

<p align="justify">
Pengabdian Kepada Masyarakat adalah kegiatan civitas akademika yang memanfaatkan ilmu pengetahuan dan teknologi untuk memajukan kesejahteraan masyarakat dan mencerdaskan kehidupan bangsa.
Pengabdian kepada masyarakat pada Program Studi Teknik Informatika STMIK CIC ditekankan pada
Hubungan  yang  erat  dengan  industri  sekuler,  instansi pemerintah dan institusi terkait lainnya dalam perencanaan akademik, umpan balik, penyaluran sumber daya manusia dan bentuk kerjasama lainnya, serta
Mengkoordinasi dalam menyalurkan sumber daya manusia yang cakap dalam bidangnya untuk berpartisipasi sebagai contributor masyarakat global.  
 Berikut kegiatan-kegiatan Pengabdian kepada masyarakat yang pernah dilakukan oleh civitas akademik Program Studi Teknik Informatika STMIK CIC :
</p>

<table class="table table-hover no-wrap"> 
                    
                   <tr class="text-center font-14 font-weight-600 text-white" data-bg-color="#98a0a3"> 
                    <th><b>No</th>
                            <th><b>Nama Dosen</th>
                            <th><b>Nama Kegiatan</th>
                            <th><b>Tahun</th>
                      </tr>

                    <tbody> 
                      <?php $no=1;
         foreach ($pkmku as $pkm): ?>
            <tr>
               <td align="center"><?php echo $no++; ?></td>
               <td><?php echo $pkm->nm_lengkap ?></td>
                <td><?php echo $pkm->nm_kegiatan ?></td>
                <td align="center"><?php echo $pkm->tahun ?></td>
            </tr>
          <?php endforeach; ?>
                    </tbody> 
                  </table>

</p>

        

           </div>
           </div>
          
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  