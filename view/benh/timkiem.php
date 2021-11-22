<style>
    .benh:hover {
        cursor: pointer;
        border-color: black !important;
        color: black !important;
    }
</style>

<div class="contaienr p-4">
    <?php if (empty($danhSachBenh)) { ?>
        <div class="p-2 mx-3">Không có kết quả tìm kiếm</div>
    <?php } else { ?>
        <div class="p-2 mx-3"><?= count($danhSachBenh) ?> kết quả tìm kiếm cho: <?= $query ?></div>
        <?php foreach($danhSachBenh as $benh ) { extract($benh) ?> 
            
            <!-- Bắt đầu block bệnh -->
            <a href="chitiet?idbenh=<?=$id_benh?>">            
                <article class="p-2 mb-2 d-flex border rounded bg-white benh pointer">
                    <header class="col-4">
                        <h3 class="py-2 font-weight-bold text-uppercase"><?= $ten_benh ?></h3>
                        <?php if ($anh) {?>
                        <img class="p-2 w-100 :hover" src="<?= UPLOADS . "diseases/$anh"?>" alt="">
                        <?php } ?>
                    </header>
                    <section class="mx-2 p-2">
                        <?= limit_words($trieu_chung, 75)?>
                    </section>
                </article>
            </a>
            <!-- Kết thúc block bệnh -->

        <?php } // end forEach loop $danhSachBenh?>
    <?php } // end else ?>
</div>