<?php declare(strict_types=1);

    // Lấy danh sách bệnh
    function getAllBenh(): array
    {
        $sql = "SELECT * FROM benh";
        $result = pdo_query($sql);
        return $result;
    }

    // Thêm bệnh
    function insertBenh(string $tenBenh): bool
    {
        $sql = "INSERT INTO benh(tenBenh) VALUES(?)";
        $result = pdo_execute($sql, $tenBenh);
        return $result;
    }


    // Lấy chi tiết bệnh theo id
    function getBenhById(int $id): array
    {
        $sql = "SELECT * FROM benh WHERE id = ?";
        $result = pdo_query_one($sql, $id);
        return $result;
    }


    // Cập nhật bệnh
    function updateBenh(int $id, string $tenBenh): bool
    {
        $sql = "UPDATE benh SET tenBenh = ? WHERE id = ?";
        $result = pdo_execute($sql, $tenBenh, $id);
        return $result;
    }

    // Xóa bệnh theo id
    function deleteBenh(int $id): bool
    {
        $sql = "DELETE FROM benh WHERE id = ?";
        $result = pdo_execute($sql, $id);
        return $result;
    }

    // Tìm kiếm bệnh theo tên
    function searchBenhByTen(string $tenBenh): array
    {
        $sql = "SELECT * FROM benh WHERE tenBenh LIKE ?";
        $result = pdo_query($sql, "%$tenBenh%");
        return $result;
    }

    // Tìm kiếm bệnh theo triệu chứng
    function searchBenhByTrieuChung(string $trieuChung): array
    {
        $sql = "SELECT * FROM benh WHERE trieuChung LIKE ?";
        $result = pdo_query($sql, "%$trieuChung%");
        return $result;
    }


    // Kiểm tra tồn tại bệnh theo tên
    function checkExistBenhByTen(string $tenBenh): bool
    {
        $sql = "SELECT * FROM benh WHERE tenBenh = ?";
        $result = pdo_query_value($sql, $tenBenh);
        return $result > 0;
    }