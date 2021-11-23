<?php
    require_once "dao/pdo.php";
    require_once "dao/user.php";
    require_once "auth.php";
    
    function index() {
        if (is_authenticated())
        {
            header("location: ". ROOT_DOMAIN);
        }

        function validateUserName($userName) {
            $userNamePattern = '/^[a-z][a-z0-9]{5,19}$/';
            $errors = [];
            $result = true;
            if (empty($userName))
            {
                array_push($errors, "Tên đăng nhập là bắt buộc");
                $result = false;
            } else if (!preg_match($userNamePattern, $userName)) {
                array_push($errors, "Tên đăng nhập từ 6-20 ký tự, chỉ tồn tại ký tự (a-z) và số và không bắt đầu bằng số");
                $result = false;
            } else if (preg_match('/.*admin.*/i', $userName)){
                array_push($errors, "Tên đăng nhập chứa từ không hợp lệ");
                $result = false;
            } else if (checkUserById($userName))
            {
                array_push($errors, "Tên đăng nhập đã tồn tại");
                $result = false;
            }
            return [$result, $errors];

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

        function validateEmail($email) {
            $emailPattern = '/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
            $errors = [];
            $result = true;
            if (empty($email))
            {
                array_push($errors, "Email là bắt buộc");
                $result = false;
            } else if (!preg_match($emailPattern, $email))
            {
                array_push($errors, "Email không đúng định dạng");
                $result = false;
            } else if (checkUserByEmail($email))
            {
                array_push($errors, "Email đã tồn tại. Vui lòng kiểm tra lại hoặc chọn quên mật khẩu");
                $result = false;
            }
            return [$result, $errors];
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            global $MESSAGES;
            $MESSAGES = [];
            // TODO: sign up with google
            $userName = clean_input($_POST['name'] ?? "");
            $pwd = clean_input($_POST['pass'] ?? "");
            $repass = clean_input($_POST["repass"] ?? "");
            $email = clean_input($_POST["email"] ?? "");
            $userName = strtolower($userName);
            
            list($vUserName, $errosUserName) = validateUserName($userName);
            list($vPassWord, $errorsPassWord) = validatePassWord($pwd, $repass);
            list($vEmail, $errorsEmail) = validateEmail($email);
            $formValid = $vUserName && $vPassWord && $vEmail;

            if (!$formValid){
                $MESSAGES = array_merge($MESSAGES, $errosUserName, $errorsPassWord, $errorsEmail);
                return DEFAULT_VIEW . "signup.php";

            } else {
                insertUser($userName, $pwd, NULL, $email, NULL, NULL, 0, NULL);
                header("location: ". ROOT_DOMAIN . "/login");
            }

        } 
        return DEFAULT_VIEW . "signup.php";
    }