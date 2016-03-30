<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */
?>

<!--		</div> .col-full 
	</div> #content 

	<?php // do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit - 20
			 */
//			do_action( 'storefront_footer' ); ?>

		</div> .col-full 
	</footer> #colophon 

	<?php // do_action( 'storefront_after_footer' ); ?>

</div> #page -->
<footer>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="icon-logo"><img src="<?php echo get_template_directory_uri() ?>/images/home_06.png"></div>
              <div class="icon-text">
                <h2>Sản phẩm</h2>
                <p>Chính hãng</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="icon-logo"><img src="<?php echo get_template_directory_uri() ?>/images/home_08.png"></div>
              <div class="icon-text">
                <h2>Giao hàng tận nơi</h2>
                <p>63 TỈNH THÀNH</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="icon-logo"><img src="<?php echo get_template_directory_uri() ?>/images/home_10.png"></div>
              <div class="icon-text">
                <h2>Tư vấn miễn phí</h2>
                <p>096 666 0127</p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="icon-logo"><img src="<?php echo get_template_directory_uri() ?>/images/home_03.png"></div>
              <div class="icon-text">
                <h2>Chính sách đổi trả</h2>
                <p>LINH HOẠT</p>
              </div>
              </div>
          </div>
        </div>
      </div>
      <div class="footer-page">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <h2>HỖ TRỢ KHÁCH HÀNG</h2>
              <ul>
                <li><a href="#">Hướng dẫn đặt hàng</a></li>
                <li><a href="#">Hướng dẫn thanh toán</a></li>
                <li><a href="#">Qui định đổi mới sản phẩm</a></li>
                <li><a href="#">Quy định bảo hành - đổi trả</a></li>
                <li><a href="#">Quy định giao hàng</a></li>
              </ul>
            </div>
            
            <div class="col-md-3">
              <h2>VỀ SILVERMART</h2>
              <ul>
                <li><a href="#">Về chúng tôi</a></li>
                <li><a href="#">Điều khoản sử dụng</a></li>
                <li><a href="#">Chính sách chất lượng</a></li>
                <li><a href="#">Bảo mật thông tin</a></li>
              </ul>
            </div>
            
            <div class="col-md-3">
              <h2>KẾT NỐI VỚI SILVERMART</h2>
              <ul class="connect">
                <li><a href="#"><span class="icon icon-social-2"></span></a></li>
                <li><a href="#"><span class="icon icon-social"></span></a></li>
                <li><a href="#"><span class="icon icon-social-1"></span></a></li>
                <li><a href="#"><span class="icon icon-circle"></span></a></li>
              </ul>
            </div>
            
            <div class="col-md-3">
              <h2>TRUNG TÂM KHÁCH HÀNG</h2>
              <p>294 Hòa bình, P. Hiệp Tân, Q. Tân Phú, TP.HCM</p>
              <p>Email: vanlong200880@gmail.com</p>
              <p>ĐT: 096 666 0127</p>
              
            </div>
          </div>
        </div>
      </div>
      <div class="coppyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>Coppyright © 2015 silvermart. All Rights Reserved. By design <a href="#">PhamLong</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="support">
      <p><span class="icon icon-technology"></span> Tư vấn bán hàng <span>096 666 0127 </span></p>
    </div>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/owl.carousel.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
//    $(".slider-home").owlCarousel({
//      items : 1,
//      itemsDesktop: [1400, 1],
//      itemsDesktopSmall: [1100, 1],
//      itemsTablet: [767, 1],
//      itemsMobile: [500, 1],
//      autoPlay: 4000,
//      navigation : false,
//      slideSpeed : 300,
//      paginationSpeed : 400,
//      pagination : true,
//      paginationNumbers: true,
//          //singleItem : true,
//      navigationText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
//      rewindNav : true,
//      stopOnHover : true
//    });
    
    $(".header-navigation").hover(
      function () {
        $(".menu-scroll").css('display', 'block');
      }, 
      function () {
        $(".menu-scroll").removeAttr('style');
      });
      
    var nav = $('.header-sroll');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            nav.addClass("fix");
            return false;
        } else {
            nav.removeClass("fix");
        }
    }); 
  });
</script>


<?php wp_footer(); ?>

</body>
</html>
