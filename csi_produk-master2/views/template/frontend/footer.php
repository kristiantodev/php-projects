<section class="pt-4 pt-md-7">
  <div class="footer">
    <footer class="footer text-center">
    <p class="ftex">&copy; 2021 Rizki Dewi Setyorini - All Rights Reserved</p>
    </footer>
  </div>
</section>
<!-- Libs JS -->
    <script src="<?=base_url('assets')?>/landkit/jquery.min.js"></script>
    <script src="<?=base_url('assets')?>/landkit/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('assets')?>/landkit/jquery.fancybox.min.js"></script>
    <script src="<?=base_url('assets')?>/landkit/aos.js"></script>
    <script src="<?=base_url('assets')?>/landkit/choices.min.js"></script>
    <script src="<?=base_url('assets')?>/landkit/countUp.min.js"></script>
    <script src="<?=base_url('assets')?>/landkit/dropzone.min.js"></script>
    <script src="<?=base_url('assets')?>/landkit/flickity.pkgd.min.js"></script>
    <script src="<?=base_url('assets')?>/landkit/flickity-fade.js"></script>
    <script src="<?=base_url('assets')?>/landkit/highlight.pack.min.js"></script>
    <script src="<?=base_url('assets')?>/landkit/imagesloaded.pkgd.min.js"></script>
    <script src="<?=base_url('assets')?>/landkit/isotope.pkgd.min.js"></script>
    <script src="<?=base_url()?>assets/landkit/jarallax.min.js"></script>
    <script src="<?=base_url()?>assets/landkit/jarallax-video.min.js"></script>
    <script src="<?=base_url()?>assets/landkit/jarallax-element.min.js"></script>
    <script src="<?=base_url('assets')?>/landkit/quill.min.js"></script>
    <script src="<?=base_url('assets')?>/landkit/smooth-scroll.min.js"></script>
    <script src="<?=base_url('assets')?>/landkit/typed.min.js"></script>
		<!-- SweetAlert Plugin Js -->
		<script src="<?=base_url('assets')?>/plugins/sweetalert/sweetalert.min.js"></script>
<!-- Map -->
    <script src="<?=base_url()?>assets/landkit/mapbox-gl.js"></script>
    <style type="text/css" data-typed-js-css="true">
        .typed-cursor{
          opacity: 1;
        }
        .typed-cursor.typed-cursor--blink{
          animation: typedjsBlink 0.7s infinite;
          -webkit-animation: typedjsBlink 0.7s infinite;
                  animation: typedjsBlink 0.7s infinite;
        }
        @keyframes typedjsBlink{
          50% { opacity: 0.0; }
        }
        @-webkit-keyframes typedjsBlink{
          0% { opacity: 1; }
          50% { opacity: 0.0; }
          100% { opacity: 1; }
        }
      </style>
			<?php if (isset($_SESSION['message']) && $_SESSION['message'] != ''): ?>
				<script>
			        swal({
			            title: '<?php echo ucfirst($_SESSION['message']['type']); ?>',
			            text: '<?php echo $_SESSION['message']['text']; ?>',
			            icon: '<?php echo $_SESSION['message']['type']; ?>',
			            timer: 2000
			        });
				</script>
			<?php endif; $_SESSION['message'] = ''; ?>
<?php if ($this->uri->segment(1)==='questionnaire') { ?>
  <script>
  $('input[type="checkbox"]').on('change', function() {
   $(this).siblings('input[type="checkbox"]').not(this).prop('checked', false);
  });
  </script>
<?php } ?>
</body>

</html>