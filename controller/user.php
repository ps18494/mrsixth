<?php declare(strict_types=1);
    require_once 'dao/pdo.php';
    require_once 'dao/user.php';
    function index() {
         if(isset($_GET['id_user'])== true && $_GET['id_user']!= ""){
            global $chitietuser;
            $id_user = $_GET['id_user'];
            $chitietuser = getUserById($id_user);
            return DEFAULT_VIEW . 'user/index.php';
        }else{
            header("location: ". ROOT_DOMAIN);
        }
    }

    function thembenh() {
        return DEFAULT_VIEW . 'user/thembenh.php';
    }

    function follows() {
        return DEFAULT_VIEW . 'user/follows.php';
    }

    function changepassword() {
        return DEFAULT_VIEW . 'user/changepassword.php';
    }
    