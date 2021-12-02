<?php 
    require_once "dao/pdo.php";
    require_once "dao/tintuc.php";
    require_once "dao/benh.php";

    $danhSachTinXemNhieu = tinXemNhieu();
?>

<aside class="d-flex flex-col">
    <div>
        <?php foreach($danhSachTinXemNhieu as $tin) { extract($tin)?> 
            <li>
                <a href="<?= ROOT_DOMAIN . "/tintuc/chitiet?idtin=$id_tin"?>">
                
                    <?=$tieu_de?>
                </a>
            </li>
        <?php } ?>
    </div>
</aside>