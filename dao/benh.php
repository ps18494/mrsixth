<?php declare(strict_types=1);

// Lấy danh sách bệnh
function getAllBenh(): array
{
    $sql = "SELECT * FROM benh";
    $result = pdo_query($sql);
    return $result;
}

// Thêm bệnh
function insertBenh(
    $tenBenh,
    $moTa,
    $trieuChung,
    $nguyenNhan,
    $phongNgua,
    $duongLayTruyen,
    $doiTuong,
    $chanDoan,
    $dieuTri
)
{
    $sql = "INSERT INTO `benh`".
        " (`ten_benh`, `mo_ta`, `trieu_chung`, `nguyen_nhan`, `phong_ngua`, `duong_lay_truyen`, `doi_tuong`, `chan_doan`, `dieu_tri`) ". 
        " VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $result = pdo_execute(
        $sql,
        $tenBenh,
        $moTa,
        $trieuChung,
        $nguyenNhan,
        $phongNgua,
        $duongLayTruyen,
        $doiTuong,
        $chanDoan,
        $dieuTri
    );
    return $result;
}


// Lấy chi tiết bệnh theo id
function getBenhById($id)
{
    $sql = "SELECT * FROM benh WHERE id = ?";
    $result = pdo_query_one($sql, $id);
    return $result;
}


// Cập nhật bệnh
function updateBenh(
    $tenBenh,
    $moTa,
    $trieuChung,
    $nguyenNhan,
    $phongNgua,
    $duongLayTruyen,
    $doiTuong,
    $chanDoan,
    $dieuTri,
    $id
)
{
    $sql = "UPDATE `benh` SET ". 
        "`ten_benh` = ?, `mo_ta` = ?, `trieu_chung` = ?, `nguyen_nhan` = ?, `phong_ngua` = ?".
        ",`duong_lay_truyen` = ?, `doi_tuong` = ?, `chan_doan` = ?, `dieu_tri` = ?".
        "WHERE id = ?";
    $result = pdo_execute(
        $sql,
        $tenBenh,
        $moTa,
        $trieuChung,
        $nguyenNhan,
        $phongNgua,
        $duongLayTruyen,
        $doiTuong,
        $chanDoan,
        $dieuTri,
        $id
    );    
    return $result;
}

// Xóa bệnh theo id
function deleteBenh($id)
{
    $sql = "DELETE FROM benh WHERE id = ?";
    $result = pdo_execute($sql, $id);
    return $result;
}

// Tìm kiếm bệnh theo tên
function searchBenhByTen($tenBenh)
{
    $sql = "SELECT `id_benh`, `ten_benh`, `mo_ta` FROM `benh` WHERE `ten_benh` LIKE ?";
    $result = pdo_query($sql, "%$tenBenh%");
    return $result;
}

// Tìm kiếm bệnh theo triệu chứng
function searchBenhByTrieuChung($trieuChung)
{
    // $sql = "SELECT `id_benh`, `ten_benh`, `mo_ta` FROM `benh` WHERE `trieu_chung` LIKE ?";
    $sql = "SELECT `b`.`id_benh`, `b`.`ten_benh`, `b`.`trieu_chung`, (SELECT name FROM `anh_benh` `ab` WHERE `b`.`id_benh` = `ab`.`id_benh` LIMIT 0, 1) `anh` "
    ."FROM `benh` `b`"
    ."WHERE `b`.`trieu_chung` LIKE ?";
    $result = pdo_query($sql, "%$trieuChung%");
    return $result;
}


// Danh sách bệnh bởi danh sách triệu chứng
function searchBenhByDanhSachTrieuChung($danhSachTrieuChung)
{
    $sql = "SELECT `b`.`id_benh`, `b`.`ten_benh`, `b`.`trieu_chung`, (SELECT name FROM `anh_benh` `ab` WHERE `b`.`id_benh` = `ab`.`id_benh` LIMIT 0, 1) `anh` "
    ." FROM `benh` `b` WHERE";
    $conditionParts = array(); 
    foreach($danhSachTrieuChung as $trieuChung){
        $conditionParts[] = "`b`.`trieu_chung` LIKE '%$trieuChung%'";
        }
    $sql .= implode(' AND ', $conditionParts);
    $result = pdo_query($sql);
    return $result;
}


// Kiểm tra tồn tại bệnh theo tên
function checkExistBenhByTen($tenBenh)
{
    $sql = "SELECT COUNT(`id_benh`) FROM `benh` WHERE `ten_benh` = ?";
    $result = pdo_query_value($sql, $tenBenh);
    return $result > 0;
}

