<?php
include('../../includes/config.inc.php');
@session_start();

/*
$xmlString = file_get_contents($arrConfig['url_admin'].'/administradores/administradores.xml');

//pr($xml);
$xml = new SimpleXMLElement($xmlString);
//$xml   = simplexml_load_string($buffer);
//$array = XML2Array($xml);
//$array = array($xml->getName() => $array);

$array = json_decode(json_encode((array) $xml), true);
$array = array($xml->getName() => $array);
pr($array);
*/


$strChave = '';
$arrCamposChave = array();

foreach($arrDados['campos'] as $key => $value) {
    $flagChaveCampo = 0;
    if(isset($value['chave'])) {
        if($value['chave'] == 1) {
            $flagChaveCampo = 1;
        }
    }
    if($flagChaveCampo) {
        $arrCamposChave[] = $key;
        $strChave .= $key.'=';
        $strChave .= "##VALOR$key##&";
    }
}

$strChave = substr($strChave,0,strlen($strChave)-1);
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
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href=<?php echo $arrConfig['url_admin'] . "/assets/css/style.css" ?>>
  <!-- End layout styles -->
  <link rel="shortcut icon" href=<?php echo $arrConfig['url_admin'] . "/assets/images/favicon.png" ?> />
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
          <h3 class="page-title"> Basic Tables </h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Tables</a></li>
              <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
            </ol>
          </nav>
        </div>
        <div class="row">

          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="listagem">
                  <table class="table">
                  <h1>Listagem "<?php echo $arrDados['legenda_modulo']; ?>"</h1>

                  <div>
                      <a href=<?php echo $arrConfig['url_admin'].'/'.$arrDados['tabela']."?m=insert" ?>>Inserir novo registo</a>
                  </div>
                    <tr>
                      <?php
                      foreach ($arrDados['campos'] as $value) {
                        $flagMostraCampo = 1;
                        if (isset($value['listagem'])) {
                          if ($value['listagem'] == 0) {
                            $flagMostraCampo = 0;
                          }
                        }
                        if ($flagMostraCampo) {
                          echo '<th>' . $value['legenda'] . '</th>';
                        }
                      }
                      ?>
                      <th>Editar</th>
                      <th>Eliminar</th>
                    </tr>

                    <?php
                    $sql = "SELECT * FROM $arrDados[tabela]";
                    $res = my_query($sql);
                    foreach ($res as $k => $v) {
                      //$flagUser = false;
                      $strChaveAux = $strChave;
                      foreach ($arrCamposChave as $chave) {
                        $strChaveAux = str_replace('##VALOR' . $chave . '##', $v[$chave], $strChaveAux);
                      }
                      $linkEditar =  $arrConfig['url_admin'].'/'.$arrDados['modulo'].'?m=edit&id=' . $v['id'].'&' . $strChaveAux;
                      $linkEliminar = $arrConfig['url_admin'].'/'.$arrDados['modulo'].'?m=delete&id=' . $v['id'] .'&' . $strChaveAux;
                      if($arrDados['modulo']=='administradores'){
                        if($v['id'] == $_SESSION['uid']) {
                          //$flagUser = true;
                          $linkEliminar = '#';
                          }
                      }
                   

                    ?>
                      <tr>
                        <?php
                        foreach ($arrDados['campos'] as $key2 => $value2) {
                          $flagMostraCampo = 1;
                          if (isset($value2['listagem'])) {
                            if ($value2['listagem'] == 0) {
                              $flagMostraCampo = 0;
                            }
                          }

                          if ($flagMostraCampo) {
                            if (strlen($v[$key2]) > $arrDados['campos'][$key2]['maxlength'] && isset($arrDados['campos'][$key2]['maxlength'])) $v[$key2] = substr($v[$key2], 0, $arrDados['campos'][$key2]['maxlength']) . '...';
                            echo '<td>' . $v[$key2] . '</td>';
                          }
                        }
                        ?>
                        <td><a href="<?php echo $linkEditar; ?>">X</a></td>
                        <td><a href="<?php echo $linkEliminar; ?>">X</a></td>
                      </tr>
                    <?php
                    }
                    ?>

                  </table>
                </div>
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
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src=<?php echo $arrConfig['url_admin'] . "/assets/js/off-canvas.js" ?>></script>
  <script src=<?php echo $arrConfig['url_admin'] . "/assets/js/hoverable-collapse.js" ?>></script>
  <script src=<?php echo $arrConfig['url_admin'] . "/assets/js/misc.js" ?>></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- End custom js for this page -->
</body>

</html>