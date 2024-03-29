export const initFinishedSlider = () => {
    const itemSlider = function () {
        const item = document.querySelector('.finished-item');
        let swiper;
        // console.log('Подключился')
        if (item) {
            
            swiper = new Swiper(item, {
                loop: true,
                autoplay: {
                    delay: 3000
                },
                speed: 900,
                direction: 'horizontal',
                spaceBetween: 15,
                slidesPerView: 1,
                equalHeight: true,

                // If we need pagination
                navigation: {
                    nextEl: ".finished-next",
                    prevEl: ".finished-prev",
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