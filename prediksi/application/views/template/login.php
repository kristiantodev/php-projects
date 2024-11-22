<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Aplikasi Prediksi Kelulusan Universitas CIC</title>

    <!-- Favicons -->
    <link href="<?= base_url('assets/')?>image/cic40.png" rel="icon">

    <!-- Bootstrap Css -->
    <link href="<?= base_url('assets/')?>css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url('assets/')?>css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= base_url('assets/')?>css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h3 class="text-white ">Form Login</h3>
                                <p class="text-white-50 mb-0">
                                    Aplikasi Prediksi Kelulusan <br>
                                    Universitas Catur Insan Cendekia
                                </p>
                                <a href="#" class="logo logo-admin mt-4">
                                    <img src="<?= base_url('assets/')?>image1/ucic40.png" alt="" height="30">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="p-2">
                        <?php echo $this->session->flashdata('message'); ?>
                                <form class="form-horizontal" action="<?= base_url('login')?>" method="post">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username">
                                        <?= form_error('username','<small class="text-danger pl-3">','</small>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Masukan Password">
                                        <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">LOG IN</button>
                                    </div>

                                    
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="<?= base_url('assets/')?>libs/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/')?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/')?>libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= base_url('assets/')?>libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url('assets/')?>libs/node-waves/waves.min.js"></script>

    <script src="<?= base_url('assets/')?>js/app.js"></script>

</body>

</html>