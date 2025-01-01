document.addEventListener("DOMContentLoaded", () => {
	const scrollToTop = document.getElementById("sc_btn");

	scrollToTop.addEventListener("click", () => {
		window.scrollTo({
			top: 0,
			behavior: "smooth",
		});
	});

	window.addEventListener("scroll", () => {
		if (window.scrollY > 400) {
			scrollToTop.classList.add("show");
		} else {
			scrollToTop.classList.remove("show");
		}
	});
});
