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
    if (isset($_POST['btn-add-drug']) && $_POST['btn-add-drug']) {
        # bắt lỗi để trống tên thuốc

        if (!empty($_POST['ten_thuoc'])) {
            $tenThuoc = $_POST['ten_thuoc'];
        } else {
            $msgError = "Tên thuốc không được để trống";
        }

        # bắt lỗi để trống chỉ định
        if (!empty($_POST['chi_dinh'])) {
            $chiDinh = $_POST['chi_dinh'];
        } else {
            $msgError = "Nhập dữ liệu chỉ định";
        }

        $dangBaoChe = $_POST['dang_bao_che'];
        $nhomThuoc = $_POST['nhom_thuoc'];
        $hinhAnh = $_POST['hinh_anh'];
        $lieuDungCachDung = $_POST['lieudung_cachdung'];
        $thanTrong = $_POST['than_trong'];
        $chongChiDinh = $_POST['chong_chi_dinh'];
        $taiLieuThamKhao = $_POST['tai_lieu_tham_khao'];
        $tacDungPhu = $_POST['tac_dung_phu'];
        $chuY = $_POST['chu_y'];


        $result = insertThuoc(
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

    return ADMIN_VIEW . 'thuoc/them.php';
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

        
        $result = updateThuoc(
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

    return ADMIN_VIEW . 'thuoc/danhsach.php';
}

function timkiem()
{
    return ADMIN_VIEW . 'thuoc/timkiem.php';
}
