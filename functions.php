<?php
function escaped_home_url() {
  echo esc_url( home_url( '/' ) ); 
}

add_action('init', 'adam_giese_setup');
function adam_giese_setup() {
  //navigation
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Menu');
}

//scripts & styles
add_action( 'wp_enqueue_scripts', 'adam_giese_scripts_and_styles' );
function adam_giese_scripts_and_styles() {
  wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' );
  wp_enqueue_style( 'adam-giese-style', get_template_directory_uri() . '/css/style.css' );
}

//filter
add_filter( 'get_the_archive_title', function($title) {
  if ( is_category() ) {
    $title = single_cat_title( '', false);
  }
  return $title;
});

?>