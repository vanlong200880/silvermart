<li class="col-md-4 col-sm-6 col-xs-12">
  <div class="item-new">
    <a class="img" href="<?php the_permalink(); ?>">
      <?php
        $attachment_id = get_post_thumbnail_id(get_the_ID());
        if (!empty($attachment_id)) :
          the_post_thumbnail(array(315, 315)); 
        endif;
        ?>
      </a>
    <a class="author">Đăng bởi: <?php echo get_the_author() ?> - <?php echo get_the_date('d-m-Y'); ?></a>
    <a class="title" href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
    <p><a href="<?php the_permalink(); ?>"><?php echo the_excerpt_max_charlength(40); ?></a></p>
  </div>
</li>