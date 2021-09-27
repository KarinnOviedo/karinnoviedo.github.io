<?php

$message = $_POST['message'];

$to = 'mauricioposadamurillo@gmail.com';
$asunto = "Nuevo Subscriptor";

mail($to, $asunto, $message);

header("Location: contacto.html")

?>