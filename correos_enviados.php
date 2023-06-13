<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $correo = $_POST["correo"];
  
  // Configurar la información del servidor SMTP de Gmail
  $smtpHost = 'smtp.gmail.com';
  $smtpPort = 587;
  $smtpUsername = 'jorgemart500@gmail.com';
  $smtpPassword = 'oregonlondresbishop';
  
  // Configurar el destinatario y el contenido del correo
  $to = 'jorgemart500@gmail.com';
  $subject = 'Nuevo correo del formulario';
  $message = "Correo: $correo";
  
  // Enviar el correo utilizando la función mail() de PHP
  if (mail($to, $subject, $message)) {
    echo "Correo enviado correctamente";
  } else {
    echo "Error al enviar el correo";
  }
}
?>
