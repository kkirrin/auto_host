<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Автопотенциал</title>
    <!-- <script src="//code.jivo.ru/widget/1BFYas96i1" async></script>
    <script src="//code.jivo.ru/widget/3S3KXnJwwC" async></script> -->
    <?php wp_head(); ?>
    
</head>

<body>
    
    <div class="wrapper">
        <header class="border-b-8 z-10 w-full md-28 transition-colors bg-black fixed py-4">
            <div class="container md:gap-5 items-center justify-between flex md:pt-2">

                <div class="flex items-center justify-center">
                        <!-- Меню кнопка -->
                        <div class="btn__menu up rounded-xl shadow-md shadow-main-black md:flex hidden">
                            <button class="flex up items-center gap-2 bg-red pl-10 pr-2 py-1 rounded">
                                <svg class="h-6 w-6" viewBox="0 0 64 48">
                                    <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                    <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                    <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                                </svg>
                                <span class="text-white">Каталог</span>
                            </button>        
                        </div>
                                                
                        <div class="menu overflow-hidden ">

                        <!-- <?php wp_nav_menu([
                                'theme_location' => 'menu-catalog',
                                'container' => 'ul',
                                'menu_class' => 'flex flex-col text-white px-4 mb-4 hover:text-green', 
                            ]); 
                        ?> -->



                            <ul class="flex flex-col text-white">
                                <li class="px-4 mb-4">
                                    <a class="hover:text-green transition-colors" href="%d0%b0%d0%b2%d1%82%d0%be-%d0%b8%d0%b7-%d1%8f%d0%bf%d0%be%d0%bd%d0%b8%d0%b8/">Авто с аукционов Японии</a>
                                </li>
                                <li class="px-4 mb-4">
                                    <a class="hover:text-green transition-colors" href="%d0%b0%d0%b2%d1%82%d0%be-%d0%b8%d0%b7-%d0%ba%d0%be%d1%80%d0%b5%d0%b8/">Авто из Кореи</a></li>
                                <!-- <li class="px-4 mb-4">
                                    <a class="hover:text-green transition-colors" href="%d0%ba%d0%b0%d1%82%d0%b0%d0%bb%d0%be%d0%b3/">Популярные авто</a></li> -->
        
                                <li class="px-4 mb-4">
                                    <a class="hover:text-green transition-colors" href="%d0%b0%d0%b2%d1%82%d0%be-%d0%b2-%d0%bd%d0%b0%d0%bb%d0%b8%d1%87%d0%b8%d0%b8/">Авто в наличии</a></li>
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
                                    <ul class="text-gray md:text-base text-xs">
                                        <li class="pb-4">
                                            <a href="%d0%b0%d0%b2%d1%82%d0%be-%d0%b8%d0%b7-%d1%8f%d0%bf%d0%be%d0%bd%d0%b8%d0%b8/">Авто с аукционов Японии</a>
                                        </li>  
                                        <li class="pb-4">
                                            <a href="%d0%b0%d0%b2%d1%82%d0%be-%d0%b8%d0%b7-%d0%ba%d0%be%d1%80%d0%b5%d0%b8/">Авто с аукционов Кореи</a>
                                        </li>  
                                        <!-- <li class="pb-4">
                                            <a href="%d0%ba%d0%b0%d1%82%d0%b0%d0%bb%d0%be%d0%b3/">Популярные авто</a>
                                        </li>   -->
                                        <li class="pb-4">
                                            <a href="%d0%b0%d0%b2%d1%82%d0%be-%d0%b2-%d0%bd%d0%b0%d0%bb%d0%b8%d1%87%d0%b8%d0%b8/">Авто в наличии</a>
                                        </li>  
                                        <li class="pb-4">
                                            <a href="%d0%ba%d0%b0%d1%82%d0%b0%d0%bb%d0%be%d0%b3/">Сейчас на аукционах</a>
                                        </li>  
                                    </ul>
                                </div>
                                <div>
                                    <p class="pb-2">Клиентам</p>
                                    <ul class="text-gray md:text-base text-xs"> 
                                        <li class="pb-4">
                                            <a href="%d0%be%d1%82%d0%b7%d1%8b%d0%b2%d1%8b/">Отзывы</a>
                                        </li>  
                                        <li class="pb-4">
                                            <a href="%d0%b4%d0%be%d1%81%d1%82%d0%b0%d0%b2%d0%ba%d0%b0/">Доставка</a>
                                        </li>  
                                        <li class="pb-4">
                                            <a href="%d0%b2%d1%8b%d0%bf%d0%be%d0%bb%d0%bd%d0%b5%d0%bd%d0%bd%d1%8b%d0%b5-%d0%b7%d0%b0%d0%ba%d0%b0%d0%b7%d1%8b/">Выполненные заказы</a>
                                         </li>  
                                        <li class="pb-4">
                                        <a href="#">
                                            Скачать договор pdf
                                        </a>
                                        </li>  
                                    </ul>
                                </div>
                                <div>
                                    <p class="pb-4">Мы в соц.сетях</p>
                                    <ul class="flex items-center justify-center gap-4">
                                        <li class="pb-8 flex items-center gap-4">
                                        <a href="https://api.whatsapp.com/send?phone=79020607575"><img src="<?php echo get_template_directory_uri() .'/src/img/icons_nav/sap.svg'; ?>" alt=""></a>
                                        <a href="t.me/avtopotencialdv"><img src="<?php echo get_template_directory_uri() .'/src/img/icons_nav/tg.svg'; ?>" alt=""></a>
                                            <a href="tel:+79020607575"><img src="<?php echo get_template_directory_uri() .'/src/img/icons_nav/vk.svg'; ?>" alt=""></a>
                                            <a href="tel:+79020607575"><img src="<?php echo get_template_directory_uri() .'/src/img/icons_nav/inst.svg'; ?>" alt=""></a>
                                            <a href="tel:+79020607575"><img src="<?php echo get_template_directory_uri() .'/src/img/icons_nav/youtube.svg'; ?>" alt=""></a>
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
                                        
                                        
                                            <a class="bg-red up py-2 px-10 text-white rounded-lg popup-link" href="#popup1">
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
                            <a class="text-white up bg-bg-gray p-2 rounded-md up popup-link"
                            href="#popup1">Заказать авто</a>
                    
                </ul>

                
            </div>
        </header>




