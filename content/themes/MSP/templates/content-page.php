<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ac inuk
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
  <header class="page__header">
    <div class="header--article">
      <h1 class="header">
        <span class="title--article" ><?php the_title(); ?></span>
      </h1>
    </div>
  </header><!-- .entry-header -->

  <div class="page__content">
    <?php the_content(); ?>
    <?php
    wp_link_pages(array(
        'before' => '<div class="page__page-links">' . __('Pages:', 'ac_inuk'),
        'after' => '</div>',
    ));
    ?>
  </div><!-- .entry-content -->
  <?php edit_post_link(__('Edit', 'ac_inuk'), '<footer class="meta"><span class="meta__edit-link">', '</span></footer>'); ?>
</article><!-- #post-## -->
