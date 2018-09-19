$(document).ready(function() {

	var nav = $("#navigation");
	var navTop = nav.offset().top;

	$(window).on("scroll", stickyNavigation);

	function stickyNavigation() {

		const body = $("body");

		if($(window).scrollTop() >= navTop) {
			body.css("padding-top", nav.outerHeight() + "px");
			body.addClass("fixedNav");
		}
		else {
			body.css("padding-top", 0);
			body.removeClass("fixedNav");
		}

	}

	$('.navbar-collapse ul li a:not(.dropdown-toggler)').click(function() {
	    $('.navbar-toggler:visible').click();
	});

	var statsTopOffset = $(".statsSection").offset().top;
	var countUpFinished = false;
	$(window).scroll(function() {

		if(!countUpFinished && window.pageYOffset > statsTopOffset - $(window).height() + 200) {
			$(".counter").each(function() {
				var element = $(this);
				var endVal = parseInt(element.text());

				element.countup(endVal);
			});
			
			countUpFinished = true;
		}

	});

	$('.scroll-top').click(function(){
	    $("html, body").animate({ scrollTop: 0 }, 600);
	    return false;
	});


});




window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop >= 1000 || document.documentElement.scrollTop >= 1000) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
