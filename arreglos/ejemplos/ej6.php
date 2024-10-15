<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <style>
        /* Estilos generales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
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
            max-width: 600px;
            width: 100%;
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        /* Estilos para el formulario */
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 20px;
        }

        input[type="number"],
        input[type="text"] {
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        /* Estilos para la lista */
        ul {
            list-style: none;
            padding: 0;
            counter-reset: item;
        }

        li {
            background-color: #f4f4f4;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
            counter-increment: item;
        }

        li:hover {
            transform: scale(1.05);
            background-color: #eaeaea;
        }

        li::before {
            content: counter(item) ". ";
            font-weight: bold;
            color: #3498db;
            margin-right: 10px;
        }

        .icon {
            background-color: #3498db;
            color: white;
            padding: 10px;
            border-radius: 50%;
            font-size: 1.2rem;
        }

        .posicion {
            font-weight: bold;
            color: #e74c3c;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Lista de Estudiantes</h1>
        <?php
        // Paso 1: Verificar si ya se enviaron datos del formulario
        if (!isset($_POST['cantidad']) && !isset($_POST['nombres'])) {
            // Si no se ha enviado ningún dato, mostramos el formulario inicial
        ?>
            <form method="post">
                <label for="cantidad">¿Cuántos estudiantes deseas ingresar?</label>
                <input type="number" id="cantidad" name="cantidad" min="1" required>
                <input type="submit" value="Continuar">
            </form>
        <?php
        } elseif (isset($_POST['cantidad']) && !isset($_POST['nombres'])) {
            // Paso 2: Mostrar formulario para ingresar nombres y apellidos
            $cantidad = (int)$_POST['cantidad']; // Sanitize input
        ?>
            <form method="post">
                <input type="hidden" name="cantidad" value="<?php echo $cantidad; ?>">
                <?php
                for ($i = 1; $i <= $cantidad; $i++) {
                    echo "<label for='nombre_$i'>Nombre del Estudiante $i:</label>";
                    echo "<input type='text' id='nombre_$i' name='nombres[]' placeholder='Nombre' required autocomplete='off'>";
                    echo "<label for='apellido_$i'>Apellido Paterno del Estudiante $i:</label>";
                    echo "<input type='text' id='apellido_$i' name='apellidos[]' placeholder='Apellido Paterno' required autocomplete='off'>";
                }
                ?>
                <input type="submit" value="Guardar Estudiantes">
            </form>
        <?php
        } elseif (isset($_POST['nombres']) && isset($_POST['apellidos'])) {
            // Paso 3: Procesar datos y mostrar la lista
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            echo "<ul>";
            for ($i = 0; $i < count($nombres); $i++) {
                echo "<li><span class='icon'> </span>" . htmlspecialchars($nombres[$i]) . " " . htmlspecialchars($apellidos[$i]) . " <span class='posicion'>(Posición en arreglo: $i)</span></li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</body>

</html>