<section id="menu">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <h2><i class="fa fa-bars"></i> Danh mục</h2>
        <?php get_template_part('/block/menu_list'); ?>
      </div>
      <div class="col-md-9 col-sm-9">
        <div class="slider-home">
          <?php echo do_shortcode('[owl-carousel category="slider-home" items="1" autoPlay="true" itemsDesktop="1000,2"]'); ?>
          <!--<a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/slider.png" alt=""></a>-->
        </div>
      </div>
    </div>
  </div>
</section>