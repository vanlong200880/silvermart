<?php
/**
 * @package storefront
 */
?>
      <h1><?php the_title() ?></h1>
      <article id="post-<?php the_ID(); ?>" class="content-new">

      <?php
      the_content();
      /**
       * @hooked storefront_post_header - 10
       * @hooked storefront_post_meta - 20
       * @hooked storefront_post_content - 30
       */
    //	do_action( 'storefront_single_post' );
      ?>

    </article><!-- #post-## -->

