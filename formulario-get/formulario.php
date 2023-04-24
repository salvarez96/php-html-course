<?php

echo "El usuario {$_GET["nombre"]} tiene {$_GET["edad"]} años";
echo "<pre>";
var_dump($_FILES);
echo "</pre>";

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
  <form action="./server.php" method="post" enctype="multipart/form-data">
    <label for="nombre">Ingresa tu nombre</label>
    <input type="text" name="nombre" id="nombre" />

    <label for="edad">Ingresa tu edad</label>
    <input type="text" name="edad" id="edad" />

    <label for="imagen">Agrega la imagen que quieras</label>
    <input type="file" name="imagen" id="imagen">

    <button type="submit">Enviar formulario</button>
  </form>
</body>

</html>