<section id="menu">
  <div class="container">
    <div class="row">
      <?php if (!wpmd_is_phone()): ?>
      <div class="col-md-3 col-sm-3">
        <h2><i class="fa fa-bars"></i> Danh mục</h2>
        <?php get_template_part('/block/menu_list'); ?>
      </div>
      <?php endif; ?>
      <div class="col-md-9 col-sm-9">
        <div class="slider-home">
          <?php get_template_part('block/slider'); ?>
        </div>
      </div>
    </div>
  </div>
</section>