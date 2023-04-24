<?php

function validateInfo($name, $email, $subject, $message, $form)
{
  return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

$status = "";
$name = "";
if (isset($_POST['form'])) {
  if (validateInfo(...$_POST)) {
    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $subject = strip_tags($_POST['subject']);
    $message = strip_tags($_POST['message']);

    $name = preg_replace("/[^a-z ]/", "", $name);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Enviar el correo
    $status = "success";

  } else {
    $status = "danger";
  }
}

echo "<pre>";
var_dump($_POST);
echo "</pre>";

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