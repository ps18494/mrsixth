<?php
$result = getAllUser();
?>
<form class="select-ds" action="<?= ROOT_DOMAIN . "/admin/user/danhsach"?>" method="post">
    <div class="form-group">
        <label for="">Danh sách với: </label>
        <select class="select-option form-control" name="vai_tro" id="vai_tro">
            <option value="1">Admin</option>
            <option value="2">Khách hàng</option>
            <option value="3">Tất cả</option>
        </select>
    </div>
    <div class="form-group">
        <input class="btn-function" type="submit" value="Tìm">
    </div>
</form>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id user</th>
            <th scope="col">Tên</th>
            <th scope="col">Mật khẩu</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Email</th>
            <th scope="col">Vai trò</th>
            <th scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $value) { ?>
            <tr>
                <th scope="row"><?= $value['id_user'] ?></th>
                <td><?= $value['ten'] ?></td>
                <td><?= $value['mat_khau'] ?></td>
                <td><?= $value['ngay_sinh'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><?= $value['vai_tro'] == 0 ? "Khách hàng" : 'Admin' ?></td>
                <td class="d-flex function">
                    <a onclick="return confirm('Bạn muốn xóa dữ liệu này ?')" href="<?= ROOT_DOMAIN . "/admin/user/xoa?id_user=" . $value['id_user'] ?>" ?><button name="btn-xoa-thuoc" class="btn-function">Xóa</button></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>