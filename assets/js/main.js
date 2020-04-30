(function () {
	//Login/Signup modal window - by CodyHouse.co
	function ModalSignin(element) {
		this.element = element;
		this.blocks = this.element.getElementsByClassName("js-signin-modal-block");
		this.switchers = this.element
			.getElementsByClassName("js-signin-modal-switcher")[0]
			.getElementsByTagName("a");
		this.triggers = document.getElementsByClassName("js-signin-modal-trigger");
		this.hidePassword = this.element.getElementsByClassName("js-hide-password");
		this.init();
	}

	ModalSignin.prototype.init = function () {
		var self = this;
		//open modal/switch form
		for (var i = 0; i < this.triggers.length; i++) {
			(function (i) {
				self.triggers[i].addEventListener("click", function (event) {
					if (event.target.hasAttribute("data-signin")) {
						event.preventDefault();
						self.showSigninForm(event.target.getAttribute("data-signin"));
					}
				});
			})(i);
		}

		//close modal
		this.element.addEventListener("click", function (event) {
			if (
				hasClass(event.target, "js-signin-modal") ||
				hasClass(event.target, "js-close")
			) {
				event.preventDefault();
				removeClass(self.element, "cd-signin-modal--is-visible");
			}
		});
		//close modal when clicking the esc keyboard button
		document.addEventListener("keydown", function (event) {
			event.which == "27" &&
				removeClass(self.element, "cd-signin-modal--is-visible");
		});

		//hide/show password
		for (var i = 0; i < this.hidePassword.length; i++) {
			(function (i) {
				self.hidePassword[i].addEventListener("click", function (event) {
					self.togglePassword(self.hidePassword[i]);
				});
			})(i);
		}

		//IMPORTANT - REMOVE THIS - it's just to show/hide error messages in the demo
		// this.blocks[0].getElementsByTagName('form')[0].addEventListener('submit', function(event){
		//   event.preventDefault();
		//   self.toggleError(document.getElementById('signin-email'), true);
		// });
		// this.blocks[1].getElementsByTagName('form')[0].addEventListener('submit', function(event){
		//   event.preventDefault();
		//   self.toggleError(document.getElementById('signup-username'), true);
		// });
	};

	ModalSignin.prototype.togglePassword = function (target) {
		var password = target.previousElementSibling;
		"password" == password.getAttribute("type")
			? password.setAttribute("type", "text")
			: password.setAttribute("type", "password");
		target.textContent = "Hide" == target.textContent ? "Show" : "Hide";
		putCursorAtEnd(password);
	};

	ModalSignin.prototype.showSigninForm = function (type) {
		console.log("signin modal triggered");
		// show modal if not visible
		!hasClass(this.element, "cd-signin-modal--is-visible") &&
			addClass(this.element, "cd-signin-modal--is-visible");
		// show selected form
		for (var i = 0; i < this.blocks.length; i++) {
			this.blocks[i].getAttribute("data-type") == type
				? addClass(this.blocks[i], "cd-signin-modal__block--is-selected")
				: removeClass(this.blocks[i], "cd-signin-modal__block--is-selected");
		}
		//update switcher appearance
		var switcherType = type == "signup" ? "signup" : "login";
		for (var i = 0; i < this.switchers.length; i++) {
			this.switchers[i].getAttribute("data-type") == switcherType
				? addClass(this.switchers[i], "cd-selected")
				: removeClass(this.switchers[i], "cd-selected");
		}
	};

	ModalSignin.prototype.toggleError = function (input, bool) {
		// used to show error messages in the form
		toggleClass(input, "cd-signin-modal__input--has-error", bool);
		toggleClass(
			input.nextElementSibling,
			"cd-signin-modal__error--is-visible",
			bool
		);
	};

	var signinModal = document.getElementsByClassName("js-signin-modal")[0];
	if (signinModal) {
		new ModalSignin(signinModal);
	}

	// toggle main navigation on mobile
	var mainNav = document.getElementsByClassName("js-main-nav")[0];
	if (mainNav) {
		mainNav.addEventListener("click", function (event) {
			if (hasClass(event.target, "js-main-nav")) {
				var navList = mainNav.getElementsByTagName("ul")[0];
				toggleClass(
					navList,
					"cd-main-nav__list--is-visible",
					!hasClass(navList, "cd-main-nav__list--is-visible")
				);
			}
		});
	}

	//class manipulations - needed if classList is not supported
	function hasClass(el, className) {
		if (el.classList) return el.classList.contains(className);
		else
			return !!el.className.match(
				new RegExp("(\\s|^)" + className + "(\\s|$)")
			);
	}
	function addClass(el, className) {
		var classList = className.split(" ");
		if (el.classList) el.classList.add(classList[0]);
		else if (!hasClass(el, classList[0])) el.className += " " + classList[0];
		if (classList.length > 1) addClass(el, classList.slice(1).join(" "));
	}
	function removeClass(el, className) {
		var classList = className.split(" ");
		if (el.classList) el.classList.remove(classList[0]);
		else if (hasClass(el, classList[0])) {
			var reg = new RegExp("(\\s|^)" + classList[0] + "(\\s|$)");
			el.className = el.className.replace(reg, " ");
		}
		if (classList.length > 1) removeClass(el, classList.slice(1).join(" "));
	}
	function toggleClass(el, className, bool) {
		if (bool) addClass(el, className);
		else removeClass(el, className);
	}

	//credits http://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
	function putCursorAtEnd(el) {
		if (el.setSelectionRange) {
			var len = el.value.length * 2;
			el.focus();
			el.setSelectionRange(len, len);
		} else {
			el.value = el.value;
		}
	}
})();

$(".slider-nav").slick({
	// slidesToShow: 3,
	// slidesToScroll: 1,
	// dots: false,
	// focusOnSelect: true,
	// autoplay: true,
	// speed: 10000,
	// autoplaySpeed: 1,
	// infinite: false,
	prevArrow:
		"<img class='a-left control-c prev slick-prev' src='assets/img/left.png'>",
	nextArrow:
		"<img class='a-right control-c next slick-next' src='assets/img/right.png'>",
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 1,
	// centerMode: true,
	autoplay: true,
	autoplaySpeed: 2000,
	pauseOnHover: true,
});

// Porfolio isotope and filter
var portfolioIsotope = $(".portfolio-container").isotope({
	itemSelector: ".portfolio-item",
	layoutMode: "fitRows",
});

$("#portfolio-flters li").on("click", function () {
	$("#portfolio-flters li").removeClass("filter-active");
	$(this).addClass("filter-active");

	portfolioIsotope.isotope({ filter: $(this).data("filter") });
});

//side menu
// function openNav() {
//   document.getElementById("sideMenu").style.width = "250px";
//   document.getElementById("main").style.marginLeft = "250px";
//   document.getElementById("header").style.marginLeft = "250px";
// }

// function closeNav() {
//   document.getElementById("sideMenu").style.width = "0";
//   document.getElementById("main").style.marginLeft= "0";
//   document.getElementById("header").style.marginLeft = "0";
// }

function toggleNav() {
	var element = document.getElementById("sideMenu");
	if (element.style.width == "250px") {
		element.style.width = "0px";
		document.getElementById("main").style.marginLeft = "0";
		document.getElementById("header").style.marginLeft = "0";
	} else {
		element.style.width = "250px";
		document.getElementById("main").style.marginLeft = "250px";
		document.getElementById("header").style.marginLeft = "250px";
	}
}

$(document).ready(function () {
	$(".third-button").on("click", function () {
		$(".animated-icon3").toggleClass("open");
	});
});

// products dynamic loading

function showProducts() {
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("txtHint").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "../php/getproducts.php", true);
	xhttp.send();
}

(function ($) {
	"use strict";

	/*--------------------------
  preloader
  ---------------------------- */
	$(window).on("load", function () {
		var pre_loader = $("#preloader");
		pre_loader.fadeOut("slow", function () {
			$(this).remove();
		});
	});

	// Toggle .header-scrolled class to #header when page is scrolled
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$("#header").addClass("header-scrolled");
		} else {
			$("#header").removeClass("header-scrolled");
		}
	});

	if ($(window).scrollTop() > 100) {
		$("#header").addClass("header-scrolled");
	}

	// Smooth scroll for the navigation menu and links with .scrollto classes
	$(document).on("click", ".nav-menu a, .mobile-nav a, .scrollto", function (
		e
	) {
		if (
			location.pathname.replace(/^\//, "") ==
				this.pathname.replace(/^\//, "") &&
			location.hostname == this.hostname
		) {
			e.preventDefault();
			var target = $(this.hash);
			if (target.length) {
				var scrollto = target.offset().top;
				var scrolled = 20;

				if ($("#header").length) {
					scrollto -= $("#header").outerHeight();

					if (!$("#header").hasClass("header-scrolled")) {
						scrollto += scrolled;
					}
				}

				if ($(this).attr("href") == "#header") {
					scrollto = 0;
				}

				$("html, body").animate(
					{
						scrollTop: scrollto,
					},
					1500,
					"easeInOutExpo"
				);

				if ($(this).parents(".nav-menu, .mobile-nav").length) {
					$(".nav-menu .active, .mobile-nav .active").removeClass("active");
					$(this).closest("li").addClass("active");
				}

				if ($("body").hasClass("mobile-nav-active")) {
					$("body").removeClass("mobile-nav-active");
					$(".mobile-nav-toggle i").toggleClass(
						"icofont-navigation-menu icofont-close"
					);
					$(".mobile-nav-overly").fadeOut();
				}
				return false;
			}
		}
	});

	// Mobile Navigation
	if ($(".nav-menu").length) {
		var $mobile_nav = $(".nav-menu").clone().prop({
			class: "mobile-nav d-lg-none",
		});
		$("body").append($mobile_nav);
		$("body").prepend(
			'<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>'
		);
		$("body").append('<div class="mobile-nav-overly"></div>');

		$(document).on("click", ".mobile-nav-toggle", function (e) {
			$("body").toggleClass("mobile-nav-active");
			$(".mobile-nav-toggle i").toggleClass(
				"icofont-navigation-menu icofont-close"
			);
			$(".mobile-nav-overly").toggle();
		});

		$(document).on("click", ".mobile-nav .drop-down > a", function (e) {
			e.preventDefault();
			$(this).next().slideToggle(300);
			$(this).parent().toggleClass("active");
		});

		$(document).click(function (e) {
			console.log("Click");

			var container = $(".mobile-nav, .mobile-nav-toggle");
			if (!container.is(e.target) && container.has(e.target).length === 0) {
				if ($("body").hasClass("mobile-nav-active")) {
					console.log("Active");
					$("body").removeClass("mobile-nav-active");
					$(".mobile-nav-toggle i").toggleClass(
						"icofont-navigation-menu icofont-close"
					);
					$(".mobile-nav-overly").fadeOut();
				}
			}
		});
	} else if ($(".mobile-nav, .mobile-nav-toggle").length) {
		$(".mobile-nav, .mobile-nav-toggle").hide();
	}

	/*----------------------------
   wow js active
  ------------------------------ */
	new WOW().init();

	$(".navbar-collapse a:not(.dropdown-toggle)").on("click", function () {
		$(".navbar-collapse.collapse").removeClass("in");
	});

	//---------------------------------------------
	//Nivo slider
	//---------------------------------------------
	$("#ensign-nivoslider").nivoSlider({
		effect: "random",
		slices: 15,
		boxCols: 12,
		boxRows: 8,
		animSpeed: 500,
		pauseTime: 5000,
		startSlide: 0,
		directionNav: true,
		controlNavThumbs: false,
		pauseOnHover: true,
		manualAdvance: false,
	});

	/*----------------------------
   Scrollspy js
  ------------------------------ */
	var Body = $("body");
	Body.scrollspy({
		target: ".navbar-collapse",
		offset: 80,
	});

	/*---------------------
    Venobox
  --------------------- */
	var veno_box = $(".venobox");
	veno_box.venobox();

	/*----------------------------
  Page Scroll
  ------------------------------ */
	var page_scroll = $("a.page-scroll");
	page_scroll.on("click", function (event) {
		var $anchor = $(this);
		$("html, body")
			.stop()
			.animate(
				{
					scrollTop: $($anchor.attr("href")).offset().top - 55,
				},
				1500,
				"easeInOutExpo"
			);
		event.preventDefault();
	});

	/*--------------------------
    Back to top button
  ---------------------------- */
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$(".back-to-top").fadeIn("slow");
		} else {
			$(".back-to-top").fadeOut("slow");
		}
	});

	$(".back-to-top").click(function () {
		$("html, body").animate(
			{
				scrollTop: 0,
			},
			1500,
			"easeInOutExpo"
		);
		return false;
	});

	/*----------------------------
   Parallax
  ------------------------------ */
	var well_lax = $(".wellcome-area");
	well_lax.parallax("50%", 0.4);
	var well_text = $(".wellcome-text");
	well_text.parallax("50%", 0.6);

	/*--------------------------
   collapse
  ---------------------------- */
	var panel_test = $(".panel-heading a");
	panel_test.on("click", function () {
		panel_test.removeClass("active");
		$(this).addClass("active");
	});

	/*---------------------
   Testimonial carousel
  ---------------------*/
	// var test_carousel = $('.testimonial-carousel');
	// test_carousel.owlCarousel({
	//   loop: true,
	//   nav: false,
	//   dots: true,
	//   autoplay: true,
	//   responsive: {
	//     0: {
	//       items: 1
	//     },
	//     768: {
	//       items: 1
	//     },
	//     1000: {
	//       items: 1
	//     }
	//   }
	// });
	$(".testimonial-carousel").owlCarousel({
		autoplay: true,
		dots: true,
		loop: true,
		responsive: {
			0: {
				items: 1,
			},
			768: {
				items: 1,
			},
			900: {
				items: 1,
			},
		},
	});
	/*----------------------------
   isotope active
  ------------------------------ */
	// portfolio start
	$(window).on("load", function () {
		var $container = $(".awesome-project-content");
		$container.isotope({
			filter: "*",
			animationOptions: {
				duration: 750,
				easing: "linear",
				queue: false,
			},
		});
		var pro_menu = $(".project-menu li a");
		pro_menu.on("click", function () {
			var pro_menu_active = $(".project-menu li a.active");
			pro_menu_active.removeClass("active");
			$(this).addClass("active");
			var selector = $(this).attr("data-filter");
			$container.isotope({
				filter: selector,
				animationOptions: {
					duration: 750,
					easing: "linear",
					queue: false,
				},
			});
			return false;
		});
	});
	//portfolio end

	/*---------------------
   Circular Bars - Knob
--------------------- */
	if (typeof $.fn.knob != "undefined") {
		var knob_tex = $(".knob");
		knob_tex.each(function () {
			var $this = $(this),
				knobVal = $this.attr("data-rel");

			$this.knob({
				draw: function () {
					$(this.i).val(this.cv + "%");
				},
			});

			$this.appear(
				function () {
					$({
						value: 0,
					}).animate(
						{
							value: knobVal,
						},
						{
							duration: 2000,
							easing: "swing",
							step: function () {
								$this.val(Math.ceil(this.value)).trigger("change");
							},
						}
					);
				},
				{
					accX: 0,
					accY: -150,
				}
			);
		});
	}
})(jQuery);
