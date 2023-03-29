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
<div class="wrapper row2 bgded" style="background-image:url('<?php echo $arrConfig['url_site'] . '/images/home/News.jpg' ?>');">
  <div id="pageintro"> 
    <!-- ################################################################################################ -->
    <div class="title">
      <h2>Notícias</h2>
    </div>
    <div id="breadcrumb" class="clear">
      <ul>
  
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
      <figure class="latest noticia overlay">
        <header class="heading">Notícias</header>
        <ul class="nospace clear">
          <?php
          
          $numRegistosPorPagina=2;
          $paginaAtual = isset($_GET['p']) ? $_GET['p']:1;
          
          $sql = "SELECT * FROM noticias WHERE ativo = '1'";
          $res = my_query($sql);
          $totalRegistos = count($res);

          $inicioFiltroPorPagina = ($paginaAtual - 1)*$numRegistosPorPagina;

          $sql = "SELECT * FROM noticias WHERE ativo = '1' LIMIT $inicioFiltroPorPagina, $numRegistosPorPagina";
          $res = my_query($sql);

          foreach ($res as $value) {
            $titulo = $value['titulo'];
            $resumo = $value['resumo'];
            $texto = $value['texto'];
            ?>
            <li class="one_quarter"><a href="<?php echo $arrConfig['url_site'].'/NoticiaPage.php?id='.$value['id'] ?>"><img src="<?php echo $arrConfig['url_site'].'/'.$value['imgurl'] ?>" alt=""></a><?php echo $titulo; ?></li>
            <?php
          }

          ?>
        </ul>
      </figure>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <nav class="pagination">
      <?php
      $numTotalDePaginas = ceil($totalRegistos / $numRegistosPorPagina);
      echo '<ul>';
      for ($i=1; $i <= $numTotalDePaginas; $i++) { 
        echo '<li><a href="?p='.$i.'">'.$i.'</a></li>';
      }
      echo '</ul>';
      ?>
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