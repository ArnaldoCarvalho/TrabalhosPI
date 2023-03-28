<?php
include './includes/config.inc.php';
@session_start();

if(!isset($_SESSION['username'])){
  $_SESSION['username'] = ' ';
  $_SESSION['SessionType'] = 'default';
}
?>
<!DOCTYPE html>
<!--
Template Name: Fertile
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Fertile | Pages | Full Width</title>
<meta charset="utf-8">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0 fixed">
  <header id="header" class="clear"> 
    <?php
      include($arrConfig['dir_site'].'/includes/menu.inc.php');
      menu();
     ?>  
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded" style="background-image:url('<?php echo $arrConfig['url_site'] . '/images/home/contactos.jpg' ?>');">
  <div id="pageintro"> 
    <!-- ################################################################################################ -->
    <div class="title">
      <h2>Contactos</h2>
    </div>
    <div id="breadcrumb" class="clear">
      
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
  <h1> AirTenis Contactos</h1>
  <img class="imgr borderedbox inspace-5" src="<?php echo $arrConfig['url_site'] . '/images/home/contactos.png' ?>" alt="">
  <h1> Dono do Site: </h1>
  <p> Arnaldo Cunha de Carvalho </p>
  <h1> Email: </h1>
  <p> arcuca0@gmail.com </p>
  <h1> Telemóvel: </h1>
  <p> +351 967673021 </p>
  <h1> Morada: </h1>
  <p> Rua Fernão de Magalhães
      Nº79
  </p>
 </main>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <?php
  include($arrConfig['dir_site'].'/includes/footer.inc.php')
  ?>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row6">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
</body>
</html>