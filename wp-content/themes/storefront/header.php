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
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<meta name="viewport" content="width=device-width, user-scalable=no" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.png">
<?php if (wpmd_is_phone()): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/jquery.mCustomScrollbar.css">
<?php endif; ?>

<?php wp_head(); ?>
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){
z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?3vTnI08klCi1aEU6Ju0UPgH3lXar6KLV';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
</head>

<body <?php body_class(); ?>>
  <?php if(wpmd_is_phone()): ?>
  <div class="menu-mobile-cat">
<?php get_template_part('block/user-menu'); ?>
    
    
    <h2><i class="fa fa-bars"></i> Danh mục <span class="close-menu"><i class="fa fa-times"></i></span></h2>
    <div class="menu-sp-left mCustomScrollbar">
      <?php get_template_part('block/menu_list_mobile'); ?>
    </div>
  </div>
  <?php endif; ?>
  <div class="wmp">
    <div id="side-menu-overlay"></div>
  <?php if(!wpmd_is_phone()): ?>
  <div class="menu-scroll"></div>
    <header class="header-sroll">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3">
            
            <nav class="header-navigation"> <h2><i class="fa fa-bars"></i> Danh mục</h2>
              <?php get_template_part('/block/menu_list'); ?>
            </nav>
            
          </div>
          <div class="col-md-7 col-sm-7">
            <div class="form input-group form-search-mb">
              <div class="input-group-btn hidden-xs">
                <button type="button" class="btn btn-default dropdown-toggle show-all-button" data-toggle="dropdown" aria-expanded="false">
                  <span class="filter_box_mb" data-category="all">Tất cả</span><span class="caret"></span>
                </button>
                <?php get_template_part('block/menu-search'); ?>
              </div>
              <input type="text" id="search-mb" class="form-control" name="search" value="" placeholder="Tìm kiếm sản phẩm, danh mục hay thương hiệu mong muốn...">
              <span class="input-group-btn">
                <button class="btn btn-default" id="submit-mb" type="submit">
                  <span class="hidden-sm hidden-xs">Tìm</span>
                  <i class="fa fa-search hidden-lg hidden-md"></i>
                </button>
              </span>
              
            </div>
          </div>
          <div class="col-md-2 col-sm-2 shoppingcart">
            <?php 
                global $woocommerce;
                ?>
            <a href="<?php echo home_url() ?>/gio-hang/">
            <span class="icon icon-shopping">
              <var class="shoping-number"><?php echo $woocommerce->cart->cart_contents_count; ?></var></span> 
              Giỏ hàng
              </a>
          </div>
        </div>
      </div>
    </header>
    
    
    
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-2"><a href="<?php echo home_url() ?>" title="Silvermart"><img src="<?php echo get_template_directory_uri() ?>/images/silvermart.png"></a></div>
          <div class="col-md-8 col-sm-8">
            <div class="form input-group form-search-pc">
              <div class="input-group-btn hidden-xs">
                <button type="button" class="btn btn-default dropdown-toggle show-all-button" data-toggle="dropdown" aria-expanded="false">
                  <span class="filter_box_pc" data-category="all">Tất cả</span><span class="caret"></span>
                </button>
                <?php get_template_part('block/menu-search'); ?>
              </div>
              <input type="text"  class="form-control" id="search-pc" name="search" placeholder="Tìm kiếm sản phẩm, danh mục hay thương hiệu mong muốn...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                  <span class="hidden-sm hidden-xs">Tìm</span>
                  <i class="fa fa-search hidden-lg hidden-md"></i>
                </button>
              </span>
              
            </div>
            <script type="text/javascript">
             jQuery(document).ready(function($){
               $(".form-search-pc ul.dropdown-menu > li").on('click', function(){
                 $value = $(this).text();
                 $data = $(this).attr('data-category');
                 $('.filter_box_pc').empty().append($value);
                 $('.filter_box_pc').attr('data-category', $data);
               });

                $('#search-pc').keypress(function(event){
                  var keycode = (event.keyCode ? event.keyCode : event.which);
                  if (keycode == '13') {
                    $("button[type='submit']").trigger('click');
                  }
                });
                
               $(".form-search-pc").on('click',"button[type='submit']" ,function(){
                 $key = $(".filter_box_pc").attr('data-category');
                 $val = $("#search-pc").val();
                 window.location.href = "<?php echo home_url(); ?>/tim-kiem/?type="+$key+'&keyword='+$val;
               });
               
               // mobile 
               
                $(".form-search-mb ul.dropdown-menu > li").on('click', function(){
                 $value = $(this).text();
                 $data = $(this).attr('data-category');
                 $('.filter_box_mb').empty().append($value);
                 $('.filter_box_mb').attr('data-category', $data);
               });
               
               $('#search-mb').keypress(function(event){
                  var keycode = (event.keyCode ? event.keyCode : event.which);
                  if (keycode == '13') {
                     $("#submit-mb").trigger('click');
                  }
                });
                

               $(".form-search-mb").on('click',"#submit-mb" ,function(){
                 $key = $(".filter_box_mb").attr('data-category');
                 $val = $("#search-mb").val();
                 window.location.href = "<?php echo home_url(); ?>/tim-kiem/?type="+$key+'&keyword='+$val;
               });
               
             });
            </script>
            <div class="form menu-news">
              <ul>
                <li><a href="<?php echo home_url() ?>/san-pham-moi/">Sản phẩm mới</a></li>
                <li><a href="<?php echo home_url() ?>/khuyen-mai-hot/">Khuyến mãi HOT</a></li>
                <li><a href="<?php echo home_url() ?>/gia-re-moi-ngay/">Giá rẻ mỗi ngày</a></li>
                <li><a href="<?php echo home_url() ?>/silver-club/">Silver Club</a></li>
                <li><a href="<?php echo home_url() ?>/tin-tuc/">S-press</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 col-sm-2">
            <div class="shoppingcart">
            <?php 
            global $woocommerce;
            ?>
            <a href="<?php echo home_url() ?>/gio-hang/">
            <span class="icon icon-shopping"><var class="shoping-number">
              <?php echo $woocommerce->cart->cart_contents_count; ?></var></span> 
            Giỏ hàng</a>
              </div>
            
            <?php get_template_part('block/user-menu'); ?>
          </div>
        </div>
      </div>
    </header>
  
  
  <?php else: ?>
  <div class="header-for-mobile">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="row">
            <div class="col-xs-3">
              <a href="<?php echo home_url() ?>" title="Silvermart"><img src="<?php echo get_template_directory_uri() ?>/images/silvermart.png"></a>
            </div>
            <div class="col-xs-7 shoppingcart">
              <?php 
                global $woocommerce;
                ?>
              <a href="<?php echo home_url() ?>/gio-hang/">
                <span class="icon icon-shopping">
                  <var class="shoping-number"><?php echo $woocommerce->cart->cart_contents_count; ?></var>
                </span> 
              Giỏ hàng</a>
            </div>
            <div class="col-xs-2 mobile-list">
              <i class="fa fa-bars"></i>
            </div>
          </div>
        </div>
        
        <div class="col-xs-12">
          <div class="menu-mobile">
            <div class="row">
              <div class="col-xs-12">
                <div class="form input-group form-search-pc">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle show-all-button" data-toggle="dropdown" aria-expanded="false">
                      <span class="filter_box_pc" data-category="all">Tất cả</span><span class="caret"></span>
                    </button>
                    <?php get_template_part('block/menu-search'); ?>
                  </div>
                  <input type="text"  class="form-control" id="search-pc" name="search" placeholder="Tìm kiếm sản phẩm, danh mục hay thương hiệu mong muốn...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <span class="hidden-sm hidden-xs">Tìm</span>
                      <i class="fa fa-search hidden-lg hidden-md"></i>
                    </button>
                  </span>

                </div>
                
                <script type="text/javascript">
             jQuery(document).ready(function($){
               $(".form-search-pc ul.dropdown-menu > li").on('click', function(){
                 $value = $(this).text();
                 $data = $(this).attr('data-category');
                 $('.filter_box_pc').empty().append($value);
                 $('.filter_box_pc').attr('data-category', $data);
               });

                $('#search-pc').keypress(function(event){
                  var keycode = (event.keyCode ? event.keyCode : event.which);
                  if (keycode == '13') {
                    $("button[type='submit']").trigger('click');
                  }
                });
                
               $(".form-search-pc").on('click',"button[type='submit']" ,function(){
                 $key = $(".filter_box_pc").attr('data-category');
                 $val = $("#search-pc").val();
                 window.location.href = "<?php echo home_url(); ?>/tim-kiem/?type="+$key+'&keyword='+$val;
               });
               
               
             });
            </script>
              </div>
          </div>
          </div>
          
        </div>
        
        
        
      </div>
    </div>
  </div>
  <?php endif; ?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
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
