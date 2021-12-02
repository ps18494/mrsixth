<?php declare(strict_types=1);

// Thêm thông báo
function insertThongBao($chuDe, $noiDung, $ngay, $idUser)
{
    $sql =
        "INSERT INTO `thong_bao`" .
        " (`chu_de`, `noi_dung`, `ngay`, `id_user`) " .
        "VALUES (?, ?, ?, ?)";
    $result = pdo_execute($sql, $chuDe, $noiDung, $ngay, $idUser);
    return $result;
}

// Chi tiết thông báo
function getChiTietThongBao($id)
{
    $sql = "SELECT * FROM `thong_bao` WHERE `id_thong_bao` = ?";
    $result = pdo_query_one($sql);
    return $result;
}

// Danh sách thông báo theo user
function getThongBaoByUserId($idUser)
{
    $sql = "SELECT * FROM `thong_bao` WHERE `id_user` = ?";
    $result = pdo_query($sql, $idUser);
    return $result;
}


// Kiểm tra thông báo chưa đọc của User
function kiemTraThongBao($idUser)
{
    $sql = "SELECT COUNT(`id_thong_bao`) FROM `thong_bao` WHERE `id_user` = ?";
    $result = pdo_query_value($sql, $idUser);
    return $result > 0;
}
