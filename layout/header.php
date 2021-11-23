<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="<?= ROOT_DOMAIN ?>">Mr.Sixth</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= ROOT_DOMAIN ?>">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=ROOT_DOMAIN . "/thuoc"?>">Thuốc</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=ROOT_DOMAIN . "/benh"?>">Bệnh</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=ROOT_DOMAIN . "/lienhe"?>">Liên hệ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=ROOT_DOMAIN . "/tintuc"?>">Tin tức</a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tin tức</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                </div>
            </li> -->
        </ul>
        <form class="header-search-form" action="<?= ROOT_DOMAIN . "/benh/timkiem"?>">
            <div class="d-flex justify-between ">
                <input name="q" class="form-control mr-sm-2" type="text" placeholder="Nhập từ khóa">
                <button><i class="fa fa-search"></i></button>
            </div>
        </form>
        <?php if (is_authenticated()) { ?> 
            <div>
                <a href="<?= ROOT_DOMAIN . "/user/"?>">
                    <button class="btn-dang-nhap btn btn-outline-success" type="submit">Tài khoản</button>
                </a>
                <a href="<?= ROOT_DOMAIN . "/logout/" ?>">
                    <button class="btn-dang-ky btn btn-outline-success" type="submit">Đăng xuất</button>
                </a>
            </div>
        <?php } else { ?>
            <div>
                <a href="<?= ROOT_DOMAIN . "/signup/"?>">
                    <button class="btn-dang-nhap btn btn-outline-success" type="submit">Đăng ký</button>
                </a>
                <a href="<?= ROOT_DOMAIN . "/login/"?>">
                    <button class="btn-dang-ky btn btn-outline-success" type="submit">Đăng nhập</button>
                </a>
            </div>
        <?php } ?>
    </div>
</nav>
<!-- end -->