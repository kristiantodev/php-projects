<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To Questionnaire | Padi Kapas</title>
    <!-- Favicon-->
    <link rel="icon" href="<?=base_url('assets')?>/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?=base_url('assets')?>/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=base_url('assets')?>/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?=base_url('assets')?>/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?=base_url('assets')?>/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">CSI<b>PRODUK</b></a>
            <small>Padi Kapas Indramayu</small>
        </div>
        <div class="card">
            <div class="body">
                <form method="POST" action="" id="sign_in">
                    <div class="msg">Sign in to start your session</div>
                    <?php if ($this->session->flashdata('pesan')): ?>
                            <b>
                               <div class='alert alert-dismissible col-9'>
                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               <font color="red">
                        <?php echo $this->session->flashdata('pesan'); ?></font></div>
                        </b>
                            <?php endif; ?>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">

                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="submit">SIGN IN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?=base_url('assets')?>/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url('assets')?>/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url('assets')?>/plugins/node-waves/waves.js"></script>
    <script src="<?=base_url('assets')?>/plugins/bootstrap-notify/bootstrap-notify.js"></script>
    <!-- Validation Plugin Js -->
    <script src="<?=base_url('assets')?>/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?=base_url('assets')?>/js/admin.js"></script>
    <script src="<?=base_url('assets')?>/js/pages/examples/sign-in.js"></script>
    <script src="<?=base_url('assets')?>/js/pages/ui/notifications.js"></script>
</body>

</html>
