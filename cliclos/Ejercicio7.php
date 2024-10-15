<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for-if</title>
    <style>
        .prime {
            font-weight: bold;
            color: red;
        }
    </style>
</head>

<body>
    <a href="./index.html"><button>Regresar</button></a>
    <!--  Desarrolla un programa en PHP que utilice un ciclo for y una condición if
para generar una tabla de multiplicar de un número elegido por el usuario. Si
el resultado es un número primo, deberá resaltarse en la salid -->
    <?php
    $number = 0;

    // Verifica si se ha enviado el formulario
    if (isset($_POST['number'])) {
        $number = (int)$_POST['number'];
    }
    ?>

    <form method="post">
        <label for="number">Ingrese un número para la tabla de multiplicar:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Generar">
    </form>

    <?php
    if ($number > 0) {
        echo "<h2>Tabla de multiplicar de $number:</h2>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            // Verifica si el resultado es primo
            if (isPrime($result)) {
                echo "<li class='prime'>$number x $i = $result</li>";
            } else {
                echo "<li>$number x $i = $result</li>";
            }
        }
        echo "</ul>";
    }

    // Función para verificar si un número es primo
    function isPrime($num)
    {
        if ($num < 2) return false;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i === 0) return false;
        }
        return true;
    }
    ?>
</body>

</html>