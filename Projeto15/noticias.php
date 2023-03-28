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
<title>Fertile | Pages | Gallery</title>
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
<div class="wrapper row2 bgded" style="background-image:url('images/demo/backgrounds/2.png');">
  <div id="pageintro"> 
    <!-- ################################################################################################ -->
    <div class="title">
      <h2>Gallery</h2>
    </div>
    <div id="breadcrumb" class="clear">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Lorem</a></li>
        <li><a href="#">Ipsum</a></li>
        <li><a href="#">Dolor</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- container body -->
    <!-- ################################################################################################ -->
    <div id="gallery">
      <figure class="overlay">
        <header class="heading">Gallery Title Goes Here</header>
        <ul class="nospace clear">
          <li class="one_quarter first"><a href="#"><img src="images/demo/gallery/1.png" alt=""></a></li>
          <li class="one_quarter"><a href="#"><img src="images/demo/gallery/1.png" alt=""></a></li>
          <li class="one_quarter"><a href="#"><img src="images/demo/gallery/1.png" alt=""></a></li>
          <li class="one_quarter"><a href="#"><img src="images/demo/gallery/1.png" alt=""></a></li>
          <li class="one_quarter first"><a href="#"><img src="images/demo/gallery/1.png" alt=""></a></li>
          <li class="one_quarter"><a href="#"><img src="images/demo/gallery/1.png" alt=""></a></li>
          <li class="one_quarter"><a href="#"><img src="images/demo/gallery/1.png" alt=""></a></li>
          <li class="one_quarter"><a href="#"><img src="images/demo/gallery/1.png" alt=""></a></li>
          <li class="one_quarter first"><a href="#"><img src="images/demo/gallery/1.png" alt=""></a></li>
          <li class="one_quarter"><a href="#"><img src="images/demo/gallery/1.png" alt=""></a></li>
          <li class="one_quarter"><a href="#"><img src="images/demo/gallery/1.png" alt=""></a></li>
          <li class="one_quarter"><a href="#"><img src="images/demo/gallery/1.png" alt=""></a></li>
        </ul>
        <figcaption>Gallery Description Goes Here</figcaption>
      </figure>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <nav class="pagination">
      <ul>
        <li><a href="#">&laquo; Previous</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><strong>&hellip;</strong></li>
        <li><a href="#">6</a></li>
        <li class="current"><strong>7</strong></li>
        <li><a href="#">8</a></li>
        <li><a href="#">9</a></li>
        <li><strong>&hellip;</strong></li>
        <li><a href="#">14</a></li>
        <li><a href="#">15</a></li>
        <li><a href="#">Next &raquo;</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
    <!-- / container body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <figure class="clients"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li><a href="#"><img src="../images/demo/logos/1.png" alt=""></a></li>
      <li><a href="#"><img src="../images/demo/logos/2.png" alt=""></a></li>
      <li><a href="#"><img src="../images/demo/logos/1.png" alt=""></a></li>
      <li><a href="#"><img src="../images/demo/logos/2.png" alt=""></a></li>
      <li><a href="#"><img src="../images/demo/logos/1.png" alt=""></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </figure>
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