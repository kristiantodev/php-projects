 <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider" data-bg-img="<?php echo base_url();?>assets/images/banner/home2.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
             <h2 class="text-blue"><font color="#007fd0">Detail Gallery</font></h2>
            <div class="col-md-12">
           
            </div>
          </div>
        </div>
      </div>
    </section>



                 
    <!-- Gallery Grid 3 -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">


              <?php $no=1;
          foreach ($galleryku as $gallery): ?>
              <!-- Portfolio Gallery Grid -->
              <div class="gallery-isotope grid-3 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo base_url('assets/images/gallery/'.$gallery->foto) ?>" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder">
                      <div class="title text-center">Sample Title</div>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="http://placehold.it/450x250" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                <?php endforeach; ?>
                
               

            </div>
          </div>
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
  