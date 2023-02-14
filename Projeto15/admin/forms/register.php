<?php
include('../../includes/config.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include($arrConfig['dir_admin'].'/includes/head.inc.php');?>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="<?php echo($arrConfig['url_admin'].'/assets/images/logo-dark.svg');?>">
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form class="pt-3" method="post" type="" action="<?php echo($arrConfig['url_admin'].'/forms/TrataRegi.php');?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Nome" name="nome">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Username" name="username">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="pass">
                  </div>
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div>
                  </div>
                  <input class=" mt-3 btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="SIGN UP">
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="<?php echo($arrConfig['url_admin'].'/forms/login.php');?>" class="text-primary">Login</a>
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
    <script src="<?php echo($arrConfig['url_admin'].'/assets/vendors/js/vendor.bundle.base.js'); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo($arrConfig['url_admin'].'/assets/js/off-canvas.js');?>"></script>
    <script src="<?php echo($arrConfig['url_admin'].'/assets/js/hoverable-collapse.js');?>"></script>
    <script src="<?php echo($arrConfig['url_admin'].'/assets/js/misc.js');?>"></script>
    <!-- endinject -->
  </body>
</html>