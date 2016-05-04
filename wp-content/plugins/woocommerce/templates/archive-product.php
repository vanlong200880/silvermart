<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>
<?php get_template_part('block/menu'); ?>
<div class="list-category">
  <div class="container">
    <?php
    $category = get_queried_object();
    $args = array(
      'orderby'           => 'term_id',
      'order'             => 'ASC',
      'parent'            => $category->term_id,
      'taxonomy'          => 'product_cat',
      'hide_empty'        => 0
    );
    $categories = get_categories( $args );
    if($categories){
      foreach($categories as $cat){
        if($cat->count > 0){ ?>
    <h2 class="page-title"><a href="<?php echo get_term_link($cat->slug, 'product_cat') ?>"><?php echo $cat->name; ?></a> <a href="<?php echo get_term_link($cat->slug, 'product_cat') ?>" class="all pull-right">Tất cả</a></h2>
    
        <?php $args = array(
            'post_status' => 'publish',
            'order'          => 'DESC',
            'orderby'        => 'post_date',
            'post_type'      => 'product',
            'product_cat'    => $cat->slug,
            'posts_per_page' => 12
          );
          $the_query = new WP_Query( $args );
            if($the_query->have_posts()){ ?>
              <?php woocommerce_product_loop_start(); ?>
              <?php while ($the_query->have_posts()){
                $the_query->the_post(); ?>
                <?php wc_get_template_part( 'content', 'product' ); ?>
              <?php } ?>
              <?php woocommerce_product_loop_end(); ?>
            <?php }
          } ?>
        <?php 
        }?>
        <?php 
      }else{ ?>
        <?php
       /**
        * woocommerce_before_main_content hook.
        *
        * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
        * @hooked woocommerce_breadcrumb - 20
        */
       do_action( 'woocommerce_before_main_content' );
     ?>

       <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

         <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

       <?php endif; ?>

    <div class="row">
      <div class="col-md-2">
        <div class="filter-category">
          <div class="filter-price">
            <h3>Lọc theo giá</h3>
            <ul class="f-price">
              <li>
                <label for="k-1">
                  <input id="k-1" type="checkbox" data-min="0" data-max="100000">
                  <span>Dưới 100k</span>
                </label>
              </li>
              <li>
                <label for="k-2">
                  <input id="k-2" type="checkbox" data-min="100000" data-max="500000">
                  <span>100K - 500K</span>
                </label>
                
              </li>
              <li>
                <label for="k-3">
                  <input id="k-3" type="checkbox" data-min="500000" data-max="1000000">
                  <span>500k - 1,000k</span>
                </label>
              </li>
              <li>
                <label for="k-4">
                  <input id="k-4" type="checkbox" data-min="1000000" data-max="1500000">
                  <span>1,000k - 1,500k</span>
                </label>
              </li>
              <li>
                <label for="k-5">
                  <input id="k-5" type="checkbox" data-min="1500000" data-max="5000000">
                  <span>1,500k - 5,000k</span>
                </label>
                
              </li>
              <li>
                <label for="k-6">
                  <input id="k-6" type="checkbox" data-min="5000000" data-max=''>
                  <span>Trên 5,000k</span>
                </label>
                
              </li>
            </ul>
          </div>
          
          <div class="filter-material">
            <h3>Lọc theo chất liệu</h3>
            <ul class="m-price">
              <li>
                <label for="k-7">
                  <input id="k-7" type="checkbox" data-key="da">
                  <span>Da</span>
                </label>
              </li>
              <li>
                <label for="k-8">
                  <input id="k-8" type="checkbox" data-key="kiem-loai">
                  <span>Kim loại</span>
                </label>
                
              </li>
              <li>
                <label for="k-9">
                  <input id="k-9" type="checkbox" data-key="mylon">
                  <span>Nylon</span>
                </label>
                
              </li>
              <li>
                <label for="k-10">
                  <input id="k-10" type="checkbox" data-key="vai">
                  <span>Vải</span>
                </label>
                
              </li>
            </ul>
          </div>
          
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            var datamin = "<?php echo (isset($_GET['min']))? $_GET['min']:'' ?>";
            var datamax = "<?php echo (isset($_GET['max']))? $_GET['max']:'' ?>";
            var datam = "<?php echo (isset($_GET['m']))? $_GET['m']:'' ?>";
            var urlcurrent = "<?php echo get_term_link($category->slug, 'product_cat') ?>";
            $(".filter-category ul.f-price > li input").on('click' ,function(){
              var vmin ='';
              var vmax= ''; 
              var vm = '';
              datamin = $(this).attr('data-min');
              datamax = $(this).attr('data-max');
              if(datamin != '')
                vmin = 'min='+datamin;
              if(datamax != '')
                vmax = '&max='+datamax;
              if(datam != '')
                vm = '&m='+datam;

              var link = urlcurrent+ '?'+ vmin + vmax + vm;
              window.location.href = link;
            });
            $(".filter-category ul.m-price > li input").on('click' ,function(){
              var vmin ='';
              var vmax= ''; 
              var vm = '';
              datam = $(this).attr('data-key');
              if(datamin != '')
                vmin = '&min='+datamin;
              if(datamax != '')
                vmax = '&max='+datamax;
              if(datam != '')
                vm = '&m='+datam;
              var link = urlcurrent+ '?'+ vmin + vmax + vm;
              window.location.href  = link;
            });

          });
        </script>
      </div>
      <div class="col-md-10">
       
		<?php
			/**
			 * woocommerce_archive_description hook.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
		?>
        <?php
//    var_dump($category); die;
        $args = array(
        
        'post_type' => 'product',
//        'orderby' => 'id',
//        'product_cat' => $category->slug,
//        'order' => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => $category->slug,
                'operator' => 'IN'
            )
        ),
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key'     => '_price',
              'value'   => 0,
              'type' => 'numeric',
              'compare' => '>=',
            ),
            array(
              'key'     => '_price',
              'value'   => 1500000,
              'type' => 'numeric',
              'compare' => '<=',
            ),
        ),
        'posts_per_page' => 48,
    );


    $loop = new WP_Query($args);
//    var_dump($loop); die;
        ?>
          		<?php if ($loop->have_posts() ) : ?>

              <?php woocommerce_product_loop_start(); ?>

                <?php //woocommerce_product_subcategories(); ?>

                <?php while ($loop->have_posts() ) : $loop->the_post(); ?>

                  <?php wc_get_template_part( 'content', 'product' ); ?>

                <?php endwhile; // end of the loop. ?>

              <?php woocommerce_product_loop_end(); ?>

              <?php
                /**
                 * woocommerce_after_shop_loop hook.
                 *
                 * @hooked woocommerce_pagination - 10
                 */
              do_action( 'woocommerce_after_shop_loop_paging' );
              ?>

            <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

              <?php wc_get_template( 'loop/no-products-found.php' ); ?>

            <?php endif; ?>
              <?php wp_reset_postdata(); ?>
        
      </div>
    </div>
          
      
    <?php } ?>
</div>
</div>
	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
//		do_action( 'woocommerce_after_main_content' );
	?>

<?php get_footer( 'shop' ); ?>
