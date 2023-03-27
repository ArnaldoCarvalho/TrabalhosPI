<?php
include('../includes/config.inc.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Connect Plus</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href=<?php echo $arrConfig['url_admin'] . "/assets/vendors/mdi/css/materialdesignicons.min.css" ?>>
  <link rel="stylesheet" href=<?php echo $arrConfig['url_admin'] . "/assets/vendors/flag-icon-css/css/flag-icon.min.css" ?>>
  <link rel="stylesheet" href=<?php echo $arrConfig['url_admin'] . "/assets/vendors/css/vendor.bundle.base.css" ?>>
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href=<?php echo $arrConfig['url_admin'] . "/assets/vendors/select2/select2.min.css" ?>>
  <link rel="stylesheet" href=<?php echo $arrConfig['url_admin'] . "/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css" ?>>
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href=<?php echo $arrConfig['url_admin'] . "/assets/css/style.css" ?>>
  <!-- End layout styles -->
  <link rel="shortcut icon" href=<?php echo $arrConfig['url_admin'] . "/assets/images/favicon.png" ?>>
</head>

<body>
  <?php

  if (isset($_SESSION['user'])) {
    if (isset($_SESSION['auth']))
      if ($_SESSION['auth'] == 1) {
      } else {
        header('Location:' . $arrConfig['url_admin'] . '/forms/login.php');
      }
  } else {
    header('Location:' . $arrConfig['url_admin'] . '/forms/login.php');
  }

  ?>
  <div class="container-scroller">
    <?php
    include($arrConfig['dir_admin'] . '/includes/menu.inc.php')
    ?>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title"> Form elements </h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Forms</a></li>
              <li class="breadcrumb-item active" aria-current="page">Form elements</li>
            </ol>
          </nav>
        </div>
        <div class="row">



          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h1 class="card-title">Editar "<?php echo $arrDados['legenda_modulo']; ?>"</h1>
                <div>&nbsp;</div>

                <h1>Inserir "<?php echo $arrDados['legenda_modulo']; ?>"</h1>
                <div>&nbsp;</div>

                <table>
                  <form method="post" action=<?php echo $arrConfig['url_admin']."/".$arrDados['modulo']."/?m=tratainsert"?>>

                    <?php
                    foreach ($arrDados['campos'] as $key => $value) {
                      $flagMostraCampo = 1;
                      if (isset($value['inserir'])) {
                        if ($value['inserir'] == 0) {
                          $flagMostraCampo = 0;
                        }
                      }
                      if ($flagMostraCampo) {
                        mostraCampo($key, $value);
                      }
                    }
                    ?>
                    <tr>
                      <td></td>
                      <td><input type="submit" name="submit" value="OK" /></td>
                    </tr>

                  </form>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:../../partials/_footer.html -->
      <footer class="footer">
        <div class="footer-inner-wraper">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
          </div>
        </div>
      </footer>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src=<?php echo $arrConfig['url_admin'] . "/assets/vendors/js/vendor.bundle.base.js" ?>></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src=<?php echo $arrConfig['url_admin'] . "/assets/vendors/select2/select2.min.js" ?>></script>
  <script src=<?php echo $arrConfig['url_admin'] . "/assets/vendors/typeahead.js/typeahead.bundle.min.js" ?>></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=<?php echo $arrConfig['url_admin'] . "/assets/js/off-canvas.js" ?>></script>
  <script src=<?php echo $arrConfig['url_admin'] . "/assets/js/hoverable-collapse.js" ?>></script>
  <script src=<?php echo $arrConfig['url_admin'] . "/assets/js/misc.js" ?>></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src=<?php echo $arrConfig['url_admin'] . "/assets/js/file-upload.js" ?>></script>
  <script src=<?php echo $arrConfig['url_admin'] . "/assets/js/typeahead.js" ?>></script>
  <script src=<?php echo $arrConfig['url_admin'] . "/assets/js/select2.js" ?>></script>
  <!-- End custom js for this page -->
</body>

</html>

<?php
function mostraCampo($nomeCampo, $arrCampo)
{

  switch ($arrCampo['tipo']) {
    case 'password':
      echo ' <div class="form-group">
                <label for="exampleInputName1">' . $arrCampo['legenda'] . '</label>
                <input type="' . $arrCampo['tipo'] . '" class="form-control" id="exampleInputName1" name="' . $nomeCampo . '">
             </div>';
    break;
    case 'textbox':
      echo ' <div class="form-group">
                <label for="exampleInputName1">' . $arrCampo['legenda'] . '</label>
                <input type="' . $arrCampo['tipo'] . '" class="form-control" id="exampleInputName1" name="' . $nomeCampo . '">
             </div>';
    break;
    case 'date':
    break;
    case 'time':
    break;
    case 'color':
    break;
    case 'email':
      echo ' <div class="form-group">
                <label for="exampleInputName1">' . $arrCampo['legenda'] . '</label>
                <input type="' . $arrCampo['tipo'] . '" class="form-control" id="exampleInputName1" name="' . $nomeCampo . '">
             </div>';
    break;
    case 'checkbox':
      $checked = 'checked';
      echo ' <div class="form-group">
              <label for="exampleInputName1">' . $arrCampo['legenda'] . '</label>
              <input ' . $checked . ' type="checkbox" class="form-control" id="exampleInputName1" value="1" name="' . $nomeCampo . '">
            </div>';
    break;
    case 'select':
      break;
    case 'selectList':
      break;
    case 'radio':
     break;
    case 'file':
      break;
    case 'textarea':
      echo ' <div class="form-group">
                <label for="exampleInputName1">' . $arrCampo['legenda'] . '</label>
                <textarea class="form-control" id="exampleInputName1" name="' . $nomeCampo . '"></textarea>
             </div>';
      break;
    default;
    break;
  }
}
?>
?>