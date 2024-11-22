 <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
 

    <!-- Section: Blog -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <center>
          <h3 class="text-uppercase mt-0 line-height-1"><b><i class="fa fa-list text-theme-colored font-24 mt-5"></i>&nbsp; Daftar<span class="text-theme-colored"> Penelitian</b></span></h3>
                <h6 class="text-uppercase letter-space-5 title font-playfair text-uppercase">Program Studi  TEKNIK INFORMATIKA</h6> <hr>
           </center>   
            <div>

<p align="justify">
Penelitian pada Program Studi Teknik Informatika STMIK CIC memiliki tujuan yaitu untuk memajukan disiplin ilmu dan 
aplikasinya beserta sinergi multi disipilin ilmu dengan tujuan akhir efektifitas dan efesiensi sumber daya, 
memiliki relevansi yang tinggi dalam perkembangan proses dan aplikasi ilmu pengetahuan di industri sekuler dan instansi pemerintah,
dan memiliki kualitas nasional dan diakui oleh masyarakat. Berikut penelitian-penelitian yang pernah dilakukan oleh civitas akademik Program Studi Teknik Informatika STMIK CIC :
</p>
<div class="table-responsive">
<table class="table table-hover no-wrap"> 
                  
                    <tr class="text-center font-14 font-weight-600 text-white" data-bg-color="#98a0a3"> 
                    <th><b>No</th>
                            <th><b>Nama Dosen</th>
                            <th><b>Judul Penelitian</th>
                            <th><b>Tahun</th>
                            <th><b>Jurnal</th>
                      </tr>
                    <tbody> 
                      <tr>
                        <?php $no=1;
         foreach ($penelitianku as $p): ?>
            <tr>
               <td align="center" width="13"><?php echo $no++; ?></td>
               <td><p align="justify"><?php echo $p->nm_lengkap ?></p></td>
                <td width="650"><p align="justify"><?php echo $p->judul_penelitian ?></td>
                <td align="center"><?php echo $p->tahun ?></td>
                <td align="center">
                   <a href="<?php echo $p->link ?>" target='blank' data-toggle="tooltip" class="btn btn-primary btn-wth-icon icon-wthot-bg btn-sm" data-original-title="Lihat"><span class="icon-label"><i class="fa fa-link"></i> </span><span class="btn-text"></span></a>
                </td>
            </tr>
          <?php endforeach; ?>
                      </tr>
                    </tbody> 
                  </table>
  </div>

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
  