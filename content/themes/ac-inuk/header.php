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
    <script>
      (function (d) {
        var config = {
          kitId: 'nex6zlv',
          scriptTimeout: 3000
        },
        h = d.documentElement, t = setTimeout(function () {
          h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
        }, config.scriptTimeout), tk = d.createElement("script"), f = false, s = d.getElementsByTagName("script")[0], a;
        h.className += " wf-loading";
        tk.src = '//use.typekit.net/' + config.kitId + '.js';
        tk.async = true;
        tk.onload = tk.onreadystatechange = function () {
          a = this.readyState;
          if (f || a && a != "complete" && a != "loaded")
            return;
          f = true;
          clearTimeout(t);
          try {
            Typekit.load(config)
          } catch (e) {
          }
        };
        s.parentNode.insertBefore(tk, s)
      })(document);
    </script>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> <?php ac_body_data(); ?>>
    <?php // (AC_MENU_ABOVE_HEADER === TRUE) ? get_template_part('templates/snippets/site__navigation--main') : ''; ?>
    <div id="page" class="hfeed site">
      <?php do_action('before'); ?>
      <header class="site__header--master" id="masthead"   role="banner">
        <div class="header--master" >
          <div class="header--master__branding">
            <div class="branding">
              <?php if (is_home() || is_front_page()) : ?>
                <h1 class="branding__title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/svg/mynt-apps-logo-white-rgb.svg" /></a></h1>
                <h2 class="branding__description"><?php bloginfo('description'); ?></h2>
              <?php else : ?>
                <div class="branding__title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></div>
                <span class="branding__description"><?php bloginfo('description'); ?></span>
              <?php endif; ?>
            </div><!-- /.branding -->
            <?php get_template_part('templates/snippets/header--master__widget-area'); ?>
          </div><!-- /.header--master__branding -->
        </div><!-- /.header--master -->
      </header><!-- /.site__header -->
      <?php (AC_MENU_ABOVE_HEADER === FALSE) ? get_template_part('templates/snippets/site__navigation--main') : ''; ?>
      <div class="site__content" id="main" >
        <div class="content">
