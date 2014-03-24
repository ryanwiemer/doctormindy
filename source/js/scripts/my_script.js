/*

Add needed scripts here.

*/


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

							//Add waypoints code here

		});

}(jQuery));
