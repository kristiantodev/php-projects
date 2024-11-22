 <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
 

    <!-- Section: Blog -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <center>
          <h3 class="text-uppercase mt-0 line-height-1"><b><i class="fa fa-list text-theme-colored font-24 mt-5"></i>&nbsp; HIMATIF<span class="text-theme-colored"></b></span></h3>
                <h6 class="text-uppercase letter-space-5 title font-playfair text-uppercase">Himpunan Mahasiswa Teknik Informatika</h6>
           </center> 
          <hr>
             
            <div>
            <center>
            <img src="<?php echo base_url('assets/images/himatif/'.$himatif->logo) ?>" height ="200" alt="">
            </center>


<p align="justify">
                      
              <?php echo $himatif->info_himatif ?>
             
            </p>
<div id="accordion1" class="panel-group accordion">
                <div class="panel">
                  <div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse" href="#accordion11" aria-expanded="true">
                   <span class="open-sub"></span> Visi Misi HIMATIF </a> </div>
                  <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                    <div class="panel-content">

            <center><h4><b>VISI</b></h4></center>
                       <center><i><?php echo $himatif->visi ?></i></center>

                       <center><h4><b>MISI</b></h4></center>
                       <?php echo $himatif->misi ?>
                    </div>
                  </div>
                </div>
 
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true">
                   <span class="open-sub"></span> Struktur Organisasi HIMATIF STMIK CIC</a> </div>
                  <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                       <img src="<?php echo base_url('assets/images/'.$himatif->struktur_organisasi) ?>" class="img-fullwidth" >
                    </div>
                  </div>
                </div>
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
  