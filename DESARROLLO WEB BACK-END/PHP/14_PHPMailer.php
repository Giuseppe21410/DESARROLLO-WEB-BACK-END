<?php
// Cargar las clases de PHPMailer (ajusta la ruta si es necesario)
require 'ASSETS/LIBS/PHPMAILER/src/PHPMailer.php';
require 'ASSETS/LIBS/PHPMAILER/src/SMTP.php';
require 'ASSETS/LIBS/PHPMAILER/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Crear una instancia de PHPMailer
$mail = new PHPMailer(true);  // 'true' activa las excepciones para errores

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();                                       // Usar SMTP
    $mail->Host       = 'smtp.example.com';                // Servidor SMTP
    $mail->SMTPAuth   = true;                              // Habilita autenticación SMTP
    $mail->Username   = 'tucorreo@example.com';            // Usuario SMTP (correo)
    $mail->Password   = 'tu_contraseña_o_token';           // Contraseña SMTP o token
    $mail->SMTPSecure = 'tls';                             // Seguridad TLS (puede ser 'ssl')
    $mail->Port       = 587;                               // Puerto SMTP (587 para TLS, 465 para SSL)

    // Opcional: configuración avanzada de SSL si tienes errores de certificado
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ],
    ];

    // Remitente y destinatario
    $mail->setFrom('tucorreo@example.com', 'Tu Nombre');   // Remitente
    $mail->addAddress('destinatario@example.com', 'Cliente'); // Destinatario

    // Asunto y cuerpo del mensaje
    $mail->Subject = 'Asunto del correo';
    $mail->Body    = 'Este es el contenido del correo en texto plano.';
    $mail->AltBody = 'Texto alternativo si el cliente de correo no soporta HTML';
    
    // Enviar como HTML (opcional)
    $mail->isHTML(true);
    $mail->Body = '<h1>Hola Cliente</h1><p>Este es un mensaje en <b>HTML</b>.</p>';

    // Adjuntar archivos (opcional)
    $mail->addAttachment('factura.pdf');   // Ruta al archivo

    // Enviar el correo
    $mail->send();
    echo 'Correo enviado correctamente.';
} catch (Exception $e) {
    // Mostrar error si falla
    echo 'Error al enviar el correo: ', $mail->ErrorInfo;
}
?>
