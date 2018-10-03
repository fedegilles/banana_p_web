<?php
	$destino = "info@bananaparadox.com";
	$nombre = $_POST[name];
	$asunto = $_POST[subject];
	$mail = $_POST[mail];
	$mensaje = $_POST[message];

	$contenido = "Nombre: " . $nombre . "\Asunto: " . $asunto . "\nMail: " . $mail . "\Mensaje: " . $mensaje;
	
	mail($destino,"Contacto", $contenido);

?>