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
<div id="info-services" class="columns p-0 h-70-v">




  <!-- Ingeniería -->
  <div id="ingeniería" class="columns large-4 right">
    <div class="columns h-60 imgLiquid imgLiquidFill">

      <img src="http://fakeimg.pl/300?text=placeholder" alt="" />

    </div>
    <div class="columns h-40">
      <div class="columns h-30"></div>
      <div class="columns h-70"></div>
    </div>
  </div>

  <!-- Construcción -->
  <div id="construcción" class="columns large-4 right">
    <div class="columns h-60 imgLiquid imgLiquidFill">

      <img src="http://fakeimg.pl/300?text=placeholder" alt="" />

    </div>
    <div class="columns h-40">
      <div class="columns h-30"></div>
      <div class="columns h-70"></div>
    </div>
  </div>


  <!-- Instrumentación -->
  <div id="instrumentación" class="columns large-4 right">
    <div class="columns h-60 imgLiquid imgLiquidFill">

      <img src="http://fakeimg.pl/300?text=placeholder" alt="" />

    </div>
    <div class="columns h-40">
      <div class="columns h-30"></div>
      <div class="columns h-70"></div>
    </div>
  </div>
</div>

<!-- Termina servicios -->



<?php

include_once "secciones/compartidas/footer.php";

?>
