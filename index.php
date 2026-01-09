<?php get_header(); ?>

<div class="content">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
  ?>
      <h2><?php the_title(); ?></h2>
      <div><?php the_content(); ?></div>
  <?php
    endwhile;
  else :
    echo "<p>No posts found</p>";
  endif;
  ?>
</div>

<?php get_footer(); ?>
