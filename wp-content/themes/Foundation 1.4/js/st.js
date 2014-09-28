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
	$('.hero').click(function () {
		$('#slideshow').toggleClass('show');
    });
});

jQuery(document).ready(function ($) {
	$('#slideshow #clicker').click(function () {
		$('#slideshow').toggleClass('show');
    });
});

jQuery(document).ready(function ($) {
	$('.press').click(function () {
		$('.sidebar').toggleClass('show');
		$('.sidebar ul').toggleClass('show');
		$('.press .title span').text($('.press .title span').text() === 'Hide' ? 'View' : 'Hide');
    });
});

jQuery(document).ready(function ($) {
	if (window.opera && window.opera.buildNumber) {
		$('#menu-item-20').css("width", "1.7%");
	}
});