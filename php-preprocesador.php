<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP como preprocesador de HTML</title>
</head>

<body>
  <h1>Hola, esto es HTML desde PHP</h1>
  <?php
  for ($i = 0; $i < 10; $i++) {
    echo "<p>Ahora esto se está imprimiendo " . $i + 1 . " veces con PHP wiiiii</p>";
  }
  ?>

</body>

</html>