<?php
$name = $_POST['name'];
$asunto = $_POST['asunto'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Éste mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Su teléfono de contacto es: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['$message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'tomastoranzosalas19072002@gmail.com';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>