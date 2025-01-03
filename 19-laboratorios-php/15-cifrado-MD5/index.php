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
        <h2 class="text-center">Números del 1 al 100 con Cifrado MD5</h2>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Valor Cifrado (MD5)</th>
                    <th>Vínculo</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= 100; $i++): ?>
                    <?php $hash = md5($i); ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $hash; ?></td>
                        <td><a href="ver_cifrado.php?hash=<?php echo $hash; ?>" class="btn btn-primary">Ver Valor Cifrado</a></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>