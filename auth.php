<?php
require_once "dao/pdo.php";
require_once "dao/user.php";

// Xác thực người dùng bằng tên đăng nhập, mật khẩu
function auth($username, $password)
{
    $user = getUserByIdAndPassword($username, $password);
    if ($user) {
        return $user;
    } else {
        return false;
    }
}

// Trang cần đăng nhập
// Gọi login_required() ở đầu function của controller
// Nếu người dùng chưa đăng nhập thì chuyển hướng tới trang login
function login_required()
{
    if (!is_authenticated()) {
        header("Location:" . ROOT_DOMAIN . "/login/");
        exit();
    }
}


function admin_required()
{
    login_required();
    if ((int) $_SESSION["role"] != 1) {
        header("Location:" . ROOT_DOMAIN . "/");
        exit();
    }
}



// Kiểm tra đã có người dùng trong Session hiện tại hay chưa
function is_authenticated()
{
    return isset($_SESSION["user"]) && isset($_SESSION["role"]);
}

// Đăng nhập bằng username, password lưu trữ vào session
function login(
    $username,
    $password,
    $successUrl = ROOT_DOMAIN . "/user/",
    $failUrl = ROOT_DOMAIN . "/login/"
) {
    $user = auth($username, $password);
    if ($user) {
        $_SESSION["user"] = $user["id_user"];
        $_SESSION["role"] = $user["vai_tro"];
        $next = $_SESSION["next"] ?? ($_GET["next"] ?? ROOT_DOMAIN . "/user/");
        header("Location: $next");
        exit();
    }
    return false;
}
