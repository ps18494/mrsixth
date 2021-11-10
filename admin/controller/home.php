<?php declare(strict_types=1);

    function index() {
        echo '<h1>Admin Home</h1>';
        require_once ADMIN_VIEW . 'home/index.php';
    }