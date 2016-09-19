<?php


if($_SERVER["REQUEST_METHOD"] === "POST") {

	$secret = "6LeyLCoTAAAAAI-PhXvvJmPVwnBghKdloHek_ZjH";

	$captcha = $_POST['captchaResponse']; ##$_POST['g-recaptcha-response'] este era el pedo pff

	$respuesta  = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");//&remoteip=$rip

	$respuesta = json_decode($respuesta,true);

	//booleano para captcha
	if( $respuesta['success'] === true) {

		if(isset($_POST['contactFormSubmitted'])) {
			// Formulario data
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$type = $_POST['type'];
			$message = $_POST['message'];

			// check length of name, email and message
			if (strlen($name) < 3 || strlen($message) < 20) {
				exit("Necesitamos más caracteres para enviar el mensaje."); //
			}
			// Contenido de correo
			$formcontent="Te están contactando desde tu sitio\n\nDe parte: $name\n\nCorreo: $email\n\nAsunto: $type\n\nMensaje: $message";
			// wordwrapped after 70 chracte? Words?
			$message = wordwrap($formcontent, 70, "\r\n");
			// Enter your email address
			$recipient = "fer@dothemath.mx, josecaos@dothemath.mx";//
			// Enter a subject, only you will see this so make it useful
			$subject = "$name para $type";
			// 'From' mail header
			$mailheader = "De: $email \r\n";
			// Send email, if something goes wrong, kill programm and return error message
			mail($recipient, $subject, $message, $mailheader) or die("El correo no se há enviado, algo salió mal intenta de nuevo.");
			// If all's well, return success message
			echo "<script>$('#formResponse').html('Gracias! Tu mensaje se ha enviado en breve te contactaremos.'); </script>";
			// ...and clear the message box and reload captcha
			// echo "<script>$('#inputMessage').val(''); </script>"; //javascript:Recaptcha.reload();
		}
		//termina booleano email
	} else {
		echo "<script>$('#formResponse').html('Fuera! eres un robot de spam'); </script>";
		// echo " FueraFuera! eres un robot de spam"; //debug
	}


}
