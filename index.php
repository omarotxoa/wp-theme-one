<?php get_header(); ?>

<main class="box stack">
  <h2>Posts:</h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
      <p class="read-more"><a href="<?php the_permalink(); ?>">Read full post -></a></p>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>