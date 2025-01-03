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
        <h2 class="text-center">Cálculo del Costo del Proceso</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="horas" class="form-label">Horas:</label>
                <input type="number" class="form-control" id="horas" name="horas" required>
            </div>
            <div class="mb-3">
                <label for="minutos" class="form-label">Minutos:</label>
                <input type="number" class="form-control" id="minutos" name="minutos" required>
            </div>
            <div class="mb-3">
                <label for="segundos" class="form-label">Segundos:</label>
                <input type="number" class="form-control" id="segundos" name="segundos" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Costo</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $horas = $_POST['horas'];
            $minutos = $_POST['minutos'];
            $segundos = $_POST['segundos'];

            // Convertir todo a segundos
            $total_segundos = ($horas * 3600) + ($minutos * 60) + $segundos;

            // Costo por segundo
            $costo_por_segundo = 0.25;

            // Calcular el costo total
            $costo_total = $total_segundos * $costo_por_segundo;

            echo "<div class='mt-4'>";
            echo "<h4>Resultados:</h4>";
            echo "<p>Tiempo total en segundos: $total_segundos segundos</p>";
            echo "<p>Costo total del proceso: B/." . number_format($costo_total, 2) . "</p>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>