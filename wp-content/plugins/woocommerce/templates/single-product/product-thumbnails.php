<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product, $woocommerce;

$attachment_ids = $product->get_gallery_attachment_ids();

if ( $attachment_ids ) {
	$loop 		= 0;
	$columns 	= apply_filters( 'woocommerce_product_thumbnails_columns', 3 );
	?>
	<?php

		foreach ( $attachment_ids as $attachment_id ) {

			$classes = array( 'zoom' );

			if ( $loop === 0 || $loop % $columns === 0 )
				$classes[] = 'first';

			if ( ( $loop + 1 ) % $columns === 0 )
				$classes[] = 'last';

			$image_link = wp_get_attachment_url( $attachment_id );
      $full_link = wp_get_attachment_image_src($attachment_id, array(390,390));
      $full_thumb = wp_get_attachment_image_src($attachment_id, array(390,390));

			if ( ! $image_link )
				continue;

			$image_title 	= esc_attr( get_the_title( $attachment_id ) );
			$image_caption 	= esc_attr( get_post_field( 'post_excerpt', $attachment_id ) );

			$image       = wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ), 0, $attr = array(
				'title'	=> $image_title,
				'alt'	=> $image_title,
//        'id'  => 'gallery_01'
				) );

			$image_class = esc_attr( implode( ' ', $classes ) );

			echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sprintf( '<li><a data-image="%s" class="elevatezoom-gallery" data-zoom-image="%s">%s</a></li>', $full_thumb[0], $full_link[0], $image ), $attachment_id, $post->ID, $image_class );
			$loop++;
		}

	?>
	<?php
}
