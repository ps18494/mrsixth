<?php declare(strict_types=1);
require_once "dao/pdo.php";
// Danh sách tin tức
function getAllTinTuc($star, $pagesize)
{
    $sql = "SELECT * FROM tin_tuc LIMIT $star, $pagesize ";
    $result = pdo_query($sql);
    return $result;
}
function getTintuc()
{
    $sql = "SELECT * FROM tin_tuc LIMIT " . rand(1, 15) . ", 5 ";
    $result = pdo_query($sql);
    return $result;
}
function countTintuc()
{
    $sql = "SELECT count(*) FROM tin_tuc";
    $tongRecord = pdo_query_value($sql);
    settype($tongRecord, "int");
    return $tongRecord;
}
// Tạo tin tức
function insertTinTuc(
    $tieuDe,
    $hinhAnh,
    $noiDung,
    $ngay,
    $tacGia,
    $idBenh,
    $idThuoc
) {
    $sql =
        "INSERT INTO `tin_tuc` " .
        "(`tieu_de`, `hinh_anh`, `noi_dung`, `ngay`, `tac_gia`, `id_benh`, `id_thuoc`)" .
        " VALUES (?, ?, ?, ?, ?, ?, ?)";
    $result = pdo_execute(
        $sql,
        $tieuDe,
        $hinhAnh,
        $noiDung,
        $ngay,
        $tacGia,
        $idBenh,
        $idThuoc
    );
    return $result;
}

// Lấy tin tức theo mã
function getTinTucByID($id_tin)
{
    $sql = "SELECT * FROM `tin_tuc` WHERE `id_tin` = ?";
    $result = pdo_query_one($sql, $id_tin);
    return $result;
}

// Cập nhật tin tức
function updateTinTuc(
    $tieuDe,
    $hinhAnh,
    $noiDung,
    $ngay,
    $tacGia,
    $idBenh,
    $idThuoc,
    $id
) {
    $sql =
        "UPDATE `tin_tuc` SET " .
        " `tieu_de` = ?, `hinh_anh` = ?, `noi_dung` = ?, `ngay` = ?, `tac_gia` = ?, `id_benh` = ?, `id_thuoc` = ?" .
        " WHERE `id_tin` = ?";
    $result = pdo_execute(
        $sql,
        $tieuDe,
        $hinhAnh,
        $noiDung,
        $ngay,
        $tacGia,
        $idBenh,
        $idThuoc,
        $id
    );
    return $result;
}

// Xóa tin tức by id
function deleteTinTucById($id)
{
    $sql = "DELETE FROM `tin_tuc` WHERE `id_tin` = ?";
    $result = pdo_execute($sql, $id);
    return $result;
}

// Kiểm tra tin tức theo tiêu đề
function checkExistTinTucByTieuDe($tieuDe)
{
    $sql = "SELECT COUNT(`id_tin`) FROM `tin_tuc` WHERE `tieu_de` = ?";
    $result = pdo_query_value($sql, $tieuDe);
    return $result > 0;
}

// Tăng số lượt xem theo id tin tức
function tangLuotXemTheoId($id)
{
    $sql =
        "UPDATE `tin_tuc` SET `so_luot_xem` = `so_luot_xem` + 1 WHERE `id_tin` = ?";
    $result = pdo_execute($sql, $id);
    return $result;
}

//lấy tin mới nhất

function tinMoiNhat()
{
    $sql = "SELECT * FROM `tin_tuc` where 1 ORDER BY `ngay` DESC LIMIT 0,5 ";
    $result = pdo_query($sql);
    return $result;
}
function tinXemNhieu()
{
    $sql =
        "SELECT * FROM `tin_tuc` where 1 ORDER BY `so_luot_xem` DESC LIMIT 0,5";
    $result = pdo_query($sql);
    return $result;
}
