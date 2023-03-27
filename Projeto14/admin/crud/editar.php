<?php
include('../includes/config.inc.php');
@session_start();

$strChave = '';
$arrCamposChave = array();

foreach ($arrDados['campos'] as $key => $value) {
  $flagChaveCampo = 0;
  if (isset($value['chave'])) {
    if ($value['chave'] == 1) {
      $flagChaveCampo = 1;
    }
  }
  if ($flagChaveCampo) {
    $arrCamposChave[] = $key;
    $strChave .= $key . '=';
    $strChave .= "'$_GET[$key]' AND ";
  }
}

$strChave = substr($strChave, 0, strlen($strChave) - 5);


$sql = "SELECT * FROM $arrDados[tabela] WHERE $strChave";
$res = my_query($sql);
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
                <h1>Inserir "<?php echo $arrDados['legenda_modulo']; ?>"</h1>
                <div>&nbsp;</div>

                <table>
                  <form method="post" action="?m=trataedit">

                    <?php

                    ?>


                    <?php
                    foreach ($arrDados['campos'] as $key => $value) {
                      $flagMostraCampo = 1;
                      if (isset($value['editar'])) {
                        if ($value['editar'] == 0) {
                          $flagMostraCampo = 0;
                        }
                      }
                      if ($flagMostraCampo) {
                        mostraCampo($key, $value, $res[0][$key]);
                      } elseif (in_array($key, $arrCamposChave)) {
                        echo '<input type="hidden" name="' . $key . '" value="' . $_GET[$key] . '">';
                      }
                    }
                    ?>
                    <tr>
                      <td></td>
                      <td><input type="submit" name="submit" value="OK" /></td>
                    </tr>

                  </form>
                </table>
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample">
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleSelectGender">Gender</label>
                    <select class="form-control" id="exampleSelectGender">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCity1">City</label>
                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Textarea</label>
                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
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
function mostraCampo($nomeCampo, $arrCampo, $valor)
{

  switch ($arrCampo['tipo']) {
    case 'password':
      echo '<tr><div class="form-group">
                    <td>' . $arrCampo['legenda'] . '</td>
                    <td>' . '<input type="' . $arrCampo['tipo'] . '" name="' . $nomeCampo . '" /></td>
                </div></tr>';
      break;

    case 'textbox':
    case 'date':
    case 'time':
    case 'color':
      echo '<tr>
                    <td>' . $arrCampo['legenda'] . '</td>
                    <td>' . '<input class="form-control" id="exampleInputName1" type="' . $arrCampo['tipo'] . '" name="' . $nomeCampo . '" value="' . $valor . '" /></td>
                </tr>';
      break;


    case 'checkbox':
      $checked = $valor ? 'checked' : '';
      echo '<tr>
                    <td>' . $arrCampo['legenda'] . '</td>
                    <td>' . '<input ' . $checked . ' type="checkbox" name="' . $nomeCampo . '" value="1"></td>
                </tr>';
      break;

    case 'select':
    case 'selectList':
    case 'radio':
    case 'file':
    case 'textarea':
      echo '<tr>
                <td>' . $arrCampo['legenda'] . '</td>
                <td>' . '<textarea name="' . $nomeCampo . '">' . $valor . '</textarea></td>
                </tr>';
      break;
  }
}
?>