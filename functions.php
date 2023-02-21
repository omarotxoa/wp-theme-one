<?php
  function theme_files() {
    wp_enqueue_style('main_styles', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'theme_files');

  function theme_features() {
    register_nav_menu('main-menu', "Main Menu (Header)");
  }

  add_action('after_setup_theme', 'theme_features');
?>