<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package ac inuk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> <?php ac_body_data(); ?>>
    <div class="site__navigation--main" id="nav-main"   role="navigation">
      <div class="navigation--main" >
        <div class="grid">
          <div class="navigation--main__menu">
            <div class="menu--site ">
              <a id="site_menu_toggle" class="menu--responsive-toggle__toggle" href="#menu">Menu</a>
              <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'menu--site__container', 'menu_class' => 'menu--site__menu-list')); ?>
            </div><!--/.menu--site -->
          </div><!-- /.navigation--main__menu -->
        </div><!-- /.grid -->
      </div><!-- /.navigation--main -->
    </div><!-- /.site__navigation--main -->
    <div id="page" class="hfeed site">
      <?php do_action('before'); ?>
      <header class="site__header--master" id="masthead"   role="banner">
        <div class="header--master" >
          <div class="grid">
            <div class="header--master__branding">
              <div class="branding">
                <?php if (is_home() || is_front_page()) : ?>
                  <h1 class="branding__title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                  <h2 class="branding__description"><?php bloginfo('description'); ?></h2>
                <?php else : ?>
                  <div class="branding__title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></div>
                  <span class="branding__description"><?php bloginfo('description'); ?></span>
                <?php endif; ?>
              </div><!-- /.branding -->
            </div><!-- /.header__branding -->
          </div><!-- /.grid -->
        </div><!-- /.header -->
      </header><!-- /.site__header -->

      <div class="site__content" id="main" >
        <div class="content">
