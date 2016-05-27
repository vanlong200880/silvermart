
<ul class="menu-left">
  <li><a href="<?php if(wpmd_is_notdevice()){?><?php echo home_url(); ?>/danh-muc/thoi-trang-phu-kien/<?php }else{ ?>javascript:void(0)<?php } ?>"><span class="icon icon-clothes"></span> Thời trang - Phụ kiện</a>
    <div class="menu-item">
      <div class="list-cate">
        <div class="list-item">
          <h4><a href="<?php echo home_url(); ?>/danh-muc/dong-ho/">Đồng hồ</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/dong-ho-nam/">Đồng hồ nam</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/dong-ho-nu/">Đồng hồ nữ</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/don-ho-unisex/">Đồng hồ unisex</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/dong-ho-be-trai/">Đồng hồ bé trai</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/dong-ho-be-gai/">Đồng hồ bé gái</a></li>
          </ul>
          <!--<h4><a href="<?php echo home_url(); ?>/danh-muc/giay-dep/">Giầy dép</a></h4>-->
<!--          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/giay-the-thao-nam/">Giày thể thao nam</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/giay-the-thao-nu/">Giày thể thao nữ</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/giay-tay/">Giày tây</a></li>
          </ul>-->
          <h4><a href="<?php echo home_url(); ?>/danh-muc/munon/">Mũ & Nón</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/munon-nam-munon/">Mũ & Nón nam</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/munon-nu/">Mũ & Nón nữ</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/munon-unisex/">Mũ & Nón unisex</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4><a href="<?php echo home_url(); ?>/danh-muc/vi-tui-xach/">Ví - Túi xách</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/vi-nam/">Ví nam</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/vi-nu/">Ví nữ</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/clutch/">Clutch</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/tui-xach-nam/">Túi xách nam</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/tui-xach-nu/">Túi xách nữ</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/ba-lo-nam/">Ba lô nam</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/ba-lo-nu/">Ba lô nữ</a></li>
          </ul>
          <h4><a href="<?php echo home_url(); ?>/danh-muc/day-nit/">Dây nịt</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/day-nit-nam/">Dây nịt nam</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/day-nit-nu/">Dây nịt nữ</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4><a href="<?php echo home_url(); ?>/danh-muc/trang-suc/">Trang sức</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/nhan/">Nhẫn</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/day-truyen/">Dây chuyền</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/lac-chan/">Lắc chân</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/cai-ao/">Cài áo</a></li>
          </ul>
          <h4><a href="<?php echo home_url(); ?>/danh-muc/mat-kinh/">Mắt kính</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/mat-kinh-nam/">Mắt kính nam</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/mat-kinh-nu/">Mắt kính nữ</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/mat-kinh-tre-em/">Mắt kính trẻ em</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/mat-kinh-unisex/">Mắt kính unisex</a></li>
          </ul>
          <h4><a href="<?php echo home_url(); ?>/danh-muc/bat-lua/">Bật lửa</a></h4>
        </div>
      </div>
      <?php if(wpmd_is_notdevice()): ?>
      <?php getTemplatePart('block/slider-category-menu',  null, array('category_slug' => 'thoi-trang-phu-kien') ); ?>
      <?php endif; ?>
    </div>
  </li>
  <li><a href="<?php if(wpmd_is_notdevice()){?><?php echo home_url(); ?>/danh-muc/lam-dep-suc-khoe/<?php }else{ ?>javascript:void(0)<?php } ?>"><span class="icon icon-woman"></span> Làm đẹp & Sức khỏe</a>
    <div class="menu-item">
      <div class="list-cate">
        <div class="list-item">
          <h4><a href="#">Danh mục</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/nuoc-hoa-nam/">Nước hoa nam</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/nuoc-hoa-nu/">Nước hoa nữ</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/bo-san-pham/">Bộ sản phẩm</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/my-pham-danh-cho-nam/">Mỹ phẩm dành cho nam</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/trang-diem-mat/">Trang điểm mắt</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/mat-na-cac-loai/">Mặt nạ các loại</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/sua-rua-mat/">Sữa rửa mặt</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/kem-duong-da/">Kem dưỡng da</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/dau-goi-dau/">Dầu gội đầu</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/sua-tam/">Sữa tắm</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4> </h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/kem-chong-nang/">Kem chống nắng</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/kem-duong-trang-da/">Kem làm trắng da</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/tao-kieu-toc/">Tạo kiểu tóc</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/xa-bong/">Xà bông</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/tinh-chat-san-pham-dac-tri/">Tinh chất- sản phẩm đặc trị</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/chong-lao-hoa/">Chống lão hóa</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/san-pham-tri-mun/">Sản phẩm trị mụn</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4><a href="<?php echo home_url(); ?>/danh-muc/thuc-pham-chuc-nang/">Thực phẩm chức năng</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/thuc-pham-chuc-nang-vitamin/">Thực phẩm chức năng & Vitamin</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/collagen-san-pham-tu-tao/">Collagen - sản phẩm từ tảo</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/thuc-pham-cham-soc-sac-dep/">Thực phẩm chăm sóc sắc đẹp</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/thuoc-giam-can/">Thuốc giảm cân</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/thuoc-lam-trang-da/">Thuốc làm trắng da</a></li>
          </ul>
          <h4><a href="<?php echo home_url(); ?>/danh-muc/thiet-bi-lam-dep/">Thiết bị làm đẹp</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/may-massage/">Máy Massage</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/may-rua-mat/">Máy rửa mặt</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/thiet-bi-y-te/">Thiết bị y tế</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/thiet-bi-tay-long/">Thiết bị tẩy lông</a></li>
          </ul>
        </div>
      </div>
      <?php if(wpmd_is_notdevice()): ?>
      <?php getTemplatePart('block/slider-category-menu',  null, array('category_slug' => 'lam-dep-suc-khoe') ); ?>
      <?php endif; ?>
    </div>
  </li>
  <li><a href="<?php if(wpmd_is_notdevice()){?><?php echo home_url(); ?>/danh-muc/dien-gia-dung/<?php }else{ ?>javascript:void(0)<?php } ?>"><span class="icon icon-electricity"></span> Điện gia dụng</a>
    <div class="menu-item item-tablet">
      <div class="list-cate">
        <div class="list-item">
          <h4><a href="#">Danh mục</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/bep-tu-bep-hong-ngoai/">Bếp từ - bếp hồng ngoại</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/lo-nuong/">Lò nướng</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/may-pha-ca-phe/">Máy pha cà phê</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/dung-cu-lam-banh/">Dụng cụ làm bánh</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/ban-ui/">Bàn ủi</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/may-hut-bui/">Máy hút bụi</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4><a href="#">Thương hiệu</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/wilton/">Wilton</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/bosch/">Bosch</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/fissler/">Fissler</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/wmf/">WMF</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/caso/">Caso</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/miele">Miele</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/aeg/">AEG</a></li>
          </ul>
        </div>
      </div>
      <?php if(!wpmd_is_phone()): ?>
      <?php getTemplatePart('block/slider-category-menu',  null, array('category_slug' => 'dien-gia-dung') ); ?>
      <?php endif; ?>
    </div>
  </li>
  <li><a href="<?php if(wpmd_is_notdevice()){?><?php echo home_url(); ?>/danh-muc/me-va-be/<?php }else{ ?>javascript:void(0)<?php } ?>"><span class="icon icon-food"></span> Mẹ và bé</a>
    <div class="menu-item item-tablet">
      <div class="list-cate">
        <div class="list-item">
          <h4><a href="#">Danh mục</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/danh-cho-me/">Dành cho mẹ</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/sua/">Sữa</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/ta-giay-uot-sua-tam/">Tã, giấy ướt, sửa tắm</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/thuc-pham-bo-xung/">Thực phẩm bổ sung</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/do-choi-tre-em/">Đồ chơi trẻ em</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4><a href="#">Thương hiệu</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/siemens/">Siemens</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/fisher/">Fisher</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/price/">Price</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/v-tech/">V-Tech</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/telefon/">Telefon</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/autos/">Autos</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/meiji/">Meiji</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/hippo">Hippo</a></li>
          </ul>
        </div>
      </div>
      <?php if(!wpmd_is_phone()): ?>
      <?php getTemplatePart('block/slider-category-menu',  null, array('category_slug' => 'me-va-be') ); ?>
      <?php endif; ?>
    </div>
  </li>
  <li><a href="<?php if(wpmd_is_notdevice()){?><?php echo home_url(); ?>/danh-muc/the-thao-du-lich/<?php }else{ ?>javascript:void(0)<?php } ?>"><span class="icon icon-tool"></span> Thể thao - du lịch</a>
    <div class="menu-item item-tablet">
      <div class="list-cate">
        <div class="list-item">
          <h4><a href="#">Danh mục</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/leu/">Lều</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/tui-ngu/">Túi ngủ</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/thiet-bi-da-nang/">Thiết bị đa năng</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/vali/">Vali</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/xe-dap/">Xe đạp</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/den/">Đèn</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/dung-cu-the-thao/">Dụng cụ thể thao</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4><a href="#">Thương hiệu</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/coleman/">Coleman</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/cube/">Cube</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/bikes/">Bikes</a></li>
          </ul>
        </div>
      </div>
      <?php if(!wpmd_is_phone()): ?>
      <?php getTemplatePart('block/slider-category-menu',  null, array('category_slug' => 'the-thao-du-lich') ); ?>
      <?php endif; ?>
    </div>
  </li>
  <li><a href="<?php if(wpmd_is_notdevice()){?><?php echo home_url(); ?>/danh-muc/phu-kien-thiet-bi-so/<?php }else{ ?>javascript:void(0)<?php } ?>"><span class="icon icon-cellphone"></span> Phụ kiện - thiết bị số</a>
    <div class="menu-item item-tablet">
      <div class="list-cate">
        <div class="list-item">
          <h4><a href="#">Danh mục</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/loa/">Loa</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/tai-nghe/">Tai nghe</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/pin-sac-du-phong/">Pin sạc dự phòng</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/bao-da-op-lung/">Bao da- ốp lưng</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/phu-kien-khac/">Phụ Kiện khác</a></li>
          </ul>
          <h4><a href="<?php echo home_url(); ?>/danh-muc/dien-thoai-may-tinh-bang/">Điện thoại - Máy tính bảng</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/loa/">Điện thoại di động</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4><a href="#">Thương hiệu</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/canon/">Canon</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/sony/">Sony</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/apple/">Apple</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/samsung/">Samsung</a></li>
          </ul>
        </div>
      </div>
      <?php if(!wpmd_is_phone()): ?>
      <?php getTemplatePart('block/slider-category-menu',  null, array('category_slug' => 'phu-kien-thiet-bi-so') ); ?>
      <?php endif; ?>
    </div>
  </li>
  <li><a href="<?php if(wpmd_is_notdevice()){?><?php echo home_url(); ?>/danh-muc/hang-cong-nghe/<?php }else{ ?>javascript:void(0)<?php } ?>"><span class="icon icon-computer"></span> Hàng công nghệ</a>
    <div class="menu-item item-tablet">
      <div class="list-cate">
        <div class="list-item">
          <h4><a href="#">Danh mục</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/thiet-bi-theo-doi-hoat-dong/">Thiết bị theo dõi hoạt động</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/may-doc-sach/">Máy đọc sách</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/thiet-bi-thuc-te-ao-vr/">Thiết bị thực tế ảo (VR)</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/drone/">Drone</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/thiet-bi-khac/">Thiết bị khác</a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4><a href="#">Thương hiệu</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/kindle/">Kindle</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/canton/">Canton</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/logitech/">Logitech</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/seninigher/">Seninigher</a></li>
            <li><a href="<?php echo home_url(); ?>/thuong-hieu/philip/">Philip</a></li>
          </ul>
        </div>
      </div>
      <?php if(!wpmd_is_phone()): ?>
      <?php getTemplatePart('block/slider-category-menu',  null, array('category_slug' => 'hang-cong-nghe') ); ?>
      <?php endif; ?>
    </div>
  </li>
  <li><a href="<?php if(wpmd_is_notdevice()){?> <?php echo home_url(); ?>/danh-muc/tuoi-moi-moi-ngay/<?php }else{ ?>javascript:void(0)<?php } ?>"><span class="icon icon-two"></span> Tươi mới mỗi ngày</a>
    <div class="menu-item item-tablet">
      <div class="list-cate">
        <div class="list-item">
          <h4><a href="#">Danh mục</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/dac-san-vung-mien/">Đặc sản vùng, miền</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/thuy-hai-san/">Thủy hải sản</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/ca-phe/">Cà phê</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/day-tay-dalat/">Dâu Tây Dalat</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/yaout/">Yaout</a></li>
          </ul>
          <h4><a href="<?php echo home_url(); ?>/danh-muc/banh-tuoi/">Bánh tươi</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/banh-ngot/">Bánh ngọt</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/day-tay-dalat/">Bánh mặn/a></li>
          </ul>
        </div>
        <div class="list-item">
          <h4><a href="<?php echo home_url(); ?>/danh-muc/hoa-tuoi-cao-cap/">Hoa tươi cao cấp</a></h4>
          <ul>
            <li><a href="<?php echo home_url(); ?>/danh-muc/hoa-bo/">Hoa bó</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/hoa-cam-binh/">Hoa cắm bình</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/hoa-cam-gio/">Hoa cắm giỏ</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/hoa-co-dau/">Hoa cô dâu</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/hop-hoa-giay/">Họp hoa giấy</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/ke-hoa/">Kệ hoa</a></li>
            <li><a href="<?php echo home_url(); ?>/danh-muc/hoa-va-trai-cay/">Hoa và trái cây</a></li>
          </ul>
        </div>
      </div>
      <?php if(!wpmd_is_phone()): ?>
      <?php getTemplatePart('block/slider-category-menu',  null, array('category_slug' => 'tuoi-moi-moi-ngay') ); ?>
      <?php endif; ?>
    </div>
  </li>
  <li><a href="<?php echo home_url(); ?>/danh-muc/silver-unique/"><span class="icon icon-trophy"></span> Silver Unique</a>
  </li>
</ul>