<?php declare(strict_types=1);

    // Danh sách tin tức
    function getAllTinTuc() {
        $sql = "SELECT * FROM tintuc";
        $result = pdo_query($sql);
        return $result;
    }

    // Tạo tin tức
    function insertTinTuc($tieuDe, $noiDung, $hinhAnh, $ngayDang, $ngayHetHan, $maLoaiTin, $maTacGia, $maNguoiDung) {
        $sql = "INSERT INTO tintuc(tieuDe, noiDung, hinhAnh, ngayDang, ngayHetHan, maLoaiTin, maTacGia, maNguoiDung) VALUES ('$tieuDe', '$noiDung', '$hinhAnh', '$ngayDang', '$ngayHetHan', '$maLoaiTin', '$maTacGia', '$maNguoiDung')";
        $result = pdo_execute($sql);
        return $result;
    }

    // Lấy tin tức theo mã
    function getTinTucByID($maTinTuc) {
        $sql = "SELECT * FROM tintuc WHERE maTinTuc = '$maTinTuc'";
        $result = pdo_query_one($sql);
        return $result;
    }

    // Cập nhật tin tức
    function updateTinTuc($maTinTuc, $tieuDe, $noiDung, $hinhAnh, $ngayDang, $ngayHetHan, $maLoaiTin, $maTacGia, $maNguoiDung) {
        $sql = "UPDATE tintuc SET tieuDe = '$tieuDe', noiDung = '$noiDung', hinhAnh = '$hinhAnh', ngayDang = '$ngayDang', ngayHetHan = '$ngayHetHan', maLoaiTin = '$maLoaiTin', maTacGia = '$maTacGia', maNguoiDung = '$maNguoiDung' WHERE maTinTuc = '$maTinTuc'";
        $result = pdo_execute($sql);
        return $result;
    }
    
    // Xóa tin tức by id
    function deleteTinTucById($maTinTuc) {
        $sql = "DELETE FROM tintuc WHERE maTinTuc = '$maTinTuc'";
        $result = pdo_execute($sql);
        return $result;
    }


    // Kiểm tra tin tức theo tiêu đề
    function checkExistTinTucByTieuDe($tieuDe) {
        $sql = "SELECT * FROM tintuc WHERE tieuDe = '$tieuDe'";
        $result = pdo_query_value($sql);
        return $result > 0;
    }