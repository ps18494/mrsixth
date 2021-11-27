<?php
// Thêm bệnh quan tâm
function insertQuanTam($idUser, $idBenh)
{
    $sql = "INSERT INTO `quan_tam` (`id_user`, `id_benh`) VALUES (?, ?)";
    $result = pdo_execute($sql, $idUser, $idBenh);
    return $result;
}

// Xóa bệnh người đã quan tâm
function deleteQuanTamByUserId($idUser, $idBenh)
{
    $sql = "DELETE FROM `quantam`" . " WHERE (`id_user` = ? AND `id_benh` = ?)";
    $result = pdo_execute($sql, $idUser, $idBenh);
    return $result;
}

// Danh sách bệnh quan tâm
function getDanhSachQuanTamByUserId($idUser)
{
    $sql =
        "SELECT `b`.`id_benh`, `b`.`ten_benh`, `b`.`mo_ta` " .
        "FROM `benh` `b` " .
        "JOIN `quan_tam` `qt` ON `qt`.`id_benh` = `b`.`id_benh` " .
        "JOIN `user` `u` ON `u`.`id_user` = `qt`.`id_user`";
    $result = pdo_query($sql);
    return $result;
}
