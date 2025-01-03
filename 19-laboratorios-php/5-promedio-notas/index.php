<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Calcular promedio de Nota</title>
</head>
<body>
        <div class="container mt-5">
            <h2 class="text-center">Cálculo del Promedio de Calificaciones</h2>
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Alumno:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="calificacion1" class="form-label">Calificación 1:</label>
                    <input type="number" class="form-control" id="calificacion1" name="calificacion1" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="calificacion2" class="form-label">Calificación 2:</label>
                    <input type="number" class="form-control" id="calificacion2" name="calificacion2" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="calificacion3" class="form-label">Calificación 3:</label>
                    <input type="number" class="form-control" id="calificacion3" name="calificacion3" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="calificacion4" class="form-label">Calificación 4:</label>
                    <input type="number" class="form-control" id="calificacion4" name="calificacion4" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="calificacion5" class="form-label">Calificación 5:</label>
                    <input type="number" class="form-control" id="calificacion5" name="calificacion5" step="0.01" required>
                </div>
                <button type="submit" class="btn btn-primary">Calcular Promedio</button>
            </form>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nombre = $_POST['nombre'];
                    $calificacion1 = $_POST['calificacion1'];
                    $calificacion2 = $_POST['calificacion2'];
                    $calificacion3 = $_POST['calificacion3'];
                    $calificacion4 = $_POST['calificacion4'];
                    $calificacion5 = $_POST['calificacion5'];

                    // Calcular promedio
                    $promedio = ($calificacion1 + $calificacion2 + $calificacion3 + $calificacion4 + $calificacion5) / 5;

                    echo "<div class='mt-4 p-3 bg-light border rounded'>";
                    echo "<h4>Resultados:</h4>";
                    echo "<p>Nombre del Alumno: " . htmlspecialchars($nombre) . "</p>";
                    echo "<p><strong>Promedio de Calificaciones: " . number_format($promedio, 2) . "</strong></p>";
                    echo "</div>";
                }
            ?>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>