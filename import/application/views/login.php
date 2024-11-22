<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Goa Sunyaragi Cirebon</title>
<link rel="shortcut icon" href="<?php echo base_url();?>assets/cirebon.png">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-gray-900 mb-4">Login<br>Sistem Kepuasan Pengunjung<br>Gua Sunyaragi Cirebon</h1>
                                        <img src="<?php echo base_url();?>assets/cirebon.png" alt="" height="135"><br><br>
                                    </div>
                                    
                        <?php if ($this->session->flashdata('pesan')): ?>
                            <b>
                               <div class='alert bg-danger alert-dismissible col-12'>
                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               <font color="white">
                        <?php echo $this->session->flashdata('pesan'); ?>
</font>
                    </div>
                        </b>
                            <?php endif; ?>  

                                    <form action="<?php base_url('login') ?>" method="post" enctype="multipart/form-data" class="user">
                                        <div class="form-group">
                                            <input  class="form-control form-control-user" required 
                                        type="text" name="username" placeholder="Username" <?php echo form_error('username') ? 'is-invalid':'' ?>>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-user" required
                                                type="password" name="password" placeholder="Password" <?php echo form_error('password') ? 'is-invalid':'' ?>>
                                        </div>

                                        <div class="form-group">
                                     
                                        <select class="form-control" name='level' required style="width: 100%;" >
                                         <option selected="selected">--Pilih Level User--</option>
                                         <option value="Administrator">Administrator</option>
                                         <option value="Direktur">Direktur</option>
                                         </select>
                                         </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block"><b><i class="fas fa-sign-in-alt "></i>&nbsp; MASUK</b></button>
                                       
                                    </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>