<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatorios con Suma</title>
    <style>
        /* Estilos generales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f8cdda, #1d2b64);
            /* Degradado de fondo */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        /* Contenedor principal */
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
            /* Sombra */
            max-width: 600px;
            width: 100%;
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        ul {
            list-style: none;
            padding: 0;
            counter-reset: item;
            /* Inicializar el contador para la lista */
        }

        li {
            background-color: #f4f4f4;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            /* Sombra */
            counter-increment: item;
            /* Incrementar el contador */
        }

        li::before {
            content: counter(item) ". ";
            /* Mostrar el número del contador */
            font-weight: bold;
            color: #3498db;
        }

        /* Estilo para la posición */
        .posicion {
            font-weight: bold;
            color: #e74c3c;
        }

        /* Estilo para la suma total */
        .suma-total {
            margin-top: 20px;
            font-size: 1.5rem;
            color: #27ae60;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Números Aleatorios</h1>
        <?php
        // Generar 10 números aleatorios menores de 100
        $numeros = array();
        $suma = 0; // Variable para almacenar la suma total
        for ($i = 0; $i < 10; $i++) {
            $numeros[] = rand(0, 99); // Generar número aleatorio entre 0 y 99
            $suma += $numeros[$i]; // Acumular la suma de los números
        }
        // Mostrar la lista con los números y su posición en el arreglo
        echo "<ul>";
        for ($i = 0; $i < count($numeros); $i++) {
            echo "<li>Número: " . $numeros[$i] . " <span class='posicion'>(Posición: 
$i)</span></li>";
        }
        echo "</ul>";
        // Mostrar la suma total
        echo "<div class='suma-total'>Suma total de los números: $suma</div>";
        ?>
    </div>
</body>

</html>