<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 3 - Tabla de Multiplicar Dinámica</title>
    <style>
        form {
            text-align: center;
            margin: 20px;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <a href="./index.html"><button>Regresar</button></a>
    <h1 style="text-align:center;">Generar Tabla de Multiplicar</h1>
    <form method="POST">
        <label for="numero">Número:</label>
        <input type="number" name="numero" id="numero" required>
        <label for="rango">Rango:</label>
        <input type="number" name="rango" id="rango" required>
        <button type="submit">Generar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $rango = $_POST["rango"];
        if ($rango > 0) {
            echo "<table>";
            echo "<tr><th>Multiplicación</th><th>Resultado</th></tr>";
            for ($i = 1; $i <= $rango; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p style='text-align:center;color:red;'>El rango debe ser mayor que
0</p>";
        }
    }
    ?>
</body>

</html>