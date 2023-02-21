<?php get_header(); ?>

<main>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1>Post: <?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>