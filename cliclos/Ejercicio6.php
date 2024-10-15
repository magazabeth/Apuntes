<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Giovany Galeana Memije">
  <title>Ejercicio 1</title>
</head>

<body>
  <a href="./index.html"><button>Regresar</button></a>
  <!-- Escribe un programa en PHP que utilice un ciclo while para generar números
    aleatorios entre 1 y 100. El ciclo se debe detener cuando se genera un
    número divisible por 10 -->
  <?php
  do {
    $numeroAleatorio = rand(1, 100);
    echo $numeroAleatorio . "\n";
  } while ($numeroAleatorio % 10 != 0);
  ?>


</body>

</html>