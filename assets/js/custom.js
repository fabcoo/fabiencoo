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

jQuery(window).load(function ($) {
	AOS.refreshHard();

	// Ajout d'un smooth scrolling avec arrêt du scroll à la barre de header
	$("a[href*='#']").on("click", function () {
		var page = $(this).attr("href");
		var speed = 250;
		$("html, body").animate(
			{
				scrollTop: $(page).offset().top - 111,
			},
			speed
		);
		return false;
	});
});
