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
        <h2 class="text-center">Distribución del Presupuesto del Hospital</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="presupuesto" class="form-label">Monto Presupuestal Anual:</label>
                <input type="number" class="form-control" id="presupuesto" name="presupuesto" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Distribución</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $presupuesto = $_POST['presupuesto'];

            // Calcular la distribución del presupuesto
            $ginecologia = $presupuesto * 0.40;
            $traumatologia = $presupuesto * 0.30;
            $pediatria = $presupuesto * 0.30;

            echo "<div class='mt-4'>";
            echo "<h4>Resultados:</h4>";
            echo "<table class='table table-bordered'>";
            echo "<thead>";
            echo "<tr><th>Área</th><th>Porcentaje</th><th>Monto Asignado</th></tr>";
            echo "</thead>";
            echo "<tbody>";
            echo "<tr><td>Ginecología</td><td>40%</td><td>$" . number_format($ginecologia, 2) . "</td></tr>";
            echo "<tr><td>Traumatología</td><td>30%</td><td>$" . number_format($traumatologia, 2) . "</td></tr>";
            echo "<tr><td>Pediatría</td><td>30%</td><td>$" . number_format($pediatria, 2) . "</td></tr>";
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>