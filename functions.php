<?php
function escaped_home_url() {
  echo esc_url( home_url( '/' ) ); 
}

add_action('init', 'adam_giese_setup');
function adam_giese_setup() {
  //navigation
  add_theme_support('menus');
  add_theme_support( 'post-thumbnails', array( 'post', 'page') );
  register_nav_menu('primary', 'Primary Menu');
}

//add widgets
add_action( 'widgets_init', 'adam_giese_widgets_init' );
function adam_giese_widgets_init() {
  register_sidebar( array(
    'name'          => 'Main Sidebar',
    'id'            => 'main-sidebar',
    'description'   => 'Widgets here will appear on the main sidebar.',
    'before_widget' => '<div class="page-sidebar-content">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="page-sidebar-title">',
    'after_title'   => '</h2>',
  ) );
}

//scripts & styles
add_action( 'wp_enqueue_scripts', 'adam_giese_scripts_and_styles' );
function adam_giese_scripts_and_styles() {
  wp_register_script( 'adam-giese-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), '' );

  wp_enqueue_script( 'adam-giese-script' );
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
