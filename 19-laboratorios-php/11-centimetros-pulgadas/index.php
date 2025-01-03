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
        <h2 class="text-center">Conversión de Centímetros a Pulgadas</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="centimetros" class="form-label">Centímetros:</label>
                <input type="number" class="form-control" id="centimetros" name="centimetros" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Convertir a Pulgadas</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $centimetros = $_POST['centimetros'];

            // Conversión de cm a pulgadas
            $pulgadas = $centimetros * 0.39737;

            echo "<div class='mt-4'>";
            echo "<h4>Resultados:</h4>";
            echo "<p>$centimetros cm equivale a " . number_format($pulgadas, 3) . " pulgadas.</p>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>