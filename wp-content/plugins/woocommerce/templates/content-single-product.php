<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<div class="col-md-12">
  <div class="breadcrumb-detail"><?php the_title(); ?></div>
</div>
<div class="col-md-12">
  <?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
</div>
<div class="col-md-12">
  <div class="row">
    <div class="col-md-5 col-sm-5 col-xs-12">
      <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-2">
          <?php do_action( 'woocommerce_product_thumbnails' ); ?>
        </div>
        <div class="col-md-10 col-sm-10 col-xs-10"><?php do_action('woocommerce_before_single_product_detail_img_silvermart'); ?></div>
      </div>
    </div>
    <div class="col-md-7 col-sm-7 col-xs-12">
      <h1><?php do_action('woocommerce_shop_loop_item_title_silvermart'); ?></h1>
      
      <div class="price-detail">
        <?php do_action('woocommerce_single_product_price'); ?>
        <p class="sale"><?php do_action('woocommerce_after_shop_loop_item_sale'); ?></p>
      </div>
      <div class="single">
        <?php do_action('woocommerce_single_product_single_cart'); ?>
      </div>
      <div class="description">
        <?php do_action('woocommerce_single_product_excerpt'); ?>
      </div>
      <div class="views-detail"><i class="fa fa-angle-double-down"></i> Xem chi tiết</div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          $(".views-detail").click(function() {
            $('html, body').animate({
              scrollTop: $(".title-detail-content").offset().top -50
            }, 1000);
          });
        });
      </script>
    </div>
  </div>
</div>

<div class="col-md-12">
  <div class="row page-single-content">
    <div class="col-md-8">
      <div class="title-detail-content">
        <h3>Chi tiết sản phẩm</h3>
        <h4> <a href="#comment-single">Bình luận</a></h4>
      </div>
      
      <div class="content-single">
        <?php the_content(); ?>
      </div>
      <div id="comment-single">
        <div id="fb-root"></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=1624371511157699";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
          <div class="fb-comments" data-href="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-width="100%" data-numposts="5"></div>
      </div>
    </div>
    <div class="col-md-4">
      <?php do_action( 'woocommerce_after_single_product_summary_related' ); ?>
    </div>
  </div>
</div>

