<!-- Footer -->
  <footer id="footer" class="footer overlay-theme-colored-9" data-bg-color="#1f1f1f">
    <div class="container pt-40 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-4">
		<img src="<?php echo base_url('assets/images/cic.png') ?>" height ="100" width='400' alt=""><br>
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2"></h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> 
                <span> <?php echo $cic->alamat ?></span> 
                </li>
				<li class="clearfix"> 
                <span> Telephon : 0231-200418</span> 
                </li>
				<li class="clearfix"> 
                <span> Email : info @ cic.ac.id</span> 
                </li>
              </ul>
            </div>
          </div>
        </div>
        
<div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h4 class="widget-title"><span class='fa fa-graduation-cap'>&nbsp;&nbsp;<font face="arial">Aplikasi Kampus</font></span></h4>
            <ul class="list angle-double-right list-border">
            <?php foreach ($linkku as $link): ?>
              <li><a href="<?php echo $link->url ?>" target="blank"><?php echo $link->nama_link ?></a></li>
              <?php endforeach; ?>               
            </ul>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="widget dark">
            <h4 class="widget-title"><span class='fa fa-link'>&nbsp;&nbsp;<font face="arial">Link Terkait</font></span></h4>
            <ul class="list angle-double-right list-border">
              <?php foreach ($linkku2 as $link2): ?>
              <li><a href="<?php echo $link2->url ?>" target="blank"><?php echo $link2->nama_link ?></a></li>
              <?php endforeach; ?>           
            </ul>
          </div>
        </div>

      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#2f2f2f">
      <div class="container pt-15 pb-10">
        <div class="row">
          <div class="col-md-12">
            <p class="font-13 text-black-777 m-0" align="center">&copy; <?php echo date('Y'); ?> Universitas Catur Insan Cendekia - Pusat Data & Informasi. All Rights Reserved.</p>
          </div>
          
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?php echo base_url();?>assets/front/js/custom.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/front/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>