<?php declare(strict_types=1);

    function index() {
        echo "Benh Index";
        require_once DEFAULT_VIEW . 'benh/index.php';
    }

    function chitiet() {
        echo "Benh ChiTiet";
        require_once DEFAULT_VIEW . 'benh/chitiet.php';
    }

    function timkiem() {
        echo "Benh TimKiem";
        require_once DEFAULT_VIEW . 'benh/timkiem.php';
    }