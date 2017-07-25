<?php require_once 'ti.php' ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8" />

    <?php startblock('title') ?>
    <?php endblock() ?>

    <meta name="description" content="Instruktionsfilmer för dig som vill lära dig grunderna i Django för att kunna bygga dynamiska webbplatser">

    <link rel="icon" type="image/png" href="favicon.png" />

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/css.css" />
    <link rel="stylesheet" href="css/coda-slider.css" />

    <link href="css/video-js.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-v1.8.3.js"></script>
    <script src="js/jquery.easing.js"></script>

    <?php startblock('scriptHead') ?>
      <script src="js/video.min.js"></script>
      <script>
      jQuery(document).ready(function($) {
          var myPlayer = _V_("example_video_1"); 

          $('.timestamp a').click(function(event) {
              var $bgobj = $(this);
              event.preventDefault();

            myPlayer.currentTime($bgobj.data('time'));

            myPlayer.play();
            
              $('body,html').animate({
                scrollTop: 0
              }, 800);
          });
      });
      _V_.options.flash.swf = "video-js.swf";
      </script>
  <?php endblock() ?>

  <?php startblock('cssHead') ?>
  <?php endblock() ?>
</head>
    
<body>
  <div class="fixedBGTop"></div>
  <div class="fixedBG"></div>
  <div class="sun"></div>


    <section class="main">
      

        <?php startblock('movie') ?>
        <?php endblock() ?>


        <div class="sidebar">
            <p><a href="/"><span>1.</span> INTRO</a></p>
            <p><a href="2-installationer"><span>2.</span> INSTALLATIONER</a></p>
            <p> <a href="3-skapa-projekt"><span>3.</span> SKAPA PROJEKT</a></p>
            <p><a href="4-mtv"><span>4.</span> MTV</a></p>
            <p><a href="5-svara-pa-request"><span>5.</span> SVARA PÅ REQUEST</a></p>
            <p> <a href="6-admin"><span>6.</span> ADMIN</a></p>
            <p><a href="7-models"><span>7.</span> MODELS</a></p>
            <p><a href="8-visa-inlagg"><span>8.</span> VISA INLÄGG</a></p>
            <p> <a href="9-frammande-nyckel"><span>9.</span> FRÄMMANDE NYCKEL</a></p>
            <p> <a href="10-kommentarer"><span>10.</span> KOMMENTERA...</a></p>
            <p> <a href="11-fran-bloggen"><span>11.</span> ...FRÅN BLOGGEN</a></p>
            <p> <a href="12-template-2.0"><span>12.</span> TEMPLATE 2.0</a></p>
            <!-- <p style="text-align:center;"><span>Fler filmer <br>kommer snart</span></p> -->
            <p> <a href="FAQ"><span>F<span style="color:#0C0C0A">.</span>A<span style="color:#0C0C0A">.</span>Q</span></a></p>
        </div> <!-- .sidebar -->

        <div class="contentWrapper">
        
        <?php startblock('content') ?>
        <?php endblock() ?>
            
    
        </div> <!-- .contentWrapper -->

        <div class="tips">
            <div class="chainLeft"></div>
            <div class="chainRight"></div>
            <div class="tipsImg"><img src="img/tips.png" alt=""></div>
            <div class="sliderBackground"></div>

            <div id="slider-id-wrapper" class="coda-slider-wrapper">
              <div class="coda-nav-left"><a href="#" data-dir="prev" title="Slide left">«</a></div>
              <div class="coda-nav-right"><a href="#" data-dir="next" title="Slide right">»</a></div>
              <div class="coda-slider" id="slider-id">

              </div> <!-- coda-slider -->
            </div> <!-- coda-slider-wrapper -->

        </div> <!-- tips -->
        
    </section> <!-- .main -->
    <footer>

        <div class="bg5" data-speed="1.6" data-height="210" data-type="background2"></div>
<!--         <div class="bg4" data-speed="1.8" data-height="180" data-type="background2"></div>
        <div class="bg3" data-speed="2" data-height="150" data-type="background2"></div>
        <div class="bg2" data-speed="2.2" data-height="120" data-type="background2"></div>
        <div class="bg1" data-speed="2.4" data-height="90" data-type="background2"></div>
        <div class="bg0" data-speed="2.6" data-height="60" ></div> -->
         <div class="cowboys"></div>
         <div class="bottomBorder"></div>
         <div class="borders"></div>
         <div class="contact">
          <p>Simon Johansson 2013</p>
          <p><a href="http://www.simon-johansson.com">www.simon-johansson.com</a></p>
          <p><a href="mailto:mail@simon-johansson.com">mail@simon-johansson.com</a></p>
         </div>
        
    </footer>

        <script src="js/js.js"></script>
        <script src="js/jquery.coda-slider-3.0.js"></script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-40124062-1', 'djangoexplained.se');
          ga('send', 'pageview');
        </script>
</body>
</html>
