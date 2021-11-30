<?php declare(strict_types=1);

require_once "dao/pdo.php";
require_once "dao/benh.php";
require_once "dao/quantam.php";
require_once "dao/dexuat.php";

function index()
{
    return DEFAULT_VIEW . "benh/index.php";
}

function chitiet()
{
    global $benh, $danhSachAnhBenh, $id_user, $user_care;
    $id_benh = $_GET["idbenh"] ?? null;
    $id_user = $_SESSION["user"];

    if (!$id_benh) {
        // Tạm thời chuyển hướng đến trang chủ
        // TODO: thông báo không tìm thấy bệnh hoặc 404
        header("location: " . ROOT_DOMAIN);
    }
    $benh = getBenhById($id_benh);
    $danhSachAnhBenh = getAnhByIdBenh($id_benh);

    //lấy user đã quan tâm;
    $user_care = getCare($id_user, $id_benh);

    //quan tam benh;
    if (isset($_POST["care"]) && $_POST["care"]) {
        $id_user = $_POST["id_user"];
        $id_benh = $_POST["id_benh"];
        insertQuanTam($id_user, $id_benh);
        header("location: " . ROOT_DOMAIN . "/benh/chitiet?idbenh=" . $id_benh);
    }

    //bỏ quan tâm
    if (isset($_POST["delcare"]) && $_POST["delcare"]) {
        $id_user = $_POST["id_user"];
        $id_benh = $_POST["id_benh"];
        deleteQuanTamByUserId($id_user, $id_benh);
        header("location: " . ROOT_DOMAIN . "/benh/chitiet?idbenh=" . $id_benh);
    }

    if (!$benh) {
        // Không có bệnh nào với idBenh truy vấn
        header("location: " . ROOT_DOMAIN);
    }

    return DEFAULT_VIEW . "benh/chitiet.php";
}

function timkiem()
{
    global $query, $danhSachBenh;
    $query = $_GET["q"] ?? null;

    if (!$query) {
        $danhSachBenh = [];
    } elseif (is_array($query)) {
        $danhSachBenh = searchBenhByDanhSachTrieuChung($query);
        $query = implode(",", $query); // Query để hiển thị ra view ngăn cách bởi dấu phẩy
    } else {
        $danhSachBenh = searchBenhByTrieuChung($query);
    }

    return DEFAULT_VIEW . "benh/timkiem.php";
}

function chinhsua()
{
    login_required();
    $id_benh = $_POST["idbenh"] ?? $_GET["idbenh"];
    $id_user = $_SESSION["user"];

    $daChinhSua = kiemTraDeXuatByUserAndBenh($id_benh, $id_user);
    if ($daChinhSua) {
        $dexuat = getIdDeXuatByBenhAndUser($id_benh, $id_user);
        $id_de_xuat = $dexuat["id_de_xuat"];
        header("Location:" . ROOT_DOMAIN . "/user/chitietdexuat?id_de_xuat=$id_de_xuat");
    }

    if (isset($_POST["btn-submit"])) {
        $mo_ta = $_POST["mo_ta"];
        $trieu_chung = $_POST["trieu_chung"];
        $nguyen_nhan = $_POST["nguyen_nhan"];
        $phong_ngua = $_POST["phong_ngua"];
        $duong_lay_truyen = $_POST["duong_lay_truyen"];
        $doi_tuong = $_POST["doi_tuong"];
        $chan_doan = $_POST["chan_doan"];
        $dieu_tri = $_POST["dieu_tri"];
        $id_benh = $_POST["idbenh"] ?? $_GET["idbenh"];
        $id_user = $_SESSION["user"];

        insertDeXuat(
            $mo_ta,
            $trieu_chung,
            $nguyen_nhan,
            $phong_ngua,
            $duong_lay_truyen,
            $doi_tuong,
            $chan_doan,
            $dieu_tri,
            $id_benh,
            $id_user,
        );
        $dexuat = getIdDeXuatByBenhAndUser($id_benh, $id_user);

        header("Location:" . ROOT_DOMAIN . "/user/chitietdexuat?id_de_xuat=" . $dexuat["id_de_xuat"]);
    } else {
        global $benh, $user;

        $user = getUserById($id_user);
        $benh = getBenhById($id_benh);
        return DEFAULT_VIEW . "benh/chinhsua.php";
    }
}
