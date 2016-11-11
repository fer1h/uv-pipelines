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
      <li>Ingeniería & Certificación
        <ul id="servicios-opciones" class="nested vertical menu">
          <li><a onclick="jala_contenido('1-elaboracion-certificacion', 0)" class="black-link">Elaboración, certificación de ingeniería & owner's engineering</a></li>
          <li><a onclick="jala_contenido('2-unidades-verificacion', 0)" class="black-link">Unidades de verificación</a></li>
          <li><a onclick="jala_contenido('3-certificacion-seguridad', 0)" class="black-link">Certificación de seguridad técnica</a></li>
          <li><a onclick="jala_contenido('4-Inspección', 0)" class="black-link">Inspección - expeditación, supervisión/PMC</a></li>
          <li><a onclick="jala_contenido('5-consultoria', 0)" class="black-link">Consultoría & entrenamiento</a></li>
        </ul>
      </li>

    </ul>
  </div>

  <button onclick="link_servicios()" class="columns small-12 text-center pt1 pb1 mb2 mt1 font-sm-M font-md-L font-lg-XL bordes-redondeados color-rojo-bg color-white">Ver todos los servicios</button>
</div>

<!-- selector small y medium unicamente-->
<div class="columns p-0 h-a show-for-small hide-for-large">

<select id="select-servicios-movil" class="columns h-100 white color-rojo-bg font-sm-S font-md-M" name="servicios">
  <option value="1-elaboracion-certificacion">Elaboración, certificación de ingeniería & owner's engineering</option>
  <option value="2-unidades-verificacion">Unidades de verificación</option>
  <option value="3-certificacion-seguridad">Certificación de seguridad técnica</option>
  <option value="4-Inspección">Inspección - expeditación, supervisión/PMC</option>
  <option value="5-consultoria">Consultoría & entrenamiento</option>

</select>

<button onclick="link_servicios()" class="columns small-12 text-center pt1 pb1 mb2 mt1 font-sm-M font-md-L font-lg-XL bordes-redondeados color-rojo-bg color-white">Ver todos los servicios</button>

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
