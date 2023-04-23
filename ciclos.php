<?php

$usernames = ["Mr.Michi", "RataxMaster", "JuanDamian"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ciclos</title>
</head>

<body>
  <h1>Ciclos usando <code>for</code></h1>
  <ul>
    <?php for ($i = 0; $i < count($usernames); $i++): ?>
      <li>
        <?= $usernames[$i] ?>
      </li>
    <?php endfor; ?>
  </ul>
  <h1>Ciclos usando <code>foreach</code></h1>
  <ul>
    <?php foreach ($usernames as $username): ?>
      <li>
        <?= $username ?>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>