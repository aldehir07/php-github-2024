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
        <h2 class="text-center">Valor Cifrado</h2>
        <div class="text-center">
            <?php
            if (isset($_GET['hash'])) {
                $hash = $_GET['hash'];
                echo "<p>El valor cifrado es: <strong>$hash</strong></p>";
            } else {
                echo "<p>No se ha proporcionado ningún valor cifrado.</p>";
            }
            ?>
            <a href="index.php" class="btn btn-secondary mt-4">Volver</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>