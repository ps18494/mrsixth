<?php declare(strict_types=1);
    require_once 'dao/pdo.php';
    require_once 'dao/user.php';
    require_once 'dao/quantam.php';
    require_once 'auth.php';

function index() {
    login_required();
    global $chitietuser, $listCare, $countBenh;

    // $_SESSION['user']
    $id_user = $_SESSION['user'];
    $chitietuser = getUserById($id_user);
    //số bệnh đã quan tâm;
    $countBenh = getCOunt($id_user);
    //danh sách bệnh đã quan tâm
    $listCare = getDanhSachQuanTamByUserId($id_user);
    
    $chitietuser = getUserById($id_user);
    return DEFAULT_VIEW . "user/index.php";
}


function thembenh()
{
    return DEFAULT_VIEW . "user/thembenh.php";
}

function follows()
{
    return DEFAULT_VIEW . "user/follows.php";
}
function thongtincanhan()
{
    login_required();
    global $chitiet;
    $id_user = $_SESSION["user"];
    $chitiet = getUserById($id_user);
        
    //kiểm tra xem người dùng đã
    if (isset($_POST['capnhat']) && $_POST['capnhat']) {
        $ten        = $_POST['ten'];
        $ngay_sinh  = $_POST['ngay_sinh'];
        $sdt        = $_POST['sdt'];
        $email      = $_POST['email'];
        $tinhTrangSucKhoe = $_POST['tinhtrangsuckhoe'];
    
        if (!empty($_FILES['hinh_anh']['name'])) {
            $hinh_anh    = upload("hinh_anh", "img_user"); //trả về tên ảnh
        } else {
            $hinh_anh = $chitiet['hinh_anh'];
        }
        var_dump($_FILES['hinh_anh']);
        $id_user    = $_POST['id_user'] ;
        updateUser($ten, $ngay_sinh, $email, $sdt, $hinh_anh, $tinhTrangSucKhoe, $id_user); //
        header("location: ". ROOT_DOMAIN . "/user/");
    }
        return DEFAULT_VIEW . 'user/thongtincanhan.php';
}

function changepassword()
{
    login_required();

    $id_user = $_SESSION["user"];
    global $errors;
    $errors = "";

    //ki?m tra xem ng�?i d�ng �?
    if (isset($_POST["capnhat"]) == true) {
        $password = $_POST["oldpass"];
        $newpass = $_POST["newpass"];
        $repass = $_POST["repass"];
        $chitiet = getUserByIdAndPassword($id_user, $password);

        if (empty($chitiet)) {
            $errors .= "Mật khẩu cữ không chính xác! <br>";
        }
        if (strlen($newpass) < 6 || strlen($newpass) > 32) {
            $errors .= "Mật khẩu mới phải từ 8 đến 32 kí tự ! <br>";
        }
        if ($newpass != $repass) {
            $errors .= "Xác nhận mật khẩu mới không chính xác!";
        }

        if ($errors == "") {
            updatePassword($newpass, $id_user);
            header("location: " . ROOT_DOMAIN . "/user");
            exit();
        }
    }
    return DEFAULT_VIEW . "user/changepassword.php";
}
