function smoothScrollToTop() {
    const targetScroll = 0;
    const startScroll = window.pageYOffset;
    const distance = targetScroll - startScroll;
    const duration = 500;

    const startTime = performance.now();

    function animation(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const easeInOutQuad = t => t < 0.5 ? 2 * t * t : 1 - Math.pow(-2 * t + 2, 2) / 2;
        const scrollY = startScroll + distance * easeInOutQuad(progress);
        window.scrollTo(0, scrollY);
        if (progress < 1) {
            window.requestAnimationFrame(animation);
        }
    }

    window.requestAnimationFrame(animation);
}

const scrollToTopButton = document.getElementById('scrollToTop');
scrollToTopButton.addEventListener('click', smoothScrollToTop);
