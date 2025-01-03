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
        <h2 class="text-center">Cálculo del Porcentaje de Alumnos y Alumnas</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="num_alumnos" class="form-label">Número de Alumnos:</label>
                <input type="number" class="form-control" id="num_alumnos" name="num_alumnos" required>
            </div>
            <div class="mb-3">
                <label for="num_alumnas" class="form-label">Número de Alumnas:</label>
                <input type="number" class="form-control" id="num_alumnas" name="num_alumnas" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Porcentajes</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num_alumnos = $_POST['num_alumnos'];
            $num_alumnas = $_POST['num_alumnas'];

            // Calcular el total de estudiantes
            $total_estudiantes = $num_alumnos + $num_alumnas;

            // Calcular los porcentajes
            $porcentaje_alumnos = ($num_alumnos / $total_estudiantes) * 100;
            $porcentaje_alumnas = ($num_alumnas / $total_estudiantes) * 100;

            echo "<div class='mt-4'>";
            echo "<h4>Resultados:</h4>";
            echo "<table class='table table-bordered'>";
            echo "<thead>";
            echo "<tr><th>Descripción</th><th>Porcentaje</th></tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr><td>Porcentaje de Alumnos</td><td>" . number_format($porcentaje_alumnos, 5) . "%</td></tr>";
            echo "<tr><td>Porcentaje de Alumnas</td><td>" . number_format($porcentaje_alumnas, 5) . "%</td></tr>";
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>