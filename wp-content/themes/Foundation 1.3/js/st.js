jQuery(document).ready(function ($) {
	$('#slider').flexslider({
		animation: "slide",
		slideshow:true,
		animationLoop: true,
		controlNav: true,
		touch: true,
		animationSpeed: 200,
		start: function(){
			$('.slide').show();
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