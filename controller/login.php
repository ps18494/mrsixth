<?php
require_once "auth.php";
function index()
{
    // Chuyển hướng người dùng đã đăng nhập
    if (is_authenticated()) {
        header("Location: " . ROOT_DOMAIN . "/");
        exit;
    }

    // Nếu phương thức là POST thì tiến hành đăng nhập và chuyển hướng
    // Nếu đăng nhập thất bại thì trở lại trang hiện tại
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        global $MESSAGES;
        $MESSAGES = [];
        if (!login($_POST["username"], $_POST["password"])) {
            array_push($MESSAGES, "Tên đăng nhập hoặc mật khẩu không đúng");
            return DEFAULT_VIEW . "login.php";
        }
    }
    return DEFAULT_VIEW . "login.php";
}
