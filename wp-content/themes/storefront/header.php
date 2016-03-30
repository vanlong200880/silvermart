<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php storefront_html_tag_schema(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="menu-scroll"></div>
    <header class="header-sroll">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            
            <nav class="header-navigation"> <h2><i class="fa fa-bars"></i> Danh mục</h2>
              <ul class="menu-left">
                <li><a href="#"><span class="icon icon-clothes"></span> Thời trang - Phụ kiện</a>
                  <div class="menu-item">
                    <div class="list-cate">
                      <div class="list-item">
                        <h4><a href="#">Đồng hồ</a></h4>
                        <ul>
                          <li><a href="#">Đồng hồ nam</a></li>
                          <li><a href="#">Đồng hồ nữ</a></li>
                          <li><a href="#">Đồng hồ unisex</a></li>
                          <li><a href="#">Đồng hồ bé trai</a></li>
                        </ul>
                        <h4><a href="#">Giầy dép</a></h4>
                        <ul>
                          <li><a href="#">Giày thể thao Nam</a></li>
                          <li><a href="#">Giày thể thao Nữ</a></li>
                          <li><a href="#">Giày tây</a></li>
                        </ul>
                      </div>
                      <div class="list-item">
                        <h4><a href="#">Ví - Túi xách</a></h4>
                        <ul>
                          <li><a href="#">Ví Nam</a></li>
                          <li><a href="#">Ví Nữ</a></li>
                          <li><a href="#">Clutch</a></li>
                          <li><a href="#">Túi xách Nam</a></li>
                          <li><a href="#">Túi xách Nữ</a></li>
                          <li><a href="#">Ba lô Nam</a></li>
                          <li><a href="#">Ba lô Nữ</a></li>
                        </ul>
                        <h4><a href="#">Dây nịt</a></h4>
                        <ul>
                          <li><a href="#">Dây nịt Nam</a></li>
                          <li><a href="#">Dây nịt Nữ</a></li>
                        </ul>
                      </div>
                      <div class="list-item">
                        <h4><a href="#">Trang sức</a></h4>
                        <ul>
                          <li><a href="#">Nhẫn</a></li>
                          <li><a href="#">Dây chuyền</a></li>
                          <li><a href="#">Lắc chân</a></li>
                          <li><a href="#">Cài áo</a></li>
                        </ul>
                        <h4><a href="#">Mắt kính</a></h4>
                        <ul>
                          <li><a href="#">Mắt Kính Nam</a></li>
                          <li><a href="#">Mắt kính Nữ</a></li>
                          <li><a href="#">Mắt kính Trẻ em</a></li>
                          <li><a href="#">Mắt kính Unisex</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="list-ads">
                      <a href="#"><img src="images/banner.png"></a>
                    </div>
                  </div>
                </li>
                <li><a href="#"><span class="icon icon-woman"></span> Làm đẹp & Sức khỏe</a>
                  <div class="menu-item">
                    <div class="list-cate">
                      <div class="list-item">
                        <h4><a href="#">Danh mục</a></h4>
                        <ul>
                          <li><a href="#">Nước hoa Nam</a></li>
                          <li><a href="#">Nước hoa Nữ</a></li>
                          <li><a href="#">Bộ sản phẩm</a></li>
                          <li><a href="#">Mỹ phẩm dành cho Nam</a></li>
                          <li><a href="#">Trang điểm mắt</a></li>
                          <li><a href="#">Mặt nạ các loại</a></li>
                          <li><a href="#">Sữa rửa mặt</a></li>
                          <li><a href="#">Kem dưỡng da</a></li>
                          <li><a href="#">Dầu gội</a></li>
                          <li><a href="#">Sữa tắm</a></li>
                        </ul>
                      </div>
                      <div class="list-item">
                        <h4> </h4>
                        <ul>
                          <li><a href="#">Kem làm trắng da</a></li>
                          <li><a href="#">Tạo kiểu tóc</a></li>
                          <li><a href="#">Xà bông</a></li>
                          <li><a href="#">Sản phẩm chống nắng</a></li>
                          <li><a href="#">Tinh chất- sản phẩm đặc trị</a></li>
                          <li><a href="#">Chống lão hóa</a></li>
                          <li><a href="#">Sản phẩm trị mụn</a></li>
                          <li><a href="#">Bộ sản phẩm</a></li>
                        </ul>
                      </div>
                      <div class="list-item">
                        <h4><a href="#">Thiết bị làm đẹp</a></h4>
                        <ul>
                          <li><a href="#">Máy Massage</a></li>
                          <li><a href="#">Máy rửa mặt</a></li>
                          <li><a href="#">Thiết bị y tế</a></li>
                          <li><a href="#">Thiết bị tẩy lông</a></li>
                        </ul>
                        <h4><a href="#">Thực phẩm chức năng</a></h4>
                        <ul>
                          <li><a href="#">Thực phẩm chức năng & Vitamin</a></li>
                          <li><a href="#">Collagen - sản phẩm từ tảo</a></li>
                          <li><a href="#">Thực phẩm chăm sóc sắc đẹp</a></li>
                          <li><a href="#">Thuốc giảm cân</a></li>
                          <li><a href="#">Thuốc làm trắng da</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="list-ads">
                      <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/banner.png"></a>
                    </div>
                  </div>
                </li>
                <li><a href="#"><span class="icon icon-electricity"></span> Điện gia dụng</a>
                  <div class="menu-item">
                    <div class="list-cate">
                      <div class="list-item">
                        <h4><a href="#">Danh mục</a></h4>
                        <ul>
                          <li><a href="#">Bếp từ - bếp hồng ngoại</a></li>
                          <li><a href="#">Lò nướng</a></li>
                          <li><a href="#">Máy pha cà phê</a></li>
                          <li><a href="#">Dụng cụ làm bánh</a></li>
                          <li><a href="#">Bàn ủi</a></li>
                          <li><a href="#">Máy hút bụi</a></li>
                          <li><a href="#">Sữa rửa mặt</a></li>
                          <li><a href="#">Kem dưỡng da</a></li>
                          <li><a href="#">Dầu gội</a></li>
                          <li><a href="#">Sữa tắm</a></li>
                        </ul>
                      </div>
                      <div class="list-item">
                        <h4><a href="#">Thương hiệu</a></h4>
                        <ul>
                          <li><a href="#">Wilton</a></li>
                          <li><a href="#">Bosch</a></li>
                          <li><a href="#">Fissler</a></li>
                          <li><a href="#">WMF</a></li>
                          <li><a href="#">Caso</a></li>
                          <li><a href="#">Miele</a></li>
                          <li><a href="#">AEG</a></li>
                        </ul>
                      </div>
                      <div class="list-item">

                      </div>
                    </div>
                    <div class="list-ads">
                      <a href="#"><img src="images/banner.png"></a>
                    </div>
                  </div>
                </li>
                <li><a href="#"><span class="icon icon-food"></span> Mẹ và bé</a>
                  <div class="menu-item">

                  </div>
                </li>
                <li><a href="#"><span class="icon icon-tool"></span> Cắm trại - du lịch</a>
                  <div class="menu-item">

                  </div>
                </li>
                <li><a href="#"><span class="icon icon-cellphone"></span> Phụ kiện - thiết bị số</a>
                  <div class="menu-item">

                  </div>
                </li>
                <li><a href="#"><span class="icon icon-computer"></span> Hàng công nghệ</a>
                  <div class="menu-item">

                  </div>
                </li>
                <li><a href="#"><span class="icon icon-two"></span> Tươi mới mỗi ngày</a>
                  <div class="menu-item">

                  </div>
                </li>
                <li><a href="#"><span class="icon icon-trophy"></span> Silver Unique</a>
                  <!--<div class="menu-item"></div>-->

                </li>
              </ul>
            </nav>
            
          </div>
          <div class="col-md-7">
            <div class="form input-group">
              <div class="input-group-btn hidden-sm hidden-xs">
                <button type="button" class="btn btn-default dropdown-toggle show-all-button" data-toggle="dropdown" aria-expanded="false">
                  <span class="filter_box" data-category="Thiết Bị Số - Phụ Kiện Số">Tất cả</span><span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li data-category=""><a>Tất cả</a></li>
                  <li data-category="Sách"><a>Sách Tiếng Việt</a></li>
                  <li data-category="English Books"><a>Sách Tiếng Anh</a></li>
                  <li data-category="Điện Thoại - Máy Tính Bảng"><a>Điện Thoại - Máy Tính Bảng</a></li>
                  <li data-category="Thiết Bị Số - Phụ Kiện Số"><a>Thiết Bị Số - Phụ Kiện Số</a></li>
                  <li data-category="Điện Gia Dụng"><a>Điện Gia Dụng</a></li>
                  <li data-category="Nhà Cửa - Đời Sống"><a>Nhà Cửa Đời Sống</a></li>
                  <li data-category="Làm đẹp - Sức khỏe"><a>Làm Đẹp - Sức Khỏe</a></li>
                  <li data-category="Thiết Bị Văn Phòng Phẩm"><a>Thiết Bị Văn Phòng Phẩm</a></li>
                  <li data-category="Mẹ Và Bé"><a>Mẹ Và Bé</a></li>
                  <li data-category="Đồ Chơi - Quà Tặng"><a>Đồ Chơi - Đồ Lưu Niệm</a></li>
                  <li data-category="Thể Thao &amp; Dã Ngoại"><a>Thể Thao - Dã Ngoại</a></li>
                  <li data-category="Máy Ảnh - Máy Quay Phim"><a>Máy Ảnh - Máy Quay Phim</a></li>
              </ul>
              </div>
              <input type="text" class="form-control" name="search" value="" placeholder="Tìm kiếm sản phẩm, danh mục hay thương hiệu mong muốn...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <span class="hidden-sm hidden-xs">Tìm</span>
                  <i class="fa fa-search hidden-lg hidden-md"></i>
                </button>
              </span>
              
            </div>
          </div>
          <div class="col-md-2 shoppingcart">
            <span class="icon icon-shopping"><var class="shoping-number">1</var></span> Giỏ hàng
          </div>
        </div>
      </div>
    </header>
    
    
    
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-2"><img src="<?php echo get_template_directory_uri() ?>/images/silvermart.png"></div>
          <div class="col-md-8">
            <div class="form input-group">
              <div class="input-group-btn hidden-sm hidden-xs">
                <button type="button" class="btn btn-default dropdown-toggle show-all-button" data-toggle="dropdown" aria-expanded="false">
                  <span class="filter_box" data-category="Thiết Bị Số - Phụ Kiện Số">Tất cả</span><span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li data-category=""><a>Tất cả</a></li>
                  <li data-category="Sách"><a>Sách Tiếng Việt</a></li>
                  <li data-category="English Books"><a>Sách Tiếng Anh</a></li>
                  <li data-category="Điện Thoại - Máy Tính Bảng"><a>Điện Thoại - Máy Tính Bảng</a></li>
                  <li data-category="Thiết Bị Số - Phụ Kiện Số"><a>Thiết Bị Số - Phụ Kiện Số</a></li>
                  <li data-category="Điện Gia Dụng"><a>Điện Gia Dụng</a></li>
                  <li data-category="Nhà Cửa - Đời Sống"><a>Nhà Cửa Đời Sống</a></li>
                  <li data-category="Làm đẹp - Sức khỏe"><a>Làm Đẹp - Sức Khỏe</a></li>
                  <li data-category="Thiết Bị Văn Phòng Phẩm"><a>Thiết Bị Văn Phòng Phẩm</a></li>
                  <li data-category="Mẹ Và Bé"><a>Mẹ Và Bé</a></li>
                  <li data-category="Đồ Chơi - Quà Tặng"><a>Đồ Chơi - Đồ Lưu Niệm</a></li>
                  <li data-category="Thể Thao &amp; Dã Ngoại"><a>Thể Thao - Dã Ngoại</a></li>
                  <li data-category="Máy Ảnh - Máy Quay Phim"><a>Máy Ảnh - Máy Quay Phim</a></li>
              </ul>
              </div>
              <input type="text" class="form-control" name="search" value="" placeholder="Tìm kiếm sản phẩm, danh mục hay thương hiệu mong muốn...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <span class="hidden-sm hidden-xs">Tìm</span>
                  <i class="fa fa-search hidden-lg hidden-md"></i>
                </button>
              </span>
              
            </div>
            <div class="form menu-news">
              <ul>
                <li><a href="#">Sản phẩm mới</a></li>
                <li><a href="#">Khuyến mãi HOT</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 shoppingcart">
            
            <span class="icon icon-shopping"><var class="shoping-number">1</var></span> Giỏ hàng
          </div>
        </div>
      </div>
    </header>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
<!--  
  
<div id="page" class="hfeed site">
	<?php
//	do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" <?php // if ( get_header_image() != '' ) { echo 'style="background-image: url(' . esc_url( get_header_image() ) . ');"'; } ?>>
		<div class="col-full">-->

			<?php
			/**
			 * @hooked storefront_skip_links - 0
			 * @hooked storefront_social_icons - 10
			 * @hooked storefront_site_branding - 20
			 * @hooked storefront_secondary_navigation - 30
			 * @hooked storefront_product_search - 40
			 * @hooked storefront_primary_navigation - 50
			 * @hooked storefront_header_cart - 60
			 */
//			do_action( 'storefront_header' ); ?>

<!--		</div>
	</header> #masthead -->

	<?php
	/**
	 * @hooked storefront_header_widget_region - 10
	 */
//	do_action( 'storefront_before_content' ); ?>
<!--
	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">-->

		<?php
		/**
		 * @hooked woocommerce_breadcrumb - 10
		 */
//		do_action( 'storefront_content_top' ); ?>
