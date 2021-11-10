<?php declare(strict_types=1);

    // Danh sách đề xuất
    function getAllDeXuat() {
        $sql = "";
        $result = pdo_query($sql);
        return $result;
    }

    // Danh sách đề xuất theo bệnh
    function getAllDeXuatByBenh($idBenh) {
        $sql = "";
        $result = pdo_query($sql);
        return $result;
    }

    // Danh sách đề xuất theo người dùng
    function getAllDeXuatByUser($idUser) {
        $sql = "";
        $result = pdo_query($sql);
        return $result;
    }

    // Thêm đề xuất
    function insertDeXuat() {
        $sql = "";
        $result = pdo_excute($sql);
        return $result;
    }

    // Chi tiết đề xuất theo id
    function getDeXuatById() {
        $sql = "";
        $result = pdo_query_one($sql);
        return $result;
    }

    // Cập nhật đề xuất
    function updateDeXuat() {
        $sql = "";
        $result = pdo_excute($sql);
        return $result;
    }

    // Xóa đề xuất
    function deleteDeXuat() {
        $sql = "";
        $result = pdo_excute($sql);
        return $result;
    }