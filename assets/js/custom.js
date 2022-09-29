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
		$(window).scroll(function () {
			if ($(window).scrollTop() >= 50) {
				$(".site-header").removeClass("header").addClass("bg");
			} else {
				$(".site-header").removeClass("bg").addClass("header");
			}
		});
	});
});

jQuery(window).load(function () {
	AOS.refreshHard();
});
