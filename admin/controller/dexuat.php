<?php declare(strict_types=1);
    require_once('../dao/pdo.php');
    require_once('../dao/dexuat.php');
    function index() {
        
        global $getDeXuat;
        $getDeXuat = getAllDeXuat();
        return ADMIN_VIEW . 'dexuat/index.php';
    }

    function them() {
        return ADMIN_VIEW . 'dexuat/them.php';
    }

    function chitiet() {
        global $dexuat, $trangThai;
        $idDeXuat = $_GET['id_de_xuat'];
        $dexuat = getDeXuatById($idDeXuat);
        $trangThai = getTrangThai($idDeXuat);
        
        if(isset($_POST['status_1'])){
            updateTrangThai1($idDeXuat);
            header("Location: ".ROOT_DOMAIN."/admin/dexuat/chitiet?id_de_xuat=$idDeXuat");
        }
        if(isset($_POST['status_2'])){
            updateTrangThai2($idDeXuat);
            header("Location: ".ROOT_DOMAIN."/admin/dexuat/chitiet?id_de_xuat=$idDeXuat");
        }
        if(isset($_POST['status'])){
            updateTrangThai($idDeXuat);
            header("Location: ".ROOT_DOMAIN."/admin/dexuat/chitiet?id_de_xuat=$idDeXuat");
        }
        
        return ADMIN_VIEW . 'dexuat/chitiet.php';
    }

    function sua() {
        return ADMIN_VIEW . 'dexuat/sua.php';
    }

    function xoa() {
        
        return ADMIN_VIEW . 'dexuat/xoa.php';
    }

    function timkiem() {
        return ADMIN_VIEW . 'dexuat/timkiem.php';
    }