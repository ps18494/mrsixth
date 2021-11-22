<?php declare(strict_types=1);
    require_once 'dao/pdo.php';
    require_once 'dao/tintuc.php';
    function index() {
        $pagesize = 3;                                          //tổng tin hiện trong trang
        $star = 0;                                              //dòng thứ trong db
        global $page;
        $page = 1;                                       //trang muốn xem
        if(isset($_GET['page'])==true) $page = $_GET['page'];
        $star = (($page - 1) * $pagesize);
        
        global $dstintuc;
        $demtintuc = countTintuc();   //đếm số tim có trong db
        global $tongTrang;
        
        settype($tongTrang, "int");
        $tongTrang = ceil($demtintuc/$pagesize);
        global $from;
        global $to;
        $from = $page - 2; if($from < 1 ) $from = 1;
        $to   = $page + 2; if ($to > $tongTrang) $to = $tongTrang;
        
        $dstintuc = getAllTinTuc($star, $pagesize); //lấy danh sách tin
        return DEFAULT_VIEW . 'tintuc/index.php';
    }

    function chitiet() {
        global $layChitiettin;
        $id_tin = $_GET['id_tin'] ?? NULL;
        $layChitiettin = getTinTucByID($id_tin);
        return DEFAULT_VIEW . 'tintuc/chitiet.php';
    }