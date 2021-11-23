<?php
    require_once "dao/pdo.php";
    require_once "dao/user.php";

    function index()
    {
        if (is_authenticated())
        {
            header("location:". ROOT_DOMAIN);
        }
        global $email, $key;
        $email = $_GET["email"] ?? $_POST["email"];
        $key = $_GET["key"] ?? $_POST["key"];
        $validKey = password_verify($email, $key);
        if (!$validKey)
        {
            header("location:" . ROOT_DOMAIN); exit();
        }

        function validatePassWord($pwd, $rePwd) {
            $errors = [];
            $result = true;
            if (empty($pwd))
            {
                array_push($errors, "Mật khẩu không được để trống");
                $result = false;
            } else if (empty($rePwd))
            {
                array_push($errors, "Xác nhận mật khẩu không được để trống");
                $result = false;
            } else if (strlen($pwd) < 8 || strlen($pwd) > 32)
            {
                array_push($errors, "Độ dài mật khẩu từ 8-32 ký tự");
                $result = false;
            } else if ($pwd !== $rePwd)
            {
                array_push($errors, "Xác nhận mật khẩu không chính xác");
                $result = false;
            }
            return [$result, $errors];
        }

        if ($_SERVER['REQUEST_METHOD'] === 'GET')
        {
            return DEFAULT_VIEW . "reset_password.php";
        } else if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            global $MESSAGES;
            $MESSAGES = [];

            $pwd = clean_input($_POST["password"] ?? "");
            $rePwd = clean_input($_POST["confirmpassword"] ?? "");

            list($vPassWord, $pwdErrors) = validatePassWord($pwd, $rePwd);
            if (!$vPassWord)
            {
                // Kiểm tra mật khẩu thất bại
                $MESSAGES = array_merge($MESSAGES, $pwdErrors);
                return DEFAULT_VIEW . "reset_password.php";
            } else
            {
                // Hoàn thành kiểm tra mật khẩu
                // Tiến hành đổi mật khẩu của User theo email
                //
                // Kiểm tra email có tồn tại trong db hay không một lần nữa, vì khách truy cập
                // có thể tạo ra một đường link email + hash hợp lệ
                $emailExisted = checkUserByEmail($email);
                if ($emailExisted)
                {
                    $sql = "UPDATE `user` SET `mat_khau` = ? WHERE `email` = ?";
                    pdo_execute($sql, $pwd, $email);
                    header("location:" . ROOT_DOMAIN . "/login/"); exit();
                } else
                {
                    header("location:" . ROOT_DOMAIN); exit();   
                }
                
            }
        }
    }