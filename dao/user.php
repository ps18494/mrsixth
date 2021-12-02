<?php declare(strict_types=1);

// Danh sách người dùng
function getAllUser()
{
    $sql = "SELECT * FROM `user`";
    $result = pdo_query($sql);
    return $result;
}

// Danh sách người dùng theo vai trò
function getAllUserByVaiTro($vaiTro)
{
    $sql = "SELECT * FROM user WHERE vai_tro = ?";
    $result = pdo_query($sql,$vaiTro);
    return $result;
}

// Thêm người dùng
function insertUser(
    $username,
    $matKhau,
    $ngaySinh,
    $email,
    $sdt,
    $hinhAnh,
    $vaiTro,
    $tinhTrangSucKhoe
) {
    $sql =
        "INSERT INTO `user`" .
        " (`id_user`, `mat_khau`, `ngay_sinh`, `email`, `sdt`, `hinh_anh`, `vai_tro`, `tinh_trang_suc_khoe`)" .
        " VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $result = pdo_execute(
        $sql,
        $username,
        $matKhau,
        $ngaySinh,
        $email,
        $sdt,
        $hinhAnh,
        $vaiTro,
        $tinhTrangSucKhoe
    );
    return $result;
}

// Chi tiết người dùng theo id
function getUserById($id_user)
{
    $sql = "SELECT * FROM `user` WHERE `id_user` = ?";
    $result = pdo_query_one($sql, $id_user);
    return $result;
}

// Chi tiết người dùng theo id_user, password
function getUserByIdAndPassword($id_user, $password)
{
    $sql = "SELECT * FROM `user` WHERE (`id_user`= ? AND `mat_khau` = ?)";
    $result = pdo_query_one($sql, $id_user, $password);
    return $result;
}

// Cập nhật thông tin người dùng
function updateUser(
    $ten,
    $ngaySinh,
    $email,
    $sdt,
    $hinhAnh,
    $tinhTrangSucKhoe,
    $id_user
) {
    $sql =
        "UPDATE `user` SET" .
        " `ten` = ?, `ngay_sinh` = ?, `email` = ?, `sdt` = ?, `hinh_anh` = ?, `tinh_trang_suc_khoe` = ?" .
        "WHERE `id_user` = ?";
    $result = pdo_execute(
        $sql,
        $ten,
        $ngaySinh,
        $email,
        $sdt,
        $hinhAnh,
        $tinhTrangSucKhoe,
        $id_user
    );
    return $result;
}

// Xóa người dùng
function deleteUser($id)
{
    $sql = "DELETE FROM `user` WHERE `id_user` = ?";
    $result = pdo_execute($sql, $id);
    return $result;
}

// Kiểm tra người dùng theo email
function checkUserByEmail($email)
{
    $sql = "SELECT COUNT(`id_user`) FROM `user` WHERE `email` = ?";
    $result = pdo_query_value($sql, $email);
    return $result > 0;
}

// Kiểm tra người dùng có tồn tại bởi tên đăng nhập (id_user)
function checkUserById($id)
{
    $sql = "SELECT COUNT(`id_user`) FROM `user` WHERE `id_user` = ?";
    $result = pdo_query_value($sql, $id);
    return $result > 0;
}

// Doi mat khau
function updatePassword($newpass, $id_user)
{
    $sql = "UPDATE `user` SET `mat_khau` = ? WHERE `id_user` = ?";
    $result = pdo_execute($sql, $newpass, $id_user);
    return $result;
}
