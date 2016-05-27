<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header(); ?>

<div class="container list-news detail-news">
  <div class="row">
    <div class="col-md-8">
      <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php
        //do_action( 'storefront_single_post_before' );

        get_template_part( 'content', 'single' );

        /**
         * @hooked storefront_post_nav - 10
         * @hooked storefront_display_comments - 20
         */
        //do_action( 'storefront_single_post_after' );
        ?>

      <?php endwhile; // end of the loop. ?>

      </main><!-- #main -->
    </div><!-- #primary -->
    </div>
    <div class="col-md-4 post-related">
      <?php
      global $post;

        $category = get_the_category($post->ID);
        $featured = array (					 
            'post_status'    => 'publish',		
            'order'          => 'DESC',
            'orderby'        => 'date',
            'post_type'      => 'post',
            'category_name'  => $category[0]->slug,
            'posts_per_page' => 5,
            'post__not_in'   => array(get_the_ID())
        );
        $col = '';
        $row = '';
        if(wpmd_is_phone()){
          $col = 'col-xs-6';
          $row = 'row';
        }
        if(wpmd_is_tablet()){
          $col = 'col-sm-4';
          $row = 'row';
        }
        $featured_the_query = new WP_Query( $featured ); 
        if($featured_the_query){ ?>
        <div class="title-details">
          <h2>
            <span class="fa fa-newspaper-o"></span>
            Bài liên quan
          </h2>
        </div>
      <ul>
        <?php	while ($featured_the_query->have_posts()){
                $featured_the_query->the_post(); ?>
        <li>
          <figure>
            <a class="img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php 
              $attachment_id = get_post_thumbnail_id(get_the_ID());
              if (!empty($attachment_id)) { 
                the_post_thumbnail(array(120, 120)); ?>
              <?php } ?>
              </a>
            <div class="relate">
              <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
              <p><a href="<?php the_permalink(); ?>"><?php echo the_excerpt_max_charlength(20); ?></a></p>
            </div>
          </figure>
        </li>
          <?php } ?>
        </ul>
        <?php } ?>
    </div>
  </div>
</div>


	

<?php get_footer(); ?>
