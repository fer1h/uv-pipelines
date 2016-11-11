<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UV-PIPELINES</title>
  <link rel=icon href=img/favicon.png sizes="32x32" type="image/png">
  <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick-theme.css">
  <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="css/app.css">
  <!-- <link rel="stylesheet" href="css/style_utils.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>


<body>

  <!-- menumovil -->
  <?php

  include_once "secciones/menus/menu-movil.php"

  ?>

  <!-- Header movil-->
  <header id="uv-header-movil" class="columns h-15-v hide-for-large color-blanco-bg shadow-black fixed top left z1k1">

    <div id="img-logo-movil" class="columns small-6 medium-4 h-100 p-0 imgLiquid imgLiquidNoFill">

      <a href="index.php" class="columns h-100 m0 p0">


        <img src="img/logo.png" alt="" />

      </a>

    </div>

    <div id="boton-menu-movil" class="columns small-2 medium-2 right text-center">

      <a class="columns button h-100 m0 p0">

        <i class="fa fa-bars h-0 vcenter font-sm-XL font-md-XL rota"></i>

      </a>

    </div>

  </header>
  <!--Termina Header movil-->




  <!-- Header escritorio-->
  <header id="uv-header" class="columns p-0 h-23-v show-for-large">

    <div id="barra" class="columns p-0 h-22 color-negro-bg white">

      <div id="mail" class="columns large-6 h-100 right"></div>
      <div id="tel" class="columns large-3 right h-a vcenter text-right end font-lg-XS"><i class="fa fa-phone"></i> Tel: Lorem ipsum dolor.</div>
      <div id="mail" class="columns large-3 h-a vcenter right font-lg-XS"><i class="fa fa-envelope"></i> Mail: Lorem ipsum dolor.</div>

    </div>


    <div id="logo" class="columns p-0 h-55">

      <div id="img-logo" class="columns large-3 h-100 p-0 imgLiquid imgLiquidNoFill">
        <a href="index.php" class="columns h-100 m0 p0">

          <img src="img/logo.png" alt="" />
        </a>

      </div>

      <div id="img-hora" class="columns large-4 small-right h-100 p-0">

        <div class="columns large-2 h-100 p-0 text-center">
          <!-- <div class="small-12  vcenter text-ctXXL> -->
            <i class="fa fa-clock-o box-red white fontXXL text-center vcenter p1"></i>
          <!-- </div> -->
        </div>

        <div class="columns large-8 h-100 p0 end">
          <div class="columns vcenter h-a fontS p0 text-left">

            <p class="columns p0 m0">Lorem ipsum dolor sit.</p>
            <p class="columns p0 m0 gris"><small>Lorem ipsum dolor sit amet, elit. Unde, numquam?</small></p>

          </div>
        </div>

      </div>

    </div>


    <nav id="nav" class="columns p-0 h-25 color-rojo-bg">

      <!-- menu -->
      <?php

      include_once "secciones/menus/menu-escritorio.php"

      ?>


    </nav>


  </header>
  <!--Termina Header escritorio-->




  <main id="main" class="colums p-0 main-padding-top" >
