<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 3 - Calcular el area de un circulo</title>
</head>
<body>
    
    <div class="container mt-5">
        <h3 class="text-center">Area de un circulo</h3>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="post" class="card p-4 shadow-sm">
                    <div class="mb-3">
                        <label>Introduce el radio: </label>
                        <input type="number" name="radio"><br><br>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Calcular Area</button>
                    
                </form>   
                <hr>
                <div class="mt-4 text-center">
                    <?php
                    $radio = $_POST["radio"];
                    $area;
                    

                    if(!empty($radio) && $radio > 0){
                        define('PI', 3.1416);
                        $area = PI * pow($radio, 2);

                        echo "El area de un circulo con ud radio de {$radio} es: ".$area;
                    }else{
                        echo "Por favor, introduce un valor de radio valido";
                    }
                    ?>
                </div> 
            </div>
            
        </div>
            
            
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>