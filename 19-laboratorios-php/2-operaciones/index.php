<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 2 - Suma, Resta, Multiplicacion, Division</title>
</head>
<body>
    <h3>Calculadora</h3>
    <form action="" method="post">
        <label>Numero 1:</label>
        <input type="number" name="num1" require><br><br>

        <label>Numero 2:</label>
        <input type="number" name="num2" require><br><br>

        <input type="submit" value="Calcular">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            $suma = $num1 + $num2;
            $resta = $num1 - $num2;
            $multiplicacion = $num1 * $num2;
            $division = $num1 / $num2;

            echo "<h4>Resultados:</h4>";
            echo "Suma: <strong>" . $suma ."</strong>"."<br>";
            echo "Resta: <strong>" . $resta ."</strong>". "<br>";
            echo "Multiplicación: <strong>" . $multiplicacion ."</strong>". "<br>";
            echo "División: <strong>" . $division . "</strong>"."<br>";
        }
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>