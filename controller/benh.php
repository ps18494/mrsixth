<?php declare(strict_types=1);

    require_once "dao/pdo.php";
    require_once "dao/benh.php";

    function index() {
        return DEFAULT_VIEW . 'benh/index.php';
    }

    function chitiet() {
        global $benh, $danhSachAnhBenh;
        $id_benh = $_GET['idbenh'] ?? NULL;

        if (!$id_benh) {
            // Tạm thời chuyển hướng đến trang chủ
            // TODO: thông báo không tìm thấy bệnh hoặc 404
            header("location: ". ROOT_DOMAIN);
        }
        $benh = getBenhById($id_benh);
        $danhSachAnhBenh = getAnhByIdBenh($id_benh);

        if (!$benh) {
            // Không có bệnh nào với idBenh truy vấn
            header("location: ". ROOT_DOMAIN);
        }

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