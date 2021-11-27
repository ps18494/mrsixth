<?php
require_once "dao/pdo.php";
require_once "dao/user.php";
require_once "auth.php";

function index()
{
    if (is_authenticated()) {
        header("location:" . ROOT_DOMAIN);
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["email"]) {
        $email = $_POST["email"];
        $emailExisted = checkUserByEmail($email);
        global $MESSAGES;
        $MESSAGES = [];

        if ($emailExisted) {
            $hash = password_hash($email, PASSWORD_DEFAULT);
            $link =
                "http://$_SERVER[HTTP_HOST]" .
                "reset_password" .
                "?key=$hash&email=$email";
            $mail_body = "<a href='$link'>Link đặt lại mật khẩu</a>";
            send_mail(EMAIL, [$email], "Password Reset", $mail_body);
            array_push($MESSAGES, "Kiểm tra email để đặt lại mật khẩu");
        } else {
            array_push($MESSAGES, "Email không tồn tại");
        }
        return DEFAULT_VIEW . "forget_password.php";
    }

    return DEFAULT_VIEW . "forget_password.php";
}
