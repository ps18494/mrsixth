<?php declare(strict_types=1);

    function index() {
        echo '<h1>Admin User index</h1>';
        require_once ADMIN_VIEW . 'user/index.php';
    }

    function them() {
        echo '<h1>Admin User them</h1>';
        require_once ADMIN_VIEW . 'user/them.php';
    }

    function chitiet() {
        echo '<h1>Admin User chitiet</h1>';
        require_once ADMIN_VIEW . 'user/chitiet.php';
    }

    function sua() {
        echo '<h1>Admin User sua</h1>';
        require_once ADMIN_VIEW . 'user/sua.php';
    }

    function xoa() {
        echo '<h1>Admin User xoa</h1>';
        require_once ADMIN_VIEW . 'user/xoa.php';
    }

    function timkiem() {
        echo '<h1>Admin User timkiem</h1>';
        require_once ADMIN_VIEW . 'user/timkiem.php';
    }