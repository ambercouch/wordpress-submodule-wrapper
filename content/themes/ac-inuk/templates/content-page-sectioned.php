<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ac inuk
 */
?>

<?php if (have_rows('section')): ?>
  <?php while (have_rows('section')) : the_row(); ?>
    <?php $section = get_sub_field('page'); ?>

    <?php // print_R(get_sub_field('page')); ?>

    <section class="page-section--id-<?php echo $section->ID ?> background--<?php the_sub_field('background_class') ?>">
      <article class="page-section__content" id="post-<?php echo $section->ID; ?>" >
        <header class="page-section__header">
          <div class="header--page-section">
            <h1 class="header--page-section__title">
              <span class="title--page-section" ><?php echo $section->post_title; ?></span>
            </h1>
          </div>
        </header><!-- /.page__header -->

        <div class="page-section__body">
          <?php echo $section->post_content; ?>
        </div><!-- /.page-section__content -->
      </article>
    </section>

  <?php endwhile; ?>
<?php else : ?>
  <p>You must add some pages as sections of this page or change the template.</p>
<?php endif; ?>