<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Автопотенциал</title>
    
    <?php wp_head(); ?>
    
</head>

<body>
    
    <div class="wrapper">
        <header class="z-10 w-full md-28 transition-colors bg-black fixed pt-4">
            <div class="header container md:gap-5 items-center justify-between flex">

                <div class="flex items-center justify-center">
                        <!-- Меню кнопка -->
                        <div class="btn__menu up rounded-xl shadow-md shadow-main-black md:flex hidden">
                            <button class="catalog flex up items-center gap-2 bg-red py-1 rounded">
                                <svg class="h-6 w-6" viewBox="0 0 64 48">
                                    <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                    <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                    <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                                </svg>
                                <span class="text-white">Каталог</span>
                            </button>        
                        </div>
                                                
                        <div class="menu overflow-hidden ">




                            <ul class="flex flex-col text-white">
                                <li class="px-4 mb-4">
                                    <a class="hover:text-green transition-colors" href="/japancar/">Авто с аукционов Японии</a>
                                </li>
                                <li class="px-4 mb-4">
                                    <a class="hover:text-green transition-colors" href="/%d0%b0%d0%b2%d1%82%d0%be-%d0%b8%d0%b7-%d0%ba%d0%be%d1%80%d0%b5%d0%b8/">Авто из Кореи</a></li>
                                <!-- <li class="px-4 mb-4">
                                    <a class="hover:text-green transition-colors" href="%d0%ba%d0%b0%d1%82%d0%b0%d0%bb%d0%be%d0%b3/">Популярные авто</a></li> -->
        
                                <li class="px-4 mb-4">
                                    <a class="hover:text-green transition-colors" href="/%d0%b0%d0%b2%d1%82%d0%be-%d0%b2-%d0%bd%d0%b0%d0%bb%d0%b8%d1%87%d0%b8%d0%b8/">Авто в наличии</a></li>
                                <li class="px-4 mb-4">

                                    <a class="hover:text-green transition-colors" href="https://auc.avtopotencial-dv.ru">Онлайн-ауционы Японии</a></li>

                                <li class="px-4 mb-4">

                                    <a class="hover:text-green transition-colors" href="https://www.dongchedi.com">Онлайн-ауционы Китая</a></li>
                                <li class="px-4 mb-4">

                                    <a class="hover:text-green transition-colors" href="http://www.encar.com/index.do">Онлайн-ауционы Кореи</a></li>
                                <li class="px-4 mb-4">

                                    <a class="hover:text-green transition-colors" href="https://www.youtube.com/channel/UCBKiXYVvi1ROscY2_ENwM-Q">Наш youtube-канал</a></li>
                            </ul>
                        </div>

                        <!-- Мобильная кнопка -->
                        <div class="btn__menu--mobile bg-red rounded-xl shadow-md shadow-main-black items-center gap-10 md:hidden flex">
                            <button class="flex items-center gap-2 pl-10 pr-2 py-1 rounded">
                                <svg class="h-3 w-3" viewBox="0 0 64 48">
                                    <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                    <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                    <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                                </svg>
                            </button>   
                        </div>

                        <div class="mobile-menu ">
                            <div class="container flex md:justify-between justify-evenly md:flex-nowrap flex-wrap text-white">
                                <div>
                                    <p class="pb-2">Каталог</p>
                                    <ul class="text-gray md:text-base text-xs mobile_ul">
                                        <li class="pb-4">
                                            <a href="/japancar/">Авто с аукционов Японии</a>
                                        </li>  
                                        <li class="pb-4">
                                            <a href="/%d0%b0%d0%b2%d1%82%d0%be-%d0%b8%d0%b7-%d0%ba%d0%be%d1%80%d0%b5%d0%b8/">Авто с аукционов Кореи</a>
                                        </li>  
                                        <!-- <li class="pb-4">
                                            <a href="%d0%ba%d0%b0%d1%82%d0%b0%d0%bb%d0%be%d0%b3/">Популярные авто</a>
                                        </li>   -->
                                        <li class="pb-4">
                                            <a href="/%d0%b0%d0%b2%d1%82%d0%be-%d0%b2-%d0%bd%d0%b0%d0%bb%d0%b8%d1%87%d0%b8%d0%b8/">Авто в наличии</a>
                                        </li>  
                                        <li class="pb-4">
                                            <a href="https://auc.avtopotencial-dv.ru">Онлайн-ауционы Японии</a>
                                        </li> 
                                        
                                        <li class="pb-4">
                                            <a href="https://www.dongchedi.com">Онлайн-ауционы Китая</a>
                                        </li>  
                                        
                                        <li class="pb-4">
                                            <a href="http://www.encar.com/index.do">Онлайн-ауционы Кореи</a>
                                        </li>  
                                    </ul>
                                </div>
                                <div>
                                    <p class="pb-2">Клиентам</p>
                                    <ul class="text-gray md:text-base text-xs mobile_ul"> 
                                        <li class="pb-4">
                                            <a href="/%d0%be%d1%82%d0%b7%d1%8b%d0%b2%d1%8b/">Отзывы</a>
                                        </li>  
                                        <li class="pb-4">
                                            <a href="/%d0%b4%d0%be%d1%81%d1%82%d0%b0%d0%b2%d0%ba%d0%b0/">Доставка</a>
                                        </li>  
                                        <li class="pb-4">
                                            <a href="/%d0%b2%d1%8b%d0%bf%d0%be%d0%bb%d0%bd%d0%b5%d0%bd%d0%bd%d1%8b%d0%b5-%d0%b7%d0%b0%d0%ba%d0%b0%d0%b7%d1%8b/">Выполненные заказы</a>
                                         </li>  
                                        <li class="pb-4">
                                        <a class="" href="https://avtopotencial-dv.ru/wp-content/uploads/2024/02/Договор.pdf" target="_blank">
                                            Открыть договор в PDF
                                        </a>
                                        </li>  
                                    </ul>
                                </div>
                                <div>
                                    <p class="pb-4">Мы в соц.сетях</p>
                                    <ul class="flex items-center justify-center gap-4">
                                        <li class="pb-8 flex items-center gap-4">
                                            <a href="https://api.whatsapp.com/send?phone=79020607575"><img src="<?php echo get_template_directory_uri() .'/src/img/icons_nav/sap.svg'; ?>" alt=""></a>
                                            <a href="https://t.me/avtopotencialdv"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/tg.svg'; ?>" alt=""></a>
                                            <a href="https://vk.com/avtopotencial_dv"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/vk.svg'; ?>" alt=""></a>
                                            <a href="https://instagram.com/avtopotencial"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/inst.svg'; ?>" alt=""></a>
                                            <a href="https://www.youtube.com/channel/UCBKiXYVvi1ROscY2_ENwM-Q"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/youtube.svg'; ?>" alt=""></a>
                                        </li>  
                                    </ul>
                                </div>
                           
                                <div class="text-xs">
                                    <p class="pb-4">КОНТАКТЫ</p>
                                    <ul>
                                        <li class="pb-4 pr-8 flex items-center">
                                            <img class="mr-2" src="<?php echo get_template_directory_uri() .'/src/img/icons_nav/phonw.svg'; ?>" alt="">
                                            <a href="tel:+79020607575">+79020607575, </a>
                                            <a href="tel:+79020605757">+79020605757</a>
                                        </li>
                                        <li class="pb-4 pr-8 flex items-center">
                                            <img class="mr-2" src="<?php echo get_template_directory_uri() .'/src/img/icons_nav/email.svg'; ?>" alt="">
                                            <a href="mailto:Avtopotencial-DV@mail.ru">Avtopotencial-DV@mail.ru</a>
                                        </li>
                                        <li class="pb-4  pr-8 flex items-center max-w-xs">
                                            <img class="mr-2" src="<?php echo get_template_directory_uri() .'/src/img/icons_nav/geo.svg'; ?>" alt="">
                                            <p>г.  Владивосток, ул. Тухачевского 35 , 2 этаж, т/ц Тухачевский</p>
                                        </li>
                                        <li class="pb-4 flex items-center">
                                            <img class="mr-2" src="<?php echo get_template_directory_uri() .'/src/img/icons_nav/clock.svg'; ?>" alt="">
                                            <p>Пн-Пт 9:00-18:00</p>
                                        </li>
                                        
                                        
                                            <a id="orderSmall" class="bg-red up order--small text-white rounded-lg popup-link" href="#popup1">
                                                Заказать авто
                                            </a>
                                        
                                    </ul>
                                </div>  
                            </div>
                        </div>

                        <?php wp_nav_menu([
                                'theme_location' => 'top-left',
                                'container' => 'ul',
                                'menu_class' => 'nav_left mobile gap-5 flex-wrap text-main-black hidden md:flex items-center justify-center text-white transition-colors', 
                            ]); 
                        ?>
                       


                </div>
                <a href="/autopotencial">
                    <img class="logo m-auto md:w-60 w-44" src="<?php echo get_template_directory_uri() .'/src/img/logo.png'; ?>" alt="Logo">
                </a>
                <a href="https://api.whatsapp.com/send?phone=79020607575"><img class="md:hidden block bg-bg-gray p-2 rounded-md" src="<?php echo get_template_directory_uri()  .'/src/img/icons/sap.svg'; ?>" alt="" ></a></a>
                

                <?php wp_nav_menu([
                    'theme_location' => 'top-right',
                    'container' => 'ul',
                    'menu_class' => 'mobile gap-5 flex-wrap text-main-black hidden md:flex items-center justify-center text-white transition-colors', 
                ]); ?>

                <ul class="mobile gap-2 flex-wrap text-main-black hidden md:flex items-center justify-center">

                    <li class="mr-4"><a class="text-main-black hover:bg-red transition-colors nav-link" href="https://api.whatsapp.com/send?phone=79020607575"
                            data-goto=""><img class="bg-bg-gray p-2 rounded-md up" src="<?php echo get_template_directory_uri() .'/src/img/icons/sap.svg'; ?>" alt="" ></a></li>
                    <li class="mr-4"><a class="text-main-black hover:bg-red transition-colors nav-link" href="tel:+79020607575"
                            data-goto=""><img class="bg-bg-gray p-2 rounded-md up" src="<?php echo get_template_directory_uri() .'/src/img/icons/tg.svg'; ?>" alt="" ></a></li>
                            <a class="text-white up bg-bg-gray order_btn rounded-md up popup-link"
                            href="#popup1">Заказать авто</a>
                    
                </ul>

                
            </div>
            <section id="popup1" class="popup">
                    <div class="popup__body">
                        <div class="popup__content">
                            <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                                    <path d="M4 1.45508L19.9099 17.365" stroke="#FCBC40"/>
                                    <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#FCBC40"/>
                                    </svg>
                            </button>
                            <h2 class="text-start text-white z-10 font-normal md:text-4xl text-xl uppercase pb-4 ">Заказать авто</h2>
                            <div class="flex items-center justify-between pb-10">
                            </div>
            
                            <div class="form-wrapper form validate-form flex-col">         
                                <?php echo do_shortcode('[contact-form-7 id="d806c55" title="Заявка заказать авто"]'); ?>
                            </div>
                            <p class="form-section__descriptions w-full">Нажимая кнопку “Получить консультацию” я даю согласие на <a
                                    class="underline" href="#" target="_blank" rel="noopener noreferrer">обработку персональных
                                    данных</a></p>
                        </div>
                    </div>
                </section>
        </header>




