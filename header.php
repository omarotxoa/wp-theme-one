<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title><?php the_title(); ?></title>
</head>
<header class="box cluster">
  <div><a href="<?php bloginfo('home'); ?>" class="logo"><p>Theme<strong>One</strong></p></a></div>
  <?php 
    wp_nav_menu($args = array(
      'theme_location' => "main-menu",
      'container' => "nav",
      'menu_class' => "cluster menu menu--main"
    ));
  ?>
</header>