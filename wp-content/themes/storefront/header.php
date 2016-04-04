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
              <?php get_template_part('/block/menu_list'); ?>
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
            <span class="icon icon-shopping"><var class="shoping-number">0</var></span> Giỏ hàng
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
            <?php 
            global $woocommerce;
            ?>
            <span class="icon icon-shopping"><var class="shoping-number"><?php echo $woocommerce->cart->cart_contents_count; ?></var></span> <a href="<?php echo home_url() ?>/gio-hang/">Giỏ hàng</a>
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
