<?php
//var_dump($dexuat);
extract($dexuat);var_dump($trangThai)
?>


<h5>Đề xuất chỉnh sửa bởi người dùng: <?=$id_user?></h5>
<div class="w-75 mx-auto p-4 mt-4 d-flex flex-row">
    <article class="chitietbenh w-75">
        <header>
            <h1><?= $id_benh ?></h1>
        </header>

        <?php if ($mo_ta) { ?>
            <section id="mota" title="Mô tả">
                <div class="font-weight-bold text-uppercase">Mô tả</div>
                <div>
                    <?= $mo_ta ?>
                </div>
            </section>
        <?php } ?>
        

           

            <?php if ($trieu_chung) { ?>
                <section id="trieuchung" title="Triệu chứng">
                    <div class="font-weight-bold text-uppercase">Triệu chứng</div>
                    <div>
                        <?= $trieu_chung ?>
                    </div>
                </section>
            <?php } ?>

            <?php if ($nguyen_nhan) { ?>
                <section id="nguyennhan" title="Nguyên nhân">
                    <div class="font-weight-bold text-uppercase">Nguyên nhân</div>
                    <div>
                        <?= $nguyen_nhan ?>
                    </div>
                </section>
            <?php } ?>

            <?php if ($phong_ngua) { ?>
                <section id="phongngua" title="Phòng ngừa">
                    <div class="font-weight-bold text-uppercase">Phòng ngừa</div>
                    <div>
                        <?= $phong_ngua ?>
                    </div>
                </section>
            <?php } ?>

            <?php if ($duong_lay_truyen) { ?>
                <section id="laytruyen" title="Đường lây truyền">
                    <div class="font-weight-bold text-uppercase">Đường lây truyền</div>
                    <div>
                        <?= $duong_lay_truyen ?>
                    </div>
                </section>
            <?php } ?>

            <?php if ($doi_tuong) { ?>
                <section id="doituong" title="Đối tượng">
                    <div class="font-weight-bold text-uppercase">Đối tượng</div>
                    <div>
                        <?= $doi_tuong ?>
                    </div>
                </section>
            <?php } ?>

            <?php if ($chan_doan) { ?>
                <section id="chandoan" title="Chẩn đoán">
                    <div class="font-weight-bold text-uppercase">Chẩn đoán</div>
                    <div>
                        <?= $chan_doan ?>
                    </div>
                </section>
            <?php } ?>

            <?php if ($dieu_tri) { ?>
                <section id="dieutri" title="Điều trị">
                    <div class="font-weight-bold text-uppercase">Điều trị</div>
                    <div>
                        <?= $dieu_tri ?>
                    </div>
                </section>
            <?php } ?>

        
    </article>
    <!-- Table of contents -->
    <div id="toc" class="pl-4 w-auto toc h-10 sticky-top">
        
        <form action="" method="POST">
            <?php if($trangThai == 1){ ?>
                <div><h5>Đề xuất đã được chấp nhận</h5></div>
                <input type="submit" name="status" value="Chọn lại">
            <?php }else if($trangThai == 2){ ?>
                <div><h5>Đề xuất không được chấp nhận chấp nhận</h5></div>
                <input type="submit" name="status" value="Chọn lại">
            <?php }else if ($trangThai == 0){ ?>
                <input type="submit" name="status_1" value="Chấp nhận">
                <input type="submit" name="status_2" value="Không chấp nhận">
            <?php } ?>
        </form>
    </div>
    <!-- End TOC -->
</div>

