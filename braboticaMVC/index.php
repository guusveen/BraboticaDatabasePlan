<?php

require_once ( 'Controllers/Controller.php' );
require_once ( 'DB.php' );

$controller = "Home";
$action = "index";

if ( isset( $_GET['controller'] ) )
    $controller = $_GET['controller'];

if ( isset( $_GET['action'] ) )
    $action = $_GET['action'];
//$controller = new Controller('Task', 'index');
$controller = new Controller($controller, $action);

$controller->run();