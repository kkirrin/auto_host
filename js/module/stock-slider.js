export const initStockSlider = () => {
    const itemSlider = function () {
        const item = document.querySelector('.stock-item');
        let swiper;
        console.log('Подключился')
        if (item) {
            
            swiper = new Swiper(item, {
                loop: true,
                autoplay: {
                    delay: 9000
                },
                speed: 900,
                direction: 'horizontal',
                spaceBetween: 15,
                slidesPerView: 1,
                equalHeight: true,

                // If we need pagination
                navigation: {
                    nextEl: ".stock-next",
                    prevEl: ".stock-prev",
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
    var elements = document.querySelectorAll('.widget-title.wpc-filter-title');

    // Массив с текстовыми значениями для каждого элемента
    var newTexts = ["Выберите марку", "Выберите модель", "Выберите вид топлива", "Привод", "Трансмиссию", "Год", "Пробег", "Цена", "Объем"];
    
    // Обходим каждый элемент и задаем ему новое значение
    for (var i = 0; i < elements.length; i++) {
      elements[i].textContent = newTexts[i];
    }


    itemSlider();
}