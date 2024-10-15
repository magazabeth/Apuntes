<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Giovany Galeana Memije">
    <title>FizzBuzz</title>
</head>

<body>
    <a href="./index.html"><button>Regresar</button></a>
    <h2>Ingrese el número hasta el cual desea generar números</h2>
    <form action="" method="post">
        <label for="">Ingrese un número:</label>
        <input type="number" name="numero" required>
        <input type="submit" value="ingreso">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $n = intval($_POST['numero']);
        for ($i = 1; $i <= $n; $i++) {
            $message = "";
            if ($i % 3 === 0) {
                $message = "Fizz";
            }
            if ($i % 5 === 0) {
                $message .= "Buzz";
            }
            echo $message ?: $i; // Imprime el mensaje o el número
            echo "<br>"; // Salto de línea
        }
    }
    ?>
</body>

</html>