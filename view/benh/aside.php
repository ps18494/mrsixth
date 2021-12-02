<?php 
    require_once "dao/pdo.php";
    require_once "dao/benh.php";
    require_once "dao/dexuat.php";

    $deXuatMoi = getAllDeXuatByTrangThai(0);
?>
<aside class="w-100">
    <div class="p-2 border rounded">
        <div class="text-uppercase font-weight-bold">Chỉnh sửa gần đây</div>
        <div class="d-flex flex-column">
            <?php foreach($deXuatMoi as $de_xuat) { extract($de_xuat);?>
                <a href="<?= ROOT_DOMAIN . "/benh/chitiet?idbenh=$id_benh"?>"><?=$ten_benh?></a>
            <?php } ?>
        </div>
    </div>
</aside>