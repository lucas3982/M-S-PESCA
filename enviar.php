<?php
$destino="lucasbarroca777@hotmail.com";
$nombre = $_POST["Nombre Completo"];
$email = $_POST["email"];
$Mensaje = $_POST["Mensaje"];
$contenido = "Nombre: " . $nombre . "\nemail: " . $email . "\nMensaje: " . $Mensaje;
mail($destino,"contacto", $contenido);


?>