<?php

function getTemplatePart($slug = null, $name = null, array $params = array()) {
	global $wp_query;
	
	do_action("get_template_part_{$slug}", $slug, $name);
	
	$templates = array();
	if (isset($name)) {
		$templates[] = "{$slug}-{$name}.php";
	}
	$templates[] = "{$slug}.php";
	$_template_file = locate_template($templates, false, false);

	if (is_array($wp_query->query_vars)) {
		extract($wp_query->query_vars, EXTR_SKIP);
	}
	extract($params, EXTR_SKIP);

	require($_template_file);
}

//function getPostViews($postID){
//    $count_key = 'post_views_count';
//    $count = get_post_meta($postID, $count_key, true);
//    if($count==''){
//        delete_post_meta($postID, $count_key);
//        add_post_meta($postID, $count_key, '0');
//        return "0 View";
//    }
//    return $count.' Views';
//}
//function setPostViews($postID) {
//    $count_key = 'post_views_count';
//    $count = get_post_meta($postID, $count_key, true);
//    if($count==''){
//        $count = 0;
//        delete_post_meta($postID, $count_key);
//        add_post_meta($postID, $count_key, '0');
//    }else{
//        $count++;
//        update_post_meta($postID, $count_key, $count);
//    }
//}

// Remove issues with prefetching adding extra views
//remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

//add_filter( 'woocommerce_get_price_html', 'wpa83367_price_html', 100, 2 );
//function wpa83367_price_html( $price, $product ){
//    return str_replace( '<ins>', ' <ins>', $price );
//}
function meks_disable_srcset( $sources ) {
    return false;
}
 
add_filter( 'wp_calculate_image_srcset', 'meks_disable_srcset' );


function woocommerce_output_related_products() {
 woocommerce_related_products(12,2);       // Display 4 products in 2 columns
 }