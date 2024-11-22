<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Satisfaction Survey form Wizard by Ansonika.">
    <meta name="author" content="Ansonika">
     <title>Goa Sunyaragi Cirebon</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/cirebon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Caveat|Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?php echo base_url();?>assets/survei/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/survei/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/survei/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?php echo base_url();?>assets/survei/css/custom.css" rel="stylesheet">

</head>

<body class="style_3">
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<header>
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-5">
	                <a href="index.html"><img src="<?php echo base_url();?>assets/cirebon.png" alt="" width="50" height="55"></a>
	            </div>
	            <div class="col-7">
	                <div id="social">
	                    <ul>
	                        <li><a href="<?php echo site_url();?>portal"><i class="fa fa-home"></i> Home</a></li>
	                        <li><a href="<?php echo site_url();?>portal/sejarah"><i class="fa fa-map-marker"></i> Sejarah</a></li>
	                        <li><a href="<?php echo site_url();?>portal/survei"><i class="fa fa-edit"></i> Survei</a></li>
	                        <li><a href="<?php echo site_url();?>portal/kontak"><i class="fa fa-phone"></i> Contact</a></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	</header>
	<!-- /header -->

	<div class="wrapper_centering">
	    <div class="container_centering">
	        <div class="container">
	            <div class="row justify-content-between">
	                <div class="col-xl-10 col-lg-10 d-flex align-items-center">
	                    <div class="main_title_1">
	                        <h3><i class="fa fa-phone"></i> Kontak</h3>
	                        <p align="justify">Untuk informasi lebih lanjut mengenai Gua Sunyaragi anda bisa datang langsung ke Gua sunyaragi di jl. Jenderal Sudirman No.38 By Pass Kota Cirebon pada jam kerja pukul 08:00 s/d 17:00 WIB atau menghubungi kontak dibawah ini :<br><br>
	                        	<i class="social_facebook"></i> &nbsp;&nbsp;&nbsp;<?php echo $perusahaan->fb ?><br>
	                        	<i class="social_twitter"></i> &nbsp;&nbsp;&nbsp;<?php echo $perusahaan->twitter ?><br>
	                        	<i class="social_instagram"></i> &nbsp;&nbsp;&nbsp;<?php echo $perusahaan->instagram ?><br>
                                <i class="fa fa-phone"></i> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $perusahaan->kontak ?>
	                        </p>
	                        <p><em>- Let's explore Sunyaragi cave !</em></p>
	                    </div>
	                </div>
	                <!-- /col -->
	            </div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container_centering -->
	</div>
	<!-- /wrapper_centering -->
	
	<!-- COMMON SCRIPTS -->
	<script src="<?php echo base_url();?>assets/survei/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/survei/js/common_scripts.min.js"></script>
	<script src="<?php echo base_url();?>assets/survei/js/functions.js"></script>

	<!-- Wizard script -->
	<script src="<?php echo base_url();?>assets/survei/js/survey_func.js"></script>

</body>
</html>