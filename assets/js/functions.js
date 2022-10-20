(function ($) {
	// ------------------------------------------------------------------------------------------------------------------------------------------------\\
	// 														Hide burger menu on scroll
	// ------------------------------------------------------------------------------------------------------------------------------------------------\\
	function hideMenu() {
		let menuOpen = document.querySelector(".toggler").checked;
		if (menuOpen == true) {
			document.querySelector(".toggler").checked = false;
		}
	}
	window.addEventListener("scroll", hideMenu);

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
