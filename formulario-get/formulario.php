<?php

echo "El usuario {$_GET["nombre"]} tiene {$_GET["edad"]} años";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario con PHP</title>
</head>

<body>
  <form action="./server.php" method="get">
    <label for="nombre">Ingresa tu nombre</label>
    <input type="text" name="nombre" id="nombre" />

    <label for="edad">Ingresa tu edad</label>
    <input type="text" name="edad" id="edad" />

    <button type="submit">Enviar formulario</button>
  </form>
</body>

</html>