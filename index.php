<?php

include_once "secciones/compartidas/header.php";



?>



<!-- slider -->

  <div id="slider-inicio" class="columns h-82-v p-0">
<?php

for ($i=0; $i < 4; $i++):
  ?>


    <div class="columns slider h-100 m0 z1k imgLiquid imgLiquidFill">

      <img src="img/slider/<?php echo $i;?>.png" alt="" />

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
