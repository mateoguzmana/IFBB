<?php
if ( isset( $_POST['newsletter_submit'] ) ) {
	// Initialize error array
	$newsletter_errors = array();

	// Check email input field
	if ( trim( $_POST['newsletter_email'] ) === '' )
		$newsletter_errors[] = 'Su Email es requerido';
	elseif ( !preg_match( "/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,4}$/i", trim( $_POST['newsletter_email'] ) ) )
		$newsletter_errors[] = 'Email invalido'; 
	else
		$newsletter_email = trim( $_POST['newsletter_email'] );
	
	// Send email if no input errors
	if ( empty( $newsletter_errors ) ) {
		$email_to = "info@ifbbcolombia.com"; // Change to your own email address
		$subject = "SUSCRIBICION A IFBB COLOMBIA";
		$body = "correo: " . $newsletter_email . "\r\n";
		$headers .= "From: IFBB COLOMBIA<info@ifbbcolombia.com>\r\n"; 
		//$headers = "Suscripcion al sitio <" . $email_to . ">\r\nReply-To: " . $newsletter_email . "\r\n";
		mail( $email_to, $subject, $body, $headers );
		echo 'Gracias por suscribirse!';
	} else {
		echo 'Por favor revise los siguientes errores:<br />';
		foreach ( $newsletter_errors as $error ) {
			echo $error . '<br />';
		}
	}
}
?>