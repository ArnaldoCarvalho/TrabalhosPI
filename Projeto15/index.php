<?php
include './includes/config.inc.php';
@session_start();

if(!isset($_SESSION['Username'])){
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
<title>Fertile</title>
<meta charset="utf-8">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0 fixed">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
      <?php
      include('./includes/menu.inc.php');
      menu();
    ?>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0 bgded" style="background-image:url('images/demo/backgrounds/1.png')">
  <div class="shout"> 
    <!-- ################################################################################################ -->
    <div class="shout-content clear">
      <p class="fl_left">Aenean semper elementum tellus ut placerat leo quisque vehicula</p>
      <p class="fl_right"><a class="btn" href="#">Lorem Ipsum Dolor</a></p>
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
    <div class="group center">
      <h2 class="font_xxl btmspace-80">Mauris Nulla Ornare Pulvinar</h2>
      <div class="one_third first">
        <div class="boxedicon"><a class="circle" href="#"><i class="fa fa-area-chart fa-2x"></i></a></div>
        <h2 class="nospace push15">Lorem Ipsum Dolor</h2>
        <p>Aenean semper elementum tellus, ut placerat leo. Quisque vehicula, urna sit amet pulvinar dapibus dui leo.</p>
      </div>
      <div class="one_third">
        <div class="boxedicon"><a class="circle" href="#"><i class="fa fa-gift fa-2x"></i></a></div>
        <h2 class="nospace push15">Lorem Ipsum Dolor</h2>
        <p>Aenean semper elementum tellus, ut placerat leo. Quisque vehicula, urna sit amet pulvinar dapibus dui leo.</p>
      </div>
      <div class="one_third">
        <div class="boxedicon"><a class="circle" href="#"><i class="fa fa-history fa-2x"></i></a></div>
        <h2 class="nospace push15">Lorem Ipsum Dolor</h2>
        <p>Aenean semper elementum tellus, ut placerat leo. Quisque vehicula, urna sit amet pulvinar dapibus dui leo.</p>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / container body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper">
  <figure class="latest overlay"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li><a href="#"><img src="images/demo/latest/1.png" alt=""></a></li>
      <li><a href="#"><img src="images/demo/latest/2.png" alt=""></a></li>
      <li><a href="#"><img src="images/demo/latest/1.png" alt=""></a></li>
      <li><a href="#"><img src="images/demo/latest/2.png" alt=""></a></li>
      <li><a href="#"><img src="images/demo/latest/1.png" alt=""></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </figure>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="container clear"> 
    <!-- container body -->
    <!-- ################################################################################################ -->
    <div class="group">
      <h2 class="font_xxl center btmspace-80">Mauris Nulla Ornare Pulvinar</h2>
      <div class="one_half first">
        <article class="testimonial clear">
          <div class="one_third first"><img class="borderedbox inspace-5 circle" src="images/demo/testimonial/1.png" alt=""></div>
          <div class="two_third">
            <h3 class="nospace"><a href="#">Jane Doe</a></h3>
            <em>Job Title Here</em>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris.</p>
            <p class="nospace"><span class="fa fa-phone"></span> 1001000 1101001</p>
          </div>
        </article>
      </div>
      <div class="one_half">
        <article class="testimonial clear">
          <div class="one_third first"><img class="borderedbox inspace-5 circle" src="images/demo/testimonial/1.png" alt=""></div>
          <div class="two_third">
            <h3 class="nospace"><a href="#">John Doe</a></h3>
            <em>Job Title Here</em>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis, urna vel fringilla sagittis, nunc dolor pellentesque mauris.</p>
            <p class="nospace"><span class="fa fa-phone"></span> 1001000 1101001</p>
          </div>
        </article>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / container body -->
    <div class="clear"></div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <figure class="clients"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li><a href="#"><img src="images/demo/logos/1.png" alt=""></a></li>
      <li><a href="#"><img src="images/demo/logos/2.png" alt=""></a></li>
      <li><a href="#"><img src="images/demo/logos/1.png" alt=""></a></li>
      <li><a href="#"><img src="images/demo/logos/2.png" alt=""></a></li>
      <li><a href="#"><img src="images/demo/logos/1.png" alt=""></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </figure>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <footer id="footer" class="clear"> 
    <!-- ################################################################################################ -->
    <div class="shout"> 
      <!-- ################################################################################################ -->
      <div class="shout-content clear">
        <p class="fl_left">Aenean semper elementum tellus ut placerat leo quisque vehicula</p>
        <p class="fl_right"><a class="btn" href="#">Lorem Ipsum Dolor</a></p>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <div class="group">
      <div class="one_quarter first">
        <h6 class="title">Lorem ipsum dolor</h6>
        <address class="btmspace-15">
        Company Name<br>
        Street Name &amp; Number<br>
        Town<br>
        Postcode/Zip
        </address>
        <ul class="nospace">
          <li class="btmspace-10"><span class="fa fa-phone"></span> +00 (123) 456 7890</li>
          <li><span class="fa fa-envelope-o"></span> info@domain.com</li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">Quick Links</h6>
        <ul class="nospace linklist">
          <li><a href="#">Home Page</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">From The Blog</h6>
        <article>
          <h2 class="nospace"><a href="#">Lorem ipsum dolor</a></h2>
          <time class="smallfont" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed.</p>
        </article>
      </div>
      <div class="one_quarter">
        <h6 class="title">Keep In Touch</h6>
        <form class="btmspace-30" method="post" action="#">
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" value="" placeholder="Email">
            <button type="submit" value="submit">Submit</button>
          </fieldset>
        </form>
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a class="faicon-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a class="faicon-tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>
        </ul>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
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
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
</body>
</html>