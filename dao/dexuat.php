<?php declare(strict_types=1);

// Danh sách đề xuất
function getAllDeXuat()
{
    $sql = "SELECT * FROM `de_xuat`";
    $result = pdo_query($sql);
    return $result;
}

// Danh sách đề xuất theo bệnh
function getAllDeXuatByBenh($idBenh)
{
    $sql = "SELECT `id_de_xuat` FROM `de_xuat` WHERE `id_benh` = ?";
    $result = pdo_query($sql, $idBenh);
    return $result;
}

// Danh sách đề xuất theo người dùng
function getAllDeXuatByUser($idUser)
{
    $sql = "SELECT `id_de_xuat` FROM `de_xuat` WHERE `id_user`  = ?";
    $result = pdo_query($sql, $idUser);
    return $result;
}


// Đếm số lượng đề xuất của User
function demDeXuatByUser($idUser)
{
    $sql = "SELECT COUNT(`id_de_xuat`) FROM `de_xuat` WHERE `id_user` = ?";
    $result = pdo_query_value($sql, $idUser);
    return $result;
}


// Đếm số lượng đề xuất của User theo trạng thái
function demDeXuatByUserAndTrangThai($idUser, $trangThai)
{
    $sql = "SELECT COUNT(`id_de_xuat`) FROM `de_xuat` WHERE (`id_user` = ? AND `trang_thai` = ?)";
    $result = pdo_query_value($sql, $idUser, $trangThai);
    return $result;
}

//update trang_thai = 1 nếu chấp nhận đề xuất, trang_thai = 2 không chấp nhận đề xuất, trang_thai = 0 -> chờ xét duyệt;
function updateTrangThai1( $idDeXuat){
    $sql = "UPDATE `de_xuat` SET `trang_thai` = '1' WHERE `id_de_xuat` = ?";
    $result = pdo_execute($sql, $idDeXuat);
    return $result;
}
function updateTrangThai2( $idDeXuat){
    $sql = "UPDATE `de_xuat` SET `trang_thai` = '2' WHERE `id_de_xuat` = ?";
    $result = pdo_execute($sql, $idDeXuat);
    return $result;
}
function  updateTrangThai( $idDeXuat){
    $sql = "UPDATE `de_xuat` SET `trang_thai` = '0' WHERE `id_de_xuat` = ?";
    $result = pdo_execute($sql, $idDeXuat);
    return $result;
}

//lấy trạng thái theo id đề xuất;
function getTrangThai ($idDeXuat){
    $sql = "SELECT `trang_thai` FROM `de_xuat` WHERE `id_de_xuat` = ?";
    $result = pdo_query_value($sql, $idDeXuat);
    settype($result, "int");
    return $result;
}

// Danh sách đề xuất theo trạng thái
function getAllDeXuatByTrangThai($trangThai, $start=0, $offset=5)
{
    $sql = "SELECT `dx`.*, `b`.* FROM `de_xuat` `dx`".
    "JOIN `benh` `b` ON `b`.`id_benh` = `dx`.`id_benh`".
    " WHERE `trang_thai` = ?";
    $result = pdo_query($sql, $trangThai);
    return $result;
}

// Thêm đề xuất chỉnh sửa cho một bệnh
function insertDeXuat(
    $moTa,
    $trieuChung,
    $nguyenNhan,
    $phongNgua,
    $duongLayTruyen,
    $doiTuong,
    $chanDoan,
    $dieuTri,
    $idBenh,
    $idUser
) {
    $sql =
        "INSERT INTO `de_xuat` " .
        "(`mo_ta`, `trieu_chung`, `nguyen_nhan`, `phong_ngua`, `duong_lay_truyen`, `doi_tuong`, `chan_doan`, `dieu_tri`, `id_benh`, `id_user`) " .
        "VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $result = pdo_execute(
        $sql,
        $moTa,
        $trieuChung,
        $nguyenNhan,
        $phongNgua,
        $duongLayTruyen,
        $doiTuong,
        $chanDoan,
        $dieuTri,
        $idBenh,
        $idUser,
    );
    return $result;
}

// Chi tiết đề xuất theo id
function getDeXuatById($idDeXuat)
{
    $sql = "SELECT * FROM `de_xuat` WHERE `id_de_xuat` = ?";
    $result = pdo_query_one($sql, $idDeXuat);
    return $result;
}

// Lấy id đề xuất theo bệnh và người dùng
function getIdDeXuatByBenhAndUser($idBenh, $idUser)
{
    $sql = "SELECT `id_de_xuat` FROM `de_xuat` WHERE (`id_benh` = ? AND `id_user` = ?)";
    $result = pdo_query_one($sql, $idBenh, $idUser);
    return $result;
}

// Cập nhật đề xuất
function updateDeXuat(
    $moTa,
    $trieuChung,
    $nguyenNhan,
    $phongNgua,
    $duongLayTruyen,
    $doiTuong,
    $chanDoan,
    $dieuTri
) {
    $sql =
        "UPDATE `de_xuat` " .
        "SET `mo_ta`=?, `trieu_chung`=?, `nguyen_nhan`=?, `phong_ngua`=?, `duong_lay_truyen`=?, `doi_tuong`=?, `chan_doan`=?, `dieu_tri` = ?";

    $result = pdo_execute(
        $sql,
        $moTa,
        $trieuChung,
        $nguyenNhan,
        $phongNgua,
        $duongLayTruyen,
        $doiTuong,
        $chanDoan,
        $dieuTri,
    );
    return $result;
}

// Xóa đề xuất
function deleteDeXuat($idDeXuat)
{
    $sql = "DELETE FROM `de_xuat` WHERE `id_de_xuat` = ?";
    $result = pdo_execute($sql, $idDeXuat);
    return $result;
}

// Kiểm tra xem người dùng đã đề xuất cho bệnh chưa
function kiemTraDeXuatByUserAndBenh($idBenh, $idUser)
{
    $sql = "SELECT COUNT(`id_de_xuat`) FROM `de_xuat` WHERE (`id_benh` = ? AND `id_user` = ?)";
    $result = pdo_query_value($sql, $idBenh, $idUser);
    return $result > 0;
}
