<?php

$seHabloDeBruno = false;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicionales</title>
</head>

<body>
  <h1>CÓMO NO SE DEBE HACER</h1>
  <?php if ($seHabloDeBruno) {
    echo "<b>😮</b>";
  } else {
    echo "<b>😀</b>";
  } ?>
  <h1>Cómo es mejor hacerlo</h1>
  <?php if ($seHabloDeBruno) { ?>
    <b>😮</b>
  <?php } else { ?>
    <b>😀</b>
  <?php } ?>
  <h1>Como sí debería de hacerse</h1>
  <?php if ($seHabloDeBruno): ?>
    <b>😮</b>
  <?php else: ?>
    <b>😀</b>
  <?php endif; ?>
</body>

</html>