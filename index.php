<?php

$controller = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$action = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = $controller . 'Controller';
require_once __DIR__ . '/controllers/' . $controllerClassName . '.php';

$ctrl = new $controllerClassName();
$method = 'action'.$action;
$ctrl->$method();