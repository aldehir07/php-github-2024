<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
        <div class="container mt-5">
                <h2 class="text-center">Cálculo de Calificación Final en Algoritmos</h2>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="parcial1" class="form-label">Calificación Parcial 1:</label>
                        <input type="number" class="form-control" id="parcial1" name="parcial1" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="parcial2" class="form-label">Calificación Parcial 2:</label>
                        <input type="number" class="form-control" id="parcial2" name="parcial2" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="parcial3" class="form-label">Calificación Parcial 3:</label>
                        <input type="number" class="form-control" id="parcial3" name="parcial3" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="examenFinal" class="form-label">Calificación del Examen Final:</label>
                        <input type="number" class="form-control" id="examenFinal" name="examenFinal" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label for="trabajoFinal" class="form-label">Calificación del Trabajo Final:</label>
                        <input type="number" class="form-control" id="trabajoFinal" name="trabajoFinal" step="0.01" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular Calificación Final</button>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $parcial1 = $_POST['parcial1'];
                    $parcial2 = $_POST['parcial2'];
                    $parcial3 = $_POST['parcial3'];
                    $examenFinal = $_POST['examenFinal'];
                    $trabajoFinal = $_POST['trabajoFinal'];

                    // Calcular promedio de parciales
                    $promedioParciales = ($parcial1 + $parcial2 + $parcial3) / 3;

                    // Calcular ponderaciones
                    $ponderacionParciales = $promedioParciales * 0.55;
                    $ponderacionExamenFinal = $examenFinal * 0.30;
                    $ponderacionTrabajoFinal = $trabajoFinal * 0.15;

                    // Calcular calificación final
                    $calificacionFinal = $ponderacionParciales + $ponderacionExamenFinal + $ponderacionTrabajoFinal;

                    echo "<div class='mt-4'>";
                    echo "<h4>Resultados:</h4>";
                    echo "<table class='table table-bordered'>";
                    echo "<thead>";
                    echo "<tr><th>Concepto</th><th>Valor</th></tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    echo "<tr><td>Promedio de Parciales</td><td>" . number_format($promedioParciales, 2) . "</td></tr>";
                    echo "<tr><td>Ponderación Parciales (55%)</td><td>" . number_format($ponderacionParciales, 2) . "</td></tr>";
                    echo "<tr><td>Ponderación Examen Final (30%)</td><td>" . number_format($ponderacionExamenFinal, 2) . "</td></tr>";
                    echo "<tr><td>Ponderación Trabajo Final (15%)</td><td>" . number_format($ponderacionTrabajoFinal, 2) . "</td></tr>";
                    echo "<tr><th>Calificación Final</th><th>" . number_format($calificacionFinal, 2) . "</th></tr>";
                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";
                }
                ?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>