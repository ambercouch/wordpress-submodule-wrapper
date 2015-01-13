<?php

/**
 * ac inuk functions and definitions
 *
 * @package ac inuk
 */
require( get_template_directory() . '/lib/ac-settings.php' );
require( get_template_directory() . '/lib/extras/theme_setup.php' );
require( get_template_directory() . '/lib/extras/custom-background.php' );
require( get_template_directory() . '/lib/ac-widget-areas.php' );
require( get_template_directory() . '/lib/ac-enqueue.php' );
require( get_template_directory() . '/lib/ac-body-data.php' );

function print_menu_shortcode($atts, $content = null) {
  extract(shortcode_atts(array('name' => null,), $atts));
  return wp_nav_menu(array('menu' => $name, 'echo' => false));
}

add_shortcode('menu', 'print_menu_shortcode');

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/lib/extras/custom-header.php' );
