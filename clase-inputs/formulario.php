<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos de input</title>
</head>

<body>
  <form action="./server.php" method="post" enctype="multipart/form-data">

    <!-- Input simple -->
    <!-- <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" id="nombre" /> -->

    <!-- Arreglos -->
    <!-- <label>Personas: </label>
    <input type="text" name="personas[]" />
    <input type="text" name="personas[]" />
    <input type="text" name="personas[]" /> -->

    <!-- Arreglos asociativos -->
    <!-- <label for="nombre">Nombre: </label>
    <input type="text" name="persona[nombre]" id="nombre" />
    <label for="email">Email: </label>
    <input type="email" name="persona[email]" id="email" />
    <label for="edad">Edad: </label>
    <input type="number" name="persona[edad]" id="edad" /> -->

    <!-- Checkbox -->
    <!-- <input type="checkbox" name="list1" value="value1" />
    <input type="checkbox" name="list2" value="value2" />
    <input type="checkbox" name="list3" value="value3" /> -->

    <!-- Radio -->
    <!-- <label for="mexico">Escoge tu país de origen: </label>
    <label for="mexico">México </label>
    <input type="radio" name="list" value="mexico" id="mexico" />

    <label for="colombia">Colombia </label>
    <input type="radio" name="list" value="colombia" id="colombia" />

    <label for="argentina">Argentina: </label>
    <input type="radio" name="list" value="argentina" id="argentina" /> -->

    <!-- Múltiples archivos -->
    <label for="galeria">Carga tus imágenes: </label>
    <input type="file" multiple name="galeria[]" id="galeria" enctype="multipart/form-data" />

    <button type="submit">Enviar formulario</button>
  </form>
</body>

</html>