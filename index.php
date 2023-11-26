<?php

$nombre = $_POST['nombre'];
$email = $_POST['correo'];

$formContent="
Nombre: $nombre \n
Email: $email
";

$recipient = "juancruzvenier@gmail.com";

$subjet = "Mail enviado desde localhost";

$header = "From: $email \n\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subjet, $formContent, $header) or die("Error!");
header("Location: gracias.html")

?>