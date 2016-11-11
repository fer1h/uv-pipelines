<?php

include_once "secciones/compartidas/header.php";



$textoslider = array(
  'textoslider0' => array('tituloslider0' =>'Bienvenido a UV Pipelines Solutions','copyslider0' => 'Somos una empresa con presencia en Mexico', 'bottomslider0' => 'ofrecemos soluciones integrales ...',  'botoncontacto0' => 'contáctanos'),

  'textoslider1' => array('tituloslider1' =>'Bienvenido a UV Pipelines Solutions','copyslider1' => 'Somos una empresa con presencia en Mexico', 'bottomslider1' => 'ofrecemos soluciones integrales ...','botoncontacto1' => 'contáctanos'),

  'textoslider2' => array('tituloslider2' =>'Bienvenido a UV Pipelines Solutions','copyslider2' => 'Somos una empresa con presencia en Mexico', 'bottomslider2' => 'ofrecemos soluciones integrales ...','botoncontacto2' => 'contáctanos'),

  'textoslider3' => array('tituloslider3' =>'Bienvenido a UV Pipelines Solutions','copyslider3' => 'Somos una empresa con presencia en Mexico', 'bottomslider3' => 'ofrecemos soluciones integrales ...','botoncontacto3' => 'contáctanos')
);

?>



<!-- slider -->

<div id="slider-inicio" class="columns h-70-v h-lg-82-v  p-0">
  <?php

  for ($i=0; $i < 4; $i++):
    ?>


    <div class="columns slider h-100 m0 z1k rel imgLiquid imgLiquidFill">

      <img src="img/slider/<?php echo $i;?>.png" alt="" />

      <!-- textos sobre slide -->
      <div class="columns large-7 h-100 m0 z1k absUpL z1k1 white">

        <div class="columns h-a vcenter">

          <h5 class="columns font-sm-S font-md-M font-lg-L"><i><?php echo $textoslider['textoslider' . $i]['tituloslider' . $i];?></i></h5>
          <h1 class="columns bold uppercase font-sm-L font-md-XL font-lg-XXXL"><?php echo $textoslider['textoslider' . $i]['copyslider' . $i];?></h1>
          <div class="columns h-a color-rojo-bd small-4 medium-4 large-4"></div>
          <h5 class="columns font-sm-S font-md-M font-lg-L"><?php echo $textoslider['textoslider' . $i]['bottomslider' . $i];?></h5>
          <button onclick="link_contacto()" class="columns small-5 medium-3 text-center pt1 pb1 mt2 font-sm-S font-md-M font-lg-L bordes-redondeados color-rojo-bg color-white end"><?php echo$textoslider['textoslider' . $i]['botoncontacto' . $i];?></button>
        </div>

      </div>

    </div>



    <?php
  endfor;
  ?>
</div>






<!-- Servicios -->
<div id="info-services" class="columns p-0 h-80-v">




  <!-- Ingeniería -->
  <a href="ingenieria.php" class="columns large-4 h-100 p-0 black gray-bg">

    <div id="ingeniería" class="columns right">
      <div class="columns h-50 imgLiquid imgLiquidFill">

        <img src="./img/h-2.png" alt="" />

      </div>
      <div class="columns h-40 p-1">
        <div class="columns h-25 titulo-master-3 font-sm-M font-md-M font-lg-L"> INGENIERÍA & CERTIFICACIÓN </div>
        <div class="columns h-75 font-sm-S font-md-S font-lg-M">
          UV Pipelines cuenta con especialistas encargados de desarrollar cualquier tipo de ingeniería, enfocados principalmente en proyectos del ramo de los hidrocarburos, así como de la industria de transformación, sin dejar de mencionar lo referente a construcción en general ...ver más.
        </div>

      </div>
    </div>

  </a>


  <!-- Construcción -->
  <a href="construccion.php" class="columns large-4 h-100 p-0 black gray-bg">

    <div id="construcción" class="columns right">
      <div class="columns h-50 imgLiquid imgLiquidFill">

        <img src="./img/h-3.png" alt="" />

      </div>
      <div class="columns h-40 p-1">
        <div class="columns h-25 titulo-master-3 font-sm- font-md-M font-lg-L">CONSTRUCCIÓN</div>
        <div class="columns h-75 font-sm-S font-md-S font-lg-M">

          UV Pipelines cuenta con expertos en el área de construcción lo que permite posicionarse en un nivel alto de competitividad. En este sector se desarrolla todo lo relacionado con la creación física de lo establecido y aprobado de manera documental en cada uno de los diseños a desarrollar ...ver más.

        </div>

      </div>
    </div>

  </a>

  <!-- Instrumentación -->

  <a href="instrumentacion.php" class="columns large-4 h-100 p-0 black gray-bg">

    <div id="instrumentación" class="columns right">
      <div class="columns h-50 imgLiquid imgLiquidFill">

        <img src="./img/h-1.png" alt="" />

      </div>
      <div class="columns h-40 p-1">
        <div class="columns h-25 titulo-master-3 font-sm-M font-md-M font-lg-L"> INSTRUMENTACIÓN & CONTROL</div>
        <div class="columns h-75 font-sm-S font-md-S font-lg-M">

          Este sector de UV Pipelines esta integrado por diferentes especialistas de ingeniería tales como ingenieros de; sistemas de control, automatización, eléctrica, electrónica e informática, entre otros, los cuales fusionan sus conocimientos con el objetivo de analizar, diseñar y automatizar procesos ..ver más.

        </div>

      </div>
    </div>
  </div>

</a>

<!-- Termina servicios -->



<?php

include_once "secciones/compartidas/footer.php";

?>
