<?php declare(strict_types=1);

// Danh sách thuốc
function getAllThuoc() {
    $sql = "SELECT * FROM `thuoc`";
    $result = pdo_query($sql);
    return $result;
}

// Thêm thuốc
function insertThuoc(
    $tenThuoc, 
    $dangBaoChe,
    $nhomThuoc,
    $hinhAnh,
    $lieuDungCachDung,
    $thanTrong,
    $chiDinh,
    $chongChiDinh,
    $taiLieuThamKhao,
    $tacDungPhu,
    $chuY
) 
{
    $sql = "INSERT INTO `thuoc`".
        " (`ten_thuoc`, `dang_bao_che`, `nhom_thuoc`, `hinh_anh`, `lieudung_cachdung`, `than_trong`, `chi_dinh`, `chong_chi_dinh`, `tai_lieu_tham_khao`, `tac_dung_phu`, `chu_y` ".
        "VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $result = pdo_execute(
        $sql,
        $tenThuoc, 
        $dangBaoChe,
        $nhomThuoc,
        $hinhAnh,
        $lieuDungCachDung,
        $thanTrong,
        $chiDinh,
        $chongChiDinh,
        $taiLieuThamKhao,
        $tacDungPhu,
        $chuY
    );
    return $result;
}

// Chi tiết thuốc theo id
function getThuocById($id) {
    $sql = "SELECT * FROM `thuoc` WHERE `id_thuoc` = ?";
    $result = pdo_query_one($sql, $id);
    return $result;
}

// Cập nhật thuốc
function updateThuoc(
    $tenThuoc, 
    $dangBaoChe,
    $nhomThuoc,
    $hinhAnh,
    $lieuDungCachDung,
    $thanTrong,
    $chiDinh,
    $chongChiDinh,
    $taiLieuThamKhao,
    $tacDungPhu,
    $chuY,
    $id
) 
{
    $sql = "UPDATE `thuoc` SET".
        " `ten_thuoc` = ?, `dang_bao_che` = ?, `nhom_thuoc` = ?, `hinh_anh` = ?, `lieudung_cachdung` = ?, `than_trong` = ?, `chi_dinh` = ?, `chong_chi_dinh` = ?, `tai_lieu_tham_khao` = ?, `tac_dung_phu` = ?, `chu_y` = ?". 
        " WHERE `id_thuoc` = ?";
    $result = pdo_execute(
        $sql,
        $tenThuoc, 
        $dangBaoChe,
        $nhomThuoc,
        $hinhAnh,
        $lieuDungCachDung,
        $thanTrong,
        $chiDinh,
        $chongChiDinh,
        $taiLieuThamKhao,
        $tacDungPhu,
        $chuY,
        $id
    );
    return $result;
}

// Xóa thuốc theo id
function deleteThuoc($id) {
    $sql = "DELETE FROM `thuoc` WHERE `id_thuoc` = ?";
    $result = pdo_execute($sql);
    return $result;
}

// Tìm kiếm thuốc theo tên
function searchThuocByTen($tenThuoc) {
    $sql = "SELECT `id_thuoc`, `ten_thuoc`, `hinh_anh`, `dang_bao_che` FROM `thuoc` WHERE `ten_thuoc` LIKE ?";
    $result = pdo_query($sql, "%$tenThuoc%");
    return $result;
}

// Kiểm tra thuốc tồn tại theo tên
function checkExistThuocByTen($tenThuoc) {
    $sql = "SELECT COUNT(`id_thuoc`) FROM `thuoc` WHERE `ten_thuoc` = ?";
    $result = pdo_query_value($sql, $tenThuoc);
    return $result > 0;
}

