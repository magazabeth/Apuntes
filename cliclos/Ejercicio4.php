<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Contraseña</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 300px;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <a href="./index.html"><button>Regresar</button></a>
    <h2>Ingrese la contraseña:</h2>

    <?php
    // Contraseña correcta
    $correctPassword = "segura123";
    $isPasswordCorrect = false;

    // Verificar si se ha enviado el formulario
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $inputPassword = $_POST['password'];

        // Ciclo para verificar la contraseña
        while (!$isPasswordCorrect) {
            if ($inputPassword === $correctPassword) {
                $isPasswordCorrect = true;
                echo "<p>Contraseña correcta. Acceso permitido.</p>";
            } else {
                echo "<p style='color:red;'>Contraseña incorrecta. Inténtalo de nuevo:</p>";
                echo '<form action="" method="post">
                        <input type="password" name="password" required>
                        <input type="submit" value="Enviar">
                      </form>';
                return; // Termina la ejecución aquí
            }
        }
    } else {
        // Muestra el formulario la primera vez
        echo '<form action="" method="post">
                <input type="password" name="password" required>
                <input type="submit" value="Enviar">
              </form>';
    }
    ?>
</body>

</html>