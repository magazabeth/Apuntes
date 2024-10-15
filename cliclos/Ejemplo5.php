<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 2 - Aprobados y Reprobados</title>
    <style>
        table {
            width: 60%;
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

        .aprobado {
            background-color: #c3e6cb;
        }

        .reprobado {
            background-color: #f5c6cb;
        }
    </style>
</head>

<body>
    <a href="./index.html"><button>Regresar</button></a>
    <h1 style="text-align:center;">Lista de Estudiantes</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Calificación</th>
            <th>Estado</th>
        </tr>
        <?php
        $estudiantes = [
            "Carlos" => 85,
            "Ana" => 40,
            "Luis" => 75,
            "Marta" => 55,
            "Pedro" => 92,
        ];
        foreach ($estudiantes as $nombre => $calificacion) {
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$calificacion</td>";
            if ($calificacion >= 60) {
                echo "<td class='aprobado'>Aprobado</td>";
            } else {
                echo "<td class='reprobado'>Reprobado</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>