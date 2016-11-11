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
      <!-- <li><a href="#" class="black-link-c">Construcción</a>
        <ul id="servicios-opciones" class="nested vertical menu">
          <li><a onclick="jala_contenido('6-diseño-fabricacion', 1)" class="black-link">Diseño & fabricación</a></li>
          <li><a onclick="jala_contenido('7-inspeccion-pruebas', 1)" class="black-link">Inspección & pruebas</a></li>
          <li><a onclick="jala_contenido('8-soluciones-gas', 1)" class="black-link">Soluciones para el manejo y transporte de gas natural</a></li>
        </ul>
      </li>
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
      </li> -->
    </ul>
  </div>

</div>

<!-- selector small y medium unicamente-->
<select id="select-servicios-movil" class="columns h-11-v show-for-small hide-for-large white color-rojo-bg font-sm-S font-md-M" name="servicios">
  <option value="1-elaboracion-certificacion">Elaboración, certificación de ingeniería & owner's engineering</option>
  <option value="2-unidades-verificacion">Unidades de verificación</option>
  <option value="3-certificacion-seguridad">Certificación de seguridad técnica</option>
  <option value="4-Inspección">Inspección - expeditación, supervisión/PMC</option>
  <option value="5-consultoria">Consultoría & entrenamiento</option>
  <!-- <option value="6-diseño-fabricacion">Diseño & fabricación</option>
  <option value="7-inspeccion-pruebas">Inspección & pruebas</option>
  <option value="8-soluciones-gas">Soluciones para el manejo y transporte de gas natural</option>
  <option value="9-computadores">Computadores y medidores de flujo para gas natural, combustibles refinados y aguas</option>
  <option value="10-sistema-control-carga">Sistemas de control de carga de combustibles refinados</option>
  <option value="11-medidores">Medidores de flujo tipo ultrasónicos no intrusivos</option>
  <option value="12-sistema-medicion">Sistemas de medición de flujo en canales abiertos</option>
  <option value="13-servicio-verificacion-aforo">Servicios de verificación y aforo</option>
  <option value="14-servicio-verificacion-aforo copia">Objetivos del servicio de verificación y aforo</option>
  <option value="15-servicio-config">Equipos utilizados en la verificación de caudal</option> -->
</select>


<!-- Termina Menú lateral -->

<!-- Info servicioContenido -->

<div id="servicioContenido" class="columns small-12 large-8 h-a">

  <!-- <div class="columns p-1 h-65-v imgLiquid imgLiquidFill">
    <img src="img/1.png" alt="" />
  </div>
  <div class="columns p-1">
    <h3 class="font-lg-XL">Elaboración, certificación de ingeniería & owner's engineering</h3>

  </br>
  <p>Ingeniería básica y de detalle considerando las siguientes disciplinas:</p>
  <ul>
    <li>Ingeniería Civil - Estructural</li>
    <li>Mecánica (tubería y soldadura)</li>
    <li>Ingeniería eléctrica</li>
    <li>Proceso</li>
    <li>Instrumentación y Control</li>
    <li>Ingeniería ambiental (Análisis de Riesgo)</li>
  </ul>
</br>
<p>Desarrollo de ingeniería para las siguientes instalaciones:</p>
<ul>
  <li>Ductos Terrestres y Marinos</li>
  <li>Plantas de Proceso</li>
  <li>Tanques de Almacenamiento</li>
  <li>Estaciones de Compresión y Bombeo</li>
  <li>Estaciones de Regulación, Medición y Control</li>
</ul>
</div> -->
</div>

<button href="contacto.php" onclick="link_servicios()" class="columns small-12 text-center pt2 pb2 mt1 font-sm-M font-md-L font-lg-XL bordes-redondeados color-rojo-bg color-white">Ver todos los servicios</button>


</div>

<!-- Termina servicios -->

<?php

include_once "secciones/compartidas/footer.php";

?>
