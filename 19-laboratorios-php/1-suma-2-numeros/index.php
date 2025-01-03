<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Suma de dos numeros flotantes</title>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Resultado de la Suma</h3>
            </div>
            <div class="card-body">
                <?php 
                    $n1 = 10.4;
                    $n2 = 5.6;
                    $r;

                    $r = $n1 + $n2;

                    echo "<p class='text-center'>El resultado de la suma es: <strong>".$r."</strong></p>";
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>