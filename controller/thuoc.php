<?php declare(strict_types=1);

    function index() {
        echo "Thuoc Index";
        require_once DEFAULT_VIEW . 'thuoc/index.php';
    }

    function chitiet() {
        echo "Thuoc ChiTiet";
        require_once DEFAULT_VIEW . 'thuoc/chitiet.php';
    }

    function timkiem() {
        echo "Thuoc TimKiem";
        require_once DEFAULT_VIEW . 'thuoc/timkiem.php';
    }