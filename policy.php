<?php
/*
    Template Name: policy
*/

?>

<?php get_header(); ?>

        <main>

            <h1 class="visually-hidden">Скрытый заголовок</h1>
        
            <section class="h-auto md:pt-40 py-10 relative">
                <div class="absolute left-0 md:bottom-52 bottom-0 padding_auc">
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



                <div class="container z-0">
                    <h2 class="z-10 font-normal md:text-5xl text-xl uppercase">
                         <span class="">Политика конфиденциальности</span>
                    </h2>
                   
                  
                    <?php the_content(); ?>
                </div>

                
         
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