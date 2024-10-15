<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números del 1 al 50</title>
    <style>
        body {
            display: flex;
            justify-content: space-between;
        }

        .container {
            margin: 20px;
        }
    </style>
</head>

<body>
    <a href="./index.html"><button>Regresar</button></a>
    <!-- . Crea un programa en PHP que recorra los números del 1 al 50 utilizando un
ciclo while. Si el número es divisible por 5, el programa debe mostrar un
mensaje indicando "Múltiplo de 5". Después, crea otro programa que permita
al usuario decidir de que numero a que numero y de que numero desea
buscar los múltiplos. -->

    <div class="container">
        <h2>Números del 1 al 50</h2>
        <?php
        $count = 1;
        while ($count <= 50) {
            echo $count;

            if ($count % 5 == 0) {
                echo " - Múltiplo de 5";
            }
            echo "<br/>";
            $count++;
        }
        ?>
    </div>

    <div class="container">
        <h2>Buscar Múltiplos</h2>
        <form method="post">
            <label for="inicio">Desde:</label>
            <input type="number" id="inicio" name="inicio" required>
            <br />
            <label for="fin">Hasta:</label>
            <input type="number" id="fin" name="fin" required>
            <br />
            <label for="multiplo">Múltiplo de:</label>
            <input type="number" id="multiplo" name="multiplo" required>
            <br />
            <input type="submit" value="Buscar Múltiplos">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inicio = intval($_POST['inicio']);
            $fin = intval($_POST['fin']);
            $multiplo = intval($_POST['multiplo']);

            echo "<h3>Múltiplos de $multiplo entre $inicio y $fin:</h3>";
            for ($i = $inicio; $i <= $fin; $i++) {
                if ($i % $multiplo == 0) {
                    echo $i . "<br/>";
                }
            }
        }
        ?>
    </div>
</body>

</html>