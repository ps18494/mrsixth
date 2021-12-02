<?php extract($getidthuoc) ?>
<div class=""><h3><a href="#">Trang chủ</a>/<a href="#">Tin tức</a></h3></div>
<?=$ten_thuoc?> <br>
<div style="width: 80%; margin: auto; font-size: 14px; color: grey">
    <p>Thông tin giới thiệu dưới đây dành cho các cán bộ y tế dùng để tra cứu, sử 
    dụng trong công tác chuyên môn hàng ngày. Đối với người bệnh, khi sử dụng 
    cần có chỉ định/ hướng dẫn sử dụng của bác sĩ/ dược sĩ để đảm bảo an toàn 
    và hiệu quả.</p>
    <p>Nội dung được trích từ Sổ tay sử dụng thuốc Vinmec 2019 do Bệnh viện Đa 
    khoa Quốc tế Vinmec biên soạn, Nhà xuất bản Y học ấn hành tháng 9/2019. Sách được bán tại Nhà thuốc, Bệnh viện Đa khoa Quốc tế Vinmec Times City 
    (458 Minh Khai, Hai Bà Trưng, Hà Nội), giá bìa 220.000 VNĐ/cuốn.</p>
</div>
 <div class="tab-chitietthuoc">
     <div class="nav_thuoc">
         <ul>
            <?php if(!empty($dang_bao_che)){ ?>
            <li>    <a href=""><i class="fa fa-magic fa-fw"></i>Dạng bào chế</a>     </li>
            <?php } ?>
             <?php if(!empty($nhom_thuoc)){ ?>
            <li>    <a href=""><i class="fa fa-leaf fa-fw"></i>Nhóm thuốc</a>       </li>
            <?php } ?>
             <?php if(!empty($lieudung_cachdung)){ ?>
            <li>    <a href=""><i class="fa fa-file-text fa-fw"></i>Liều và cách dùng</a></li>
            <?php } ?>
             <?php if(!empty($than_trong)){ ?>
            <li>    <a href=""><i class="fa fa-exclamation-triangle fa-fw"></i>Thận trọng</a>       </li>
            <?php } ?>
             <?php if(!empty($chi_dinh)){ ?>
            <li>    <a href=""><i class="fa fa-check fa-fw"></i>Chỉ định</a>         </li>
            <?php } ?>
             <?php if(!empty($chong_chi_dinh)){ ?>
            <li>    <a href=""><i class="fa fa-times fa-fw"></i>Chống chỉ định</a>   </li>
            <?php } ?>
            <?php if(!empty($chu_y)){ ?>
                <li>    <a href=""><i class="fa fa-sticky-note fa-fw"></i>Chú ý khi sử dụng</a></li>
            <?php } ?>
                 <?php if(!empty($tac_dung_phu)){ ?>
            <li>    <a href=""><i class="fa fa-frown-o fa-fw"></i>Tác dụng phụ</a>     </li>
            <?php } ?>
             <?php if(!empty($tai_lieu_tham_khao)){ ?>
            <li>    <a href=""><i class="fa fa-question-circle-o fa-fw"></i>Tài liệu tham khảo</a></li>
            <?php } ?>
        </ul>
     </div>
     <div class="chitietthuoc">
            <?php if(isset($dang_bao_che)){ ?>
                <div>
                    <h6>Dạng bào chế</h6>
                    <div><?=$dang_bao_che?></div>
                </div>
            <?php } ?>
            <?php if(isset($nhom_thuoc)){ ?>
                <div>
                    <h6>Nhóm thuốc</h6>
                    <div><?=$nhom_thuoc?></div>
                </div>
            <?php } ?>
            <?php if(isset($lieudung_cachdung)){ ?>
                <div>
                    <h6>Liều và cách dùng</h6>
                    <div><?=$lieudung_cachdung?> </div>
                </div>
            <?php } ?>
            <?php if(isset($than_trong)){ ?>
                <div>
                    <h6>Thận trọng</h6>
                    <div><?=$than_trong?></div>
                </div>
            <?php } ?>
            <?php if(isset($chi_dinh)){ ?>
                <div>
                    <h6>Chỉ định</h6>
                    <div><?=$chi_dinh?></div>
                </div>
            <?php } ?>
        
            <?php if(isset($chong_chi_dinh)){ ?>
                    <div>
                        <h6>Chống chỉ định</h6>  
                        <div><?=$chong_chi_dinh?></div>
                    </div>
            <?php } ?>
            <?php if(!empty($chu_y)){ ?>
                <div>
                    <h6>Chú ý khi sử dụng</h6>
                    <div><?=$chu_y?></div>
                </div>
            <?php } ?>
            <?php if(!empty($tac_dung_phu)){ ?>
                <div>
                    <h6>Tác dụng phụ</h6>
                    <div><?=$tac_dung_phu?></div>
                </div>
            <?php } ?>
            <?php if(!empty($tai_lieu_tham_khao)){ ?>
                <div>
                    <h6>Tài liệu tham khảo</h6>
                    <div><?=$tai_lieu_tham_khao?></div>
                </div>
            <?php } ?>
     </div>
 </div>
