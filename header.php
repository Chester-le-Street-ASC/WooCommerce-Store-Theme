<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700">
  <link rel="stylesheet" href="/wp-content/themes/chesterStore/font-awesome/css/font-awesome.min.css">
  <link rel="apple-touch-icon" href="/storetouchicon256.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/storetouchicon180.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/storetouchicon72.png">
  <meta name="apple-mobile-web-app-title" content="CLS Store">

  <!-- Global site tag (analytics.js) - Google Analytics -->
  <script async="" src="https://www.google-analytics.com/analytics.js"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-78812259-3', 'auto');
    <?php if (is_user_logged_in()) {
        $current_user = wp_get_current_user();
        echo 'ga(\'set\', \'userId\', \'' . $current_user->ID . '\'); // Set the user ID using signed-in user_id.';
      }
    ?>
    ga('send', 'pageview');
  </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

    <nav class="navbar static-top navbar-expand-lg navbar-dark bg-primary d-print-none justify-content-between" role="navigation">
      <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><!--<?php bloginfo('name'); ?>-->CLS ASC Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#chesterNavbar" aria-controls="chesterNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php
          wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'chesterNavbar',
            'menu_class'        => 'nav navbar-nav justify-content-end',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker())
          );
        ?>
      </div>
    </nav>
	</div><!-- .wrapper-navbar end -->
  <?php
    if (!is_user_logged_in()) {
      echo '
  <div class="homepage-masthead bg-warning d-print-none" style="margin:0;color:#212529">
  <div class="container">
    <p class="h3">This website is under development</p>
    <p class="mb-0">You cannot yet make purchases from this site. If you\'re in our beta trials, ignore this message.</p>
  </div>
</div>
';}?>

  <header class="container">
    <div class="row d-print-none align-items-center" style="margin-top:0px">
      <div class="col-md-8">
  	  <h1 class="mb-0">
        <a class="storeLogo" alt="Chester-le-Street ASC" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a><span class="sr-only">"Chester&#8209;le&#8209;Street&nbsp;ASC</span>
      </h1>
  	</div>
  	<div class="col d-none d-md-block">
  	  <p class="slogan"><a href="https://chesterlestreetasc.co.uk/beta" target="_blank" class="badge badge-secondary">BETA</a></p>
  	</div>
    </div>
    <!--<style>.featureHeader{background:#bd0000;background-image:url("https://www.chesterlestreetasc.co.uk/wp-content/themes/chester/img/christmas.png");background-size:100% auto;padding:1rem;color:#fff;text-shadow: 1px 1px 1px #000;
    }
  .featureHeader a{color: #fff;font-weight: bold;}
  .featureHeader a:hover, .featureHeader a:active, .featureHeader a:focus {color: #fff; text-decoration: underline;}</style>
    <hr class="d-none d-md-block">
    <div class="row d-print-none justify-content-md-center d-none d-md-flex">
      <div class="col-12 col-xl-10">
        <div class="featureHeader">
          <div class="row align-items-center justify-content-between">
            <div class="col">
              <img src="/wp-content/themes/chester/img/promotions/merryChristmas.png" srcset="/wp-content/themes/chester/img/promotions/merryChristmas@2x.png 2x, /wp-content/themes/chester/img/promotions/merryChristmas@3x.png 3x" class="img-fluid" style="margin-bottom:0.5rem; margin-right:0.3rem;" alt="Merry Christmas from Chester-le-Street ASC">
              <span class="sr-hidden h3">from Chester-le-Street ASC</span><br>
              Get the <a class="" href="https://www.chesterlestreetasc.co.uk/2017/09/christmas-closures-2018/">Christmas Training Schedule</a> to make sure you're in the right place at the right time!
            </div>-->
            <!--<div class="col-4 text-center">
              <a class="btn btn-secondary" href="https://www.chesterlestreetasc.co.uk/competitions/galas/burns-meet-2018/" target="_blank">Burns Meet Details</a>
            </div>
            <div class="col-2">
              <img class="img-fluid float-right" src="/wp-content/themes/chester/img/promotions/clsdascLogo.png" srcset="/wp-content/themes/chester/img/promotions/clsdascLogo@2x.png 2x, /wp-content/themes/chester/img/promotions/clsdascLogo@3x.png 3x" alt="Chester-le-Street ASC Icon">-->
            <!--</div>
          </div>
        </div>
      </div>
    </div>-->
    <div class="row d-none d-print-inline-block" style="margin-top:-50px">
      <div class="col-6">
        <img class="img-fluid logo" src="<?php echo get_template_directory_uri();?>/img/chesterLogo.svg"  alt="Chester-le-Street ASC Logo">
      </div>
    </div>
  	<hr>
    <div id="noSupportAlert">
      <div class="alert alert-danger">
        <p><strong>Unsupported Browser</strong><br>You're using an unsupported browser and this website will not work properly with it. <a href="http://browsehappy.com/" class="alert-link" target="_blank">Upgrade your browser today <i class="fa fa-external-link" aria-hidden="true"></i></a> to any which supports CSS Grid to better experience this site.</p>
        <p>We support the following browsers...</p>
        <ul>
          <li>Mozilla Firefox 52 or later</li>
          <li>Microsoft Edge 16 or later</li>
          <li>Safari and other browsers on iOS 10.3 or later</li>
          <li>MacOS Safari 10.1 or later</li>
          <li>Google Chrome 57 or later</li>
        </ul>
        <p class="mb-0"><a href="https://caniuse.com/#feat=css-grid" class="alert-link" target="_blank">Check for browser support for CSS Grid at Can I Use? <i class="fa fa-external-link" aria-hidden="true"></i></a></p>
      </div>
    </div>
      <!--[if !IE]><div class="alert alert-danger"><strong>Unsupported Browser</strong><br>You're using an unsupported browser and this website may not work properly with it. <a href="http://browsehappy.com/" class="alert-link" target="_blank">Upgrade your browser today <i class="fa fa-external-link" aria-hidden="true"></i> </a> or <a href="https://www.google.com/chrome/browser/desktop/index.html" class="alert-link" target="_blank">install Google Chrome <i class="fa fa-external-link" aria-hidden="true"></i> </a> to better experience this site.</p></div><hr><![endif]-->
      <noscript>
      <div class="alert alert-danger">
        <p class="mb-0"><strong>JavaScript is disabled or not supported</strong>
  		  <br>
  		  It looks like you've got JavaScript disabled or your browser does not support it. JavaScript is essential for our website to function properly, so we recommend you enable it or upgrade to a browser which supports it as soon as possible. <a href="http://browsehappy.com/" class="alert-link" target="_blank">Upgrade your browser today <i class="fa fa-external-link" aria-hidden="true"></i></a></p>
      </div>
      <hr>
    </noscript>
  </header>
