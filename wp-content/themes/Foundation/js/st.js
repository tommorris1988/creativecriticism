jQuery(document).ready(function ($) {
	$('#slider').flexslider({
		animation: "fade",
		slideshow:false,
		animationLoop: true,
		controlNav: false,
		touch: true,
		animationSpeed: 200,
		smoothHeight:true,
		start: function(slider) {
			$('.slides li img').click(function(event){
				event.preventDefault();
				slider.flexAnimate(slider.getTarget("next"));
			});
			$('.slide').show();
			$('.total-slides').text(slider.count);
		},
		after: function(slider) {
        $('.current-slide').text(slider.currentSlide)+1;
      	}
	});
});

jQuery(document).ready(function ($) {
	$(window).scroll(function(){
	var $wrapHeight = $('#navigation').outerHeight()
	if(($(window).scrollTop() > $wrapHeight)){
	   $("#topb").addClass('show');
	}
	if(($(window).scrollTop() < $wrapHeight)){
	   $("#topb").removeClass('show');
	}
	});
	$('#topb').click(function () {
		$("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
	});
});

jQuery(document).ready(function($){
	jQuery('#container .info').containedStickyScroll();
});

(function( $ ){

  $.fn.containedStickyScroll = function( options ) {
  
	var defaults = {  
		oSelector : this.selector,
		unstick : true,
		easing: 'linear',
		duration: 0,
		queue: false,
		closeChar: '',
		closeTop: 0,
		closeRight: 0  
	}  
                  
	var options =  $.extend(defaults, options);

	if(options.unstick == true){  
		this.css('position','relative');
		this.append('<a class="scrollFixIt">' + options.closeChar + '</a>');
		jQuery(options.oSelector + ' .scrollFixIt').css('position','absolute');
		jQuery(options.oSelector + ' .scrollFixIt').css('top',options.closeTop + 'px');
		jQuery(options.oSelector + ' .scrollFixIt').css('right',options.closeTop + 'px');
		jQuery(options.oSelector + ' .scrollFixIt').css('cursor','pointer');
		jQuery(options.oSelector + ' .scrollFixIt').click(function() {
			getObject = options.oSelector;
			jQuery(getObject).animate({ top: "0px" },
				{ queue: options.queue, easing: options.easing, duration: options.duration });
			jQuery(window).unbind();
			jQuery('.scrollFixIt').remove();
		});
	} 
  	jQuery(window).scroll(function() {
  		getObject = options.oSelector;
        if(jQuery(window).scrollTop() > (jQuery(getObject).parent().offset().top - 90) &&
           (jQuery(getObject).parent().height() + jQuery(getObject).parent().position().top - 110) > (jQuery(window).scrollTop() + jQuery(getObject).height())){
        	jQuery(getObject).animate({ top: (jQuery(window).scrollTop() - jQuery(getObject).parent().offset().top) + 90 + "px" }, 
            { queue: options.queue, easing: options.easing, duration: options.duration });
        }
        else if(jQuery(window).scrollTop() < (jQuery(getObject).parent().offset().top)){
        	jQuery(getObject).animate({ top: "0px" },
            { queue: options.queue, easing: options.easing, duration: options.duration });
        }
	});

  };
})( jQuery );