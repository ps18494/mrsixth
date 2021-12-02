<?php declare(strict_types=1);
    require_once('../dao/pdo.php');
    require_once('../dao/benh.php');
    function pagination($dem, $start=0, $pagesize=7) {
 
        $page = 1;
        if (isset($_GET["page"]) == true) {
            $page = $_GET["page"];
        }
 
        $start = ($page - 1) * $pagesize;
        $total_pages = ceil($dem / $pagesize);
 
        $from = $page - 3;
        if ($from < 1) {
            $from = 1;
        }
        $to = $page + 5;
        if ($to > $total_pages) {
            $to = $total_pages;
        }
 
        return [
            "page" => $page,
            "from" => $from,
            "to" => $to,
            "start" => $start,
            "pagesize" => $pagesize,
            "total_pages" => $total_pages
        ];
    }
    function index() {
 
        global $page, $start, $pagesize, $from, $to, $tongTrang;
        global $items;
 
        $demtintuc = countBenh(); //đếm số tim có trong db
        $pagination = pagination($demtintuc);
 
        $page = $pagination["page"];
        $start = $pagination["start"];
        $pagesize = $pagination["pagesize"];
        $from = $pagination["from"];
        $to = $pagination["to"];
        $tongTrang = $pagination["total_pages"];
 
        $items = getAllBenh($start, $pagesize);
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
        global $getbenhbyid, $name_benh;
        $id = $_GET['id_benh'];
        $getbenhbyid = getBenhById($id);
        
        // var_dump($getbenhbyid);
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
            
            //kiểm tra tên bênh có rỗng hay k;
            if(empty($tenBenh)){
                $erros['ten_benh']  = "Chưa nhập tên bệnh";
            }
            
            //kiểm tra mô tả có rỗng hay k;
            if(empty($moTa)){
                $erros['mo_ta']     = "Chưa nhập nhập mô tả bệnh";
            }
            
            //nếu $erros không có, thực hiện update;
            if(empty($erros)){
                
                updateBenh($tenBenh, $moTa, $trieuChung, $nguyenNhan, $phongNgua, $duongLayTruyen, $doiTuong, $chanDoan, $dieuTri, $id);
                $getbenhbyid = getBenhById($id);
                header("Location: ".ROOT_DOMAIN."/admin/benh/sua?id_benh=$id");
            }
            return ADMIN_VIEW . 'benh/sua.php';
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