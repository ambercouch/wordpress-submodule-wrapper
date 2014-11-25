ACINUK = {
  common: {
    init: function() {
      console.log('common');
      
      $(function() {
        $.vegas({
          src:'/content/themes/ac-inuk/assets/images/vegas/background.jpg'
        })('overlay', {
        src:'/content/themes/ac-inuk/assets/images/vegas/overlays/13.png'
        });
});

      if (jQuery('#nav-main').data('responsive-clone')) {
        $clone_nav = jQuery('#nav-main').clone();
        jQuery('#nav-main').clone();
        $clone_nav.attr('id', 'nav-responsive');

        $clone_nav.prependTo('body');

        els = jQuery('#nav-responsive *').each(function() {
          if (jQuery(this).attr('id')) {
            id = jQuery(this).attr('id');
            jQuery(this).attr('id', id + '-clone');
          }
        });
        var $menu = jQuery('#nav-responsive .menu--site__container'),
                $menulink = jQuery('#site_menu_toggle-clone'),
                $container = jQuery('#nav-main'),
                container_height = $container.height();
      } else {
        var $menu = jQuery('#nav-main .menu--site__container'),
                $menulink = jQuery('#site_menu_toggle'),
                $container = jQuery('#nav-main'),
                container_height = $container.height();
      }

      jQuery('body').addClass('js');



      if ($container.css('position') == 'absolute') {
        jQuery('body').css('margin-top', container_height);
      }

      $menulink.click(function() {

        $menulink.toggleClass('active');
        $menu.toggleClass('active');
        var height = jQuery('.menu-main-container.active').height();
        console.log(height);
        return false;
      });

      jQuery('p').each(function(i) {
        if (jQuery(this).text() == '') {
          jQuery(this).addClass('is-empty');
        }
      });

    }
  },
  page: {
    init: function() {
      console.log('all pages');
    }
  },
  post: {
    init: function() {
      console.log('all posts');
    }
  }
};
UTIL = {
  exec: function(template, handle) {
    var ns = ACINUK,
            handle = (handle === undefined) ? "init" : handle;

    if (template !== '' && ns[template] && typeof ns[template][handle] === 'function') {
      ns[template][handle]();
    }
  },
  init: function() {
    var body = document.body,
            template = body.getAttribute('data-post-type'),
            handle = body.getAttribute('data-post-slug');

    UTIL.exec('common');
    UTIL.exec(template);
    UTIL.exec(template, handle);
  }
};
jQuery(window).load(UTIL.init);





