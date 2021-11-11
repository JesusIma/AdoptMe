<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$destinatario = 'imajesus08@gmail.com';
$asunto = "Contacto Desde Nuestra Web";

$carta = "De: $nombre \n";
$carta .= "Correo Electronico: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";


// $nombre = $_POST["nombre"];
// $correo = $_POST["correo"];
// $telefono = $_POST["telefono"];
// $mensaje = $_POST["mensaje"];
// $carta = "Nombre: " . $nombre . "\nCorreo: " .$correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;

mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>