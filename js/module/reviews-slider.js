export const initReviewsSlider = () => {
    const itemSlider = function () {
        const item = document.querySelector('.review-item');
        let swiper;
        console.log('Подключился')
        if (item) {
            
            swiper = new Swiper(item, {
                loop: true,
                // autoplay: {
                //     delay: 3000
                // },
                speed: 1000,
                direction: 'horizontal',
                spaceBetween: 5,
                slidesPerView: 3,
                equalHeight: true,

                // If we need pagination
                navigation: {
                    nextEl: ".review-next",
                    prevEl: ".review-prev",
                },
                breakpoints: {
                    320: {
                      slidesPerView: 1,
                      spaceBetween: 15
                    },
                    600: {
                      slidesPerView: 2,
                      spaceBetween: 15
                    },
                    767: {
                      slidesPerView: 2,
                      spaceBetween: 15
                    },
                    1200: {
                      slidesPerView: 3,
                      spaceBetween:10
                    }
                  }
            });
        }
    };

    itemSlider();
}