
 <div >
            <div ><a href="<?=ROOT_DOMAIN?>">Trang chủ</a>/<a href="#">Thông tin cá nhân</a></div>
            <div >
                <?php extract($chitietuser) ;?> 
                <div >
                    <?php if($hinh_anh != ""){ ?>
                        <img src="<?=UPLOADS. "/img_user/".$hinh_anh.""?>"/>
                    <?php }else{ ?>
                        <img src="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes-3/3/16-512.png">
                    <?php }?>
                </div>
                <div >
                    <table >
                       
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
                    <a href="<?=ROOT_DOMAIN . "/user/changepassword"?>"><button>Đổi mật khẩu</button></a>
                    <a href="<?=ROOT_DOMAIN . "/user/thongtincanhan"?>" style="margin-left: 5%"><button>Thông tin cá nhân</button></a>
                </div>
            </div>
            <div >
                <div >
                    <table >
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Bệnh đã quan tâm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php extract($listCare) ?>
                        <?php for($i = 0; $i < count($listCare); $i++){ ?>
                            
                                <tr>
                                    <th scope="row"><?=$i+1?></th>
                                    <td><a href="<?=ROOT_DOMAIN . "/benh/chitiet?idbenh=" . $listCare[$i]['id_benh']?>"><?=$listCare[$i]['ten_benh']?></a></td>
                                </tr>
                            
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>