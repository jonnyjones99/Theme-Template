(function ($) {
	// ------------------------------------------------------------------------------------------------------------------------------------------------\\
	// 														Mobile menu
	// ------------------------------------------------------------------------------------------------------------------------------------------------\\

	const burger = document.querySelector(".burger-icon");
	const navMenu = document.querySelector(".mobile__nav");
	const body = document.querySelector("body");
	const header = document.querySelector(".header");

	burger.addEventListener("click", function () {
		// Would be cleaner to use the attributes instead of adding classes
		burger.classList.toggle("burger-icon--active");
		navMenu.classList.toggle("mobile__nav--active");
		body.classList.toggle("body--noscroll");
		header.classList.toggle("header--active");

		// Little bit of accessibility
		navMenu.hasAttribute("data-visible")
			? burger.setAttribute("aria-expanded", false)
			: burger.setAttribute("aria-expanded", true);
		navMenu.toggleAttribute("data-visible");
	});

	// ------------------------------------------------------------------------------------------------------------------------------------------------\\
	// 														Accordion code
	// ------------------------------------------------------------------------------------------------------------------------------------------------\\
	// $(".accordion__title").click(function () {
	// 	$(this).siblings(".accordion__content").slideToggle("fast");
	// 	$(this)
	// 		.find(".accordion__title-icon")
	// 		.toggleClass("accordion__title-icon--rotate");
	// });

	// ------------------------------------------------------------------------------------------------------------------------------------------------\\
	// 														Check if mobile
	// ------------------------------------------------------------------------------------------------------------------------------------------------\\
	function isMobile() {
		return window.innerWidth >= 768;
	}

	// ------------------------------------------------------------------------------------------------------------------------------------------------\\
	// 														 Another function:
	// ------------------------------------------------------------------------------------------------------------------------------------------------\\
})(jQuery);
