<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package storefront
 *
 */

get_header(); ?>

<div class="container list-news">
  <div class="row">
    <div class="col-md-12">
      <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>
            <h1 class="page-title">
              Tin tức
            </h1>

            <?php the_archive_description(); ?>

          <?php get_template_part( 'loop' ); ?>

        <?php else : ?>

          <?php get_template_part( 'content', 'none' ); ?>

        <?php endif; ?>

        </main><!-- #main -->
      </section><!-- #primary -->
    </div>
  </div>
</div>

<?php get_footer(); ?>
