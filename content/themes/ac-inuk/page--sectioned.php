<?php
/**
 * Template Name: sectioned
 *
 * With this template you can display other pages as sections.
 *
 */
get_header();
?>

<div id="primary" class="content__page-section">
  <?php while (have_posts()) : the_post(); ?>

    <?php get_template_part('templates/content', 'page-sectioned'); ?>

  <?php endwhile; // end of the loop.  ?>
</div><!-- /.content__page-section -->

<?php get_footer(); ?>
