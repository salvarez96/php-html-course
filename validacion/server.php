<?php

$nombre = $_POST['nombre'];

if (isset($nombre) && !empty($nombre)) {
  echo "Hola $nombre!";
} else {
  echo "No enviaste nada 😾";
}

echo "\n";

if (isset($_POST['form'])) {
  echo "El formulario fue enviado";
} else {
  echo "No se ha enviado el formulario";
}

?>