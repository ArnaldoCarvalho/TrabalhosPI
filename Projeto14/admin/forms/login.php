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
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="post" type="" action="<?php echo $arrConfig['url_admin'].'/forms/TrataLogin.php' ?>">
              <?php
                  if(isset($_GET['Log'])){
                  if ($_GET['Log'] == 1) {
                    echo ('<label for=""> Logout Concluido </label>');
                  }
                  }
                ?> 
              <div class="form-group">                  
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" value=""
                    placeholder="Username" Required>
                </div>
                
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputPassword1" name="pass" value=""
                    placeholder="Password" Required>
                </div>
                <?php
                  if(isset($_GET['Erro'])){
                  if ($_GET['Erro'] == 1) {
                    echo ('<label for=""> O email ou password incorreta </label>');
                  }
                  }
                ?>
                <input class="mt-3 btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" value="Sign In">

                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="mdi mdi-facebook mr-2"></i>Connect using facebook </button>
                </div>
                <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="<?php echo($arrConfig['url_admin'].'/forms/register.php');?>"
                    class="text-primary">Create</a>
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