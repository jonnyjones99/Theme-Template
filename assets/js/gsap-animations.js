gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

// let smoother = ScrollSmoother.create({
// 	wrapper: "#smooth-wrapper",
// 	content: "#smooth-content",

// 	smooth: 0.2, // how long (in seconds) it takes to "catch up" to the native scroll position
// 	effects: true, // looks for data-speed and data-lag attributes on elements
// 	smoothTouch: 0.1, // much shorter smoothing time on touch devices (default is NO smoothing on touch devices)
// });

ScrollTrigger.matchMedia({
	// Tablet and up
	"(min-width: 768px)": function () {
		// setup animations and ScrollTriggers for screens 960px wide or greater...
		// These ScrollTriggers will be reverted/killed when the media query doesn't match anymore.
	},

	"(min-width: 1024px)": function () {
		// Landscape tablet and up
	},

	// Desktop and up
	"(mix-width: 1280px)": function () {
		// The ScrollTriggers created inside these functions are segregated and get
		// reverted/killed when the media query doesn't match anymore.
	},

	// all
	all: function () {
		// ScrollTriggers created here aren't associated with a particular media query,
		// so they persist.
	},
});
