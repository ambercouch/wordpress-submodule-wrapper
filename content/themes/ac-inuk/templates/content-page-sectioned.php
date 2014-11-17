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

    <section class="page-section">
      <article class="page-section--id-<?php echo $section->ID ?>" id="post-<?php echo $section->ID; ?>" >
        <header class="page-section__header">
          <div class="header--page-section">
            <h1 class="header--page-section__title">
              <span class="title--page-section" ><?php echo $section->post_title; ?></span>
            </h1>
          </div>
        </header><!-- /.page__header -->
      </article>
      <div class="page-section__content">
        <?php echo $section->post_content; ?>
      </div><!-- /.page-section__content -->
    </section>

  <?php endwhile; ?>
<?php else : ?>
  <p>You must add some pages as sections of this page or change the template.</p>
<?php endif; ?>