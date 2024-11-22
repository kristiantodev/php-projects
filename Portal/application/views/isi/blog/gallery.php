 <!-- Start main-content -->
  <div class="main-content">
   



                 
        <!-- Section: Team -->
    <section id="team">
      <div class="container">
      <!-- Portfolio Filter -->
               <center>
          <h3 class="text-uppercase mt-0 line-height-1"><b><i class="fa fa-list text-theme-colored font-24 mt-5"></i>&nbsp; Galeri<span class="text-theme-colored"> Dosen</b></span></h3>
                <h6 class="text-uppercase letter-space-5 title font-playfair text-uppercase">Program Studi  TEKNIK INFORMATIKA</h6>
           </center> 
          <hr>
              <!-- End Portfolio Filter -->
        <div class="row mtli-row-clearfix">
         <?php $no=1;
          foreach ($galleryku as $g): ?>
                <div class="col-sm-6 col-md-3">
                  <div class="service-block bg-white">
                  <a data-rel="prettyPhoto[gallery1]" title="<?php echo $g->ket ?>" href="<?php echo base_url('assets/images/gallery/'.$g->foto) ?>">
                    <div class="thumb"> <img src="<?php echo base_url('assets/images/gallery/'.$g->foto) ?>" width='360' height='170'>
                    <h5 class="text-white mt-0 mb-0"><span class="price"><?php echo Date('Y', strtotime($g->tgl_input)) ?></span></h5>
                    </div>
                    </a>
                    <div class="content text-left flip pt-0">
                    <center><?php echo Date('d M Y H:m', strtotime($g->tgl_input)).' WIB' ?> </center>
                      <p align="justify"><?php echo $g->ket ?></p>
                      
                     </div>
                  </div>
                </div>
               
    <?php endforeach; ?>
         
          
        </div>
      </div>
    </section>
        
             
             

          
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  