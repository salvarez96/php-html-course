<?php

$nombre = "Mr. Michi";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imprime texto y etiquetas con PHP</title>
</head>

<body>
  <?php echo "<p>Esta es una forma de imprimir texto y etiquetas con PHP</p>"; ?>
  <?= "<p>Esta es otra forma de imprimir texto y etiquetas con PHP</p>" ?>
  <h1>Hola
    <?= $nombre ?>!
  </h1>

</body>

</html>