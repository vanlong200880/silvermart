

<?php
    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
    global $post, $product, $woocommerce;
    if ( ! $product->is_in_stock() ) return;
    $sale_price = get_post_meta( $product->id, '_price', true);
    $regular_price = get_post_meta( $product->id, '_regular_price', true);
    if (empty($regular_price)){ //then this is a variable product
      if( $product->product_type == 'variable' ) :
        $available_variations = $product->get_available_variations();
        $variation_id=$available_variations[0]['variation_id'];
        $variation= new WC_Product_Variation( $variation_id );
        $regular_price = $variation ->regular_price;
        
        $sale_price = $variation ->sale_price;
      endif;
    }
    if ( !empty( $regular_price ) && !empty( $sale_price ) && $regular_price > $sale_price ) :
    $sale = ceil(( ($regular_price - $sale_price) / $regular_price ) * 100);
    endif;
?>
<?php if ( !empty( $regular_price ) && !empty( $sale_price ) && $regular_price > $sale_price ) : ?>
    <?php echo
        apply_filters( 'woocommerce_sale_flash', '<span>-' . $sale . '%</span>', $post, $product );
    ?>
<?php endif; ?>


