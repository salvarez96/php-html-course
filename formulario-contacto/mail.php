<?php

use PHPMailer\PHPMailer\PHPMailer;

require("vendor/autoload.php");

function sendMail(string $subject, string $body, string $email, string $name, bool $hasHtml = false)
{
  // configuración inicial del servidor
  $phpmailer = new PHPMailer();
  $phpmailer->isSMTP();
  $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 2525;
  $phpmailer->Username = '67a2037a63e385';
  $phpmailer->Password = '55943a5605ea13';
  $phpmailer->CharSet = "utf-8";
  $phpmailer->Encoding = "base64";

  // Añadiendo destinatarios 
  $phpmailer->setFrom('contact@miempresa.com', 'Mi empresa');
  $phpmailer->addAddress($email, $name);

  // Definiendo el contenido de mi email
  $phpmailer->isHTML($hasHtml);
  $phpmailer->Subject = $subject;
  $phpmailer->Body = $body;
  $phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients';

  // Enviar el correo
  $phpmailer->send();
}