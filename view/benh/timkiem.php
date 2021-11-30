<div>
    <?php if (empty($danhSachBenh)) { ?>
        <div >Không có kết quả tìm kiếm</div>
    <?php } else { ?>
        <div ><?= count($danhSachBenh) ?> kết quả tìm kiếm cho: <?= $query ?></div>
        <?php foreach($danhSachBenh as $benh ) { extract($benh) ?> 
            
            <!-- Bắt đầu block bệnh -->
            <a href="chitiet?idbenh=<?=$id_benh?>">            
                <article >
                    <header >
                        <h3 ><?= $ten_benh ?></h3>
                        <?php if ($anh) {?>
                        <img class="p-2 w-100 :hover" src="<?= UPLOADS . "diseases/$anh"?>" alt="">
                        <?php } ?>
                    </header>
                    <section >
                        <?= limit_words($trieu_chung, 75)?>
                    </section>
                </article>
            </a>
            <!-- Kết thúc block bệnh -->

        <?php } // end forEach loop $danhSachBenh?>
    <?php } // end else ?>
</div>