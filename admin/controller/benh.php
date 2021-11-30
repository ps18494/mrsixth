<?php declare(strict_types=1);
    require_once('../dao/pdo.php');
    require_once('../dao/benh.php');
    function index() {
        //phân trang
        $pagesize = 7;
        $star = 0;
        
        global $page, $items;
        $page = 1;
        if (isset($_GET["page"]) == true) {
        $page = $_GET["page"];
        }
        $star = ($page - 1) * $pagesize;
        global $dstintuc;
        $demtintuc = countBenh(); //đếm số tim có trong db
        global $tongTrang;

        settype($tongTrang, "int");
        $tongTrang = ceil($demtintuc / $pagesize);
        global $from, $to;
        $from = $page - 3;
        if ($from < 1) {
            $from = 1;
        }
        $to = $page + 5;
        if ($to > $tongTrang) {
            $to = $tongTrang;
        }
        //end phân trang; 
        $items = getAllBenh($star, $pagesize);
        return ADMIN_VIEW . 'benh/index.php';
        }

    function them() {
        if(isset($_POST['them_benh']) && $_POST['them_benh']){
            global $erros, $tenBenh, $moTa;
            $erros = array();
            if(empty($_POST['ten_benh'])){
                $erros['ten_benh']  = "Chưa nhập tên bệnh";
            }else{
                $tenBenh            = $_POST['ten_benh'];
            }
            
            if(!empty(checkExistBenhByTen($tenBenh))){
                $erros['ten_benh']  = "Bệnh đã tồn tại";
            }
            
            if(empty($_POST['mo_ta'])){
                $erros['mo_ta']     = "Chưa nhập nhập mô tả bệnh";
            }else{
                $moTa               = $_POST['mo_ta'];
            }
            $trieuChung     = $_POST['trieu_chung'];
            $nguyenNhan     = $_POST['nguyen_nhan'];
            $phongNgua      = $_POST['phong_ngua'];
            $duongLayTruyen = $_POST['duong_lay_truyen'];
            $doiTuong       = $_POST['doi_tuong'];
            $chanDoan       = $_POST['chuan_doan'];
            $dieuTri        = $_POST['dieu_tri'];
            if(empty($erros)){
                insertBenh($tenBenh, $moTa, $trieuChung, $nguyenNhan, $phongNgua, $duongLayTruyen, $doiTuong, $chanDoan, $dieuTri);
            }
        }
        return ADMIN_VIEW . 'benh/them.php';
    }

    function chitiet() {
        return ADMIN_VIEW . 'benh/chitiet.php';
    }

    function sua() {
        global $getbenhbyid;
        $id = $_GET['id_benh'];
        $getbenhbyid = getBenhById($id);
            
        if(isset($_POST['capnhat']) && $_POST['capnhat']){
            $id             = $_POST['id_benh'];
            global $erros, $tenBenh, $moTa;
            $erros = array();
            $tenBenh        = $_POST['ten_benh'];
            $moTa           = $_POST['mo_ta'];
            
            $trieuChung     = $_POST['trieu_chung'];
            $nguyenNhan     = $_POST['nguyen_nhan'];
            $phongNgua      = $_POST['phong_ngua'];
            $duongLayTruyen = $_POST['duong_lay_truyen'];
            $doiTuong       = $_POST['doi_tuong'];
            $chanDoan       = $_POST['chuan_doan'];
            $dieuTri        = $_POST['dieu_tri'];
            updateBenh($tenBenh, $moTa, $trieuChung, $nguyenNhan, $phongNgua, $duongLayTruyen, $doiTuong, $chanDoan, $dieuTri, $id);
            header("Location: ".ROOT_DOMAIN."/admin/benh/sua?id_benh=".$id);
        }
        
        return ADMIN_VIEW . 'benh/sua.php';
    }

    function xoa() {
        $id = $_GET['id_benh'];
        deleteBenh($id);
        index();
        return ADMIN_VIEW . 'benh/index.php';
    }

    function timkiem() {
        return ADMIN_VIEW . 'benh/timkiem.php';
    }