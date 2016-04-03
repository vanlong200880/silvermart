<section class="list-category">
  <div class="container">
    <div class="row">
      <?php
        $taxonomy     = 'product_cat';
        $orderby      = 'category_menu_order';
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
       
        $sorted_cats = array();
         foreach($all_categories as $cat){
           $ordr = get_field('category_menu_order', 'product_cat_'.$cat->term_id);
           $cat->order = $ordr;
           $sorted_cats[] = $cat;
         }
         usort($sorted_cats, function($a, $b) {
           return $a->order - $b->order;
       });

       foreach ($sorted_cats as $cat) { ?>
      <div class="col-md-12">
      <?php
          if($cat->category_parent == 0) {
              $category_id = $cat->term_id;
              $icon = get_field('icon', $cat);
              $link = get_field('link', $cat);
              $thumbnail_id = get_woocommerce_term_meta($category_id, 'thumbnail_id', true);
              $image = wp_get_attachment_url($thumbnail_id); ?>
              <div class="page-home-title">
                <div class="tabs-home">
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class=" home-tabs-default active"><a href="#home-<?php echo $cat->term_id; ?>" aria-controls="home-<?php echo $cat->term_id; ?>" role="tab" data-toggle="tab"><?php echo $icon; ?><?php echo $cat->name; ?></a></li>
                    <li role="presentation" class="tab-list"><a href="#newest-<?php echo $cat->term_id; ?>" aria-controls="newest-<?php echo $cat->term_id; ?>" role="tab" data-toggle="tab">Mới nhất</a></li>
                    <li role="presentation" class="tab-list"><a href="#hot-<?php echo $cat->term_id; ?>" aria-controls="hot-<?php echo $cat->term_id; ?>" role="tab" data-toggle="tab">Bán chạy</a></li>
                  </ul>
                </div>
                <a class="all pull-right" href="<?php echo get_term_link($cat->slug, 'product_cat') ?>">Tất cả</a>
              </div>
              <?php getTemplatePart('block/tab',  null, array('product_cat' => $cat->slug , 'term_id' => $cat->term_id)); ?>
         <?php } ?>
      </div>
    <?php  }
      ?>
    </div>
  </div>
</section>