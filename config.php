<?php declare(strict_types=1);

//
define("ROOT_LEVEL", 0);
define("ADMIN_LEVEL", ROOT_LEVEL + 1);
define("REQUEST_PATH", strtok($_SERVER["REQUEST_URI"], "?"));
define("ROOT_DOMAIN", "");
define("ASSET", ROOT_DOMAIN . "/asset/");
define("UPLOADS", ROOT_DOMAIN . "/uploads/");

// Database config
define("DB_HOST", "db");
define("DB_NAME", "mrsixth");
define("DB_USER", "mrsixth");
define("DB_PASS", "123");

// MVC config
define("DEFAULT_CONTROLLER", __DIR__ . "/controller/");
define("ADMIN_CONTROLLER", __DIR__ . "/admin/controller/");
define("DEFAULT_VIEW", __DIR__ . "/view/");
define("ADMIN_VIEW", __DIR__ . "/admin/view/");
define("DEFAULT_LAYOUT", __DIR__ . "/layout/");
define("ADMIN_LAYOUT", __DIR__ . "/admin/layout/");

// Different from UPLOADS is: system path like C:\\xamp\\htdocs\\mrsixth
define("UPLOADS_FOLDER", __DIR__ . "/uploads/");
