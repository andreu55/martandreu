<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="author" content="Wololo">
  <meta name="google" content="notranslate" />
  <meta name="msapplication-tap-highlight" content="no">

  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">

  <?php

    $path = $_SERVER['PATH_INFO'] ?? '';
    $path = trim($path, '/');

    $permitidos = ['es', 'en'];

    if (!$path || !in_array($path, $permitidos)) {
      if (strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'es') !== false) { $path = 'es'; }
      else { $path = 'en'; }
    }
    require_once 'datos_' . $path . '.php';
  ?>

  <meta name="description" content="<?= $descripcion ?>">
  <title><?= $nombre ?></title>

  <style>
    @import url(https://fonts.googleapis.com/css?family=Hind+Siliguri:300,600);

    @font-face {
      font-family: "VAGRoundedBT-Regular";
      src: url(assets/VAGRounded_BT.ttf) format("truetype");
    }
  </style>

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="./main.550dcf66.css" rel="stylesheet">
  <style>
  .navbar-logo-img {
    height: 40px;
    width: 40px;
  }
  .ult-noticias {
    max-width: 400px;
    margin-top: -65px;
    margin-bottom: 65px;
    padding-right: 20px;
  }
  .que-hacemos {
    min-height:450px;
  }
  .mediaimg {
    clip-path: polygon(0 0, 0 100%, 0 100%, 100% 0);
  }
  .mediohueco {
    display: block;
    position: absolute;
    bottom: 0;
    height: 60%;
  }
  .mediohueco > .texto {
    margin: 0 15px
  }

  @media (max-width:990px){
    .mediohueco > .texto {
      text-align: right;
    }
  }

  @media (max-width:768px){
    .ult-noticias {
      max-width: 100%;
      margin-top: 0;
      margin-bottom: 5px;
    }
    .mediohueco {
      height: 90%;
    }
    .mediohueco > .texto {
      margin: 0 0px 30px 45px;
      padding-top: 20px;
    }
  }
  </style>
</head>

<body>
  <?php include "sections/barra.php" ?>

  <!-- Portada -->
  <div class="hero-full-container background-image-container white-text-container">
    <?php include "sections/portada.php" ?>
  </div>

  <!-- Qué hacemos -->
  <div class="section-container">
    <?php include "sections/quehacemos.php" ?>
  </div>

  <!-- Carousel -->
  <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div id="carousel-example-generic" class="carousel carousel-fade slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <?php include "sections/carrousel.php" ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Quienes somos -->
  <div class="section-container">
    <div class="container text-center">
      <?php include "sections/quienessomos.php" ?>
    </div>
  </div>

  <!-- Contacto -->
  <div id="contacto" class="section-container contact-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <?php include "sections/contacto.php" ?>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function (event) {
      navbarFixedTopAnimation();
    });
  </script>

    <footer class="footer-container white-text-container">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h3><?= $nombre ?></h3>
            <div class="row">
              <div class="col-xs-12 col-sm-7">
                <p><?= $descripcion ?></p>
                <p><small>Thanks to <a href="http://www.mashup-template.com/" target="_blank" rel="nofollow" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" target="_blank" rel="nofollow"  title="Beautiful Free Images">Unsplash</a> for this template! <i class="fa fa-fw fa-heart-o"></i></small>
                </p>
              </div>
              <div class="col-xs-12 col-sm-5">
                <?php include "sections/socialbuttons.php" ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  <script>
    document.addEventListener("DOMContentLoaded", function (event) {
      navActivePage();
      scrollRevelation('.reveal');
    });
  </script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID

  <script>
    (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
    (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
  </script>
  -->

<script type="text/javascript" src="./main.0cf8b554.js"></script>

<?php /*
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
  <script>
  $(function() {
  $('#foto-andreu').attr('src', './assets/images/<?= $nosotros[0]['img-mobile'] ?>')
  });
  </script>
*/ ?>

</body>
</html>
