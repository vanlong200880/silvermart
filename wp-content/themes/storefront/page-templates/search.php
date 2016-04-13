<?php
/**
 * Template Name: Search
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
      <h1 class="page-title">Kết quả tìm kiếm</h1>
    </div>
		<div class="col-md-12">
			
				<?php
        $type = $_GET['type'];
        $keyword = $_GET['keyword'];
        if(!empty($type) && !empty($keyword)):
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'post_status' => 'published',
            'order'          => 'DESC',
            'orderby'        => 'menu_order,post_date',
            'post_type'      => 'product',
            's'              => $keyword,
            'paged'          => $paged,
            'posts_per_page' => 80
          );
          if($type != 'all'){
            $args['category_name'] = $type;
          }
          $the_query = new WP_Query( $args );
          if($the_query->have_posts()){  ?>
          <ul class="row">
          <?php 
          while ($the_query->have_posts()){
            $the_query->the_post(); ?>
            <li class="col-md-3">
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
                  <a href="<?php the_permalink(); ?>">Xem ngay</a>
                </div>
                <div class="title">
                  <p><a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><?php the_title() ?></a></p>
                </div>
                <div class="price">
                  <?php do_action('woocommerce_single_product_price'); ?>
                  <p class="views">
                    <i class="fa fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?>
                  </p>
                  
                </div>
              </div>
            </li>
         <?php  } ?>
            </ul>
          <?php } else{ ?>
      <h2 class="emty-data">Không có sản phẩm nào được tìm thấy.</h2>
         <?php  }
        ?>
      <?php else: ?>
      <h2 class="emty-data">Không có sản phẩm nào được tìm thấy.</h2>
			<?php endif; ?>
		</div>
</section>

<?php get_footer(); ?>