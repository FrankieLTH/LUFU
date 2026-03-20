/**
 * Phố Xinh - Main JavaScript interactions
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Sticky Header
    const header = document.getElementById('header');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }
    });

    // 2. Simple Hero Slider logic (mocking for single slide right now, extensible)
    const nextBtn = document.querySelector('.next-btn');
    const prevBtn = document.querySelector('.prev-btn');
    const dots = document.querySelectorAll('.slider-dots .dot');

    if(nextBtn && prevBtn) {
        let currentSlide = 0;
        
        // Mock function to show movement
        const slideChange = (direction) => {
            // Currently only one slide is built into HTML, so we just add a small visual animation for effect
            const title = document.querySelector('.slide-title');
            title.style.animation = 'none';
            title.offsetHeight; /* trigger reflow */
            title.style.animation = null; 

            // Highlight dots
            dots.forEach(d => d.classList.remove('active'));
            if(direction === 'next') {
                currentSlide = (currentSlide + 1) % dots.length;
            } else {
                currentSlide = (currentSlide - 1 + dots.length) % dots.length;
            }
            dots[currentSlide].classList.add('active');
        };

        nextBtn.addEventListener('click', () => slideChange('next'));
        prevBtn.addEventListener('click', () => slideChange('prev'));
        
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                dots.forEach(d => d.classList.remove('active'));
                dot.classList.add('active');
                currentSlide = index;
            });
        });
    }
});
