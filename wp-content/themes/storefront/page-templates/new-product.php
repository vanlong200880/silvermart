<?php
/**
 * Template Name: New product
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 

?>
<section class="categories list-category">
	<div class="container">
    <div class="col-md-12">
      <h1 class="page-title">Sản phẩm mới</h1>
    </div>
		<div class="col-md-12">
			
				<?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
              'post_status' => 'published',
              'order'          => 'DESC',
              'orderby'        => 'parent,menu_order,post_date',
              'post_type'      => 'product',
              'meta_query'     => array(
                array(
                    'key'		 => 'new',
                    'value'      => true,
                ),
              ),
              'paged'          => $paged,
              'posts_per_page' => 80
              );
          $the_query = new WP_Query( $args );
          if($the_query->have_posts()){ ?>
          <ul class="row posts-selector-infinite-scroll">
          <?php 
          while ($the_query->have_posts()){
            $the_query->the_post(); ?>
            <li class="col-md-3 col-sm-4 col-xs-6">
              <div class="item">
                <a  class="full-link" href="<?php the_permalink(); ?>"></a>
                <div class="image">
                  <?php do_action('woocommerce_after_shop_loop_item_sale'); ?>

                  <?php
									$attachment_id = get_post_thumbnail_id(get_the_ID());
									if (!empty($attachment_id)) :
										the_post_thumbnail(array(315, 315)); ?>
                  <?php else: ?>
                  <?php endif; ?>
                </div>
                <div class="title">
                  <p><a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_title() ?></a></p>
                </div>
                <div class="price">
                  <?php do_action('woocommerce_single_product_price'); ?>
                  <div class="views">
                    <?php do_action('woocommerce_single_product_stock'); ?>
                    <i class="fa fa-heart"></i> <?php echo getPostViews(get_the_ID()); ?>
                  </div>
                  
                </div>
              </div>
            </li>
         <?php  } ?>
            </ul>
          <?php } else{ ?>
      <h2 class="emty-data">Dữ liệu đang cập nhật</h2>
         <?php  }
        ?>
			
		</div>
</section>

<?php get_footer(); ?>