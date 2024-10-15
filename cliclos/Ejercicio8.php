<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
</head>

<body>
    <a href="./index.html"><button>Regresar</button></a>
    <?php
    $grades = [];
    $numStudents = 0;

    // Verifica si se ha enviado el primer formulario
    if (isset($_POST['numStudents'])) {
        $numStudents = (int)$_POST['numStudents'];
    }

    // Verifica si se ha enviado el formulario de calificaciones
    if (isset($_POST['grades'])) {
        $grades = array_map('floatval', $_POST['grades']);
    }
    ?>

    <form method="post">
        <label for="numStudents">Número de alumnos:</label>
        <input type="number" name="numStudents" id="numStudents" required>
        <input type="submit" value="Enviar">
    </form>

    <?php if ($numStudents > 0): ?>
        <form method="post">
            <input type="hidden" name="numStudents" value="<?php echo $numStudents; ?>">
            <input type="hidden" name="grades[]" value="">
            <?php for ($i = 1; $i <= $numStudents; $i++): ?>
                <label for="grade<?php echo $i; ?>">Calificación del alumno <?php echo $i; ?>:</label>
                <input type="number" name="grades[]" min="0" max="100" required>
                <br>
            <?php endfor; ?>
            <input type="submit" value="Calcular">
        </form>
    <?php endif; ?>

    <?php
    if (!empty($grades)) {
        $passed = 0;
        $failed = 0;
        $totalGrades = 0;

        foreach ($grades as $grade) {
            if ($grade >= 60) {
                $passed++;
            } else {
                $failed++;
            }
            $totalGrades += $grade;
        }

        $totalStudents = $passed + $failed;
        $passPercentage = ($passed / $totalStudents) * 100;
        $failPercentage = ($failed / $totalStudents) * 100;
        $average = $totalGrades / $totalStudents;

        echo "<h2>Resultados:</h2>";
        echo "<p>Alumnos aprobados: $passed</p>";
        echo "<p>Alumnos reprobados: $failed</p>";
        echo "<p>Porcentaje de aprobados: " . number_format($passPercentage, 2) . "%</p>";
        echo "<p>Porcentaje de reprobados: " . number_format($failPercentage, 2) . "%</p>";
        echo "<p>Promedio del grupo: " . number_format($average, 2) . "</p>";
    }
    ?>
</body>

</html>