<?php
$category_cat = isset($category_cat) ? $category_cat : 0;

//$args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'product_cat' => 'thoi-trang-phu-kien', 'orderby' => 'rand' );
$args = array (					 
  'post_status'    => 'publish',
  'order'          => 'DESC',
  'orderby'        => 'rand',
  'post_type'      => 'product',
  'product_cat'  => implode(',', $category_cat),
  'posts_per_page' => 12,
);
$the_query = new WP_Query( $args ); ?>
<div class="title-interest">Có thể bạn quan tâm</div>
<div class="list-category">
  <ul class="row" id="interest-detail">
    <?php
    if ( $the_query->have_posts() ) { ?>
    <?php 
      while ( $the_query->have_posts() ) {
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
     <?php  }
    }
    ?>
    </ul>
</div>
