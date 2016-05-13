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
       //do_action( 'woocommerce_before_main_content' );
     ?>

       <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

         <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

       <?php endif; ?>

    <div class="row">
      <?php if($category->slug != 'silver-unique'): ?>
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
                  <span>500k - 1.000k</span>
                </label>
              </li>
              <li>
                <label for="k-4">
                  <input id="k-4" type="checkbox" data-min="1000000" data-max="1500000">
                  <span>1.000k - 1.500k</span>
                </label>
              </li>
              <li>
                <label for="k-53">
                  <input id="k-53" type="checkbox" data-min="1500000" data-max="2000000">
                  <span>1.500k - 2.000k</span>
                </label>
                
              </li>
              <li>
                <label for="k-54">
                  <input id="k-54" type="checkbox" data-min="2000000" data-max="3000000">
                  <span>2.000k - 3.000k</span>
                </label>
                
              </li>
              <li>
                <label for="k-55">
                  <input id="k-55" type="checkbox" data-min="3000000" data-max="5000000">
                  <span>3.000k - 5.000k</span>
                </label>
                
              </li>
              <li>
                <label for="k-6">
                  <input id="k-6" type="checkbox" data-min="5000000" data-max=''>
                  <span>Trên 5.000k</span>
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
              <li>
                <label for="k-13">
                  <input id="k-13" type="checkbox" data-key="khac">
                  <span>Khác</span>
                </label>
                
              </li>
            </ul>
          </div>
          <div class="filter-gender">
            <h3>Lọc theo giới tính</h3>
            <ul class="gender">
              <li>
                <label for="k-11">
                  <input id="k-11" type="checkbox" data-key="nam">
                  <span>Nam</span>
                </label>
              </li>
              <li>
                <label for="k-12">
                  <input id="k-12" type="checkbox" data-key="nu">
                  <span>Nữ</span>
                </label>
              </li>
              <li>
                <label for="k-199">
                  <input id="k-199" type="checkbox" data-key="unisex">
                  <span>Unisex</span>
                </label>
              </li>
            </ul>
          </div>
          
          <div class="filter-size">
            <?php 
              $size = get_terms(array('taxonomy' => 'pa_size'), array('orderby' => 'description', 'order' => 'ASC'));
//              var_dump($size);
//              array('orderby' => 'name', 'order' => 'ASC')
            ?>
            <h3>Lọc theo size</h3>
            <ul class="size">
              <?php foreach ($size as $s): ?>
              <li>
                <label for="k-<?php echo $s->term_id; ?>">
                  <input id="k-<?php echo $s->term_id; ?>" type="checkbox" data-key="<?php echo $s->slug; ?>">
                  <span><?php echo $s->name; ?></span>
                </label>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          
          <div class="filter-color">
            <?php 
              $color = get_terms(array('taxonomy' => 'pa_mau'));
            ?>
            <h3>Lọc theo màu sắc</h3>
            <ul class="color">
              <?php foreach ($color as $c): ?>
              <li>
                <label style="background: <?php echo $c->description ?>" for="k-<?php echo $c->term_id; ?>">
                  <input id="k-<?php echo $c->term_id; ?>" type="checkbox" data-key="<?php echo $c->slug; ?>">
                </label>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            var datamin = "<?php echo (isset($_GET['min']))? $_GET['min']:'' ?>";
            var datamax = "<?php echo (isset($_GET['max']))? $_GET['max']:'' ?>";
            var datam = "<?php echo (isset($_GET['m']))? $_GET['m']:'' ?>";
            var datagender = "<?php echo (isset($_GET['gender']))? $_GET['gender']:'' ?>";
            var datasize = "<?php echo (isset($_GET['size']))? $_GET['size']:'' ?>";
            var datacolor = "<?php echo (isset($_GET['color']))? $_GET['color']:'' ?>";
            var urlcurrent = "<?php echo get_term_link($category->slug, 'product_cat') ?>";
            $(".filter-category ul.f-price > li input").on('click' ,function(){
              var vmin ='';
              var vmax= ''; 
              var vm = '';
              var vgender = '';
              var vcolor = '';
              var vsize = '';
              datamin = $(this).attr('data-min');
              datamax = $(this).attr('data-max');
              if(datamin != '')
                vmin = 'min='+datamin;
              if(datamax != '')
                vmax = '&max='+datamax;
              if(datam != '')
                vm = '&m='+datam;
              
              if(datagender != '')
                vgender = '&gender='+datagender;
              if(datacolor != '')
                vcolor = '&color='+datacolor;
              if(datasize != '')
                vsize = '&size='+datasize;

              var link = urlcurrent+ '?'+ vmin + vmax + vm + vgender + vcolor + vsize;
              window.location.href = link;
            });
            $(".filter-category ul.m-price > li input").on('click' ,function(){
              var vmin ='';
              var vmax= ''; 
              var vm = '';
              var vgender = '';
              var vcolor = '';
              var vsize = '';
              datam = $(this).attr('data-key');
              if(datamin != '')
                vmin = '&min='+datamin;
              if(datamax != '')
                vmax = '&max='+datamax;
              if(datam != '')
                vm = '&m='+datam;
              if(datagender != '')
                vgender = '&gender='+datagender;
              if(datacolor != '')
                vcolor = '&color='+datacolor;
              if(datasize != '')
                vsize = '&size='+datasize;
              var link = urlcurrent+ '?'+ vmin + vmax + vm + vgender + vcolor + vsize;
              window.location.href  = link;
            });
            
            $(".filter-category ul.gender > li input").on('click' ,function(){
              var vmin ='';
              var vmax= ''; 
              var vm = '';
              var vgender = '';
              var vcolor = '';
              var vsize = '';
              datagender = $(this).attr('data-key');
              if(datamin != '')
                vmin = '&min='+datamin;
              if(datamax != '')
                vmax = '&max='+datamax;
              if(datam != '')
                vm = '&m='+datam;
              if(datagender != '')
                vgender = '&gender='+datagender;
              if(datacolor != '')
                vcolor = '&color='+datacolor;
              if(datasize != '')
                vsize = '&size='+datasize;
              var link = urlcurrent+ '?'+ vmin + vmax + vm + vgender + vcolor + vsize;
              window.location.href  = link;
            });
            
            $(".filter-category ul.color > li input").on('click' ,function(){
              var vmin ='';
              var vmax= ''; 
              var vm = '';
              var vgender = '';
              var vcolor = '';
              var vsize = '';
              datacolor = $(this).attr('data-key');
              if(datamin != '')
                vmin = '&min='+datamin;
              if(datamax != '')
                vmax = '&max='+datamax;
              if(datam != '')
                vm = '&m='+datam;
              if(datagender != '')
                vgender = '&gender='+datagender;
              if(datacolor != '')
                vcolor = '&color='+datacolor;
              if(datasize != '')
                vsize = '&size='+datasize;
              var link = urlcurrent+ '?'+ vmin + vmax + vm + vgender + vcolor + vsize;
              window.location.href  = link;
            });
            
            $(".filter-category ul.size > li input").on('click' ,function(){
              var vmin ='';
              var vmax= ''; 
              var vm = '';
              var vgender = '';
              var vcolor = '';
              var vsize = '';
              datasize = $(this).attr('data-key');
              if(datamin != '')
                vmin = '&min='+datamin;
              if(datamax != '')
                vmax = '&max='+datamax;
              if(datam != '')
                vm = '&m='+datam;
              if(datagender != '')
                vgender = '&gender='+datagender;
              if(datacolor != '')
                vcolor = '&color='+datacolor;
              if(datasize != '')
                vsize = '&size='+datasize;
              var link = urlcurrent+ '?'+ vmin + vmax + vm + vgender + vcolor + vsize;
              window.location.href  = link;
            });

          });
        </script>
      </div>
      <?php endif; ?>
      <?php if ($category->slug == 'silver-unique'): 
        $class = 'col-md-12';
      else:
        $class = 'col-md-10';
      endif;
?>
      <div class="sdf <?php echo $class; ?>">
       
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
        $min = $_GET['min'];
        $max = $_GET['max'];
        $m = $_GET['m'];
        $gender = $_GET['gender'];
        $color = $_GET['color'];
        $size = $_GET['size'];
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $meta_query = array('relation' => 'AND');
        if($gender){
          $meta_query[] = array(
            'key'     => 'gioi_tinh',
            'value'   => $gender,
            'type' => 'numeric',
            'compare' => '=',
          );
        }
        
        if($m){
          $meta_query[] = array(
            'key'     => 'chat_lieu',
            'value'   => $m,
            'type' => 'numeric',
            'compare' => '=',
          );
        }
        
        if($min || $min == 0){
          $meta_query[] = array(
            'key'     => '_price',
            'value'   => $min,
            'type' => 'numeric',
            'compare' => '>=',
          );
        }
        
        if($max){
          $meta_query[] = array(
            'key'     => '_price',
            'value'   => $max,
            'type' => 'numeric',
            'compare' => '<=',
          );
        }
        
        if($color){
          $meta_query[] = array(
            'key'     => 'mau',
            'value'   => $color,
            'compare' => 'like',
            
          );
        }
        
        if($size){
          $meta_query[] = array(
            'key'     => 'size',
            'value'   => $size,
            'compare' => 'like',
            
          );
        }
        
        $args = array(
          'post_type' => 'product',
          'orderby' => 'id',
  //        'product_cat' => $category->slug,
          'order' => 'DESC',
          'tax_query' => array(
              array(
                  'taxonomy' => 'product_cat',
                  'field' => 'slug',
                  'terms' => $category->slug,
                  'operator' => 'IN'
              ),
//              array(
//                  'taxonomy' => 'pa_mau',
//                  'field' => 'slug',
//                  'terms' => 'bac'
//              )
          ),
          'meta_query' => $meta_query,
          'paged'          => $paged,
          'posts_per_page' => 32,
//        'paged'          => $paged,
//        'posts_per_page' => 80
      );
    query_posts($args);
        ?>
          		<?php if (have_posts() ) : ?>

              <?php woocommerce_product_loop_start(); ?>

                <?php woocommerce_product_subcategories(); ?>

                <?php while (have_posts() ) : the_post(); ?>

                  <?php wc_get_template_part( 'content', 'product' ); ?>

                <?php endwhile; // end of the loop. ?>

              <?php 
              //wp_reset_query();
              woocommerce_product_loop_end(); ?>

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
