<?php
/**
 * Template Name: Silver club
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 


?>
<section class="categories list-category list-silver">
	<div class="container">
    <div class="col-md-12">
      <?php

  $taxonomy     = 'category';
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
 unset($all_categories[0], $all_categories[1]);
 foreach ($all_categories as $cat) {  
    if($cat->category_parent == 0) {
        $category_id = $cat->term_id;
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
            foreach($sub_cats as $sub_category) {
              $sub_cat_id = $sub_category->term_id;
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
                foreach ($sub_cats_child as $sub_child_value){
//                  var_dump($sub_child_value);
                  if($sub_child_value->count > 0){
                    echo '<h2>'.$cat->name .' <i class="fa fa-angle-right" aria-hidden="true"></i> '.$sub_category->name .' <i class="fa fa-angle-right" aria-hidden="true"></i> '.$sub_child_value->name.'</h2>';
                    $args_product = array(
                    'post_status' => 'publish',
                    'order'          => 'DESC',
                    'orderby'        => 'menu_order,post_date',
                    'post_type'      => 'post',
                    'category_name'    => $sub_child_value->slug,
                    'posts_per_page' => 500,
                  );
                  $the_query = new WP_Query( $args_product ); ?>
                  <?php if($the_query->have_posts()){ ?>
                      <ul class="row posts-selector-infinite-scroll">
                  <?php 
                    while ($the_query->have_posts()){
                      $the_query->the_post(); ?>
                      <li class="col-md-3 col-sm-4 col-xs-6">
                        <div class="item">
                          <a  class="full-link list-silver-item" data-code="<?php echo get_the_ID(); ?>" href="javascript:void(0)"></a>
                          <div class="image">
                            <?php
                            $attachment_id = get_post_thumbnail_id(get_the_ID());
                            if (!empty($attachment_id)) :
                              the_post_thumbnail(array(315, 315)); ?>
                            <?php else: ?>
                            <?php endif; ?>
                          </div>
                          <div class="title">
                            <p><a href="javascript:void(0)" title="<?php the_title() ?>"><?php the_title() ?></a></p>
                          </div>
                          <div class="custom-field">
                            <?php echo get_field('custom_silver'); ?>
                          </div>
                          
                        </div>
                      </li>
                   <?php  } ?>
                  </ul>
                  <?php } ?>
                 <?php } ?>
                  
                <?php  }
              }else{ 
                if($sub_category->count > 0){
                echo '<h2>'.$cat->name .' <i class="fa fa-angle-right" aria-hidden="true"></i> '.$sub_category->name .'</h2>';
                $args_product = array(
                    'post_status' => 'publish',
                    'order'          => 'DESC',
                    'orderby'        => 'menu_order,post_date',
                    'post_type'      => 'post',
                    'category_name'    => $sub_category->slug,
                    'posts_per_page' => 500,
                  );
                  $the_query = new WP_Query( $args_product ); ?>
      <?php if($the_query->have_posts()){ ?>
                      <ul class="row posts-selector-infinite-scroll">
                  <?php 
                    while ($the_query->have_posts()){
                      $the_query->the_post(); ?>
                      <li class="col-md-3 col-sm-4 col-xs-6">
                        <div class="item">
                          <a  class="full-link list-silver-item" data-code="<?php echo get_the_ID(); ?>" href="javascript:void(0)"></a>
                          <div class="image">
                            <?php
                            $attachment_id = get_post_thumbnail_id(get_the_ID());
                            if (!empty($attachment_id)) :
                              the_post_thumbnail(array(315, 315)); ?>
                            <?php else: ?>
                            <?php endif; ?>
                          </div>
                          <div class="title">
                            <p><a href="javascript:void(0)" title="<?php the_title() ?>"><?php the_title() ?></a></p>
                          </div>
                          <div class="custom-field">
                            <?php echo get_field('custom_silver'); ?>
                          </div>
                          
                        </div>
                      </li>
                   <?php  } ?>
                  </ul>
                  <?php } ?>
              <?php }
            } }
        }
    }
}
?>		</div>
    
		</div>
</section>

<!-- Small modal -->
<div class="modal fade bs-example-modal-lg detail-content-popup" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="title-popup" id="gridSystemModalLabel"></h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="img-popup"></div>
          </div>
          <div class="col-md-6">
            <div class="custom-field-popup"></div>
            <div class="description-popup"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="content-popup"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="loading">
  <img src="<?php echo get_template_directory_uri(); ?>/images/Floating rays-32.gif">
</div>

<?php get_footer(); ?>