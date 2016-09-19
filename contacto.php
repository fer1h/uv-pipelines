<?php

include_once "secciones/compartidas/header.php";

####
## Form adaptado para foundation zurb
####
//inicia sesion
session_start();
// Require the class
require('contacto/formkey_class.php');
// Start the class
$formKey = new formKey();
$error = False;
// Is request?
if($_SERVER['REQUEST_METHOD'] == 'post')
{
	// Validate the form key
	if(!isset($_POST['form_key']) || !$formKey->validate())
	{
		// Form key is invalid, show an error
		$error = True;
	}
}

?>
<!-- Título ---------------------------------------->

<div id="título" class="columns h-20 p-0">
	<div class="columns h-100 imgLiquid imgLiquidFill">
		<img src="./img/titulo-servicios.png" alt=""/>
		<div class="columns h-70 mt1 mb1  text-sm-center">
			<p class="titulo-master">Contacto</p> <p class="titulo-master-2">Déjanos un comentario</p>
		</div>
	</div>
</div>

<!-- termina título ---------------------------------------->


<!-- Formulario  -->
<form id="uvForm" method="POST" action="" class="columns small-12 medium-6 large-6 p4 end form-horizontal contact-form" data-abide novalidate>
	<!--  -->
	<?php $formKey->outputKey(); ?>

	<!-- respuesta al enviar -->
	<p id="formResponse" class="columns success pt1 bold font-sm-M font-md-L font-lg-L"><?php if($error) { echo($error); } ?></p>
	<p id="mensaje_res" class="columns secondary pt1 font-sm-M font-md-L font-lg-L" style="display: none;"><i class="fa fa-success"></i></p>
	<div data-abide-error class="columns alert callout" style="display: none;">
		<p class="warning font-sm-M font-md-L font-lg-"><i class="fa fa-alert"></i> Hay algunos errores, faltan campos obligatorios.</p>
	</div>

	<!--  -->
	<label class="black">Nombre *</label>
	<small class="error hidden">Nombre requerido.</small>
	<input type="text" placeholder="Nombre completo" name="name" aria-describedby="" id="inputName" required>
	<!--  -->
	<label class="black">Correo *</label>
	<small class="error hidden">Correo requerido.</small>
	<input type="email" placeholder="dev@empresa.com" name="email" id="inputEmail" required>

	<label class="black">Asunto *</label>
	<small class="error hidden">Asunto requerido.</small>
	<input id="selectSubject" name="type" type="text" placeholder="Asunto" required>

	<label class="black">Mensaje *</label>
	<small class="error hidden">Se requiere mensaje.</small>
	<textarea placeholder="Ingrese su mensaje" name="message" id="inputMessage" class="mb1" required></textarea>
	<!-- recaptcha v2  -->
	<div class="g-recaptcha" data-sitekey="6LeyLCoTAAAAAGUwn9D0Ts7ie6cfPpHCBT-whHn-"></div>
	<!-- <div id="captcha"></div> captcha explicit load-->
	<!--  -->
	<fieldset class="large-12 columns mt1 pl0">
		<button id="boton_form" class="fondo_inputs m1 p3 white color-rojo-bg bordes-redondeados bold" type="submit" value="Send">Contáctanos</button>
	</fieldset>

</form>

<div id="datos-contacto" class="columns h-100 small-12 medium-6 large-6 p3">

	<div class="columns h-a vcenter text-center small-12 medium-6 large-6 p3">

<div class="columns small-12"><i class="fa fa-home"></i></div>
<br>
<div class="columns small-12"><i class="fa fa-envelope"></i></div>
<br>
<div class="columns small-12"><i class="fa fa-phone"></i></div>
<br>

	</div>

</div>

<?php

include_once "secciones/compartidas/footer.php";

?>
