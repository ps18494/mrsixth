<?php declare(strict_types=1);

    
    // Thêm thông báo
    function themThongBao(string $noiDung): bool
    {
        $sql = "INSERT INTO thongbao(noiDung) VALUES(?)";
        $result = pdo_excute($sql, $noiDung);
        return $result;
    }


    // Chi tiết thông báo theo id
    function getThongBaoById(int $id): array {
        $sql = "SELECT * FROM thongbao WHERE id = ?";
        $result = pdo_query_one($sql, $id);
        return $result;
    }

    // Danh sách thông báo theo người dùng
    function getThongBaoByUser(int $idUser): array {
        $sql = "SELECT * FROM thongbao WHERE idUser = ?";
        $result = pdo_query($sql, $idUser);
        return $result;
    }