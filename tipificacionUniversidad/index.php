<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/ruta.controlador.php";
require_once "controladores/administradores.controlador.php";
require_once "modelos/administradores.modelo.php";
require_once "controladores/subirArchivos.controlador.php";
require_once "modelos/subirArchivo.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
