<?php declare(strict_types=1);
require_once "dao/pdo.php";
require_once "dao/thuoc.php";
function index()
{   
    global $page, $tongTrang, $from, $to;
    $pagesize = 30; //tổng tin hiện trong trang
    $star = 0; //dòng thứ trong db
    $page = 1; //trang muốn xem
    
    if (isset($_GET["page"]) == true) {
        $page = $_GET["page"];
    }
    $star = ($page - 1) * $pagesize;

    settype($tongTrang, "int");
    $dem = countThuoc(); //đếm số tim có trong db
    $tongTrang = ceil($dem / $pagesize);
    
    $from = $page - 2;
    $to = $page + 2;
    if ($from < 1) $from = 1;
    
    if ($to > $tongTrang) $to = $tongTrang;
    
    //end phân trang
    
    global $listThuoc;
    $listThuoc = getAllThuoc($star, $pagesize);
    return DEFAULT_VIEW . "thuoc/index.php";
}

function chitiet()
{   
    global $getidthuoc;
    $id = $_GET['id_thuoc'];
    $getidthuoc = getThuocById($id);
    return DEFAULT_VIEW . "thuoc/chitiet.php";
}

function timkiem()
{
    return DEFAULT_VIEW . "thuoc/timkiem.php";
}
