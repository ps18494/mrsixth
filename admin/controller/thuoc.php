<?php

declare(strict_types=1);
require_once('../dao/pdo.php');
require_once('../dao/thuoc.php');

function index()
{
    return ADMIN_VIEW . 'thuoc/index.php';
}

function them()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        function checkForm()
        {
            global $msgError, $tenThuoc, $chiDinh;
            $msgError = array();
            if (empty(trim($_POST['ten_thuoc']))) {
                $msgError['ten_thuoc']['empty_ten_thuoc'] = "Vui lòng nhập tên thuốc";
            } else {
                $tenThuoc = $_POST['ten_thuoc'];
                $existTenThuoc = checkExistThuocByTen($tenThuoc);
                if ($existTenThuoc) {
                    $msgError['ten_thuoc']['exist_ten_thuoc'] = "Tên thuốc đã tồn tại";
                }
            }
            if (empty(trim($_POST['chi_dinh']))) {
                $msgError['chi_dinh']['empty_chi_dinh'] = "Vui lòng nhập thông tin chỉ định";
            } else {
                $chiDinh = $_POST['chi_dinh'];
            }

            if (empty($msgError)) {
                global $successAlert;
                $successAlert = "Đã thêm thành công";
            }
            return $msgError;
        };
        $tenThuoc = $_POST['ten_thuoc'];
        $chiDinh = $_POST['chi_dinh'];
        $dangBaoChe = $_POST['dang_bao_che'];
        $nhomThuoc = $_POST['nhom_thuoc'];
        $hinhAnh = $_POST['hinh_anh'];
        $lieuDungCachDung = $_POST['lieudung_cachdung'];
        $thanTrong = $_POST['than_trong'];
        $chongChiDinh = $_POST['chong_chi_dinh'];
        $taiLieuThamKhao = $_POST['tai_lieu_tham_khao'];
        $tacDungPhu = $_POST['tac_dung_phu'];
        $chuY = $_POST['chu_y'];

        if (!checkForm()) {
            insertThuoc(
                $tenThuoc,
                $dangBaoChe,
                $nhomThuoc,
                $hinhAnh,
                $lieuDungCachDung,
                $thanTrong,
                $chiDinh,
                $chongChiDinh,
                $taiLieuThamKhao,
                $tacDungPhu,
                $chuY
            );
        }
    }

    return ADMIN_VIEW . 'thuoc/them.php';
}
function pagination()
{
    $limit_page = 10;
    if (isset($_GET['num_pages'])) {
        $num_pages = $_GET['num_pages'];
        settype($num_pages, "int");
    } else {
        $num_pages = 1;
    }
    #start_number = ($num_pages - 1) * $limit_page; 
    #ví dụ khách hàng chọn trang số 3 thì $num_pages = 3 
    # áp công thức (3 - 1) * 10 = 20 thì $start_number = 20
    $start_number = ($num_pages - 1) * $limit_page;
    global $total_pages;

    $sql = "SELECT * FROM `thuoc` LIMIT $start_number,$limit_page";
    $result = pdo_query($sql);

    $selectAll_drug = "SELECT id_thuoc FROM `thuoc`";
    $qr_Alldrug = pdo_query($selectAll_drug);
    $total_drug = count($qr_Alldrug);
    // $total_page = ceil();
    $total_pages = ceil($total_drug / $limit_page);
    return $result;
}



function danhsach()
{
    return ADMIN_VIEW . 'thuoc/danhsach.php';
}
function chitiet()
{
    return ADMIN_VIEW . 'thuoc/chitiet.php';
}

function sua()
{
    if (isset($_POST['btn-update-drug'])) {

        $tenThuoc = $_POST['ten_thuoc'];
        $dangBaoChe = $_POST['dang_bao_che'];
        $nhomThuoc = $_POST['nhom_thuoc'];
        $hinhAnh = $_POST['hinh_anh'];
        $lieuDungCachDung = $_POST['lieudung_cachdung'];
        $thanTrong = $_POST['than_trong'];
        $chiDinh = $_POST['chi_dinh'];
        $chongChiDinh = $_POST['chong_chi_dinh'];
        $taiLieuThamKhao = $_POST['tai_lieu_tham_khao'];
        $tacDungPhu = $_POST['tac_dung_phu'];
        $chuY = $_POST['chu_y'];
        $id = $_POST['id_thuoc'];


        updateThuoc(
            $tenThuoc,
            $dangBaoChe,
            $nhomThuoc,
            $hinhAnh,
            $lieuDungCachDung,
            $thanTrong,
            $chiDinh,
            $chongChiDinh,
            $taiLieuThamKhao,
            $tacDungPhu,
            $chuY,
            $id
        );
    }



    return ADMIN_VIEW . 'thuoc/sua.php';
}

function xoa()
{
    $id = $_GET['id_thuoc'];

    deleteThuoc($id);

    return ADMIN_VIEW . 'thuoc/xoa.php';
}

function timkiem()
{
    global $tenThuoc;
    $tenThuoc = $_GET['kw_drug'];
    return ADMIN_VIEW . 'thuoc/timkiem.php';
}
