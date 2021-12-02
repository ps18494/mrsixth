<?php

declare(strict_types=1);
require_once('../dao/pdo.php');
require_once('../dao/user.php');

function index()
{
    return ADMIN_VIEW . 'user/index.php';
}
function danhsach()
{
    // global $vaiTro;
    // $vaiTro = $_GET['vai_tro'];
    global $role; 
    $role = filter_input(INPUT_POST, 'vai_tro', FILTER_SANITIZE_STRING);
    if($role == 1){
        header("location: " . ROOT_DOMAIN . "/admin/user/ds_admin");
    }
    if($role == 2){
        header("location: " . ROOT_DOMAIN . "/admin/user/ds_user");
    }
    if($role == 3){
        header("location: " . ROOT_DOMAIN . "/admin/user/allds");
    }
    
    return ADMIN_VIEW . 'user/danhsach.php';
}
function them()
{
    return ADMIN_VIEW . 'user/them.php';
}

function chitiet()
{
    return ADMIN_VIEW . 'user/chitiet.php';
}

function sua()
{
    return ADMIN_VIEW . 'user/sua.php';
}

function xoa()
{
    $id = $_GET['id_user'];
    deleteUser($id);

    return ADMIN_VIEW . 'user/xoa.php';
}

function timkiem()
{
    return ADMIN_VIEW . 'user/timkiem.php';
}

function ds_admin(){
    return ADMIN_VIEW . 'user/ds_admin.php';
}

function ds_user(){
    return ADMIN_VIEW . 'user/ds_user.php';
}

function allds(){
    return ADMIN_VIEW . 'user/allds.php';
}

