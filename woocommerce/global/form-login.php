<?php
/**
 * Login form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( is_user_logged_in() ) {
	return;
}

?>
<form method="post" class="login" <?php if ( $hidden ) echo 'style="display:none;"'; ?>>

	<?php do_action( 'woocommerce_login_form_start' ); ?>

	<?php if ( $message ) echo wpautop( wptexturize( $message ) ); ?>

  <div class="form-group">
    <label for="username"><?php _e( 'Username or email address', 'woocommerce' ); ?> <span class="required">*</span></label>
    <input type="text" class="form-control" name="username" id="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>" />
  </div>

  <div class="form-group">
    <label for="password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
    <input class="form-control" type="password" name="password" id="password" />
  </div>
	<div class="clear"></div>

	<?php do_action( 'woocommerce_login_form' ); ?>

	<?php wp_nonce_field( 'woocommerce-login' ); ?>
    <label class="custom-control custom-checkbox">
      <input class="custom-control-input" name="rememberme" type="checkbox" id="rememberme" value="forever">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description"><?php _e( 'Remember me', 'woocommerce' ); ?></span>
    </label>

    <p><input type="submit" class="btn btn-outline-primary" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>" /></p>

    <p>
      <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
    </p>

	<div class="clear"></div>

	<?php do_action( 'woocommerce_login_form_end' ); ?>

</form>
