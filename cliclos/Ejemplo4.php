<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 1 - Números Pares</title>
    <style>
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

        td {
            background-color: #e6f7ff;
        }
    </style>
</head>

<body>
    <a href="./index.html"><button>Regresar</button></a>
    <h1 style="text-align:center;">Números Pares del 1 al 10</h1>
    <table>
        <tr>
            <th>Número</th>
        </tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo "<tr><td>$i</td></tr>";
            }
        }
        ?>
    </table>
</body>

</html>