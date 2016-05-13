<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $order ) : ?>

	<?php if ( $order->has_status( 'failed' ) ) : ?>

		<p class="woocommerce-thankyou-order-failed"><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

		<p class="woocommerce-thankyou-order-failed-actions">
			<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
			<?php if ( is_user_logged_in() ) : ?>
				<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php _e( 'My Account', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</p>

	<?php else : ?>

		<p class="woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); ?></p>

		<ul class="woocommerce-thankyou-order-details order_details">
			<li class="order">
				<?php _e( 'Order Number:', 'woocommerce' ); ?>
				<strong><?php echo $order->get_order_number(); ?></strong>
			</li>
			<li class="date">
				<?php _e( 'Date:', 'woocommerce' ); ?>
				<strong><?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></strong>
			</li>
			<li class="total">
				<?php _e( 'Total:', 'woocommerce' ); ?>
				<strong><?php echo $order->get_formatted_order_total(); ?></strong>
			</li>
			<?php if ( $order->payment_method_title ) : ?>
			<li class="method">
				<?php _e( 'Payment Method:', 'woocommerce' ); ?>
				<strong><?php echo $order->payment_method_title; ?></strong>
			</li>
			<?php endif; ?>
		</ul>
		<div class="clear"></div>

	<?php endif; ?>

	<?php //do_action( 'woocommerce_thankyou_' . $order->payment_method, $order->id ); ?>
    <h2>Thông tin tài khoản ngân hàng của chúng tôi</h2>
    <ul class="item-pament">
      <li>
        <div>
          <p><img src="<?php echo get_template_directory_uri(); ?>/images/Logo_VN_Chuan.jpg"></p>
          <p>Số tài khoản: <strong>0441000615241</strong> </p>
          <p>chủ tài khoản: <strong>Lê Huỳnh Đức</strong></p>
          <p>Vietcombank - Chi nhánh Tân Bình</p>
        </div>
      </li>
      <li>
        <div>
          <p><img src="<?php echo get_template_directory_uri(); ?>/images/logoacb.jpg"></p>
          <p>Số tài khoản: <strong>211224979</strong></p>
          <p>chủ tài khoản: <strong>Lê Huỳnh Đức</strong></p>
          <p>ACB - phòng giao dịch Maximark Cộng Hòa</p>
        </div>
      </li>
      <li>
        <div>
          <p><img src="<?php echo get_template_directory_uri(); ?>/images/logo-ngan-hang-agribank.jpg"></p>
          <p>Số tài khoản: <strong>1606207001025</strong></p>
          <p>chủ tài khoản: <strong>Lê Huỳnh Đức</strong></p>
          <p>Agribank - Chi nhánh An Phú </p>
        </div>
      </li>
    </ul>
    <p><strong><em>Lưu ý:</em></strong></p>
    <p>Nội dung chuyển khoản: <strong>HỌ VÀ TÊN + SỐ ĐƠN HÀNG</strong></p>
	<?php do_action( 'woocommerce_thankyou', $order->id ); ?>

<?php else : ?>

	<p class="woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

<?php endif; ?>
