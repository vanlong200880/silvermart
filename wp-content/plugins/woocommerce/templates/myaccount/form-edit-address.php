<?php
/**
 * Edit address form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-address.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$page_title   = ( $load_address === 'billing' ) ? __( 'Billing Address', 'woocommerce' ) : __( 'Shipping Address', 'woocommerce' );
?>

<?php wc_print_notices(); ?>

<?php if ( ! $load_address ) : ?>

	<?php wc_get_template( 'myaccount/my-address.php' ); ?>

<?php else : ?>
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
  </div>
<div class="col-md-9">
  <form method="post" class="address-edit">

		<h3><?php echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title ); ?></h3>

		<?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>

		<?php foreach ( $address as $key => $field ) : ?>

			<?php woocommerce_form_field( $key, $field, ! empty( $_POST[ $key ] ) ? wc_clean( $_POST[ $key ] ) : $field['value'] ); ?>

		<?php endforeach; ?>

		<?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>

		<p>
			<input type="submit" class="button" name="save_address" value="<?php esc_attr_e( 'Save Address', 'woocommerce' ); ?>" />
			<?php wp_nonce_field( 'woocommerce-edit_address' ); ?>
			<input type="hidden" name="action" value="edit_address" />
		</p>

	</form>
</div>

</div>
	

<?php endif; ?>
