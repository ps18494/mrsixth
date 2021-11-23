<?php declare(strict_types=1);
    require_once 'dao/pdo.php';
    require_once 'dao/user.php';
    require_once 'auth.php';

    function index() {
        login_required();
        global $chitietuser;

        // $_SESSION['user']
        $id_user = $_SESSION['user'];
        
        $chitietuser = getUserById($id_user);
        return DEFAULT_VIEW . 'user/index.php';
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
    