<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Calcular el salario - 4</title>
</head>
<body>
    <div class="container mt-5">
        <h3 class="textt-center">Calculo de Salario Neto</h3>
        <form action="" method="post">
            <div class="mb-3">
                <label for="horas" class="form-label">Horas Trabajadas:</label>
                <input type="number" class="form-control" id="horas" name="horas" require>
            </div>
            <div class="mb-3">
                <label for="pago" class="form-label">Pago por Hora:</label>
                <input type="number" class="form-control" id="pago" name="pago" step="0.01" require>
            </div>
            <button type="submit" class="btn btn-primary">Calcular Salario Neto</button>
        </form>
    </div>

    <?php
        $htrabajadas = $_POST['horas'];
        $pagoh = $_POST['pago'];
        $desc = 0.2;

        $salarioB = $htrabajadas * $pagoh;
        $descuento = $desc * $salarioB;
        $salarioN = $salarioB - $descuento;

        echo "<div class='mt-4 p-3 bg-light border rounded'>";
        echo "<h4>Calculo Completo:</h4>";
        echo "<p>Salario Bruto: $" . number_format($salarioB, 2) . "</p>";
        echo "<p>Descuento (20%): $" . number_format($descuento, 2) . "</p>";
        echo "<p><strong>Salario Neto: $" . number_format($salarioN, 2) . "</strong></p>";
        echo "</div>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>