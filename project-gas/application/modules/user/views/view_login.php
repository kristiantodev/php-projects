<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/star-admin2-pro/template/demo/vertical-default-light/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2022 22:37:02 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?php echo base_url();?>assets/images/logo/logo.svg" alt="logo">
              </div>
              <h4>Gas Order System</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form class="pt-3" action="<?php echo base_url();?>login/auth" method="POST">
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" id="exampleInputUsername" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                <label for="loginAs">Login As</label>
                    <select name="level" class="form-control form-control-lg" id="loginAs" style="color:black">
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                </div>
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN">
                </div>
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="<?php echo base_url();?>register" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo base_url();?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url();?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url();?>assets/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url();?>assets/js/template.js"></script>
  <script src="<?php echo base_url();?>assets/js/settings.js"></script>
  <script src="<?php echo base_url();?>assets/js/todolist.js"></script>
  <!-- endinject -->
</body>


</html>