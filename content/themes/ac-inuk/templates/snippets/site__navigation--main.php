<div class="site__navigation--main" id="nav-main"   role="navigation" <?php echo(AC_MENU_ABOVE_HEADER === FALSE) ? 'data-responsive-clone="true"' : ''; ?>>
  <div class="navigation--main" >
    <div class="grid">
      <div class="navigation--main__menu">
        <div class="menu--site ">
          <a id="site_menu_toggle" class="menu--responsive-toggle__toggle" href="#menu">Menu</a>
          <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'menu--site__container', 'menu_class' => 'menu--site__menu-list')); ?>
        </div><!--
        <!-- menu -->
      </div>
    </div>
  </div><!-- /.container -->
</div><!-- #site-navigation -->
