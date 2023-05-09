<?php get_header(); ?>

<section class="container">

<?php get_content(); ?>

<!-- <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); 
    // var_dump(the_post());
    ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?> -->
</section>

<?php get_footer(); ?>