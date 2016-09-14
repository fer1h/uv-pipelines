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

<div id="slider-inicio" class="columns h-82-v p-0">
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
           <button href="contacto.php" class="pl3 pr3 pt1 pb1 mt2 bordes-redondeados color-rojo-bg color-white end"><?php echo$textoslider['textoslider' . $i]['botoncontacto' . $i];?></button>
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
  <div id="ingeniería" class="columns large-4 right">
    <div class="columns h-50 imgLiquid imgLiquidFill">

      <img src="./img/h-2.png" alt="" />

    </div>
    <div class="columns h-40 p-1">
      <div class="columns h-30 titulo-master-3"> INGENIERÍA & CERTIFICACIÓN </div>
      <div class="columns h-70">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ante tellus, efficitur non arcu ullamcorper, fringilla cursus quam. Cras in mattis nisl, sollicitudin placerat purus ras in mattis nisl.</div>
    </div>
  </div>

  <!-- Construcción -->
  <div id="construcción" class="columns large-4 right">
    <div class="columns h-50 imgLiquid imgLiquidFill">

      <img src="./img/h-3.png" alt="" />

    </div>
    <div class="columns h-40 p-1">
      <div class="columns h-30 titulo-master-3">CONSTRUCCIÓN</div>
      <div class="columns h-70">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ante tellus, efficitur non arcu ullamcorper, fringilla cursus quam. Cras in mattis nisl, sollicitudin placerat purus ras in mattis nisl.</div>
    </div>
  </div>


  <!-- Instrumentación -->
  <div id="instrumentación" class="columns large-4 right">
    <div class="columns h-50 imgLiquid imgLiquidFill">

      <img src="./img/h-1.png" alt="" />

    </div>
    <div class="columns h-40 p-1">
      <div class="columns h-30 titulo-master-3"> INSTRUMENTACIÓN & CONTROL</div>
      <div class="columns h-70">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ante tellus, efficitur non arcu ullamcorper, fringilla cursus quam. Cras in mattis nisl, sollicitudin placerat purus ras in mattis nisl.</div>
    </div>
  </div>
</div>

<!-- Termina servicios -->



<?php

include_once "secciones/compartidas/footer.php";

?>
