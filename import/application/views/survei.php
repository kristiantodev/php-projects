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
	                <div class="col-xl-6 col-lg-6 d-flex align-items-center">
	                    <div class="main_title_1">
	                        <h3><img src="<?php echo base_url();?>assets/survei/img/main_icon_1.svg" width="80" height="80" alt=""> Survei Pengunjung</h3>
	                        <p align="justify">Berikan penilaian kepuasan anda tentang pelayanan yang ada pada Goa Sunyaragi Cirebon, agar kami dapat meningkatkan kualitas dan pelayanan yang ada.</p>
	                        <p><em>- Team Goa Sunyaragi Cirebon</em></p>
	                    </div>
	                </div>
	                <!-- /col -->
	                <div class="col-xl-5 col-lg-5">
	                    <div id="wizard_container">
	                        <div id="top-wizard">
	                            <div id="progressbar"></div>
	                        </div>
	                        <!-- /top-wizard -->
	                        <form id="wrapped" method="POST" autocomplete="off">
	                            <input id="website" name="website" type="text" value="">
	                            <!-- Leave for security protection, read docs for details -->
	                            <div id="middle-wizard">

	                                <div class="step">
	                                    <h3 class="main_question"><strong>Data Diri</strong>Isi Identitas Anda</h3>
	                                    <div class="form-group">
	                                        <label for="firstname">Nama Lengkap</label>
	                                        <input type="text" name="firstname" id="firstname" class="form-control required">
	                                    </div>
	                                    <div class="form-group">
	                                        <div class="form-group radio_input">
	                                                <label class="container_radio">Laki-Laki
	                                                    <input type="radio" name="gender" value="Male" class="required">
	                                                    <span class="checkmark"></span>
	                                                </label>
	                                                <label class="container_radio">Perempuan
	                                                    <input type="radio" name="gender" value="Female" class="required">
	                                                    <span class="checkmark"></span>
	                                                </label>
	                                            </div> 
	                                    </div>
	                                    <div class="form-group">
	                                        <label for="firstname">Usia</label>
	                                        <input type="text" name="firstname" id="firstname" class="form-control required">
	                                    </div>
	                                    <div class="form-group">
	                                        <label for="additional_message_label">Alamat</label>
	                                        <textarea name="additional_message" id="additional_message_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message');"></textarea>
	                                    </div>
	                                </div>
	                                <!-- /step 1-->

	                                <div class="step">
	                                    <h3 class="main_question mb-4"><strong>2 of 5</strong>Keramahan petugas dalam melayani pelanggan</h3>
	                                    <div class="review_block">
	                                    	<div class="row">
	                                        <div class="col-lg-6 col-md-6 col-6">
	                                        <ul>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="radio" id="no" name="question_2" class="required" value="No" onchange="getVals(this, 'question_2');">
	                                                    <label class="radio" for="no"></label>
	                                                    <label for="no" class="wrapper">Sangat Baik</label>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="radio" id="maybe" name="question_2" class="required" value="Maybe" onchange="getVals(this, 'question_2');">
	                                                    <label class="radio" for="maybe"></label>
	                                                    <label for="maybe" class="wrapper">Baik</label>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="radio" id="probably" name="question_2" class="required" value="Probably" onchange="getVals(this, 'question_2');">
	                                                    <label class="radio" for="probably"></label>
	                                                    <label for="probably" class="wrapper">cukup</label>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="radio" id="sure" name="question_2" class="required" value="Sure" onchange="getVals(this, 'question_2');">
	                                                    <label class="radio" for="sure"></label>
	                                                    <label for="sure" class="wrapper">Kurang</label>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="radio" id="5" name="question_2" class="required" value="5" onchange="getVals(this, 'question_2');">
	                                                    <label class="radio" for="5"></label>
	                                                    <label for="5" class="wrapper">Sangat Kurang</label>
	                                                </div>
	                                            </li>
	                                        </ul>
	                                    </div>

	                                    <div class="col-6">
	                                    	<ul>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="radio" id="no" name="question_2" class="required" value="No" onchange="getVals(this, 'question_2');">
	                                                    <label class="radio" for="no"></label>
	                                                    <label for="no" class="wrapper">Sangat Penting</label>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="radio" id="maybe" name="question_2" class="required" value="Maybe" onchange="getVals(this, 'question_2');">
	                                                    <label class="radio" for="maybe"></label>
	                                                    <label for="maybe" class="wrapper">Penting</label>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="radio" id="probably" name="question_2" class="required" value="Probably" onchange="getVals(this, 'question_2');">
	                                                    <label class="radio" for="probably"></label>
	                                                    <label for="probably" class="wrapper">Cukup</label>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="radio" id="sure" name="question_2" class="required" value="Sure" onchange="getVals(this, 'question_2');">
	                                                    <label class="radio" for="sure"></label>
	                                                    <label for="sure" class="wrapper">Kurang Penting</label>
	                                                </div>
	                                            </li>
	                                            <li>
	                                                <div class="checkbox_radio_container">
	                                                    <input type="radio" id="5" name="question_2" class="required" value="5" onchange="getVals(this, 'question_2');">
	                                                    <label class="radio" for="5"></label>
	                                                    <label for="5" class="wrapper">Tidak Penting</label>
	                                                </div>
	                                            </li>
	                                        </ul>
	                                    </div>

	                                </div>
	                                    </div>
	                                    
	                                </div>
	                                <!-- /step 2-->

	                              
	                                <div class="submit step">
	                                    <h3 class="main_question">Isi Kritik dan Saran : </h3>
	                                    <div class="form-group">
	                                        <label for="additional_message_label">Saran dan Kritik</label>
	                                        <textarea name="additional_message" id="additional_message_label" class="form-control" style="height:200px;" onkeyup="getVals(this, 'additional_message');"></textarea>
	                                    </div>
	                                </div>
	                                <!-- /step 5-->

	                            </div>
	                            <!-- /middle-wizard -->

	                            <div id="bottom-wizard">
	                                <button type="button" name="backward" class="backward">Sebelumnya</button>
	                                <button type="button" name="forward" class="forward">Selanjutnya</button>
	                                <button type="submit" name="process" class="submit">Submit</button>
	                            </div>
	                            <!-- /bottom-wizard -->

	                        </form>
	                    </div>
	                    <!-- /Wizard container -->
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