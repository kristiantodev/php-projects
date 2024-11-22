<!-- Start main-content -->
  <div class="main-content">



    <section>
      <div class="container">
 
        <div class="row">
          <div class="col-md-9 pull-right flip sm-pull-none">
        <center>
          <h3 class="text-uppercase mt-0 line-height-1"><b><i class="fa fa-list text-theme-colored font-24 mt-5"></i>&nbsp; Informasi / Pengumuman<span class="text-theme-colored"> Kampus</b></span></h3>
                <h6 class="text-uppercase letter-space-5 title font-playfair text-uppercase">Universitas Catur Insan Cendekia</h6>
           </center> 
          <hr>

            <div class="blog-posts">
              <div class="col-md-12">
              <?php 
function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
foreach ($results as $pengumuman): ?>
                <div class="row mb-15">
              <div class="col-sm-6 col-md-4">
              <?php if ( $pengumuman->foto == "default.jpg"){ ?>

                   <?php }else{ ?>
                <div class="thumb"> <br><img alt="featured project" height="165" src="<?php echo base_url('assets/images/pengumuman/'.$pengumuman->foto) ?>" class="img-fullwidth"></div>
              <?php } ?>
              </div>
              <div class="col-sm-6 col-md-8">
                <p align="justify">
<h4 class="entry-title text-white m-0"><a href="<?php echo base_url().'pengumuman/'.$pengumuman->slug;?>"><font color="#21a0f0"><p align="justify"><?php echo $pengumuman->jdl_pengumuman ?></p></font></a></h4>
                </p>
                <ul class="review_text list-inline">
                  <li>
                  <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-calendar mr-5 text-theme-colored"></i> &nbsp;<?php echo Date('d M Y H:m', strtotime($pengumuman->tgl_post)).' WIB' ?></span>                       
                  <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-user mr-5 text-theme-colored"></i> &nbsp;<?php echo $pengumuman->author ?></span>
                  </li>

                </ul>
                <p><?php echo limit_words($pengumuman->isi,25);?> .....</p>
                <a href="<?php echo base_url().'pengumuman/'.$pengumuman->slug;?>" class="btn-read-more">Baca Selanjutnya</a>
                </div>
            </div>
            <hr>
            <?php endforeach; ?>


                   </div>
              </div>
              <div class="col-md-12">
                <nav>
                  <?php
    if(isset($links)){
     echo $links;
    } 
    ?>
                </nav>
              </div>
            </div>
     

          <div class="col-md-3">
            <div class="sidebar sidebar-right mt-sm-30">
                
				<div class="widget">
                <h4 class="widget-title line-bottom"><b><i class="fa fa-tags"></i>&nbsp;Kategori<span class="text-theme-color-2"> Informasi</span></b></h4>
                <ul class="list-divider list-border list check">
                <a href="<?php echo site_url();?>artikel/"><li>Berita Kampus (<?php echo $this->db->count_all_results('artikel'); ?>)</li></a>
				<a href="<?php echo site_url();?>kegiatan/"><li>Kegiatan Kampus (<?php echo $this->db->count_all_results('kegiatan'); ?>)</li></a>
				<a href="<?php echo site_url();?>pengumuman/"><li>Informasi Kampus (<?php echo $this->db->count_all_results('pengumuman'); ?>)</li></a>
				<li>Informasi PMB (0)</li>
                </ul>
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