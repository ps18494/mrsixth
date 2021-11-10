<?php declare(strict_types=1);

    require_once "global.php";
    $controller = getRequestController(ROOT_LEVEL, DEFAULT_CONTROLLER);
    require_once DEFAULT_CONTROLLER . $controller . '.php';
    $action = getRequestAction(ROOT_LEVEL);

    call_user_func($action);