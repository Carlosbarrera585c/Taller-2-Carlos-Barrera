<?php

include_once '../../librerias/dataBaseClass.php';
include_once 'controller/controllerClass.php';
include_once 'view/viewClass.php';
include_once 'model/modelClass.php';

// inicializamos el controlador
$controller = new controllerClass();
$controller->index();
?>