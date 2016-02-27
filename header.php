<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class='site-header'>
  <?php
    if ( is_front_page() && is_home() ) {  ?>
      <h1 class="site-header-title"><a href="<?php escaped_home_url() ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <?php } else { ?>
      <h2 class="site-header-title"><a href="<?php escaped_home_url() ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
    <?php } ?>
    <div class='site-header-nav'>
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </div>
  </header>
