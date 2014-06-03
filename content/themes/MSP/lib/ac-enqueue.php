<?php

/**
 * Enqueue scripts and styles
 */
function ac_inuk_scripts() {
  wp_enqueue_style('ac_inuk-style', get_stylesheet_uri());
  wp_deregister_script('jquery');
  wp_deregister_script('jquery-migrate');
  wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"), false, '1.11.0', true);
  wp_register_script('jquery-migrate', ("http://code.jquery.com/jquery-migrate-1.2.1.min.js"), array('jquery'), '1.2.1', true);
  wp_enqueue_script('jquery');
  wp_enqueue_script('ac_inuk', get_template_directory_uri() . '/assets/js/ac-inuk.js', array('jquery'), '20120206', true);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
  if (is_singular() && wp_attachment_is_image()) {
    wp_enqueue_script('ac_inuk-keyboard-image-navigation', get_template_directory_uri() . '/assets/js/keyboard-image-navigation.js', array('jquery'), '20120202');
  }
}

add_action('wp_enqueue_scripts', 'ac_inuk_scripts');
