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
        <h2 class="text-center">Números del 0 al 12</h2>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i <= 12; $i++): ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td>
                            <form action="tabla_multiplicar.php" method="GET">
                                <input type="hidden" name="numero" value="<?php echo $i; ?>">
                                <button type="submit" class="btn btn-primary">Ver Tabla de Multiplicar</button>
                            </form>
                        </td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>