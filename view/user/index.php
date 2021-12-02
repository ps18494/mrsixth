<?php extract($chitietuser); ?>
<div class="container border-bottom bg-white mt-1 pt-md-3 pt-2 h" style="min-height: 100vh;">
    <div class="d-flex flex-md-row justify-content-around align-items-center border-bottom">
        <div>
            <a href="<?= ROOT_DOMAIN . "/user/thongtin/" ?>">
                <svg data-toggle="tooltip" title="Chỉnh sửa" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
            </a>
        </div>
        <div class="d-flex flex-md-row align-items-center">
            <div class="p-md-2">
                <?php if ($hinh_anh) { ?>
                    <img style="width: 64px" src="<?= UPLOADS . "/img_user/$hinh_anh" ?>" alt="" class="rounded-circle" id="profile">
                <?php } else { ?>
                    <img style="width: 64px" src="<?= UPLOADS . "/img_user/default.png" ?>" alt="" class="rounded-circle" id="profile">

                <?php } ?>
            </div>
            <div class="p-md-2 p-1" id="info">
                <h5><?= $id_user ?> <?php if ($ten) { ?> <?= "($ten)" ?><?php } ?></h5>
                <div class="text-muted">
                    <?php if ($vai_tro == 1) { ?>
                        Adminstrator
                    <?php } else { ?>
                        Client
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column" id="info">
            <div class="p-md-1 text-muted"> <span class="fa fa-envelope-o bg-light p-1 rounded-circle"></span> <?= $email ?></div>
            <div class="p-md-1 pt-sm-1 text-muted"> <span class="fa fa-phone bg-light p-1 rounded-circle"></span> <?= $sdt ?></div>
        </div>
        <div class="rounded p-lg-2 p-1" id="blue-background">
            <div class="d-flex flex-md-row align-items-center">
                <div class="d-flex flex-column align-items-center px-lg-3 px-md-2 px-1" id="border-right">
                    <p class="h4" data-toggle="tooltip" title="Số bệnh đã quan tâm"><?= $countBenh ?></p>
                    <div class="text-muted" id="count">Quan tâm</div>
                </div>
                <div class="d-flex flex-column align-items-center px-lg-3 px-md-2 px-1" id="border-right">
                    <p class="h4 text-warning" data-toggle="tooltip" title="Đề xuất đang chờ quản trị viên xem xet"><?= $soDeXuatDoiDuyet ?></p>
                    <div class="text-muted" id="count">Đợi xem xét</div>
                </div>
                <div class="d-flex flex-column align-items-center px-lg-3 px-md-2 px-1" id="border-right">
                    <p class="h4 text-success" data-toggle="tooltip" title="Số đề xuất đã được duyệt"><?= $soDeXuatDuocDuyet ?></p>
                    <div class="text-muted" id="count">Chấp nhận</div>
                </div>
                <div class="d-flex flex-column align-items-center px-lg-4 px-md-2 px-sm-1 px-2">
                    <p class="h4 text-danger" data-toggle="tooltip" title="Số đề xuất đã bị từ chối"><?= $soDeXuatBiTuChoi ?></p>
                    <div class="text-muted" id="count">Từ chối</div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-md-row justify-content-around align-items-center my-4">
        <div class="w-50 border-right">
            <div class="h5">Các bệnh đã quan tâm:</div>
            <?php foreach (array_values($listCare) as $index => $benh) { ?>
                <div>
                    <?= $index ?>. <span><?= $benh['ten_benh'] ?></span>
                    <span>
                        <a target="_blank" href="<?= ROOT_DOMAIN . "/benh/chitiet?idbenh=" . $benh['id_benh']?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z" />
                                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z" />
                            </svg>
                        </a>
                    </span>
                </div>
            <?php } ?>
        </div>

        <div class="w-50 pl-4">
            <div class="h5">Các bệnh đã đề xuất chỉnh sửa:</div>
            <?php foreach (array_values($danhSachDeXuat) as $index => $de_xuat) { ?>
                <div>
                    <?= $index ?>. <span><?= $de_xuat['ten_benh'] ?></span>
                    <span>
                        <a target="_blank" href="<?= ROOT_DOMAIN . "/user/chitietdexuat?id_de_xuat=" . $de_xuat['id_de_xuat']?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z" />
                                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z" />
                            </svg>
                        </a>
                    </span>
                </div>
            <?php } ?>
        </div>
    </div>
</div>