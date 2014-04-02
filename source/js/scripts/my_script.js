/*

My Javascript Files

*/
var curNav,
		offset = 1,
		animating = false,
		$ = jQuery;

(function( $ ) {
		"use strict";

		$(function() {
//Easying Animations
				$('a[href^="#"]').on('click',function (e) {
										e.preventDefault();

										var target = this.hash,
										$target = $(target);

										$('html, body').stop().animate({
												'scrollTop': $target.offset().top
										}, 500, 'swing', function () {
												window.location.hash = target;
										});
								});

//Sticky Plugin for sticky nav
								$(".section-nav__links").sticky({getWidthFrom: '.content'});

//Navigation highlighting

    var aChildren = $(".section-nav__links li").children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    for (var i=0; i < aChildren.length; i++) {
        var aChild = aChildren[i];
        var ahref = $(aChild).attr('href');
        aArray.push(ahref);
    } // this for loop fills the aArray with attribute href values

    $(window).scroll(function(){
        var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
        var windowHeight = $(window).height(); // get the height of the window
        var docHeight = $(document).height();

        for (var i=0; i < aArray.length; i++) {
            var theID = aArray[i];
            var divPos = $(theID).offset().top; // get the offset of the div from the top of page
            var divHeight = $(theID).height()-75; // get the height of the div in question
            if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                $("a[href='" + theID + "']").addClass("current");
            } else {
                $("a[href='" + theID + "']").removeClass("current");
            }
        }

        if(windowPos + windowHeight == docHeight) {
            if (!$(".section-nav__links li:last-child a").hasClass("nav-active")) {
                var navActiveCurrent = $(".nav-active").attr("href");
                $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                $(".section-nav__links li:last-child a").addClass("nav-active");
            }
        }
    });

		});

}(jQuery));
