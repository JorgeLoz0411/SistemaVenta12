<?php

$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];

//echo $correo . " " . $nombre . " " . $mensaje;

$destinatario = "jor0411loz@gmail.com";
$asunto = "Envio correo de prueba formulario contacto página web de Amarok con PHP";
$cuerpo = '
    <html>
        <head>
            <title>Prueba de envio de correo</title>    
        </head>

        <body>
            <h1>Solicitud de contacto desde correo de prueba ! </h1>
            <p>
                contacto: '.$nombre . ' - ' . $asunto . ' <br>
                mensaje: '.$mensaje.'
            </p>    
        </body>
    </html>
';
//para el envio en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

//direccion del remitente
$headers .= "FROM: $nombre <$correo>\r\n";
mail($destinatario, $asunto, $cuerpo, $headers);
?>

<a href="/sistemaventa/login/home/header.php">Volver a la página principal</a>
