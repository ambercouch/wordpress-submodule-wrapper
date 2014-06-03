<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ac inuk
 */
get_header();
?>
<div class="grid" >
  <div id="primary" class="content__single-page">
    <div id="content" class="site-content" role="main">

      <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('templates/content', 'page'); ?>

      <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
  </div><!-- #primary -->

  <?php get_sidebar(); ?>

</div><!-- /.grid -->
<?php get_footer(); ?>
