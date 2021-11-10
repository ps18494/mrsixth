<?php declare(strict_types=1);

    require_once "../global.php";
    $controller = getRequestController(ADMIN_LEVEL, ADMIN_CONTROLLER);
    require_once ADMIN_CONTROLLER . $controller . '.php';
    $action = getRequestAction(ADMIN_LEVEL);

    call_user_func($action);