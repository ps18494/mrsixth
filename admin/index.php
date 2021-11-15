<?php declare(strict_types=1);

    require_once "../global.php";
    $controller = getRequestController(ADMIN_LEVEL, ADMIN_CONTROLLER);
    require_once ADMIN_CONTROLLER . $controller . '.php';
    $action = getRequestAction(ADMIN_LEVEL);

    // Change view and title in controllers
    $VIEW = call_user_func($action) ?? ADMIN_VIEW . "home/index.php";
    $TITLE = "Trang quan tri - Mr.Sixth";

    require_once ADMIN_LAYOUT . "default.php";