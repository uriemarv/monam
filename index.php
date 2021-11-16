<?php
//const SERVERURL = "http://localhost:8888/cms1.8/tmp/ayc/vistas/modulos/";
date_default_timezone_set('America/Bogota');

require_once "modelo/conexion.php";
require_once "modelo/enlaces.php";

require_once "controlador/controlador.php";


// Cargue de plantilla
$mvc = new MvcController();
$mvc -> pagina();