<?php
require_once 'init.php';
//session_start();
// include Config

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if ($controller) {
    $controller->executeAction();
}
