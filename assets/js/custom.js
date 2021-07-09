//Début code jQuery
jQuery(document).ready(function ($) {
	// Initialisation Animate On Scroll
	AOS.init();

	// Ajout d'attributs AOS sur certaines classes
	$(".fade-up").attr("data-aos", "fade-up");
	$(".fade-right").attr("data-aos", "fade-right");
	$(".fade-left").attr("data-aos", "fade-left");

	// Apparition/disparition des menus
	$(".toggle-formation").click(function () {
		if ($("#site-navigation").hasClass("site-open")) {
			$("#site-navigation").removeClass("site-open");
			$("#site-navigation").addClass("site-close");
		}
		$("#formation-navigation").addClass("formation-open");
		$("#formation-navigation").removeClass("formation-close");
	});
	$(".toggle-site").click(function () {
		if ($("#formation-navigation").hasClass("formation-open")) {
			$("#formation-navigation").removeClass("formation-open");
			$("#formation-navigation").addClass("formation-close");
		}
		$("#site-navigation").addClass("site-open");
		$("#site-navigation").removeClass("site-close");
	});

	$(".fa-times").click(function () {
		if ($("#site-navigation").hasClass("site-open")) {
			$("#site-navigation").removeClass("site-open");
			$("#site-navigation").addClass("site-close");
		}
	});
	$(".fa-times").click(function () {
		if ($("#formation-navigation").hasClass("formation-open")) {
			$("#formation-navigation").removeClass("formation-open");
			$("#formation-navigation").addClass("formation-close");
		}
	});
	$("#menu-item-87").click(function () {
		if ($("#site-navigation").hasClass("site-open")) {
			$("#site-navigation").removeClass("site-open");
			$("#site-navigation").addClass("site-close");
		}
	});

	// Ajout d'une couleur de fond sur header au Scroll
	$(function () {
		var header = $(".site-header");
		$(window).scroll(function () {
			var scroll = $(window).scrollTop();

			if (scroll >= 50) {
				header.removeClass("header").addClass("bg");
			} else {
				header.removeClass("bg").addClass("header");
			}
		});
	});
});

// The function actually applying the offset
function offsetAnchor() {
	if (location.hash.length !== 0) {
		window.scrollTo(window.scrollX, window.scrollY - 100);
	}
}

// Captures click events of all a elements with href starting with #
jQuery(document).on("click", 'a[href^="#"]', function (event) {
	// Click events are captured before hashchanges. Timeout
	// causes offsetAnchor to be called after the page jump.
	window.setTimeout(function () {
		offsetAnchor();
	}, 0);
});

// Set the offset when entering page with hash present in the url
window.setTimeout(offsetAnchor, 0);

jQuery(window).load(function () {
	AOS.refreshHard();
});
