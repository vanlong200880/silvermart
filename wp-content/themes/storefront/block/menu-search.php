<ul class="dropdown-menu">
  <li data-category="all"><a>Tất cả</a></li>
<?php
  $taxonomy     = 'product_cat';
  $orderby      = 'id';
  $order        = 'ASC';
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 0;
  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'order'        => $order,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
 $all_categories = get_categories( $args );
 foreach ($all_categories as $cat) {
    if($cat->category_parent == 0) { ?>
      <li data-category="<?php echo $cat->slug; ?>"><a><?php echo $cat->name; ?></a></li>
  <?php  }
 }
 ?>
</ul>