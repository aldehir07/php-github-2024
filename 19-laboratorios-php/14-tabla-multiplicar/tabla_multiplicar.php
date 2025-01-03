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
        <?php
        if (isset($_GET['numero'])) {
            $numero = (int)$_GET['numero'];
            echo "<h2 class='text-center'>Tabla de Multiplicar del $numero</h2>";
            echo "<table class='table table-bordered text-center mt-4'>";
            echo "<thead><tr><th>Operación</th><th>Resultado</th></tr></thead><tbody>";
            for ($i = 0; $i <= 12; $i++) {
                echo "<tr>";
                echo "<td>$numero x $i</td>";
                echo "<td>" . ($numero * $i) . "</td>";
                echo "</tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p class='text-center'>No se ha seleccionado ningún número.</p>";
        }
        ?>
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-secondary">Volver</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>