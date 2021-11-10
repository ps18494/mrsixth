<?php declare(strict_types=1);

    function index() {
        echo '<h1>Tin tức index</h1>';
        require_once DEFAULT_VIEW . 'tintuc/index.php';
    }

    function chitiet() {
        echo '<h1>Tin tức chitiet</h1>';
        require_once DEFAULT_VIEW . 'tintuc/chitiet.php';
    }