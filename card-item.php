<?php
/*
    Template Name: card item
    Template Post Type: post
*/

?>

<?php get_header(); ?>
        <main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>
            <section class="md:py-40 py-32 wow fadeInUp" data-wow-delay="0.2s"">
                <div class="container">
                    <div class="absolute right-0 md:bottom-52 bottom-0">
                        <a href="https://auc.avtopotencial-dv.ru/">
                            <div class="flex flex-col items-center mb-2 bg-bg-gray bg-opacity-50 rounded-md p-2">  
                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/online.svg'; ?>" alt="">
                                <p class="text-white md:text-base text-xs">Аукцион-онлайн</p>
                            </div>
                        </a>

                        <a href="#" class="hidden">
                            <div class="flex flex-col items-center bg-bg-gray bg-opacity-50 rounded-md p-2">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/chat.svg'; ?>" alt="">
                                <p class="text-white md:text-base text-xs">Онлайн-чат</p>
                            </div>
                        </a>
                        
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <section class="section product__item">
                            <div class="container">
                              <div class="section__wrapper">
                                <div class="card card--product">
                                    <div class="slider card__slider relative">
                                        <div class="swiper slider__slider">
                                            <div class="swiper-wrapper">
                                               
                                            <?php
                                                $photos = get_field('галерея');
                                                if ($photos) {
                                                    foreach ($photos as $photo) {
                                                        echo '<div class="swiper-slide">';
                                                        echo '<img class="md:w-[650px] md:h-[500px] w-[335px] h-[290px]" src="' . esc_url($photo['url']) . '" alt="">';
                                                        echo '</div>';
                                                    }
                                                } else {
                                                    echo 'No photos found.'; 
                                                }
                                            ?>
                                            </div>
                                       
                                        </div>

                                        <div class="swiper slider__thumb md:pt-10 pt-5 md:w-full w-80 md:relative absolute">
                                            <div class="swiper-wrapper">
                                            <?php
                                                $photos = get_field('галерея');
                                                if ($photos) {
                                                    foreach ($photos as $photo) {
                                                        echo '<div class="swiper-slide">';
                                                        echo '<img class="md:w-24 md:h-24 w-[60px] h-[60px]" src="' . esc_url($photo['url']) . '" alt="">';
                                                        echo '</div>';
                                                    }
                                                } else {
                                                    echo 'No photos found.'; 
                                                }
                                            ?>
                                              
                                            </div>
                                        </div>
                                    </div>
                              </div>
                            </div>
                          </section>

                        <div class="w-full md:pt-0 pt-20">
                            <h3 class="font-bold md:text-4xl text-xl">
                                <?php the_field('marka_name'); ?>
                            </h3>
                            <div class="flex justify-between items-center pt-10">
                                <ul>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Бренд
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Год выпуска
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Тип кузова
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Тип двигателя
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Объем двигателя
                                    </li>
                                    <!-- <li class="md:text-base text-xs font-semibold pb-5">
                                        Аукцион
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Лот
                                    </li> -->
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Цена
                                    </li>
                                </ul>
                                <ul>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        <?php the_field('model_name'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        <?php the_field('year'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        <?php the_field('тип_кузова'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        <?php the_field('тип_двигателя'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        <?php the_field('value'); ?> л
                                    </li>
                                    <!-- <li class="md:text-base text-xs font-semibold pb-5">
                                        <?php the_field('аукцион'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        <?php the_field('лот'); ?>
                                    </li> -->
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        <?php the_field('price'); ?>  ₽
                                    </li>
                                </ul>
                               
                                
                            </div>
                            <div class="flex md:flex-row flex-col items-center justify-between gap-5">
                                <div class="flex flex-1 gap-5 items-center ">
                                    <p class="font-bold md:text-2xl text-lg">
                                        <?php the_field('price'); ?>₽
                                    </p>
                                    <p class="text-gray md:text-base text-xs">
                                        *Цена указана в РФ с ПТС
                                    </p>
                                </div>
                                <div>
                                    <a class="bg-red up py-2 px-10 text-white rounded-lg popup-link"
                                    href="#popup1">Заказать авто</a>
                                </div>
                                
                                
                            </div>
                        </div>
                   </div>
                </div>
          
            </section>
            

            <!-- <section class=" wow fadeInUp" data-wow-delay="0.4s"">
                <div class="container relative pb-10">
                    <h2 class="text-start text-black z-10 font-normal md:text-4xl text-xl uppercase pb-10">
                        Расшифровка цены
                    </h2>
                    <img class="absolute bottom-0 -right-52 -z-0 md:block hidden" src="<?php echo get_template_directory_uri() . '/src/img/card-item/three2.png'; ?>" alt="">
                    <img class="absolute bottom-44 -right-52 -z-10 md:block hidden" src="<?php echo get_template_directory_uri() . '/src/img/card-item/key.png'; ?>" alt="">
                    <img class="absolute top-40 -z-10 md:hidden block" src="<?php echo get_template_directory_uri() . '/src/img/card-item/three2.png'; ?>" alt="">
                    <img class="absolute top-40 bottom-44 -right-0 -z-20 md:hidden block max-w-xs" src="<?php echo get_template_directory_uri() . '/src/img/card-item/key.png'; ?>" alt="">

                    <div class="flex gap-10 overflow-hidden md:flex-nowrap flex-wrap">
                        
                        <div class=" card__list md:p-10 p-5 md:order-1 order-2">
                            <form>          
                                <div class="bg-yellow p-2 max-w-max mb-3">
                                    ЛОТ № 12406
                                </div>
                                <div>
                                    <p class="font-bold md:text-2xl text-base pb-3">
                                        Toyota PRIUS 2019
                                    </p>
        
                                    <div class="flex flex-col pb-5 md:text-base text-xs">
                                        <p>Аукцион: TAA Yokohama</p>
                                        <p>Дата: 30-09-2023</p>
                                    </div>
        

                                    <div class="md:text-base text-xs pb-5">
                                        Окончательная стоимость автомобиля во Владивостоке с ПТС
                                        <p id="sum" class="font-bold md:text-base text-xs pt-4">
                                            
                                        </p>
         
                                    </div>
        
                                    <div class="md:text-base text-xs pb-5">
                                        Стоимость авто на аукционе: ("пришло" в долларах -> переведено в рубли)
                                        <p class="font-bold md:text-base text-xs pt-4">
                                            <input class="dollar__price" placeholder="..." value="2">
                                        </p>
                                    </div>
        
                                    <div class="md:text-base text-xs pb-5">
                                        Доставка авто до Владивостока ("пришло" в долларах -> переведено в рубли)
                                        <p class="font-bold md:text-base text-xs pt-4">
                                            <input class="dollar__price" placeholder="..." value="10">
                                        </p>
                                    </div>

                                    <div class="md:text-base text-xs">
                                        Фиксированные расходы по Японии и до Владивостока (любой аукцион покупки, любой порт отправки) ("пришло" в долларах -> переведено в рубли):
                                        <ul class="list-disc md:p-5 p-3 md:text-base text-xs">
                                            <li>
                                                Комиссии аукциона -  <input class="dollar__price" value="5">
                                            </li>
                                            <li>
                                                Комиссии аукциона -  <input class="dollar__price" value="5">
                                            </li>
                                            <li>
                                                Комиссии аукциона -  <input class="dollar__price" value="5">
                                            </li>
                                            <li>
                                                Комиссии аукциона -  <input class="dollar__price" value="5">
                                            </li>
                                            <li>
                                                Комиссии аукциона -  <input class="dollar__price" value="5">
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="md:text-base text-xs pb-5">
                                        Расходы по России:
                                        <p class="md:text-base text-xs pt-4">
                                            <span class="font-bold"><input id="priceСustoms" class="w-16" placeholder="..."></span> 
                                        </p>

                                        <ul class="list-disc md:p-5 p-3">
                                            <li>
                                                Выгрузка, хранение на СВХ первые 5 суток, таможенное оформление, СБКТС, услуга брокера, вывоз из порта до стоянки компании, фотоотчёт: <input value="10" class="partPayment" >
                                            </li>
                                            <li>
                                                Расходы, связанные с лабораторией: <input value="10" class="partPayment" >
                                            </li>
                                            <li>
                                                Комиссия Япония-Трейд: <input value="10" class="partPayment" > 
                                            </li>
                                        </ul>

                                    </div>

                                       
                                
                                    <div class="md:text-base text-xs pb-5">
                                        Таможенные платежи:
                                        <p class="md:text-base text-xs pt-4">
                                            <span class="font-bold"> <input type="number" id="priceСustoms" class="w-16" placeholder="..."></span>
                                        </p>
                                        <ul class="list-disc md:p-5 p-3">
                                            <li>
                                                Сборы за таможенное оформление: <input class="partCustoms" value="10">
                                            </li>
                                            <li>
                                                Пошлина (на физ.лицо):  <input class="partCustoms" value="10">
                                            </li>
                                        </ul>
                                    </div>
     
                                    <div class="md:text-base text-xs pb-5">
                                        Утилизационный сбор:
                                        <p class="md:text-base text-xs pt-4">
                                            <span class="font-bold">
                                                <input class="price w-16" placeholder="..."></span>
                                        </p>
                                    </div>

                                    <div class="bg-red py-5 px-10 text-white rounded-lg max-w-xs ">
                                        Итого во Владивостоке с ПТС:
                                        <p id="sum" class="font-bold md:text-xl text-base pt-4"></p>
                                    
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class= "py-10 md: max-w-xs -z-10 md:order-2 order-1">
                            <div class="bg-black p-5 rounded">
                                <p class="text-white font-medium md:text-xl text-base">Курс валют ЦБ на сегодня:</p>
                                <div class="flex items-center justify-between p-5" >
                                    <ul>
                                        <li class=" text-white text-base pb-3">
                                            JPY/RUB:
                                        </li> 
                                        <li class=" text-white text-base pb-3">
                                            USD/RUB:
                                        </li> 
                                        <li class=" text-white text-base pb-3">
                                            EUR/RUB:
                                        </li> 
                                    </ul>
                                    <a class="text-gray text-[10px] z-100" href="https://www.cbr-xml-daily.ru/">Курсы валют, API</a>
    
                                    <ul class="currency">
                                        <li class="exchange-rate-jpy text-yellow text-base font-bold pb-3">
                                            
                                        </li> 
                                        <li class="exchange-rate-usd text-yellow text-base font-bold pb-3">
                                            
                                        </li> 
                                        <li class="exchange-rate-eur text-yellow text-base font-bold pb-3">
                                            
                                        </li> 
                                   
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                          
                    </div>
                </div>
            </section> -->


            <section id="popup1" class="popup">
                <div class="popup__body">
                    <div class="popup__content">
                        <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                                <path d="M4 1.45508L19.9099 17.365" stroke="#FCBC40"/>
                                <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#FCBC40"/>
                                </svg>
                        </button>
                        <h2 class="text-start text-white z-10 font-normal md:text-4xl text-xl uppercase pb-10 ">Заказать авто</h2>
                        <div class="flex items-center justify-between pb-10">
                            <div>
                                <p class="text-white md:text-base text-sm"><?php the_field('marka_name'); ?> <?php the_field('model_name'); ?></p>
                            </div>
                            
                            <div>
                                <p class="text-yellow font-bold md:text-xl text-sm"><?php the_field("price"); ?> ₽</p>
                            </div>
                        </div>
        
                        <div class="form-wrapper">
                            <form action="#" id="form" class="form validate-form flex-col">
                                <div class="form__item">
                                    <input id="formName" type="text" name="name" class="form__input _req w-full"
                                        placeholder="Ваше имя">
                                </div>
        
                                <div class="form__item">
                                    <input id="formPhone" type="tel" name="phone" class="form__input _req w-full"
                                        placeholder="Ваш телефон">
                                </div>
        
                                <button type="submit" class="form__button button bg-red up py-2 px-10 w-full text-white rounded-lg md:text-base text-sm">Заказать авто</button>
                            </form>
                        </div>
                        <p class="form-section__descriptions w-full">Нажимая кнопку “Получить консультацию” я даю согласие на <a
                                class="underline" href="#" target="_blank" rel="noopener noreferrer">обработку персональных
                                данных</a></p>
                    </div>
                </div>
            </section>
      
        
        </main>

<?php get_footer(); ?>