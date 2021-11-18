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
)
{
    $sql = "INSERT INTO `de_xuat` ". 
        "(`mo_ta`, `trieu_chung`, `nguyen_nhan`, `phong_ngua`, `duong_lay_truyen`, `doi_tuong`, `chan_doan`, `dieu_tri`, `id_benh`, `id_user`) ".
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
        $idUser
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

// Cập nhật đề xuất
function updateDeXuat() {
    $sql = "";
    $result = pdo_execute($sql);
    return $result;
}

// Xóa đề xuất
function deleteDeXuat($idDeXuat) {
    $sql = "DELETE FROM `de_xuat` WHERE `id_de_xuat` = ?";
    $result = pdo_execute($sql, $idDeXuat);
    return $result;
}


// Kiểm tra xem người dùng đã đề xuất cho bệnh chưa
function kiemTraDeXuatByUserAndBenh($idBenh, $idUser)
{
    $sql = "SELECT COUNT(`id_de_xuat`) FROM `de_xuat` WHERE (`id_benh` = ? AND `id_user` = ?)";
    $result = pdo_query_value($sql);
    return $result;
}




