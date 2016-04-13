<?php
	wp_reset_postdata();
  $slug = 'slider';
	$args = array (					 
			'post_status'    => 'publish',		
			'order'          => 'DESC',
			'orderby'        => 'post_date',
			'post_type'      => 'post',
			'category_name'  => $slug,
			'posts_per_page' => 5,
		);
		$the_query = new WP_Query( $args ); ;
		if($the_query->have_posts()){?>
			<div class="show-adv" id="owl-product-carousel-first">
			<?php while ($the_query->have_posts()){ 
				$the_query->the_post();
				?>
        <a href="<?php echo get_field('link'); ?>" target="_blank" title="<?php the_title(); ?>">
						<?php 
									$attachment_id = get_post_thumbnail_id(get_the_ID());
									if (!empty($attachment_id))
										the_post_thumbnail('full'); ?>
					</a>
		<?php	} ?>
			</div>
		
<?php } ?>
<script>
jQuery(document).ready(function() {
  $("#owl-product-carousel-first").owlCarousel({
      items : 1,
      itemsDesktop: [1400, 1],
      itemsDesktopSmall: [1100, 1],
      itemsTablet: [767, 1],
      itemsMobile: [500, 1],
      autoPlay: 4000,
      navigation : false,
      slideSpeed : 300,
      paginationSpeed : 400,
      pagination : true,
      paginationNumbers: false,
          //singleItem : true,
      navigationText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
      rewindNav : true,
      stopOnHover : true
  });

  $("a[href='#top']").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });
});
        
</script>

