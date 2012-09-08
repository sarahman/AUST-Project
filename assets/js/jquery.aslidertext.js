/*
 * jQuery Alvaro's Slider Text 1.0.1
 *
 * Copyright (c) 2010 Alvaro Véliz Marín - yo@alvaroveliz.cl
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * More info in http://alvaroveliz.cl/aSliderText/
 */
(function($){
 	$.fn.extend({ 
 		aSliderText: function(options) {
			var defaults = {
				updateTime: 6000,
				height: 0,
				element: 'li',
				easing: 500
			} 			
			var options = $.extend(defaults, options);
			var self = this;

    	return this.each(function() {
				var o = options;  
				var obj = $(this);

				if (o.height > 0) {
					obj.css('height', o.height).css('overflow', 'hidden');
				}
				
	 			var updateSlider = function() {
					obj.prepend('<'+o.element+'>' + $(o.element+':last', obj).html() + '</'+o.element+'>');
					$(o.element + ':first-child', obj).hide().animate({height: 'toggle'}, o.easing);
					$(o.element + ':last', obj).animate({height: 'toggle'}, o.easing);
					$(o.element + ':last', obj).remove();
	 			};
	 			
				window.setInterval(updateSlider, o.updateTime);
    	});
    	
    }
	})
})(jQuery);
