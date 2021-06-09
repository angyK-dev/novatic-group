(function ($) {
	"use strict";

	$(function () {
		var header = $(".start-style");
		// console.log(header);
		$(window).scroll(function () {
			var scroll = $(window).scrollTop();

			if (scroll >= 10) {
				header.removeClass("start-style").addClass("scroll-on");
			} else {
				header.removeClass("scroll-on").addClass("start-style");
			}
		});
	});

	//Animation
	$(document).ready(function () {
		$("body.hero-anime").removeClass("hero-anime");
	});

	//Menu On Hover
	$("body").on("mouseenter mouseleave", ".nav-item", function (e) {
		console.log("Inside...");
		if ($(window).width() > 767) {
			var _d = $(e.target).closest(".nav-item");
			_d.addClass("show");
			setTimeout(function () {
				_d[_d.is(":hover") ? "addClass" : "removeClass"]("show");
			}, 1);
		}
	});

	//Switch light/dark
	$("#switch").on("click", function () {
		if ($("body").hasClass("dark")) {
			$("body").removeClass("dark");
			$("#switch").removeClass("switched");
		} else {
			$("body").addClass("dark");
			$("#switch").addClass("switched");
		}
	});
})(jQuery);

// console.log("Test");
const navLinks = document.querySelectorAll(".nova-link");

Object.keys(navLinks).forEach((key) => {
	// console.log(key, typeof navLinks[key], navLinks[key], navLinks[key].classList);
	navLinks[key].addEventListener("click", () => {
		// console.log(navLinks[key]);
		const _menuButton = document.querySelector("#menu-button");
		const _menu = document.querySelector("#navbarContent");
		// console.log(_menuButton.classList);
		_menuButton.classList.add("collapsed");
		_menu.classList.remove("show");
	});
});
