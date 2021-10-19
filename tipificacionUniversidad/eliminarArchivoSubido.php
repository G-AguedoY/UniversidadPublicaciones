<?php
require "conexion.php";

$codArchivo = $_GET['codArchivo'];
$sql = "DELETE FROM publicarachivo WHERE fk_arch = '$codArchivo'";
$resultado = $mysqli->query($sql);

$sql2 = "DELETE FROM archivo WHERE codarchivo = '$codArchivo'";
$resultado2 = $mysqli->query($sql2);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>Eliminar archivo</title>
</head>

<body>
    <div class="container" style="display: flex; flex-direction: column;align-items: center;">
        <div class=" row">
            <h3>Eliminar archivo</h3>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="vistas/img/plantilla/fc.png" class="card-img-top" alt="...">
            <div class="card-body">
                <?php
                if ($resultado) { ?>
                    <h3>archivo eliminado</h3>
                <?php
                } else { ?>
                    <h3>No se pudo eliminar</h3>
                <?php
                }
                ?>
                <div class="form-group">
                    <div class="col-sm-offset-2">
                        <a href="subirarchivos" class="btn btn-primary">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>