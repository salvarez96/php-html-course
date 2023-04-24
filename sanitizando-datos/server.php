<?php

$name = $_POST["nombre"];
$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];

$htmlentities = htmlentities($name);
$addslashes = addslashes($username);
$username = preg_replace("/[^a-z0-9]/", "", $username);
$onlynumbers = preg_replace("/\D/", "", $username);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$sanitize_int = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
$age = (float) $age;
$better_sanitize_age = is_float($age) ? explode(".", $age)[0] : $age;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos de mi usuario</title>
</head>

<body>

  <p>Nombre:</p>
  <?= $htmlentities ?>

  <p>Username:</p>
  <?= $addslashes ?>

  <p>Username aceptado:</p>
  <?= $username ?>

  <p>Username sin letras:</p>
  <?= $onlynumbers ?>

  <p>Email:</p>
  <?= $email ?>

  <p>Edad:</p>
  <?= $sanitize_int ?>

  <p>Edad mejorada:</p>
  <?= $better_sanitize_age ?>

</body>

</html>