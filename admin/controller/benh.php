<?php declare(strict_types=1);

    function index() {
        echo '<h1>Admin Benh index</h1>';
        require_once ADMIN_VIEW . 'benh/index.php';
    }

    function them() {
        echo '<h1>Admin Benh them</h1>';
        require_once ADMIN_VIEW . 'benh/them.php';
    }

    function chitiet() {
        echo '<h1>Admin Benh chitiet</h1>';
        require_once ADMIN_VIEW . 'benh/chitiet.php';
    }

    function sua() {
        echo '<h1>Admin Benh sua</h1>';
        require_once ADMIN_VIEW . 'benh/sua.php';
    }

    function xoa() {
        echo '<h1>Admin Benh xoa</h1>';
        require_once ADMIN_VIEW . 'benh/xoa.php';
    }

    function timkiem() {
        echo '<h1>Admin Benh timkiem</h1>';
        require_once ADMIN_VIEW . 'benh/timkiem.php';
    }