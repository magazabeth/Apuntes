<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do-while</title>
</head>

<body>
    <a href="./index.html"><button>Regresar</button></a>
    <?php
    $number = 0;
    $isValid = false;

    // Verifica si se ha enviado el formulario
    if (isset($_POST['number'])) {
        $number = (int)$_POST['number'];
    }

    // Ciclo do-while para validar el número
    do {
        if ($number < 1 || $number > 10) {
            echo '<p style="color: red;">Por favor, ingrese un número válido entre 1 y 10.</p>';
            break; // Sale del ciclo si el número es inválido
        } else {
            $isValid = true; // Marca el número como válido
        }
    } while (!$isValid);

    // Muestra el formulario
    echo '<form method="post">';
    echo 'Ingrese un número entre 1 y 10: ';
    echo '<input type="number" name="number" required>';
    echo '<input type="submit" value="Enviar">';
    echo '</form>';

    // Mensaje de éxito si el número es válido
    if ($isValid) {
        echo '<p>Gracias, has ingresado el número: ' . $number . '</p>';
    }
    ?>
</body>

</html>