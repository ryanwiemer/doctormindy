/*

Add needed scripts here.

*/
var curNav,
		offset = 1,
		animating = false,
		$ = jQuery;

(function( $ ) {
		"use strict";

		$(function() {

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

								$(".section-nav__links").sticky({getWidthFrom: '.content'});

							//Add jQuery Waypoints here

							$('#undefined-sticky-wrapper ul li a').click(function(e){
								e.preventDefault();
								if(!animating) {
									var id = $(this).attr("href"),
										target = $(id).offset().top - offset;

									animating = true;

									$('html, body').animate({
										scrollTop: target
									}, 500, function() {
										setTimeout(function() {
											animating = false;
										}, 100);
									});

									$('.current').removeClass('current');
									$(this).addClass('current');
								}
							});

							$(window).scroll(function() {
								if(!animating) {
									var nextCurNav;

									$('#undefined-sticky-wrapper ul li a').each(function() {
										var thisNav = $(this),
											id = thisNav.attr("href");

										if($(id).offset().top - offset < $(window).scrollTop()) {
											nextCurNav = thisNav;
										}
									});

									if((typeof nextCurNav !== "undefined" && typeof curNav === "undefined") || (typeof nextCurNav !== "undefined" && curNav.attr('href') != nextCurNav.attr('href'))) {
										$('.current').removeClass('current');
										nextCurNav.addClass('current');
										curNav = nextCurNav;
									}
								}
							});

		});

}(jQuery));
