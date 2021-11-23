
 <div class="tab-ttcn">
            <div class="url-web"><a href="<?=ROOT_DOMAIN?>">Trang chủ</a>/<a href="#">Thông tin cá nhân</a></div>
            <div class="box-thongtin">
                <?php extract($chitietuser) ?> 
                <div class="img-thongtin"><img src="" alt="Ảnh đại diện của <?=$ten?>"/></div>
                <div class="thongtin">
                    <table class="table">
                       
                        <tbody>
                            <tr>
                                <th scope="row">Tên người dùng</th>
                                <td><?=$ten?></td>
                            </tr>
                            <tr>
                                <th scope="row">Ngày sinh: </th>
                                <td><?=$ngay_sinh?></td>
                            </tr>
                            <tr>
                                <th scope="row">Số điện thoại</th>
                                <td><?=$sdt?></td>
                            </tr>
                            <tr>
                                <th scope="row">Email:</th>
                                <td><?=$email?></td>
                            </tr>
                        <th></th>
                        <td></td>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-thongtin">
                <div class="table-care">
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Bệnh đã quan tâm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>