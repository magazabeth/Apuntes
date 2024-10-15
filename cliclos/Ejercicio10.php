<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números entre n y x</title>
</head>

<body>
    <a href="./index.html"><button>Regresar</button></a>
    <?php
    $n = 0;
    $x = 0;
    $numbers = [];

    // Verifica si se ha enviado el formulario
    if (isset($_POST['n']) && isset($_POST['x'])) {
        $n = (int)$_POST['n'];
        $x = (int)$_POST['x'];

        // Asegúrate de que n sea menor que x
        if ($n <= $x) {
            for ($i = $n; $i <= $x; $i++) {
                $numbers[] = $i;
            }
        } else {
            echo '<p style="color: red;">El valor de n debe ser menor o igual que x.</p>';
        }
    }
    ?>

    <form method="post">
        <label for="n">Ingrese n:</label>
        <input type="number" name="n" id="n" required>
        <br>
        <label for="x">Ingrese x:</label>
        <input type="number" name="x" id="x" required>
        <br>
        <input type="submit" value="Visualizar Números">
    </form>

    <?php if (!empty($numbers)): ?>
        <h2>Números entre <?php echo $n; ?> y <?php echo $x; ?>:</h2>
        <p><?php echo implode(', ', $numbers); ?></p>
    <?php endif; ?>
</body>

</html>