<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>
<?php get_template_part('block/menu'); ?>
<div class="list-category">
  <div class="container">
    <?php
    $category = get_queried_object();
    $args = array(
      'orderby'           => 'term_id',
      'order'             => 'ASC',
      'parent'            => $category->term_id,
      'taxonomy'          => 'product_cat',
      'hide_empty'        => 0
    );
    $categories = get_categories( $args );
    if($categories){
      foreach($categories as $cat){
        if($cat->count > 0){ ?>
    <h2 class="page-title"><a href="<?php echo get_term_link($cat->slug, 'product_cat') ?>"><?php echo $cat->name; ?></a> <a href="<?php echo get_term_link($cat->slug, 'product_cat') ?>" class="all pull-right">Tất cả</a></h2>
          <?php $args = array(
            'post_status' => 'publish',
            'order'          => 'DESC',
            'orderby'        => 'post_date',
            'post_type'      => 'product',
            'product_cat'    => $cat->slug,
            'posts_per_page' => 12
          );
          $the_query = new WP_Query( $args );
            if($the_query->have_posts()){ ?>
              <?php woocommerce_product_loop_start(); ?>
              <?php while ($the_query->have_posts()){
                $the_query->the_post(); ?>
                <?php wc_get_template_part( 'content', 'product' ); ?>
              <?php } ?>
              <?php woocommerce_product_loop_end(); ?>
            <?php }
          }
      }
    }else{ ?>
          <?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

			<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

		<?php endif; ?>

		<?php
			/**
			 * woocommerce_archive_description hook.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
		?>
          		<?php if (have_posts() ) : ?>

              <?php woocommerce_product_loop_start(); ?>

                <?php //woocommerce_product_subcategories(); ?>

                <?php while (have_posts() ) : the_post(); ?>

                  <?php wc_get_template_part( 'content', 'product' ); ?>

                <?php endwhile; // end of the loop. ?>

              <?php woocommerce_product_loop_end(); ?>

              <?php
                /**
                 * woocommerce_after_shop_loop hook.
                 *
                 * @hooked woocommerce_pagination - 10
                 */
              do_action( 'woocommerce_after_shop_loop_paging' );
              ?>

            <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

              <?php wc_get_template( 'loop/no-products-found.php' ); ?>

            <?php endif; ?>
              <?php wp_reset_postdata(); ?>
      
    <?php }
    ?>
</div>
</div>
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
//		do_action( 'woocommerce_after_main_content' );
	?>

<?php get_footer( 'shop' ); ?>
