 <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
 

    <!-- Section: Blog -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
                  <center>
          <h3 class="text-uppercase mt-0 line-height-1"><b><i class="fa fa-calendar-check-o text-theme-colored font-24 mt-5"></i>&nbsp; Agenda <span class="text-theme-colored"> Kegiatan</b></span></h3>
                <h6 class="text-uppercase letter-space-5 title font-playfair text-uppercase">Program Studi  TEKNIK INFORMATIKA</h6> <hr>
           
            <div>

<table class="table table-hover no-wrap"> 
                    
                   <tr class="text-center font-14 font-weight-600 text-white" data-bg-color="#98a0a3"> 
                    <th><b>No</th>
                            <th><b>Nama Agenda</th>
                            <th><b>Tanggal</th>
                            <th><b>Waktu</th>
                      </tr>

                    <tbody> 
                      <?php $no=1;
         foreach ($agendaku as $agenda): ?>
            <tr>
               <td align="center"><?php echo $no++; ?></td>
               <td><?php echo $agenda->nm_agenda ?></td>
                <td>
                  <?php if ($agenda->tgl_agenda == 0000-00-00){ ?>
                                 <?php echo Date('d M Y', strtotime($agenda->tgl_selesai)) ?>
                        <?php }else{ ?>
                                <?php echo Date('d M', strtotime($agenda->tgl_agenda)) ?> - <?php echo Date('d M Y', strtotime($agenda->tgl_selesai)) ?>
                        <?php } ?>
                </td>
                <td><?php echo $agenda->tempat_agenda ?>, <?php echo $agenda->waktu_agenda ?></td>
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
  