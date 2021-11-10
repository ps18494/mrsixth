<?php declare(strict_types=1);

    function index() {
        echo '<h1>User index</h1>';
        require_once DEFAULT_VIEW . 'user/index.php';
    }

    function thembenh() {
        echo '<h1>User thembenh</h1>';
        require_once DEFAULT_VIEW . 'user/thembenh.php';
    }

    function follows() {
        echo '<h1>User follows</h1>';
        require_once DEFAULT_VIEW . 'user/follows.php';
    }

    function info() {
        echo '<h1>User info</h1>';
        require_once DEFAULT_VIEW . 'user/info.php';
    }

    function changepassword() {
        echo '<h1>User changepassword</h1>';
        require_once DEFAULT_VIEW . 'user/changepassword.php';
    }