<?php
require "conexion.php";

$codPersona = $_POST["codPersona"];
$modificarCargo = $_POST["modificarCargo"];



$sql = "UPDATE v_cuentasper SET fk_rol = '$modificarCargo' WHERE codidentificacion='$codPersona'";
$resultado = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="vistas/img/plantilla/cooking.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>Actualizar cargos</title>
</head>

<body>
    <div class="container" style="display: flex; flex-direction: column;align-items: center;">
        <div class=" row">
            <h3>Actualizar cargos</h3>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <?php
                if ($resultado) { ?>
                    <h3>Cargo actualizada</h3>
                <?php
                } else { ?>
                    <h3>No se pudo actualizar</h3>
                <?php
                }
                ?>
                <div class="form-group">
                    <div class="col-sm-offset-2">
                        <a href="escogermiembros" class="btn btn-primary">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>