var aboutSwiper = new Swiper('.about-swiper-container', {
    direction: 'horizontal',
    loop: false,
    slidesPerView: 1,
    spaceBetween: 20,
    
    // Hapus semua efek opacity/scale
    effect: 'slide', // Simple slide effect
    
    // Touch/swipe
    simulateTouch: true,
    touchRatio: 1,
    grabCursor: true,
    allowTouchMove: true,
    
    // Pagination
    pagination: {
        el: '.about-swiper-pagination',
        clickable: true,
    },
    
    // Navigation
    navigation: {
        nextEl: '.about-swiper-next',
        prevEl: '.about-swiper-prev',
    },
    
    // Breakpoints - NO OPACITY EFFECTS
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 15,
            centeredSlides: true,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 25,
            centeredSlides: false,
        }
    },
    
    // Event untuk memastikan tidak ada efek opacity
    on: {
        init: function () {
            // Force semua slide menjadi visible
            this.slides.forEach(slide => {
                slide.style.opacity = '1';
                slide.style.transform = 'scale(1)';
            });
        },
        slideChange: function () {
            // Pastikan tidak ada efek opacity saat slide berubah
            this.slides.forEach(slide => {
                slide.style.opacity = '1';
                slide.style.transform = 'scale(1)';
            });
        }
    }
});