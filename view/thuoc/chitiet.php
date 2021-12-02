<?php extract($getidthuoc) ?>


<div class="w-75 mx-auto d-flex flex-row">
    <article class="w-75">
        <!-- Thuoc heaer -->
        <header>
            <h1 class="my-2">
                Thông tin về <?= $ten_thuoc ?>
            </h1>
        </header>

        <!-- Thuoc credit -->
        <section>

            <!-- Credit -->
            <div class="text-secondary font-italic p-2 border rounded">
                <p>Thông tin giới thiệu dưới đây dành cho các cán bộ y tế dùng để tra cứu, sử
                    dụng trong công tác chuyên môn hàng ngày. Đối với người bệnh, khi sử dụng
                    cần có chỉ định/ hướng dẫn sử dụng của bác sĩ/ dược sĩ để đảm bảo an toàn
                    và hiệu quả.</p>
                <p>Nội dung được trích từ Sổ tay sử dụng thuốc Vinmec 2019 do Bệnh viện Đa
                    khoa Quốc tế Vinmec biên soạn, Nhà xuất bản Y học ấn hành tháng 9/2019. Sách được bán tại Nhà thuốc, Bệnh viện Đa khoa Quốc tế Vinmec Times City
                    (458 Minh Khai, Hai Bà Trưng, Hà Nội), giá bìa 220.000 VNĐ/cuốn.</p>
            </div>

        </section>

        <!-- Thuoc content -->
        <section>
            <?php if (isset($dang_bao_che)) { ?>
                <div id="dang_bao_che">
                    <h6>Dạng bào chế</h6>
                    <div><?= $dang_bao_che ?></div>
                </div>
            <?php } ?>
            <?php if (isset($nhom_thuoc)) { ?>
                <div id="nhom_thuoc">
                    <h6>Nhóm thuốc</h6>
                    <div><?= $nhom_thuoc ?></div>
                </div>
            <?php } ?>
            <?php if (isset($lieudung_cachdung)) { ?>
                <div id="lieudung_cachdung">
                    <h6>Liều và cách dùng</h6>
                    <div><?= $lieudung_cachdung ?> </div>
                </div>
            <?php } ?>
            <?php if (isset($than_trong)) { ?>
                <div id="than_trong">
                    <h6>Thận trọng</h6>
                    <div><?= $than_trong ?></div>
                </div>
            <?php } ?>
            <?php if (isset($chi_dinh)) { ?>
                <div id="chi_dinh">
                    <h6>Chỉ định</h6>
                    <div><?= $chi_dinh ?></div>
                </div>
            <?php } ?>

            <?php if (isset($chong_chi_dinh)) { ?>
                <div id="chong_chi_dinh">
                    <h6>Chống chỉ định</h6>
                    <div><?= $chong_chi_dinh ?></div>
                </div>
            <?php } ?>
            <?php if (!empty($chu_y)) { ?>
                <div id="chu_y">
                    <h6>Chú ý khi sử dụng</h6>
                    <div><?= $chu_y ?></div>
                </div>
            <?php } ?>
            <?php if (!empty($tac_dung_phu)) { ?>
                <div class="tac_dung_phu">
                    <h6>Tác dụng phụ</h6>
                    <div><?= $tac_dung_phu ?></div>
                </div>
            <?php } ?>
            <?php if (!empty($tai_lieu_tham_khao)) { ?>
                <div id="tai_lieu_tham_khao">
                    <h6>Tài liệu tham khảo</h6>
                    <div><?= $tai_lieu_tham_khao ?></div>
                </div>
            <?php } ?>
        </section>
    </article>

    <!-- Thuoc table of contents -->
    <div class="w-auto toc sticky-top pl-4">
        <?php if (!empty($dang_bao_che)) { ?>
            <a href="#dang_bao_che"><i class="fa fa-magic fa-fw"></i>Dạng bào chế</a>
        <?php } ?>
        
        <?php if (!empty($nhom_thuoc)) { ?>
            <a href="#nhom_thuoc"><i class="fa fa-leaf fa-fw"></i>Nhóm thuốc</a>
        <?php } ?>
        
        <?php if (!empty($lieudung_cachdung)) { ?>
            <a href="#lieudung_cachdung"><i class="fa fa-file-text fa-fw"></i>Liều và cách dùng</a>
        <?php } ?>
        
        <?php if (!empty($than_trong)) { ?> 
            <a href="#than_trong"><i class="fa fa-exclamation-triangle fa-fw"></i>Thận trọng</a>
        <?php } ?>
        
        <?php if (!empty($chi_dinh)) { ?>
            <a href="#chi_dinh"><i class="fa fa-check fa-fw"></i>Chỉ định</a>
        <?php } ?>
        
        <?php if (!empty($chong_chi_dinh)) { ?>
            <a href="#chong_chi_dinh"><i class="fa fa-times fa-fw"></i>Chống chỉ định</a>
        <?php } ?>
        
        <?php if (!empty($chu_y)) { ?>
            <a href="#chu_y"><i class="fa fa-sticky-note fa-fw"></i>Chú ý khi sử dụng</a>
        <?php } ?>
        
        <?php if (!empty($tac_dung_phu)) { ?>
             <a href="#tac_dung_phu"><i class="fa fa-frown-o fa-fw"></i>Tác dụng phụ</a>
        <?php } ?>

        <?php if (!empty($tai_lieu_tham_khao)) { ?>
            <a href="#tai_lieu_tham_khao"><i class="fa fa-question-circle-o fa-fw"></i>Tài liệu tham khảo</a>
        <?php } ?> </div>
    </div>