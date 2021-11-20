<?php declare(strict_types=1);

    require_once "dao/pdo.php";
    require_once "dao/benh.php";

    function index() {
        return DEFAULT_VIEW . 'benh/index.php';
    }

    function chitiet() {
        return DEFAULT_VIEW . 'benh/chitiet.php';
    }

    function timkiem() {
        global $query, $danhSachBenh;
        $query = $_GET['q'] ?? NULL;
        
        if (!$query)
        {
            $danhSachBenh = [];
        }
        elseif (is_array($query))
        {
            $danhSachBenh = searchBenhByDanhSachTrieuChung($query);
            $query = implode(",", $query); // Query để hiển thị ra view ngăn cách bởi dấu phẩy
        }
        else 
        {
            $danhSachBenh = searchBenhByTrieuChung($query);
        }

        return DEFAULT_VIEW . 'benh/timkiem.php';
    }