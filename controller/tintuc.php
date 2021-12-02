<?php declare(strict_types=1);
require_once "dao/pdo.php";
require_once "dao/tintuc.php";

function index()
{
    ///
    global $page, $tongTrang, $from, $to, $dstintuc, $tinXemNhieu, $tinMoiNhat;
    $pagesize = 10; //tổng tin hiện trong trang
    $star = 0; //dòng thứ trong db
    $page = 1; //trang muốn xem
    
    if (isset($_GET["page"]) == true) {
        $page = $_GET["page"];
    }
    $star = ($page - 1) * $pagesize;

    settype($tongTrang, "int");
    $dem = countTintuc(); //đếm số tim có trong db
    $tongTrang = ceil($dem / $pagesize);
    
    $from = $page - 2;
    $to = $page + 2;
    if ($from < 1) $from = 1;
    
    if ($to > $tongTrang) $to = $tongTrang;
    
    /////phân trang end
    
    $dstintuc = getAllTinTuc($star, $pagesize); //lấy danh sách tin
    $tinXemNhieu = tinXemNhieu();
    $tinMoiNhat = tinMoiNhat();

    return DEFAULT_VIEW . "tintuc/index.php";
}

function chitiet()
{
    global $layChitiettin, $listtintuc;
    $id_tin = $_GET["id_tin"] ?? null;
    $layChitiettin = getTinTucByID($id_tin);
    $listtintuc = getTintuc();
    return DEFAULT_VIEW . "tintuc/chitiet.php";
}
