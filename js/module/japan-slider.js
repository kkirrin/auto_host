export const initJapanSlider = () => {
    const itemSlider = function () {
        const item = document.querySelector('.japan-item');
        let swiper;
        console.log('Подключился')
        if (item) {
            
            swiper = new Swiper(item, {
                loop: true,
                autoplay: {
                    delay: 3000
                },
                speed: 700,
                direction: 'horizontal',
                spaceBetween: 15,
                slidesPerView: 1,
                equalHeight: true,

                // If we need pagination
                navigation: {
                    nextEl: ".japan-next",
                    prevEl: ".japan-prev",
                },
                breakpoints: {
                    320: {
                      slidesPerView: 1,
                      spaceBetween: 15
                    },
                    480: {
                      slidesPerView: 2,
                      spaceBetween: 15
                    },
                    767: {
                      slidesPerView: 3,
                      spaceBetween: 15
                    }
                  }
            });
        }
    };

    itemSlider();
}