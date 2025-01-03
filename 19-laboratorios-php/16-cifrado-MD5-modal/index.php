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
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= 100; $i++): ?>
                    <?php $hash = md5($i); ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $hash; ?></td>
                        <td>
                            <!-- Botón para abrir el modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?php echo $i; ?>">
                                Ver Valor Cifrado
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal<?php echo $i; ?>" tabindex="-1" aria-labelledby="modalLabel<?php echo $i; ?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel<?php echo $i; ?>">Valor Cifrado para el Número <?php echo $i; ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong><?php echo $hash; ?></strong></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>