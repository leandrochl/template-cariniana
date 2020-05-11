
<?php

add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('menus');

add_image_size('min','100','100',true);
add_image_size('smallest','300','300',true);
add_image_size('largest','800','300',true);

function load_css(){

  // wp_register_style('bootstrap4', get_template_directory_uri() . '/css/bootstrap4/bootstrap.min.css', array(), 1, 'all');
  // wp_enqueue_style('bootstrap4');

  wp_register_style('bootstrap3', get_template_directory_uri() . '/css/bootstrap3/bootstrap.min.css', array(), 1, 'all');
  wp_enqueue_style('bootstrap3');

  wp_register_style('fontawesome', get_template_directory_uri() . '/css/fontawesome/all.css', array(), 1, 'all');
  wp_enqueue_style('fontawesome');

  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all');
  wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_css');


function include_jquery(){

  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), 1, 1, 1);
  wp_enqueue_script('jquery');
  add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');


function load_js(){

  // wp_register_script('bootstrap4', get_template_directory_uri() . '/js/bootstrap4/bootstrap.min.js', array(), 1, 1, 1);
  // wp_enqueue_script('bootstrap4');

  wp_register_script('bootstrap3', get_template_directory_uri() . '/js/bootstrap3/bootstrap.min.js', array(), 1, 1, 1);
  wp_enqueue_script('bootstrap3');

  wp_register_script('fontawesome', get_template_directory_uri() . '/js/fontawesome/all.js', array(), 1, 1, 1);
  wp_enqueue_script('fontawesome');

  wp_register_script('script', get_template_directory_uri() . '/js/script.js', array(), 1, 1, 1);
  wp_enqueue_script('script');

}
add_action('wp_enqueue_scripts', 'load_js');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

register_nav_menus([
    'top-menu' => __('Menu Superior', 'theme'),
    'footer-menu' => __('Menu Inferior', 'theme')
]);
?>
