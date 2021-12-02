<?php declare(strict_types=1);
require_once "dao/pdo.php";
require_once "dao/user.php";
require_once "dao/quantam.php";
require_once "dao/dexuat.php";
require_once "dao/benh.php";
require_once "auth.php";

function index()
{
    login_required();
    global $chitietuser, $countBenh, $soDeXuatDoiDuyet, $soDeXuatDuocDuyet, $soDeXuatBiTuChoi;
    global $listCare, $danhSachDeXuat;
    // $_SESSION['user']
    $id_user = $_SESSION["user"];
    $chitietuser = getUserById($id_user);
    //số bệnh đã quan tâm;
    $countBenh = getCOunt($id_user);
    // Số đề xuất đang đợi duyệt
    $soDeXuatDoiDuyet = demDeXuatByUserAndTrangThai($id_user, 0);
    // Số đề xuất đã được chấp nhận
    $soDeXuatDuocDuyet = demDeXuatByUserAndTrangThai($id_user, 1);
    // Số đề xuất bị từ chối
    $soDeXuatBiTuChoi = demDeXuatByUserAndTrangThai($id_user, 2);

    //danh sách bệnh đã quan tâm
    $listCare = getDanhSachQuanTamByUserId($id_user);

    // Danh sách các bệnh đã chỉnh sửa
    $danhSachDeXuat = getAllDeXuatByUser($id_user);

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
function thongtin()
{
    login_required();
    global $chitietuser, $countBenh, $soDeXuatDoiDuyet, $soDeXuatDuocDuyet, $soDeXuatBiTuChoi;
    $id_user = $_SESSION["user"];
    $chitietuser = getUserById($id_user);
    //số bệnh đã quan tâm;
    $countBenh = getCOunt($id_user);
    // Số đề xuất đang đợi duyệt
    $soDeXuatDoiDuyet = demDeXuatByUserAndTrangThai($id_user, 0);
    // Số đề xuất đã được chấp nhận
    $soDeXuatDuocDuyet = demDeXuatByUserAndTrangThai($id_user, 1);
    // Số đề xuất bị từ chối
    $soDeXuatBiTuChoi = demDeXuatByUserAndTrangThai($id_user, 2);

    //kiểm tra xem người dùng đã
    if (isset($_POST["capnhat"]) && $_POST["capnhat"]) {
        $ten = $_POST["ten"];
        $ngay_sinh = $_POST["ngay_sinh"];
        $sdt = $_POST["sdt"];
        $email = $_POST["email"];
        $tinhTrangSucKhoe = $_POST["tinhtrangsuckhoe"];

        if (!empty($_FILES["hinh_anh"]["name"])) {
            $hinh_anh = upload("hinh_anh", "img_user"); //trả về tên ảnh
        } else {
            $hinh_anh = $chitietuser["hinh_anh"];
        }
        $id_user = $_POST["id_user"];
        updateUser($ten, $ngay_sinh, $email, $sdt, $hinh_anh, $tinhTrangSucKhoe, $id_user);
        header("location: " . ROOT_DOMAIN . "/user/");
    }
    return DEFAULT_VIEW . "user/thongtin.php";
}

function changepassword()
{
    login_required();

    global $chitietuser, $countBenh, $soDeXuatDoiDuyet, $soDeXuatDuocDuyet, $soDeXuatBiTuChoi;
    $id_user = $_SESSION["user"];
    $chitietuser = getUserById($id_user);
    //số bệnh đã quan tâm;
    $countBenh = getCOunt($id_user);
    // Số đề xuất đang đợi duyệt
    $soDeXuatDoiDuyet = demDeXuatByUserAndTrangThai($id_user, 0);
    // Số đề xuất đã được chấp nhận
    $soDeXuatDuocDuyet = demDeXuatByUserAndTrangThai($id_user, 1);
    // Số đề xuất bị từ chối
    $soDeXuatBiTuChoi = demDeXuatByUserAndTrangThai($id_user, 2);

    global $errors;
    $errors = "";

    //ki?m tra xem ng�?i d�ng �?
    if (isset($_POST["capnhat"]) == true) {
        $password = $_POST["oldpass"];
        $newpass = $_POST["newpass"];
        $repass = $_POST["repass"];
        $chitiet = getUserByIdAndPassword($id_user, $password);

        if (empty($chitiet)) {
            $errors .= "Mật khẩu cũ không chính xác! <br>";
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

function dexuat()
{
}

function chitietdexuat()
{
    login_required();
    global $de_xuat, $benh;
    $id_de_xuat = $_GET["id_de_xuat"];
    $de_xuat = getDeXuatById($id_de_xuat);
    $benh = getBenhById($de_xuat["id_benh"]);

    if (isset($_POST["btn-submit"])) {
        $mo_ta = $_POST["mo_ta"];
        $trieu_chung = $_POST["trieu_chung"];
        $nguyen_nhan = $_POST["nguyen_nhan"];
        $phong_ngua = $_POST["phong_ngua"];
        $duong_lay_truyen = $_POST["duong_lay_truyen"];
        $doi_tuong = $_POST["doi_tuong"];
        $chan_doan = $_POST["chan_doan"];
        $dieu_tri = $_POST["dieu_tri"];

        updateDeXuat(
            $mo_ta,
            $trieu_chung,
            $nguyen_nhan,
            $phong_ngua,
            $duong_lay_truyen,
            $doi_tuong,
            $chan_doan,
            $dieu_tri,
        );

        header("Location:" . ROOT_DOMAIN . "/user/chitietdexuat?id_de_xuat=" . $de_xuat["id_de_xuat"]);
    }

    return DEFAULT_VIEW . "user/chitietdexuat.php";
}
