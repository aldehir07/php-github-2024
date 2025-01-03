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
        <h2 class="text-center">Generador de triangulo de Asteriscos</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Ingrese un valor N:</label>
                <input type="number" class="form-control" name="valor">
            </div>
            <button type="submit" class="btn btn-primary">Generar Triangulo</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor = $_POST['valor'];

            echo "<div class='mt-4'>";
            echo "<h4>Triángulo de Asteriscos:</h4>";
            echo "<pre>"; // Para mantener el formato del triángulo
            for ($i = 1; $i <= $valor; $i++) {
                echo str_repeat("*", $i) . "\n";
            }
            echo "</pre>";
            echo "</div>";
        }
        ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>