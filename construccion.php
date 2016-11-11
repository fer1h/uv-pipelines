<?php

include_once "secciones/compartidas/header.php";

?>
<!-- Services -->

<!-- título ---------------------------------------->

<div id="título" class="columns h-20 p-0 ">
  <div class="columns h-100 imgLiquid imgLiquidFill">
    <img src="img/titulo-servicios.png" alt=""/>
    <div class="columns h-70 mt1 mb1  text-sm-center">
      <p class="titulo-master uppercase">UV-PIPELINES</p> <p class="titulo-master-2 uppercase">SERVICIOS</p>
    </div>
  </div>
</div>

<!-- termina título ---------------------------------------->

<div id="main-services" class="columns h-a p-1">
  <!-- Menú lateral -->

  <div id="infoLateral" class="columns h-a large-4 show-for-large">
    <div id="navLateral" class="columns p-1">

      <h3 class="font-lg-L">CATEGORÍAS</h3>

      <div class="columns h-a color-rojo-bd small-4 medium-4 large-4"></div>

    </br>

    <ul id="servicios-cats" class="menu vertical">
      <li><a href="#" class="black-link-c">Construcción</a>
        <ul id="servicios-opciones" class="nested vertical menu">
          <li><a onclick="jala_contenido('6-diseño-fabricacion', 1)" class="black-link">Diseño & fabricación</a></li>
          <li><a onclick="jala_contenido('7-inspeccion-pruebas', 1)" class="black-link">Inspección & pruebas</a></li>
          <li><a onclick="jala_contenido('8-soluciones-gas', 1)" class="black-link">Soluciones para el manejo y transporte de gas natural</a></li>
        </ul>
      </li>

    </ul>
  </div>

  <button onclick="link_servicios()" class="columns small-12 text-center pt2 mb3 pb2 mt1 font-sm-M font-md-L font-lg-XL bordes-redondeados color-rojo-bg color-white">Ver todos los servicios</button>
</div>

<!-- selector small y medium unicamente-->

<div class="columns p-0 h-a show-for-small hide-for-large">

<select id="select-servicios-movil" class="columns h-100 white color-rojo-bg font-sm-S font-md-M" name="servicios">

  <option value="6-diseño-fabricacion">Diseño & fabricación</option>
  <option value="7-inspeccion-pruebas">Inspección & pruebas</option>
  <option value="8-soluciones-gas">Soluciones para el manejo y transporte de gas natural</option>

  </select>

</div>

<!-- Termina Menú lateral -->

<!-- Info servicioContenido -->

<div id="servicioContenido" class="columns small-12 large-8 h-a">

  <div class="columns p-1 mb2 h-65-v imgLiquid imgLiquidFill">
    <img src="img/1.png" alt="" />
  </div>
  
</div>



</div>

<!-- Termina servicios -->

<?php

include_once "secciones/compartidas/footer.php";

?>
