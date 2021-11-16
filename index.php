<?php declare(strict_types=1);

    require_once "global.php";
    $controller = getRequestController(ROOT_LEVEL, DEFAULT_CONTROLLER);
    require_once DEFAULT_CONTROLLER . $controller . '.php';
    $action = getRequestAction(ROOT_LEVEL);

    // Change view in controllers by RETURN file path
    $VIEW = call_user_func($action) ?? DEFAULT_VIEW . "home/index.php";
    $TITLE = "Mr. Sixth"; 


    // Branch chinh_sua_index

    require_once DEFAULT_LAYOUT . "default.php";