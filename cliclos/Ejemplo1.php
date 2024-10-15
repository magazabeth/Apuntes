<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Números</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        ul {
            list-style-type: none;
        }

        li {
            padding: 5px;
            margin: 5px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <a href="./index.html"><button>Regresar</button></a>
    <h1>Lista de Números del 1 al 10</h1>
    <ul>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<li>Número: $i</li>";
        }
        ?>
    </ul>
</body>

</html>