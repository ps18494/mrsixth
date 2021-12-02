<h1><?= $TITLE ?></h1>
<p>View: <?= $VIEW ?></p>
<p>Controller: <?= ADMIN_CONTROLLER . $controller . '.php' ?></p>
<p>Controller function: <?= $action ?></p>
<div class="kw_drug">
    <h1>Từ khóa vừa tìm: <?= $tenThuoc ?></h1>
    <table class="ds-thuoc table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id thuốc</th>
                <th scope="col">Tên thuốc</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Dạng bào chế</th>
            </tr>
        </thead>
        <tbody>
            <?php $search = searchThuocByTen($tenThuoc); ?>
            <?php foreach ($search as $value) { ?>
                <tr class="data-drug">
                    <td class="id_thuoc">
                        <div>
                            <?= $value['id_thuoc'] ?>
                        </div>
                    </td>
                    <td class="ten_thuoc">
                        <div>
                            <?= $value['ten_thuoc'] ?>
                        </div>
                    </td>
                    <td class="hinh_anh">
                        <div>
                            <?= $value['hinh_anh'] ?>
                        </div>
                    </td>
                    <td class="d-flex function">
                        <a href="<?= ROOT_DOMAIN . "/admin/thuoc/sua?id_thuoc=" . $value['id_thuoc'] ?>"><button name="btn-sua-thuoc" class="btn-function">Sửa</button></a>
                        <a onclick="return confirm('Bạn muốn xóa dữ liệu này ?')" href="<?= ROOT_DOMAIN . "/admin/thuoc/xoa/?id_thuoc=" . $value['id_thuoc'] ?>" ?><button name="btn-xoa-thuoc" class="btn-function">Xóa</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>