<?php declare(strict_types=1);

    //
    define("ROOT_LEVEL", 1);
    define("ADMIN_LEVEL", ROOT_LEVEL + 1);

    // Database config
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'mrsixth');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    // MVC config
    define('DEFAULT_CONTROLLER', 'controller/');
    define('ADMIN_CONTROLLER', __DIR__ . '/admin/controller/');
    define('DEFAULT_VIEW', 'view/');
    define('ADMIN_VIEW', __DIR__ . '/admin/view/');