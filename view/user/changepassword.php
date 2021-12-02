<?php extract($chitietuser); ?>
<div class="container border-bottom bg-white mt-1 pt-md-3 pt-2 h">
    <div class="d-flex flex-md-row justify-content-around align-items-center border-bottom">
        <div class="d-flex flex-column">
            <a href="<?= ROOT_DOMAIN . "/user/thongtin/" ?>">
                <svg data-toggle="tooltip" title="Chỉnh sửa" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg>
            </a>
            <a href="<?= ROOT_DOMAIN . "/user/changepassword/" ?>">
                <svg data-toggle="tooltip" title="Đổi mật khẩu" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                    <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                </svg>
            </a>
        </div>
        <div class="d-flex flex-md-row align-items-center">
            <div class="p-md-2"> 
                <?php if ($hinh_anh) { ?> 
                    <img style="width: 64px" src="<?= UPLOADS . "/img_user/$hinh_anh"?>" alt="" class="rounded-circle" id="profile"> 
                <?php } else { ?>
                    <img style="width: 64px" src="<?= UPLOADS . "/img_user/default.png"?>" alt="" class="rounded-circle" id="profile"> 
                
                <?php } ?>
            </div>
            <div class="p-md-2 p-1" id="info">
                <h5><?=$id_user?> <?php if ($ten) { ?> <?="($ten)"?><?php } ?></h5>
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
            <div class="p-md-1 text-muted"> <span class="fa fa-envelope-o bg-light p-1 rounded-circle"></span> <?=$email?></div>
            <div class="p-md-1 pt-sm-1 text-muted"> <span class="fa fa-phone bg-light p-1 rounded-circle"></span> <?=$sdt?></div>
        </div>
        <div class="rounded p-lg-2 p-1" id="blue-background">
            <div class="d-flex flex-md-row align-items-center">
                <div class="d-flex flex-column align-items-center px-lg-3 px-md-2 px-1" id="border-right">
                    <p class="h4" data-toggle="tooltip" title="Số bệnh đã quan tâm"><?=$countBenh?></p>
                    <div class="text-muted" id="count">Quan tâm</div>
                </div>
                <div class="d-flex flex-column align-items-center px-lg-3 px-md-2 px-1" id="border-right">
                    <p class="h4 text-warning" data-toggle="tooltip" title="Đề xuất đang chờ quản trị viên xem xet"><?=$soDeXuatDoiDuyet?></p>
                    <div class="text-muted" id="count">Đợi xem xét</div>
                </div>
                <div class="d-flex flex-column align-items-center px-lg-3 px-md-2 px-1" id="border-right">
                    <p class="h4 text-success" data-toggle="tooltip" title="Số đề xuất đã được duyệt"><?=$soDeXuatDuocDuyet?></p>
                    <div class="text-muted" id="count">Chấp nhận</div>
                </div>
                <div class="d-flex flex-column align-items-center px-lg-4 px-md-2 px-sm-1 px-2">
                    <p class="h4 text-danger" data-toggle="tooltip" title="Số đề xuất đã bị từ chối"><?=$soDeXuatBiTuChoi?></p>
                    <div class="text-muted" id="count">Từ chối</div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-md-row justify-content-around align-items-center my-4">
        <form method="POST">
            <?php if ($errors != "") { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errors ?>
                </div>
            <?php } ?>
            <div class="form-group row">
                <label for="oldpass" class="col-sm-6 col-form-label">Mật khẩu cũ</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="oldpass" id="oldpass" placeholder="Mật khẩu cũ">
                </div>
            </div>
            <div class="form-group row">
                <label for="newpass" class="col-sm-6 col-form-label">Mật khẩu mới</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="newpass" id="newpass" placeholder="Mật khẩu mới">
                </div>
            </div>
            <div class="form-group row">
                <label for="repass" class="col-sm-6 col-form-label">Xác nhận mật khẩu mới</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="repass" id="repass" placeholder="Xác nhận mật khẩu mới">
                </div>
            </div>
            

            <div >
                <input class="btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
            </div>
        </form>
    </div>
</div>