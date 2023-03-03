<?php
  function theme_files() {
    wp_enqueue_style('main_styles', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_theme_file_uri('/theme.js'), '', '1.0', true);
  }
  add_action('wp_enqueue_scripts', 'theme_files');

  function theme_features() {
    register_nav_menu('main-menu', "Main Menu (Header)");
    remove_filter('the_excerpt', 'wpautop');
    remove_filter('the_content', 'wpautop');
  }

  add_action('after_setup_theme', 'theme_features');
?>