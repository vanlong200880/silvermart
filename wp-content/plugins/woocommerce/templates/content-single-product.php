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
  <div class="breadcrumb-detail">
    
  </div>
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

          <div id="gallery_01">
            <div class="controls center">
              <p>
                <a class="prevPage"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
              </p>
            </div>
            <div id="smart" class="smart frame">
              <ul>
              <?php do_action( 'woocommerce_product_thumbnails' ); ?>
             </ul>
            </div>
            <div class="controls bottom-control">
              <p>
                <a class="nextPage"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              </p>
            </div>
            
          </div>
        </div>
        <div class="col-md-10 col-sm-10 col-xs-10">
          <?php do_action('woocommerce_before_single_product_detail_img_silvermart'); ?>
          <p class="view-zoom">Chạm vào hình để phóng to</p>
        </div>
      </div>
    </div>
    <div class="col-md-7 col-sm-7 col-xs-12">
      <div class="trademark">
        <?php 
        $terms = get_the_terms( $post->ID, 'thuong-hieu' );
        if($terms){ ?>
        <p>Thương hiệu: <a href="<?php echo home_url(); ?>/thuong-hieu/<?php echo $terms[0]->slug; ?>"><?php echo $terms[0]->name; ?></a></p>
      <?php } ?>
      </div>
      
      <h1><?php do_action('woocommerce_shop_loop_item_title_silvermart'); ?></h1>
      
      <div class="price-detail">
        <?php do_action('woocommerce_single_product_price'); ?>
        <p class="sale"><?php do_action('woocommerce_after_shop_loop_item_sale'); ?></p>
      </div>
      <div class="countdown">
        <?php do_action('woocommerce_after_single_product_countdown'); ?>
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
          $('html, body').animate({
              scrollTop: $("#main").offset().top -50
            }, 1000);
          
          $(".views-detail").click(function() {
            $('html, body').animate({
              scrollTop: $(".page-single-content").offset().top -50
            }, 1000);
          });
        });
      </script>
    </div>
  </div>
</div>

<div class="col-md-12">
  <div class="row page-single-content">
    <div class="col-md-12">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Chi tiết sản phẩm</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Thông tin thương hiệu</a></li>
        <li role="presentation"><a href="#comment-single">Bình luận</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
          <div class="content-single">
            <?php the_content(); ?>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
          <?php echo get_field('thong-tin-thuong-hieu'); ?>
          
        </div>
      </div>
      <div class="interest">
        <?php $category = get_the_terms( $post->ID, 'product_cat' );
        if($category){
          $key_slug = array();
          foreach ($category as $val){
            array_push($key_slug, $val->slug);
          }
        }
//        var_dump(implode(',', $key_slug));
        ?>
        <?php //getTemplatePart('block/product-interest', null, array('slug' => 'abc')); ?>
        <?php getTemplatePart('block/product-interest',  null, array('category_cat' => $key_slug)); ?>
      </div>
      <div id="comment-single">
            <div id="fb-root"></div>
              <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5&appId=1624371511157699";
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>
              <div class="fb-comments" data-href="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-width="100%" data-numposts="5"></div>
          </div>
      
    </div>
    
    <div class="col-md-12">
      <?php do_action( 'woocommerce_after_single_product_summary_related' ); ?>
    </div>
  </div>
</div>

