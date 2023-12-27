<?php
/*
    Template Name: policy
*/

?>

<?php get_header(); ?>

        <main>

            <h1 class="visually-hidden">Скрытый заголовок</h1>
        
            <section class="bg-black h-auto md:pt-40 py-10 relative wow fadeInUp" data-wow-delay="0.2s"">
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
                
                <div class="container z-0">
                    <h2 class="text-center text-white z-10 font-normal md:text-5xl text-xl uppercase">
                         <span class="text-yellow">Доставка</span> автомобилей
                    </h2>
                    <div class="z-10">
                        <p class="md:text-xl text-sm text-white font-bold py-10">
                            Мы оказываем полный перечень услуг для наших клиентов. Осуществляем доставку приобретённой техники из пункта отправки в порт РФ. По предварительной договорённости осуществляем доставку в любую точку России, быстро и надёжно.
                        </p>
                    </div>
                    <img class="-mt-10" src="<?php echo get_template_directory_uri() . '/src/img/contact/bg2.png'; ?>" alt="">
                    <img class="absolute top-64 right-0" src="<?php echo get_template_directory_uri() . '/src/img/contact/order.png'; ?>" alt="">
                </div>
            </section>
            <section class="finished-swiper py-20 wow fadeInUp" data-wow-delay="0.4s"">
                <div class="container">
                    
                    <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative pb-10">О доставке </h2>
                        <p class="pb-5 font-medium md:text-xl text-sm">
                            Доставка приобретённой техники из Японии до порта г. Владивосток осуществляется паромом и контролируется на каждом её этапе. Вы можете не переживать за сохранность вашего груза. В среднем, срок доставки составляет 3-4 недели.
                        </p>
                        <p class="pb-5 font-medium md:text-xl text-sm">
                            При необходимости, мы поможем вам с доставкой по России. Для этого просто предупредите нас заранее и сообщите населённый пункт, куда необходимо будет доставить технику, и наши специалисты рассчитают вам стоимость доставки. Мы будем сопровождать вашу технику с момента вашего обращения к нам до получения её вами в указанном населённом пункте.
                        </p>
                </div>
            </section>
            <section class="finished-swiper pb-10 wow fadeInUp" data-wow-delay="0.5s"">
                
                <div class="container">
                    
                    <div class="flex items-center justify-between">
                        <div>
                           <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative">Похожие автомобили </h2>
                       </div>
   
                       <div class="swiper-pagination"></div>
                       <div class="md:flex flex-nowrap gap-5 hidden">
                        <button
                            class="up finished-prev rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_prev.svg'; ?>" alt="влево">
                        </button>
                        <button
                            class="up finished-next rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_next.svg'; ?>" alt="вправо" >
                        </button>
                    </div>
                       
                   </div>
                    <div class="finished-wrapper overflow-hidden">
                        <div class="finished-item">
                            <div class="swiper-wrapper">
                                <div class="p-2 swiper-slide">
                                    <a href="#" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                        <img class="" src="<?php echo get_template_directory_uri() . '/src/img/review/image_4.png'; ?>" width="440" height="380" alt="вправо" >
                                    </a>
                                    <div class="flex flex-col items-center md:items-start">
                                        <div class="font-bold pb-5">BMW 7-series 730 </div>
                                        
                                        <div class="flex flex-col md:flex-row pb-5">
                                            <div class="flex items-center">
                                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/Frame.svg'; ?>" alt="">
                                                <p class="pl-3 pr-5 text-gray">12.02.2023</p>
                                            </div>
        
                                            <div class="flex items-center">
                                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/icon.svg'; ?>" alt="">
                                                <p class="pl-3 pr-5 text-black font-bold">2 570 000 ₽</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                <div class="p-2 swiper-slide">
                                    <a href="#" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                        <img class="" src="<?php echo get_template_directory_uri() . '/src/img/review/image_4.png'; ?>" width="440" height="380" alt="вправо" >
                                    </a>
                                    <div class="flex flex-col items-center md:items-start">
                                        <div class="font-bold pb-5">BMW 7-series 730 </div>
                                        
                                        <div class="flex flex-col md:flex-row pb-5">
                                            <div class="flex items-center">
                                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/Frame.svg'; ?>" alt="">
                                                <p class="pl-3 pr-5 text-gray">12.02.2023</p>
                                            </div>
        
                                            <div class="flex items-center">
                                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/icon.svg'; ?>" alt="">
                                                <p class="pl-3 pr-5 text-black font-bold">2 570 000 ₽</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                <div class="p-2 swiper-slide">
                                    <a href="#" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                        <img class="" src="<?php echo get_template_directory_uri() . '/src/img/review/image_4.png'; ?>" width="440" height="380" alt="вправо" >
                                    </a>
                                    <div class="flex flex-col items-center md:items-start">
                                        <div class="font-bold pb-5">BMW 7-series 730 </div>
                                        
                                        <div class="flex flex-col md:flex-row pb-5">
                                            <div class="flex items-center">
                                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/Frame.svg'; ?>" alt="">
                                                <p class="pl-3 pr-5 text-gray">12.02.2023</p>
                                            </div>
        
                                            <div class="flex items-center">
                                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/icon.svg'; ?>" alt="">
                                                <p class="pl-3 pr-5 text-black font-bold">2 570 000 ₽</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>       

                    <div class="md:hidden flex-nowrap gap-5 flex items-center justify-center">
                        <button
                            class="up finished-prev rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_prev.svg'; ?>" alt="влево">
                        </button>
                        <button
                            class="up finished-next rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_next.svg'; ?>" alt="вправо" >
                        </button>
                    </div>


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