<?php
require_once __DIR__ . '/autoload.php';

$controller = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$action = isset($_GET['act']) ? $_GET['act'] : 'All';

$controller = ucfirst($controller);
$controller .= 'Controller';

$action = ucfirst($action);
$method = 'action' . $action;

session_start();

$ctrl = new $controller();
$ctrl->$method();