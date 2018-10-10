<?php
	$destino = "info@bananaparadox.com";
	$nombre = $_POST[name];
	$asunto = $_POST[subject];
	$mail = $_POST[mail];
	$mensaje = $_POST[message];

	$contenido = "Nombre: " . $nombre . "\nAsunto: " . $asunto . "\nMail: " . $mail . "\nMensaje: " . $mensaje;
	
	mail($destino,"Contacto", $contenido);

?>