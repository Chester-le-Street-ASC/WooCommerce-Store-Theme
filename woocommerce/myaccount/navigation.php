<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light woocommerce-MyAccount-navigation mb-3" role="navigation">
  <span class="navbar-brand mb-0 h1 d-lg-none">Account Options</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	<ul class="navbar-nav mr-auto">
  			<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
  				<li class="nav-item">
            <a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"
  				   class="nav-link"><?php echo esc_html( $label ); ?>
           </a>
          </li>
  			<?php endforeach; ?>
  	</ul>
  </div>
</nav>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>
