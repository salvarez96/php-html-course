<?php

$userNames = [
  [
    "id" => 0,
    "username" => "Mr.Michi"
  ],
  [
    "id" => 1,
    "username" => "Retax"
  ],
  [
    "id" => 2,
    "username" => "Pancho"
  ],
];

$edadDePepito = 23;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables de PHP a JS</title>
</head>

<body>

  <script>

    let users = JSON.parse('<?= json_encode($userNames) ?>')
    let edadDePepito = Number('<?= json_encode($edadDePepito) ?>')
    console.log(users, edadDePepito)

  </script>

</body>

</html>