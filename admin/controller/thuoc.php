<?php declare(strict_types=1);

    function index() {
        echo '<h1>Admin Thuoc index</h1>';
        require_once ADMIN_VIEW . 'thuoc/index.php';
    }

    function them() {
        echo '<h1>Admin Thuoc them</h1>';
        require_once ADMIN_VIEW . 'thuoc/them.php';
    }

    function chitiet() {
        echo '<h1>Admin Thuoc chitiet</h1>';
        require_once ADMIN_VIEW . 'thuoc/chitiet.php';
    }

    function sua() {
        echo '<h1>Admin Thuoc sua</h1>';
        require_once ADMIN_VIEW . 'thuoc/sua.php';
    }

    function xoa() {
        echo '<h1>Admin Thuoc xoa</h1>';
        require_once ADMIN_VIEW . 'thuoc/xoa.php';
    }

    function timkiem() {
        echo '<h1>Admin Thuoc timkiem</h1>';
        require_once ADMIN_VIEW . 'thuoc/timkiem.php';
    }