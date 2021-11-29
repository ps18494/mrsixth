<nav class="navbar navbar-expand-sm">
  <a class="navbar-brand" href="#">Mr.Sixth</a>
  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
      aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavId">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?=ROOT_DOMAIN . "/admin"?>">Trang chủ<span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thuốc</a>
        <div class="dropdown-menu" aria-labelledby="dropdownId">
          <a class="dropdown-item" href="<?=ROOT_DOMAIN . "/admin/thuoc/them"?>">Thêm</a>
          <a class="dropdown-item" href="<?=ROOT_DOMAIN . "/admin/thuoc/danhsach"?>">Danh sách</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bệnh</a>
        <div class="dropdown-menu" aria-labelledby="dropdownId">
          <a class="dropdown-item" href="<?=ROOT_DOMAIN . "/admin/benh/them"?>">Thêm</a>
          <a class="dropdown-item" href="<?=ROOT_DOMAIN . "/admin/benh/danhsach"?>">Danh sách</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tin tức</a>
        <div class="dropdown-menu" aria-labelledby="dropdownId">
          <a class="dropdown-item" href="#">Thêm</a>
          <a class="dropdown-item" href="#">Danh sách</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Khách hàng</a>
        <div class="dropdown-menu" aria-labelledby="dropdownId">
          <a class="dropdown-item" href="#">Thêm</a>
          <a class="dropdown-item" href="#">Danh sách</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Nhập từ khóa">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
    </form>
  </div>
</nav>