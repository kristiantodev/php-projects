 <?php 
  $b=$data->row_array();
?>

 <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->

   <!-- Section: Blog -->
    <section>
      <div class="container">

        <div class="row">
          <div class="col-md-9 blog-pull-left">
            <div class="team">
            <ul class="review_text list-inline">
             
                  <li>
                  <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-user mr-5 text-theme-colored"></i> Ditulis oleh :  <?php echo $b['author'];?></span>
                  <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-calendar mr-5 text-theme-colored"></i> &nbsp;<?php echo Date('d M Y H:m', strtotime($b['tgl_post'])).' WIB' ?></span>                    
                  
                  </li>

                </ul>
            <h3 class="name mt-0"><?php echo $b['judul_artikel'];?> </h3>
             
                <?php if ( $b['foto'] == "default.jpg"){ ?>

                   <?php }else{ ?>
              <div class="thumb"><center><img src="<?php echo base_url().'assets/images/artikel/'.$b['foto'];?>" width="700" alt=""></center></div>
              <center><span class="mb-10 text-gray-darkgray mr-10 font-12">Foto : Dokumentasi Universitas Catur Insan Cendekia</span>  
                   </center>
                    <?php } ?>
              <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                               
                <p class="mb-20"><?php echo $b['isi'];?></p>
              
              </div>
            </div>
             </div>
             <hr>
          <div class="col-sm-12 col-md-3">
            <div class="sidebar sidebar-left">
          

              <div class="widget">
                <h4 class="widget-title line-bottom"><b><i class="fa fa-tags"></i>&nbsp;Baca : <span class="text-theme-color-2">Berita Lainnya</span></b></h4>
                <div class="latest-posts">
                <?php $no=1;
                function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
         foreach ($artikelku as $a): ?>
                  <article class="post media-post clearfix pb-0 mb-10">
                    <a class="post-thumb" href="<?php echo base_url().'artikel/'.$a->slug;?>"><img src="<?php echo base_url('assets/images/artikel/'.$a->foto) ?>" width='75' height='75' alt=""></a>
                    <div class="post-right">
                      <h4 class="post-title mt-0"><a href="<?php echo base_url().'artikel/'.$a->slug;?>"><?php echo limit_words($a->judul_artikel,8);?> ...</a></h4>
                    </div>
                  </article>
            <?php endforeach; ?>   
                </div>
              </div>


              <div class="widget">
                <a href="<?php echo site_url('gallery/') ?>"><h4 class="widget-title line-bottom"><b><i class="fa fa-image"></i>&nbsp;Gallery <span class="text-theme-color-2"> Foto</span></b></h4></a>
                <div id="flickr-feed" class="clearfix">
                  <!-- Flickr Link -->
                  <?php $no=1;
         foreach ($fotoku as $f): ?>
    <a data-rel="prettyPhoto[gallery1]" title="<?php echo $f->ket ?>" href="<?php echo base_url('assets/images/gallery/'.$f->foto) ?>">
                  <img src="<?php echo base_url('assets/images/gallery/'.$f->foto) ?>">
    </a>
                   
                    <?php endforeach; ?>
                </div>
              </div>  

              
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  