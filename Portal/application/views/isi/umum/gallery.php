 <!-- Start main-content -->
  <div class="main-content">
   



                 
        <!-- Section: Team -->
    <section id="team">
      <div class="container">
      <!-- Portfolio Filter -->
              <div class="portfolio-filter font-alt align-center mb-6 0">
                <a  class="active col-md-6"><i class="fa fa-image"></i> &nbsp;&nbsp;Album - <?php echo $al->nm_album ?></a>
                
              </div>
              <!-- End Portfolio Filter -->
        <div class="row mtli-row-clearfix">
         <?php $no=1;
          foreach ($galleryku as $g): ?>
        
          <div class="col-xs-12 col-sm-6 col-md-4 sm-text-center mb-30 mb-sm-30">
            <div class="team maxwidth400">
              <div class="thumb">
              <a data-rel="prettyPhoto[gallery1]" title="<?php echo $g->ket ?>" href="<?php echo base_url('assets/images/gallery/'.$g->foto) ?>">
              <img class="img-fullwidth" src="<?php echo base_url('assets/images/gallery/'.$g->foto) ?>" height ="225" alt=""></a>
              </div>
              <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                <h5 class="name mt-0 text-theme-color-2">Created : <?php echo $g->tgl_input ?></h5>
                <p class="mb-20"><center><?php echo $g->ket ?><center></p>   
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
  