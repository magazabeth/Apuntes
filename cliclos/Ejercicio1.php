<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números del 1 al n</title>
</head>

<body>
    <a href="./index.html"><button>Regresar</button></a>
    <h1>Generador de Números</h1>

    <form method="post">
        <label for="limite">Establece el límite (n):</label>
        <input type="number" id="limite" name="limite" required>
        <input type="submit" value="Generar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST['limite']); 

        echo "<h2>Números del 1 al $n:</h2>";
        for ($i = 1; $i <= $n; $i++) {
            echo "Número: $i";
     
            if ($i % 2 == 0) {
                echo " - Este número es par.";
            }
            echo "<br>"; 
        }
    }
    ?>
</body>

</html>