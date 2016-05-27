<ul>
  <li><a href="<?php echo home_url() ?>/san-pham-moi/">Sản phẩm mới</a></li>
  <li><a href="<?php echo home_url() ?>/khuyen-mai-hot/">Khuyến mãi HOT</a></li>
  <li><a href="<?php echo home_url() ?>/gia-re-moi-ngay/">Giá rẻ mỗi ngày</a></li>
  <li><a href="<?php echo home_url() ?>/silver-club/">Silver Club</a></li>
  <li><a href="<?php echo home_url() ?>/tin-tuc/">S-press</a></li>
</ul>
<ul>
  <?php

  $taxonomy     = 'product_cat';
  $orderby      = 'id';  
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
         'hide_empty'   => $empty
  );
 $all_categories = get_categories( $args );
 foreach ($all_categories as $cat) {
    if($cat->category_parent == 0) {
        $category_id = $cat->term_id;
        $icon = get_field('icon', $cat);
        echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'">'.$icon.' '. $cat->name .'</a>';
        $args2 = array(
                'taxonomy'     => $taxonomy,
                'child_of'     => 0,
                'parent'       => $category_id,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li'     => $title,
                'hide_empty'   => $empty
        );
        $sub_cats = get_categories( $args2 );
        if($sub_cats) {
          echo '<ul>';
            foreach($sub_cats as $sub_category) {
              $sub_cat_id = $sub_category->term_id;
                    echo '<li><a href="'. get_term_link($sub_category->slug, 'product_cat') .'">'. $sub_category->name.'</a>';
              $args3 = array(
                'taxonomy'     => $taxonomy,
                'child_of'     => 0,
                'parent'       => $sub_cat_id,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li'     => $title,
                'hide_empty'   => $empty
              );
              $sub_cats_child = get_categories( $args3 );
              if($sub_cats_child){
                echo '<ul>';
                foreach ($sub_cats_child as $sub_child_value){
                  echo '<li><a href="'. get_term_link($sub_child_value->slug, 'product_cat') .'">'. $sub_child_value->name.'</a></li>';
                }
                echo '</ul>';
              }
              echo '</li>';
            }
            echo '</ul>';
        }
        echo "</li>";
    }
}
?>
</ul>