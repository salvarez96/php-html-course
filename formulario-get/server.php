<?php

echo "El usuario {$_POST["nombre"]} tiene {$_POST["edad"]} años";

$basename = $_FILES['imagen']['name'];
$imageTmpPath = $_FILES['imagen']['tmp_name'];
$pathToUpload = "./images/$basename";

if (!file_exists($pathToUpload)) {
  move_uploaded_file($imageTmpPath, $pathToUpload);
} else {
  echo "Ya existe el archivo";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imagen en el servidor</title>
</head>

<body>
  <img src="<?= $pathToUpload ?>" alt="Imagen guardada" width="200" />
</body>

</html>