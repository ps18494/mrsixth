<div class="w-75 mx-auto p-4 mt-4 d-flex flex-row">
    <div class="w-75 p-4">
        <?php if (empty($danhSachBenh)) { ?>
            <div class="">Không có kết quả tìm kiếm</div>
        <?php } else { ?>
            <h2 class="text-capitalize">
                kết quả tìm kiếm (<?= count($danhSachBenh) ?>)  cho: 
                <span class="text-normal text-primary"><?= $query ?></span>
            </h2>
            <?php foreach($danhSachBenh as $benh ) { extract($benh) ?> 
                
                <!-- Bắt đầu block bệnh -->
                <article class="flex flex-col p-2 mb-4 border shadow hightligt-left">
                    <header >
                        <a href="chitiet?idbenh=<?=$id_benh?>">            
                            <h3 ><?= $ten_benh ?></h3>
                        </a>
                    </header>
                        <section class="d-flex flex-row">
                            <div class="w-75 pr-2">
                                <?= limit_words($trieu_chung, 75)?>
                            </div>
                            <div class="w-25">
                                <?php if ($anh) {?>
                                <img class="border rounded w-100 transition" src="<?= UPLOADS . "diseases/$anh"?>" alt="">
                                <?php } ?>
                            </div>
                        </section>
                    </article>
                <!-- Kết thúc block bệnh -->
    
            <?php } // end forEach loop $danhSachBenh?>
        <?php } // end else ?>
    </div>
    <div class="w-auto">
        <?php include DEFAULT_VIEW . "benh/aside.php"?>
    </div>
</div>