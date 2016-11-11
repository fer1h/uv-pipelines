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
      <li><a href="#" class="black-link-c">Instrumentación & control</a>
        <ul id="servicios-opciones" class="nested vertical menu">
          <li><a onclick="jala_contenido('9-computadores', 2)" class="black-link">Computadores y medidores de flujo  para gas natural, combustibles refinados, agua potable y agua ratada</a></li>
          <li><a onclick="jala_contenido('10-sistema-control-carga', 2)" class="black-link">Sistemas de control de carga de combustibles refinados</a></li>
          <li><a onclick="jala_contenido('11-medidores', 2)" class="black-link">Medidores de flujo tipo ultrasónicos no intrusivos</a></li>
          <li><a onclick="jala_contenido('12-sistema-medicion', 2)" class="black-link">Sistemas de medición de flujo en canales abiertos</a></li>
          <li><a onclick="jala_contenido('13-servicio-verificacion-aforo', 2)" class="black-link">Servicios de verificación y aforo</a></li>
          <li><a onclick="jala_contenido('14-servicio-verificacion-aforo copia', 2)" class="black-link">Objetivos del servicio de verificación y aforo</a></li>
          <li><a onclick="jala_contenido('15-servicio-config', 2)" class="black-link">Equipos utilizados en la verificación de caudal</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <button onclick="link_servicios()" class="columns small-12 text-center pt2 pb2 mt1 mb3 font-sm-M font-md-L font-lg-XL bordes-redondeados color-rojo-bg color-white">Ver todos los servicios</button>

</div>

<!-- selector small y medium unicamente-->
<div class="columns p-0 h-a show-for-small hide-for-large">

<select id="select-servicios-movil" class="columns h-100 white color-rojo-bg font-sm-S font-md-M" name="servicios">
  <option value="9-computadores">Computadores y medidores de flujo para gas natural, combustibles refinados y aguas</option>
  <option value="10-sistema-control-carga">Sistemas de control de carga de combustibles refinados</option>
  <option value="11-medidores">Medidores de flujo tipo ultrasónicos no intrusivos</option>
  <option value="12-sistema-medicion">Sistemas de medición de flujo en canales abiertos</option>
  <option value="13-servicio-verificacion-aforo">Servicios de verificación y aforo</option>
  <option value="14-servicio-verificacion-aforo copia">Objetivos del servicio de verificación y aforo</option>
  <option value="15-servicio-config">Equipos utilizados en la verificación de caudal</option>
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

<?php

include_once "secciones/compartidas/footer.php";

?>
