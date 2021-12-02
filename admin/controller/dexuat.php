<?php declare(strict_types=1);
    require_once('../dao/pdo.php');
    require_once('../dao/dexuat.php');
    require_once "../dao/thongbao.php";
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
        
        $subject = "Phản hồi đề xuất chỉnh sửa bệnh: %s";

        if(isset($_POST['status_1'])){
            updateTrangThai1($idDeXuat);
            $subject = sprintf($subject, $dexuat['ten_benh']);
            $content = "Đề xuất của bạn đã được duyệt. Kiểm tra tại <a href=\"%s/benh/chitiet/?idbenh=%s\">%s</a>";
            $content = sprintf($content, ROOT_DOMAIN, $dexuat['id_benh'], $dexuat['ten_benh']);
            insertThongBao($subject, $content, date("Y-m-d H:i:s"), $dexuat['id_user']);
            header("Location: ".ROOT_DOMAIN."/admin/dexuat/chitiet?id_de_xuat=$idDeXuat");
        }
        if(isset($_POST['status_2'])){
            updateTrangThai2($idDeXuat);
            $subject = sprintf($subject, $dexuat['ten_benh']);
            $content = "Cảm ơn bạn đã chỉnh sửa nhưng đề xuất của bạn bị từ chối với lí do sau đây: ... . Hoặc kiểm tra lại đề xuất tại <a href=\"%s/user/chitietdexuat/?id_de_xuat=%s'\">Đề xuất: %s</a>";
            $content = sprintf($content, ROOT_DOMAIN, $dexuat['id_de_xuat'], $dexuat['ten_benh']);
            insertThongBao($subject, $content, date("Y-m-d H:i:s"), $dexuat['id_user']);
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