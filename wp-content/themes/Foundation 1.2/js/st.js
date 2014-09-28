jQuery(document).ready(function ($) {
	$('#slider').flexslider({
		animation: "fade",
		animationLoop: true,
		controlNav: false,
		touch: true,
		animationSpeed: 200,
		start: function(slider) {
			$('.slides li img').click(function(event){
				event.preventDefault();
				slider.flexAnimate(slider.getTarget("next"));
			});
			$('.slide').show();
		},
		before: function(){
			$('.flexslider .caption').removeClass('appear');
		},
		after: function(){
			$('.flexslider .caption').addClass('appear');
		}
	});
});

jQuery(document).ready(function ($) {
	$(' #artists > li ').each( function() { $(this).hoverdir(); } );
});

jQuery(document).ready(function ($) {
	$('.menu').click(function () {
		$('.navbar').toggleClass('show');
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