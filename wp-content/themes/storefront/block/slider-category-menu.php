<?php

$taxonomy     = 'product_cat';
$orderby      = 'name';  
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for no
$hierarchical = 1;      // 1 for yes, 0 for no  
$title        = '';  
$empty        = 0;

$args = array(
       'taxonomy'     => $taxonomy,
       'orderby'      => $orderby,
       'show_count'   => $show_count,
       'pad_counts'   => $pad_counts,
       'hierarchical' => $hierarchical,
       'title_li'     => $title,
       'hide_empty'   => $empty,
       'parent'       => 0
);
$slug = isset($category_slug) ? $category_slug : 0;
if(!empty($slug)){
  $all_categories = get_categories( $args );
  foreach ($all_categories as $cat) {
    if($cat->slug === $slug){
      $link = get_field('link', $cat);
      $thumbnail_id = get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true);
      $image = wp_get_attachment_url($thumbnail_id); 
      ?>
      <div class="list-ads">
        <a href="<?php echo $link; ?>" target="_blank">
          <img src="<?php echo $image; ?>">
          
        </a>
      </div>
<?php
    }
  }
}

?>

    