<?php declare(strict_types=1);

    // Danh sách thuốc
    function getAllThuoc() {
        $sql = "SELECT * FROM thuoc";
        $result = pdo_query($sql);
        return $result;
    }

    // Thêm thuốc
    function insertThuoc($tenThuoc, $donVi, $donGia, $soLuong, $loaiThuoc) {
        $sql = "INSERT INTO thuoc (tenThuoc, donVi, donGia, soLuong, loaiThuoc) VALUES ('$tenThuoc', '$donVi', '$donGia', '$soLuong', '$loaiThuoc')";
        $result = pdo_execute($sql);
        return $result;
    }

    // Chi tiết thuốc theo id
    function getThuocById($id) {
        $sql = "SELECT * FROM thuoc WHERE id = '$id'";
        $result = pdo_query_one($sql);
        return $result;
    }

    // Cập nhật thuốc
    function updateThuoc($id, $tenThuoc, $donVi, $donGia, $soLuong, $loaiThuoc) {
        $sql = "UPDATE thuoc SET tenThuoc = '$tenThuoc', donVi = '$donVi', donGia = '$donGia', soLuong = '$soLuong', loaiThuoc = '$loaiThuoc' WHERE id = '$id'";
        $result = pdo_execute($sql);
        return $result;
    }

    // Xóa thuốc theo id
    function deleteThuoc($id) {
        $sql = "DELETE FROM thuoc WHERE id = '$id'";
        $result = pdo_execute($sql);
        return $result;
    }

    // Tìm kiếm thuốc theo tên
    function searchThuocByTen($tenThuoc) {
        $sql = "SELECT * FROM thuoc WHERE tenThuoc LIKE '%$tenThuoc%'";
        $result = pdo_query($sql);
        return $result;
    }

    // Kiểm tra thuốc tồn tại theo tên
    function checkExistThuocByTen($tenThuoc) {
        $sql = "SELECT * FROM thuoc WHERE tenThuoc = '$tenThuoc'";
        $result = pdo_query_value($sql);
        return $result > 0;
    }