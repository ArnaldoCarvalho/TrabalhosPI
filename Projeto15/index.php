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
<title>AirTenis</title>
<meta charset="utf-8">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<div class="wrapper row0 fixed">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
      <?php
      include($arrConfig['dir_site'].'/includes/menu.inc.php');
      menu();
      ?>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row0 bgded" style="background-image:url('<?php echo $arrConfig['url_site'].'/images/home/Home.png' ?>')">
    <img src="" alt="">
    <div class="shout"> 
    <!-- ################################################################################################ -->
    <div class="shout-content clear">
      <p class="fl_left">Seja Bem vindo Ao AirTenis faça login para ter uma melhor experiência</p>
      <p class="fl_right"><a class="btn" href="<?php echo $arrConfig['url_site'].'/forms/login.php'?>">Login</a></p>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- container body -->
    <!-- ################################################################################################ -->
    <div class="group center">
      <h2 class="font_xxl btmspace-80">O que vai encontrar neste site</h2>
      
      <div class="one_third first">
        <div class="boxedicon"><a class="circle" href="<?php echo $arrConfig['url_site'].'/about.php?n=1'?>"><i class="fa fa-area-chart fa-2x"></i></a></div>
        <h2 class="nospace push15">What is Tenis</h2>
        <p>Nesta página vai ficar a saber o que é o ténis e como surgio.</p>
      </div>
      <div class="one_third">
        <div class="boxedicon"><a class="circle" href="<?php echo $arrConfig['url_site'].'/about.php?n=2'?>"><i class="fa fa-gift fa-2x"></i></a></div>
        <h2 class="nospace push15">About Us</h2>
        <p>Nesta página ficará a saber quem somos e o nosso objetivo</p>
      </div>
      <div class="one_third">
        <div class="boxedicon"><a class="circle" href="<?php echo $arrConfig['url_site'].'/noticias.php'?>"><i class="fa fa-history fa-2x"></i></a></div>
        <h2 class="nospace push15">Tenis News</h2>
        <p>Aqui poderá encontrar notícias acerca do ténis</p>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / container body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<div class="wrapper">
  <figure class="latest overlay"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <?php
      NewsHome();
      ?>
    </ul>
    <!-- ################################################################################################ -->
  </figure>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="container clear"> 
    <!-- container body -->
    <!-- ################################################################################################ -->
    <div class="group">
      <h2 class="font_xxl center btmspace-80">Administradores -> Havendo problemas contactar</h2>
      <?php
      Admin();
      ?>
    </div>
    <!-- ################################################################################################ -->
    <!-- / container body -->
    <div class="clear"></div>
  </section>
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
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a> 
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
</body>
</html>