<?php 
//LOAD SCRIPTS
function enqueue_integral_scripts() {
    wp_enqueue_script('Ajax-Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', false, null, true, null);
    wp_enqueue_script('Bootstrap-4.5.2', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), null, true, null);
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.6.3/js/all.js', false, null, null, false);
    wp_enqueue_script('integral-scripts', get_template_directory_uri() . '/assets/js/intSoundScripts.min.js', array('jquery'), null, true, null);
}
add_action('wp_enqueue_scripts', 'enqueue_integral_scripts');
//LOAD CSS
function enqueue_integral_styles() {
    wp_enqueue_style('bootstrap-4.5.2', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap', array(), null);
    wp_enqueue_style('integral-styles', get_template_directory_uri() . '/assets/styles/intSoundStyles.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_integral_styles');

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'superfluous-nomenclature' ),
) );
// Nav Walker



