<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo o No</title>
</head>

<body>
    <a href="./index.html"><button>Regresar</button></a>
    <?php
    $number = 0;
    $isPrime = null;

    // Verifica si se ha enviado el formulario
    if (isset($_POST['number'])) {
        $number = (int)$_POST['number'];
        $isPrime = isPrime($number);
    }

    // Función para verificar si un número es primo
    function isPrime($num)
    {
        if ($num < 2) return false;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i === 0) return false;
        }
        return true;
    }
    ?>

    <form method="post">
        <label for="number">Ingrese un número:</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Verificar">
    </form>

    <?php if ($isPrime !== null): ?>
        <h2>Resultado:</h2>
        <?php if ($isPrime): ?>
            <p><?php echo $number; ?> es un número primo.</p>
        <?php else: ?>
            <p><?php echo $number; ?> no es un número primo.</p>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>