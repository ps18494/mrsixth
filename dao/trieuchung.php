<?php declare(strict_types=1);

    // Danh sách triệu chứng
    function getAllTrieuChung() {
        $sql = "SELECT * FROM trieuchung";
        $result = pdo_query($sql);
        return $result;
    }

    // Thêm triệu chứng
    function insertTrieuChung($trieuchung) {
        $sql = "INSERT INTO trieuchung(trieuchung) VALUES ('$trieuchung')";
        $result = pdo_execute($sql);
        return $result;
    }

    // Chi tiết triệu chứng theo id
    function getTrieuChungById($id) {
        $sql = "SELECT * FROM trieuchung WHERE id = $id";
        $result = pdo_query_one($sql);
        return $result;
    }

    // Cập nhật triệu chứng
    function updateTrieuChung($id, $trieuchung) {
        $sql = "UPDATE trieuchung SET trieuchung = '$trieuchung' WHERE id = $id";
        $result = pdo_execute($sql);
        return $result;
    }

    // Xóa triệu chứng theo id
    function deleteTrieuChung($id) {
        $sql = "DELETE FROM trieuchung WHERE id = $id";
        $result = pdo_execute($sql);
        return $result;
    }

    // Tìm kiếm triệu chứng theo tên
    function searchTrieuChungByTen($trieuchung) {
        $sql = "SELECT * FROM trieuchung WHERE trieuchung LIKE '%$trieuchung%'";
        $result = pdo_query($sql);
        return $result;
    }

    // Kiểm tra triệu chứng theo tên
    function checkTrieuChung($trieuchung) {
        $sql = "SELECT * FROM trieuchung WHERE trieuchung = '$trieuchung'";
        $result = pdo_query_value($sql);
        return $result > 0;
    }
