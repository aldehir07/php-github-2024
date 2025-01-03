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
        <h2 class="text-center">Cálculo del Porcentaje de Inversión</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="inversion1" class="form-label">Inversión de la Persona 1:</label>
                <input type="number" class="form-control" id="inversion1" name="inversion1" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="inversion2" class="form-label">Inversión de la Persona 2:</label>
                <input type="number" class="form-control" id="inversion2" name="inversion2" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="inversion3" class="form-label">Inversión de la Persona 3:</label>
                <input type="number" class="form-control" id="inversion3" name="inversion3" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Porcentajes</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inversion1 = $_POST['inversion1'];
            $inversion2 = $_POST['inversion2'];
            $inversion3 = $_POST['inversion3'];

            // Calcular la suma total de las inversiones
            $totalInversion = $inversion1 + $inversion2 + $inversion3;

            // Calcular los porcentajes de inversión
            $porcentaje1 = ($inversion1 / $totalInversion) * 100;
            $porcentaje2 = ($inversion2 / $totalInversion) * 100;
            $porcentaje3 = ($inversion3 / $totalInversion) * 100;

            echo "<div class='mt-4'>";
            echo "<h4>Resultados:</h4>";
            echo "<table class='table table-bordered'>";
            echo "<thead>";
            echo "<tr><th>Persona</th><th>Inversión</th><th>Porcentaje</th></tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr><td>Persona 1</td><td>$" . number_format($inversion1, 2) . "</td><td>" . number_format($porcentaje1, 2) . "%</td></tr>";
            echo "<tr><td>Persona 2</td><td>$" . number_format($inversion2, 2) . "</td><td>" . number_format($porcentaje2, 2) . "%</td></tr>";
            echo "<tr><td>Persona 3</td><td>$" . number_format($inversion3, 2) . "</td><td>" . number_format($porcentaje3, 2) . "%</td></tr>";
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>