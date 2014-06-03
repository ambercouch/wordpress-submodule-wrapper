/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
console.log('plugins');
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
(function( $ ) {
jQuery.fn.extend({
    blockyHeight: function() {
        var settings = {
            css : {
                        'transition' : 'all 0s',
                        '-webkit-transition' : 'all 0s',
                        'opacity' : 0,
                        'visibility' : 'hidden',
                        'max-height': 'none',
                        'height' : 'auto',
                        'display' : 'block'
                        }
        };
        
        return this.each(function() {
            
        var bheight = $(this).css(settings.css).height(); 
        
        $.data(this , 'blockyHeight', bheight );
        
        $(this).removeAttr('style');
        
        });


  //    this.each(function() {
       
  //    
  //    return this;
  //    //var ac_height = this.css(cssObj).height();
  //    //this.removeAttr('style');
  //
  //    });
      //return ac_height;
    }
  });
}( jQuery ));

$(function() {

	var items = $('.slideRight, .slideLeft');
	var content = $('.content');
	
	var open = function() {
							$(items).removeClass('close').addClass('open');
						}
	var close = function() { 
							$(items).removeClass('open').addClass('close');
						}

	$('#navToggle').click(function(){
		if (content.hasClass('open')) {$(close)}
		else {$(open)}
	});
	content.click(function(){
		if (content.hasClass('open')) {$(close)}
	});

});



