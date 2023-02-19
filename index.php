<?php get_header(); ?>

<h2>Posts:</h2>
<ul>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  <?php endwhile; endif; ?>
</ul>

<?php get_footer(); ?>