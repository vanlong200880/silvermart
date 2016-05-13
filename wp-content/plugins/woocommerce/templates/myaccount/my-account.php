<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
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

wc_print_notices(); ?>



<div class="row">
  <div class="col-md-3">
    <div class="fullname">Xin chào <strong><?php echo $current_user->display_name; ?></strong></div>
    <div class="info-user">
      <p>Từ trang quản lý tài khoản, bạn có thể xem các đơn đặt hàng gần nhất, quản lý địa chỉ thanh toán, nhận hàng và thay đổi thông tin tài khoản cùng mật khẩu.</p>
    </div>
    <div class="update-profile">
      <a href="<?php echo home_url(); ?>/tai-khoan/edit-account/"><strong>Sửa tài khoản</strong></a>
    </div>
    <div class="update-profile">
      <a href="<?php echo home_url(); ?>/tai-khoan/edit-address/thanh-toan"><strong>Sửa tài khoản thanh toán</strong></a>
    </div>
    <div class="logout-profile">
      <a href="<?php echo home_url(); ?>/tai-khoan/customer-logout/"><strong>Thoát</strong></a>
    </div>
    <!--<p class="myaccount_user">-->
      <?php
//      printf(
//        __( 'Hello <strong>%1$s</strong> (not %1$s? <a href="%2$s">Sign out</a>).', 'woocommerce' ) . ' ',
//        $current_user->display_name,
//        wc_get_endpoint_url( 'customer-logout', '', wc_get_page_permalink( 'myaccount' ) )
//      );
//
//      printf( __( 'From your account dashboard you can view your recent orders, manage your shipping and billing addresses and <a href="%s">edit your password and account details</a>.', 'woocommerce' ),
//        wc_customer_edit_account_url()
//      );
      ?>
    <!--</p>-->
    
  </div>
  <div class="col-md-9 list-order-profile">
    <?php do_action( 'woocommerce_before_my_account' ); ?>

    <?php wc_get_template( 'myaccount/my-downloads.php' ); ?>

    <?php wc_get_template( 'myaccount/my-orders.php', array( 'order_count' => $order_count ) ); ?>

    <?php wc_get_template( 'myaccount/my-address.php' ); ?>

    <?php do_action( 'woocommerce_after_my_account' ); ?>
  </div>
</div>


