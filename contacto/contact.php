<?php
####
## Form adaptado para foundation zurb
####
//inicia sesion
session_start();
// Require the class
require('formkey_class.php');
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
<!-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"></script> -->
<script src="https://www.google.com/recaptcha/api.js"></script>
<script type="text/javascript">
// var onloadCallback = function() {
// 	grecaptcha.render('captcha', {
// 		'sitekey' : '6LdH0x0TAAAAAH3ZejIgppovJ-Uf9siidME__gF_'
// 	});
// };
</script>
<!-- Formulario  -->
<form id="mbiForm" method="POST" action="" class="form-horizontal contact-form" data-abide novalidate>
	<!--  -->
	<?php $formKey->outputKey(); ?>
	<!--  -->
	<label class="white">Nombre *</label>
	<small class="error hidden">Nombre requerido.</small>
	<input type="text" placeholder="Nombre completo" name="name" aria-describedby="" id="inputName" required>
	<!--  -->
	<label class="white">Correo *</label>
	<small class="error hidden">Correo requerido.</small>
	<input type="email" placeholder="dev@company.com" name="email" id="inputEmail" required>
	<!-- para usar telefono -->
	<!-- <label class="white">Telefono *</label>
	<small class="error hidden">Teléfono minimo 11 digitos.</small>
	<input name="phone" type="text" id="inputPhone" placeholder="# País + Código de área"> -->
	<!--  -->
	<label class="white">Asunto *</label>
	<small class="error hidden">Asunto requerido.</small>
	<input id="selectSubject" name="type" type="text" placeholder="Asunto" required>
	<!-- alternativa con option -->
	<!-- <select id="selectSubject" name="type" >
	<option value="question">Solicitúd</option>
	<option value="support">Información</option>
	<option value="misc">Comentarios</option>
</select> -->
<!--  -->
<label class="white">Mensaje *</label>
<small class="error hidden">Se requiere mensaje.</small>
<textarea placeholder="Ingrese su mensaje" name="message" id="inputMessage" class="mb1" required></textarea>
<!-- recaptcha v2  -->
<div class="g-recaptcha" data-sitekey="6LdH0x0TAAAAAH3ZejIgppovJ-Uf9siidME__gF_"></div>
<!-- <div id="captcha"></div> <!-- captcha explicit load-->
<!--  -->
<fieldset class="large-12 columns mt1 pl0">
	<button id="boton_form" class="fondo_inputs m1 p3 white bold" type="submit" value="Send">Contáctanos</button>
</fieldset>
<!-- respuesta al enviar -->
<p id="formResponse" class="success pt1"><?php #if($error) { echo($error); } ?></p>
<p id="mensaje_res" class="success pt1 small_font color_gris" style="display: none;"><i class="fa fa-success"></i></p>
<div data-abide-error class="alert callout" style="display: none;">
	<p class="warning small_font"><i class="fa fa-alert"></i> Hay algunos errores, faltan campos obligatorios.</p>
</div>
</form>

<!-- requiere jquery -->
<script>
// $(function(){
// agrega este codigo en el documento js, para no llamar jquery desde aqui
//formulario
//$("#mbiForm").submit(function() {
//	if ($("#g-recaptcha-response").val()) {
//		$.post('form/mail.php', {
//			name: $('#inputName').val(),
//			email: $('#inputEmail').val(),
//			phone: $('#inputPhone').val(),
//			type: $('#selectSubject').val(),
//			message: $('#inputMessage').val(),
//			captchaResponse: $('#g-recaptcha-response').val(),
//			contactFormSubmitted: 'yes'},
//			function(data) {
//				$("#formResponse").html(data).fadeIn('2000');
//			}, 'text');
//			return false;
//		} else {
//			$("#formResponse").html('ERROR: llena el Captcha por favor.').fadeIn('2000');
//			return false;
//		}
//	});
//
// });
</script>