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
            /* Degradado de fondo 
*/
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
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        /* Estilos para la lista */
        ul {
            list-style: none;
            /* Eliminar viñetas de la lista */
            padding: 0;
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
            /* Sombra en cada elemento */
            transition: transform 0.2s ease-in-out;
            /* Transición al pasar el ratón */
        }

        /* Animación y hover */
        li:hover {
            transform: scale(1.05);
            /* Aumenta ligeramente el tamaño al pasar el ratón */
            background-color: #eaeaea;
        }

        /* Estilos para los números */
        li::before {
            content: counter(item) ". ";
            /* Agregar números antes de cada nombre */
            counter-increment: item;
            /* Incrementar el contador */
            font-weight: bold;
            color: #3498db;
        }

        /* Icono al lado del nombre */
        .icon {
            background-color: #3498db;
            color: white;
            padding: 10px;
            border-radius: 50%;
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Lista de Estudiantes</h1>
        <?php
        // Definir un arreglo asociativo con nombre y apellido paterno de estudiantes
        $estudiantes = array(
            array("nombre" => "Ana", "apellido" => "García"),
            array("nombre" => "Carlos", "apellido" => "Pérez"),
            array("nombre" => "Luis", "apellido" => "Martínez"),
            array("nombre" => "María", "apellido" => "Hernández"),
            array("nombre" => "Pedro", "apellido" => "Rodríguez")
        );
        // Abrir una lista HTML
        echo "<ul>";
        // Recorrer el arreglo con un ciclo foreach para mostrar nombre y apellido
        foreach ($estudiantes as $estudiante) {
            // Imprimir el nombre completo dentro de un elemento de lista HTML
            echo "<li><span class='icon'> </span> " . $estudiante['nombre'] . " " .
                $estudiante['apellido'] . "</li>";
        }
        // Cerrar la lista HTML
        echo "</ul>";
        ?>
    </div>
</body>

</html>