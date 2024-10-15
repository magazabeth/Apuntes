<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Múltiplos de 3</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4b084;
        }

        td {
            background-color: #fce4d6;
        }
    </style>
</head>

<body>
    <a href="./index.html"><button>Regresar</button></a>
    <h1 style="text-align: center;">Múltiplos de 3</h1>
    <table>
        <tr>
            <th>Múltiplo</th>
            <th>Resultado</th>
        </tr>
        <?php
        $num = 1;
        while ($num <= 10) {
            $resultado = $num * 3;
            echo "<tr><td>$num</td><td>$resultado</td></tr>";
            $num++;
        }
        ?>
    </table>
</body>

</html>