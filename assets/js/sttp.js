document.addEventListener("DOMContentLoaded", () => {
	const scrollToTop = document.getElementById("sc_btn");

	scrollToTop.addEventListener("click", () => {
		window.scrollTo({
			top: 0,
			behavior: "smooth",
		});
	});

	window.addEventListener("scroll", () => {
		if (window.scrollY > 200) {
			scrollToTop.classList.add("sttp_show");
		} else {
			scrollToTop.classList.remove("sttp_show");
		}
	});
});
