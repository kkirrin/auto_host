<?php 
/*
    Template Name: contact
*/

?>

<?php get_header(); ?>

        <main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>
            <section class="md:py-60 py-32 bg-black -z-10" style="background-image: url('<?php echo get_template_directory_uri() . '/src/img/contact/bg.png' ; ?>');" >
                <div class="absolute right-0 md:bottom-52 bottom-0 padding_auc z-10">
                    <a href="https://auc.avtopotencial-dv.ru/">
                        <div class="flex flex-col items-center mb-2 bg-red rounded-md p-2">  
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/online.svg'; ?>" alt="">
                            <p class="text-white md:text-base text-xs">Онлайн-аукцион Японии</p>
                        </div>
                    </a>

                    <a href="#" class="hidden">
                        <div class="flex flex-col items-center bg-bg-gray bg-opacity-50 rounded-md p-2">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/chat.svg'; ?>" alt="">
                            <p class="text-white md:text-base text-xs">Онлайн-чат</p>
                        </div>
                    </a>
            
                </div>
                <div class="container relative">
                    
                    <!-- <div class="absolute md:-top-24 -top-0 right-0 -z-10">
                        <img src="<?php echo get_template_directory_uri() . '/src/img/contact/bg.png'; ?>" alt="">
                    </div> -->
                    <div>
                        <h2 class="text-xl lg:text-5xl text-white line uppercase relative">контакты</h2>
                    </div>
                    <div class="flex flex-wrap gap-10 py-10">
                        <div class="bg-bg-gray p-5 w-[360px]">
                            <img class="mr-2 mb-4" src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/phonw.svg'; ?>" alt="">
                            <a class="text-white" href="tel:79020607575">+79020607575, +79020605757</a>
                        </div>
                        
                        <div class="bg-bg-gray p-5 w-[360px]">
                            <img class="mr-2 mb-4" src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/email.svg'; ?>" alt="">
                            <a class="text-white" href="mailto:Avtopotencial-DV@mail.ru">Avtopotencial-DV@mail.ru</a>
                        </div>

                        <div class="bg-bg-gray p-5 w-[360px]">
                            <img class="mr-2 mb-4" src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/geo.svg'; ?>" alt="">
                            <p class="text-white">г.  Владивосток, ул. Тухачевского 35 , 2 этаж, т/ц Тухачевский</p>
                        </div>

                        <div class="bg-bg-gray p-5 w-[360px]">
                            <img class="mr-2 mb-4" src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/clock.svg'; ?>" alt="">
                            <p class="text-white">Пн-Пт 9:00-18:00</p>
                        </div>

                        <div class="bg-bg-gray p-5 w-[360px]">
                           <p class="pb-4 text-white">Мы в соц.сетях</p>
                           <ul class="mr-2 flex items-start justify-start gap-4">
                                <li class="pb-8 flex items-start justify-start gap-4">
                                    <a href="https://api.whatsapp.com/send?phone=79020607575"><img src="<?php echo get_template_directory_uri() .'/src/img/icons_nav/sap.svg'; ?>" alt=""></a>
                                    <a href="https://t.me/avtopotencialdv"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/tg.svg'; ?>" alt=""></a>
                                    <a href="https://vk.com/avtopotencial_dv"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/vk.svg'; ?>" alt=""></a>
                                    <a href="https://instagram.com/avtopotencial"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/inst.svg'; ?>" alt=""></a>
                                    <a href="https://www.youtube.com/channel/UCBKiXYVvi1ROscY2_ENwM-Q"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/youtube.svg'; ?>" alt=""></a>
                                </li>  
                            </ul>
                        </div>


                    </div>
                </div>
            </section>

            <section class="md:pt-40 pt-20 relative flex justify-center wow fadeInUp" data-wow-delay="0.4s"">
              <img class="bg-center w-full md:h-auto h-[250px]" src="<?php echo get_template_directory_uri() . '/src/img/map/map2.png'; ?>" alt="">
            </section>
        
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
                                <p class="text-white md:text-base text-sm">MAZDA CX-8</p>
                            </div>
                            
                            <div>
                                <p class="text-yellow font-bold md:text-xl text-sm">1 799 975 ₽</p>
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