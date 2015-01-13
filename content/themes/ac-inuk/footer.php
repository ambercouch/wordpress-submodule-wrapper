<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package ac inuk
 */
?>
</div><!-- .content -->
</div><!-- .site__content-->

<footer class="site__footer" id="colophon"  role="contentinfo">
  <div class="footer--master" >
    <div class="grid">
      <div class="footer--master__site-info" >
        <div class="site-info">
          <img class="site-info__logo" src="http://mynt-apps.local/content/themes/ac-inuk/assets/images/svg/mynt-apps-logo-white-rgb.svg">
          <p>&copy; MYNT APPS <?php echo date('Y'); ?></p>
        </div><!-- .site-info -->
      </div>
    </div>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>