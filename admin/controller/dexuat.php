<?php declare(strict_types=1);

    function index() {
        echo '<h1>Admin Dexuat index</h1>';
        require_once ADMIN_VIEW . 'dexuat/index.php';
    }

    function them() {
        echo '<h1>Admin Dexuat them</h1>';
        require_once ADMIN_VIEW . 'dexuat/them.php';
    }

    function chitiet() {
        echo '<h1>Admin Dexuat chitiet</h1>';
        require_once ADMIN_VIEW . 'dexuat/chitiet.php';
    }

    function sua() {
        echo '<h1>Admin Dexuat sua</h1>';
        require_once ADMIN_VIEW . 'dexuat/sua.php';
    }

    function xoa() {
        echo '<h1>Admin Dexuat xoa</h1>';
        require_once ADMIN_VIEW . 'dexuat/xoa.php';
    }

    function timkiem() {
        echo '<h1>Admin Dexuat timkiem</h1>';
        require_once ADMIN_VIEW . 'dexuat/timkiem.php';
    }