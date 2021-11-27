<?php
// Thêm bệnh quan tâm
function insertQuanTam($id_user, $id_benh)
{
    $sql = "INSERT INTO `quan_tam` (`id_user`, `id_benh`) VALUES (?, ?)";
    $result = pdo_execute($sql, $id_user, $id_benh);
    return $result;
}

// Xóa bệnh người đã quan tâm
function deleteQuanTamByUserId($id_user, $id_benh)
{
    $sql =
        "DELETE FROM `quan_tam`" . " WHERE (`id_user` = ? AND `id_benh` = ?)";
    $result = pdo_execute($sql, $id_user, $id_benh);
    return $result;
}

//lấy  người dùng đã quan tâm;
function getCare($id_user, $id_benh)
{
    $sql = "SELECT * FROM `quan_tam` WHERE `id_user` = ? AND `id_benh` = ?";
    $result = pdo_query($sql, $id_user, $id_benh);
    return $result;
}
function getCOunt($id_user)
{
    $sql = "SELECT count(*) FROM `quan_tam` WHERE `id_user` = ? ";
    $result = pdo_query_value($sql, $id_user);
    settype($result, "int");
    return $result;
}
// Danh sách bệnh quan tâm
function getDanhSachQuanTamByUserId($id_user)
{
    $sql =
        "SELECT `b`.`id_benh`, `b`.`ten_benh` " .
        "FROM `benh` `b` JOIN `quan_tam` `qt` ON `qt`.`id_benh` = `b`.`id_benh` " .
        "JOIN `user` `u` ON `u`.`id_user` = `qt`.`id_user` " .
        "WHERE `qt`.`id_user` = ?";
    $result = pdo_query($sql, $id_user);
    return $result;
}
