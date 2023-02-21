<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title><?php the_title(); ?></title>
</head>
<header>
  <div><a href="<?php bloginfo('home'); ?>"><p>Theme<strong>One</srong></p></a></div>
  <ul>
    <?php wp_nav_menu('main-menu'); ?>
  </ul>
</header>