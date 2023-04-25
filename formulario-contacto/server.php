<?php

require("mail.php");
function validateInfo($name, $email, $subject, $message, $form)
{
  return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";
$name = "";
if (isset($_POST['form'])) {
  if (validateInfo(...$_POST)) {
    $subject = strip_tags($_POST['subject']);
    $message = strip_tags($_POST['message']);

    $name = strip_tags(strtolower($_POST['name']));
    $name = preg_replace("/[^a-z ]/", "", $name);
    $name = ucwords($name);

    $email = strip_tags($_POST['email']);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $body = "<strong>$name</strong> <'$email'> te envía el siguiente mensaje: <br/><br/> $message";

    // Enviar el correo
    sendMail($subject, $body, $email, $name, true);
    $status = "success";

  } else {
    $status = "danger";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Envío de formulario</title>
</head>

<body>
  <?php if ($status === "success"): ?>
    <div class="alert success">
      <span>Mensaje enviado con éxito
        <?= $name ?>!
      </span>
    </div>
  <?php else: ?>
    <div class="alert danger">
      <span>Surgió un problema</span>
    </div>
  <?php endif; ?>
</body>

</html>