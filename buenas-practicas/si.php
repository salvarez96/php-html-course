<?php

$tablaDel9 = [];
for ($i = 1; $i <= 10; $i++) {
  $result = 9 * $i;
  $text = "9 x $i = $result";
  array_push($tablaDel9, $text);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Haz esto</title>
</head>

<body>

  <h1>Tabla del 9</h1>
  <ul>
    <?php foreach ($tablaDel9 as $result): ?>
      <li>
        <?= $result ?>
      </li>
    <?php endforeach; ?>
  </ul>

</body>

</html>