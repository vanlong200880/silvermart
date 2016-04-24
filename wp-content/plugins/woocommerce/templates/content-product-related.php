
<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns',12 );
}

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 === ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 === $woocommerce_loop['columns'] ) {
	$classes[] = 'first';
}
if ( 0 === $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
	$classes[] = 'last';
}
$classes[] = 'col-md-3 col-sm-4 col-xs-6';
    
?>
<li <?php post_class( $classes ); ?>>

  <div class="item">
    <a  class="full-link" href="<?php the_permalink(); ?>"></a>
    <div class="image">
      <?php do_action('woocommerce_after_shop_loop_item_sale'); ?>

      <?php
      $attachment_id = get_post_thumbnail_id(get_the_ID());
      if (!empty($attachment_id)) :
        the_post_thumbnail(array(280, 280)); ?>
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