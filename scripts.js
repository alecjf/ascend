let firstPhone = document.getElementById("info"),
	stickyPhone = document.getElementById("sticky-phone"),
	hamburger = document.getElementById("hamburger"),
	footer = document.getElementById("footer"),
	bottomBound = firstPhone
		? firstPhone.getBoundingClientRect().bottom + window.scrollY
		: undefined;

window.onload = () => {
	document.getElementById("header-container").className = "down";
	document.getElementById("content").className = "shown";
	// if you don't delay displaying the footer,
	// 3 annyoing white dots display while Google Maps is loading
	footer && setTimeout(() => (footer.style.display = "flex"), 500);
	hamburger.className += " shown";
};

bottomBound &&
	window.addEventListener("scroll", () => {
		let isShown = stickyPhone.className === "shown",
			isPast = window.scrollY >= bottomBound;
		if (isPast && !isShown) {
			stickyPhone.className = "shown";
			hamburger.style.top = "40px";
		} else if (!isPast && isShown) {
			stickyPhone.className = "";
			hamburger.style.top = 0;
		}
	});
