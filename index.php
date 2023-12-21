<?php 
/*
Template Name: autopotencial
*/
?>

<?php get_header(); ?>

    <main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>

            <section class="main-swiper overflow-hidden h-screen pt-20 md:max-h-full max-h-[600px] wow fadeInUp" data-wow-delay="0.2s"">
                <div class="main-wrapper">
                    <div class="main-item relative">

                        <div class="swiper-pagination"></div>
                        

                        
                        <div class="swiper-wrapper h-auto">
                        <div class="absolute right-0 md:bottom-52 bottom-0">
                <a href="#">
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
                            <div class="swiper-slide relative bg-black -z-10 max-h-screen">
                                <div class="flag relative">
                                    <img class="absolute top-0 right-0 z-10 sm:w-full sm:h-auto" src="<?php echo get_template_directory_uri() . '/src/img/main/bg-slide1.png'; ?>" alt="">
                                    <img class="wheel absolute top-28 right-0 z-10 md:w-80 w-48" src="<?php echo get_template_directory_uri() . '/src/img/main/japan.png'; ?>" alt="">
                                    <img class="oblaco absolute top-1/2 right-0 z-10 md:w-[1130px] w-96" src="<?php echo get_template_directory_uri() . '/src/img/main/oblaco.svg'; ?>" alt="">
                                </div>
                                <div class="container text-5xl md:text-9xl pt-24 relative z-10">
                                    <h2 class="text-center text-white z-10 font-normal md:text-6xl text-xl uppercase">
                                        Автомобили <span class="text-yellow">из Японии</span> с доставкой во владивосток
                                    </h2>
                                    <p class="pt-10 z-10 text-center font-bold md:text-xl text-base text-white">Подберем под Ваш бюджет, привезем в РФ, растаможим, оформим документы и доставим до Вас</p>
                                    <div class="relative">
                                        <img class="slide2 absolute right-0 z-10" src="<?php echo get_template_directory_uri() . '/src/img/main/slide1.png'; ?>" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="swiper-slide bg-black -z-10">
                                <div class="flag2 relative">
                                    <img class="absolute top-0  right-0 z-10 sm:w-full sm:h-auto" src="<?php echo get_template_directory_uri() . '/src/img/main/bg-slide2.png'; ?>" alt="">
                                    <img class="wheel absolute top-16 right-0 z-10 md:w-96 w-48" src="<?php echo get_template_directory_uri() . '/src/img/main/korea.png'; ?>" alt="">
                                    <img class="oblaco absolute top-1/2 right-0 z-10 md:w-[1130px] w-96" src="<?php echo get_template_directory_uri() . '/src/img/main/oblaco.svg'; ?>" alt="">
                                </div>
                                <div class="container text-5xl md:text-9xl pt-24 relative z-10">
                                    <h2 class="text-center text-white z-10 font-normal md:text-6xl text-xl uppercase">
                                        Автомобили <span class="text-yellow">из кореи</span> с доставкой во владивосток
                                    </h2>
                                    <p class="pt-10 z-10 text-center font-bold md:text-xl text-base text-white">Подберем под Ваш бюджет, привезем в РФ, растаможим, оформим документы и доставим до Вас</p>
                                    <div class="relative">
                                        <img class="slide2 absolute right-0 z-10" src="<?php echo get_template_directory_uri() . '/src/img/main/slide2.png'; ?>" alt="">
                                    </div>
                                
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="japan-swiper md:pt-40 pt-20 wow fadeInUp " data-wow-delay="0.4s"">
                <div class="container">

                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative">сейчас на аукционах японии </h2>
                        </div>

                        <div class="swiper-pagination"></div>
                        <div class="md:flex flex-nowrap gap-5 hidden">
                            <button
                                class="up japan-prev rounded-lg shadow-md shadow-main-black -z-0 ">
                                <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow_prev.svg'; ?>" alt="влево">
                            </button>
                            <button
                                class="up japan-next rounded-lg shadow-md shadow-main-black -z-0 ">
                                <img src="<?php echo get_template_directory_uri() .'/src/img/icons/arrow_next.svg'; ?>" alt="вправо" >
                            </button>
                        </div>
                        
                    </div>
                    <div class="japan-wrapper overflow-hidden">
                        <div class="japan-item">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide p-5 animate">
                                    <div class="md:w-auto w-full">
                                        <a href="#" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                            <img class="" src="<?php echo get_template_directory_uri() .'/src/img/cars/car1.png'; ?>" alt="вправо" >
                                        </a>
                                        <div class="flex flex-col items-start gap-4 justify-between">
                                            <div class="md:text-3xl text-xl font-medium pt-4">TOYOTA AQUA</div>
                                            <div class="flex flex-row">
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() .'/src/img/icons/speed.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">2.0, АКПП, 92 000 км.</p>
                                                </div>
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() .'/src/img/icons/color.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">grey</p>
                                                </div>
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() .'/src/img/icons/color.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">2012 год</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-row gap-4">
                                                <p class="md:text-xl text-base">
                                                    <span class="font-bold">937 061 ₽</span> (673 000 ¥)
                                                </p>
                                                <button class="up bg-red py-2 px-5 text-white rounded-lg ">
                                                    Заказать
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>       
                                <div class="swiper-slide p-5 animate">
                                    <div class="md:w-auto w-full">
                                        <a href="#" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                            <img class="" src="<?php echo get_template_directory_uri() .'/src/img/cars/car1.png'; ?>" alt="вправо" >
                                        </a>
                                        <div class="flex flex-col items-start gap-4 justify-between">
                                            <div class="md:text-3xl text-xl font-medium pt-4">TOYOTA AQUA</div>
                                            <div class="flex flex-row">
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() .'/src/img/icons/speed.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">2.0, АКПП, 92 000 км.</p>
                                                </div>
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() .'/src/img/icons/color.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">grey</p>
                                                </div>
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() .'/src/img/icons/color.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">2012 год</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-row gap-4">
                                                <p class="md:text-xl text-base">
                                                    <span class="font-bold">937 061 ₽</span> (673 000 ¥)
                                                </p>
                                                <button class="up bg-red py-2 px-5 text-white rounded-lg ">
                                                    Заказать
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>       
                                <div class="swiper-slide p-5 animate">
                                    <div class="md:w-auto w-full">
                                        <a href="#" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                            <img class="" src="<?php echo get_template_directory_uri() . '/src/img/cars/car1.png'; ?>" alt="вправо" >
                                        </a>
                                        <div class="flex flex-col items-start gap-4 justify-between">
                                            <div class="md:text-3xl text-xl font-medium pt-4">TOYOTA AQUA</div>
                                            <div class="flex flex-row">
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() . '/src/img/icons/speed.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">2.0, АКПП, 92 000 км.</p>
                                                </div>
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() . '/src/img/icons/color.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">grey</p>
                                                </div>
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() . '/src/img/icons/color.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">2012 год</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-row gap-4">
                                                <p class="md:text-xl text-base">
                                                    <span class="font-bold">937 061 ₽</span> (673 000 ¥)
                                                </p>
                                                <button class="up bg-red py-2 px-5 text-white rounded-lg ">
                                                    Заказать
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>       
                                    
                            </div>
                        </div>
                    </div>   
                    
                    <div class="md:hidden flex-nowrap gap-5 flex items-center justify-center">
                        <button
                            class="up japan-prev rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_prev.svg'; ?>" alt="влево">
                        </button>
                        <button
                            class="up japan-next rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_next.svg'; ?>" alt="вправо" >
                        </button>
                    </div>
                </div>
            </section> 

            <section class="korea-swiper md:pt-40 pt-20 wow fadeInUp nav-link" data-wow-delay="0.5s"">
                <div class="container">

                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative">Автомобили из Кореи </h2>
                        </div>

                        <div class="swiper-pagination"></div>
                        <div class="md:flex flex-nowrap gap-5 hidden items-center justify-center">
                            <button
                                class="up korea-prev rounded-lg shadow-md shadow-main-black -z-0 ">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_prev.svg'; ?>" alt="влево">
                            </button>
                            <button
                                class="up korea-next rounded-lg shadow-md shadow-main-black -z-0 ">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_next.svg'; ?>" alt="вправо" >
                            </button>
                        </div>   
                        
                    </div>
                    <div class="korea-wrapper overflow-hidden">
                        <div class="korea-item">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide p-5 animate">
                                    <div class="md:w-auto w-full">
                                        <a href="#" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                            <img class="" src="<?php echo get_template_directory_uri() .'/src/img/cars/car1.png'; ?>" alt="вправо" >
                                        </a>
                                        <div class="flex flex-col items-start gap-4 justify-between">
                                            <div class="md:text-3xl text-xl font-medium pt-4">TOYOTA AQUA</div>
                                            <div class="flex flex-row">
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() .'/src/img/icons/speed.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">2.0, АКПП, 92 000 км.</p>
                                                </div>
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() .'/src/img/icons/color.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">grey</p>
                                                </div>
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() .'/src/img/icons/year.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">2012 год</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-row gap-4">
                                                <p class="md:text-xl text-base">
                                                    <span class="font-bold">937 061 ₽</span> (673 000 ¥)
                                                </p>
                                                <button class="up bg-red py-2 px-5 text-white rounded-lg ">
                                                    Заказать
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                <div class="swiper-slide p-5 animate">
                                    <div class="md:w-auto w-full">
                                        <a href="#" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                            <img class="" src="<?php echo get_template_directory_uri() .'/src/img/cars/car1.png'; ?>" alt="вправо" >
                                        </a>
                                        <div class="flex flex-col items-start gap-4 justify-between">
                                            <div class="md:text-3xl text-xl font-medium pt-4">TOYOTA AQUA</div>
                                            <div class="flex flex-row">
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() .'/src/img/icons/speed.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">2.0, АКПП, 92 000 км.</p>
                                                </div>
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() .'/src/img/icons/color.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">grey</p>
                                                </div>
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() .'/src/img/icons/year.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">2012 год</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-row gap-4">
                                                <p class="md:text-xl text-base">
                                                    <span class="font-bold">937 061 ₽</span> (673 000 ¥)
                                                </p>
                                                <button class="up bg-red py-2 px-5 text-white rounded-lg ">
                                                    Заказать
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                <div class="swiper-slide p-5 animate">
                                    <div class="md:w-auto w-full">
                                        <a href="#" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                            <img class="" src="<?php echo get_template_directory_uri() .'/src/img/cars/car1.png'; ?>" alt="вправо" >
                                        </a>
                                        <div class="flex flex-col items-start gap-4 justify-between">
                                            <div class="md:text-3xl text-xl font-medium pt-4">TOYOTA AQUA</div>
                                            <div class="flex flex-row">
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() .'/src/img/icons/speed.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">2.0, АКПП, 92 000 км.</p>
                                                </div>
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() .'/src/img/icons/color.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">grey</p>
                                                </div>
                                                <div class="flex items-center">
                                                    <img class="pr-1 " src="<?php echo get_template_directory_uri() .'/src/img/icons/year.svg'; ?>" alt="" >
                                                    <p class="md:pr-3 pr-1  md:text-base text-xs">2012 год</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-row gap-4">
                                                <p class="md:text-xl text-base">
                                                    <span class="font-bold">937 061 ₽</span> (673 000 ¥)
                                                </p>
                                                <button class="up bg-red py-2 px-5 text-white rounded-lg ">
                                                    Заказать
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>    
                    <div class="md:hidden flex-nowrap gap-5 flex items-center justify-center">
                        <button
                            class="up korea-prev rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_prev.svg'; ?>" alt="влево">
                        </button>
                        <button
                            class="up korea-next rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_next.svg'; ?>" alt="вправо" >
                        </button>
                    </div>   
                </div>
            </section>

                <section class="stock-swiper md:pt-40 pt-20 pb-20 wow fadeInUp page-section-3 nav-link" data-wow-delay="0.2s"">
                <div class="container">

                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative">автомобили в наличии </h2>
                        </div>

                        <div class="swiper-pagination"></div>
                        <div class="md:flex flex-nowrap gap-5 hidden items-center justify-center">
                        <button
                            class="up stock-prev rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_prev.svg'; ?>" alt="влево">
                        </button>
                        <button
                            class="up stock-next rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_next.svg'; ?>" alt="вправо" >
                        </button>
                    </div>   
                    
                </div>
                    <div class="stock-wrapper overflow-hidden">
                        <div class="stock-item">
                            <div class="swiper-wrapper">
                                <?php
                                    $my_posts = get_posts(array(
                                        'numberposts' => -1,
                                        'category_name' => 'in_stock',
                                        'order' => 'title',
                                        'post_type' => 'post',
                                        'suppress_filters' => true
                                    ));

                                    foreach( $my_posts as $post ){

                                        setup_postdata( $post );
                                    ?>  

                                    <div class="swiper-slide p-5 animate">
                                        <div class="md:w-auto w-full">
                                            <a href="#" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                                <img class="" src="<?php the_field('фото_машины'); ?>?>" alt="вправо" >
                                            </a>
                                            <div class="flex flex-col items-start gap-4 justify-between">
                                                <div class="md:text-3xl text-xl font-medium pt-4"><?php the_field('название_машины'); ?></div>
                                                <div class="flex flex-row">
                                                    <div class="flex items-center">
                                                        <img class="pr-1 " src="<?php echo get_template_directory_uri() . '/src/img/icons/speed.svg'; ?>" alt="" >
                                                        <p class="md:pr-3 pr-1  md:text-base text-xs"><?php the_field('характеристики_через_запятую'); ?></p>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <img class="pr-1 " src="<?php echo get_template_directory_uri() . '/src/img/icons/color.svg'; ?>" alt="" >
                                                        <p class="md:pr-3 pr-1  md:text-base text-xs"><?php the_field('цвет'); ?></p>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <img class="pr-1 " src="<?php echo get_template_directory_uri() . '/src/img/icons/year.svg'; ?>" alt="" >
                                                        <p class="md:pr-3 pr-1  md:text-base text-xs"><?php the_field('год'); ?> год</p>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row gap-4">
                                                    <p class="md:text-xl text-base">
                                                        <span class="font-bold"><?php the_field('сумма_в_рублях_с_пробелами'); ?> ₽</span> (<?php the_field('сумма_в_юанях_с_пробелами'); ?> ¥)
                                                    </p>
                                                    <a class="up bg-red py-2 px-5 text-white rounded-lg " href="<?php the_permalink(); ?>">
                                                        Заказать
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    


                                <?php
                                    }
                                    wp_reset_postdata();
                                ?>
     
                            </div>
                        </div>
                    </div>    
                    <div class="md:hidden flex-nowrap gap-5 flex items-center justify-center">
                        <button
                            class="up stock-prev rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_prev.svg'; ?>" alt="влево">
                        </button>
                        <button
                            class="up stock-next rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_next.svg'; ?>" alt="вправо" >
                        </button>
                    </div>      
                </div>
            </section>
            
            <section class="bg-black w-full relative pt-20 overflow-hidden wow fadeInUp" data-wow-delay="0.2s"">
                <img class=" md:block hidden absolute -bottom-16 lg:-right-44 md:-right-32 right-0 z-10 wow fadeInRight"  data-wow-delay="0.2s"" src="<?php echo get_template_directory_uri() .'/src/img/about/car_about.png';?>" alt="" >

                <img class="absolute right-0 top-0" src="<?php echo get_template_directory_uri() . '/src/img/icons/tree.svg'; ?>" alt="">
                <div class="container relative">
                    
                    <div class="md:p-16 p-4 bg-bg-gray bg-opacity-80 ">
                        <h3 class="text-start text-white font-normal md:text-3xl text-base uppercase">
                            Получить расчет автомобиля бесплатно
                        </h3>       

                        
                        <div class="w-full rounded-xl">
                            <form class="pt-10 pb-10 grid grid-cols-1 md:grid-cols-4 gap-4 uppercase">
                                <div class="mb-4">
                                    <label class="block text-white text-sm font-medium mb-2" for="make">
                                        Выберите марку
                                    </label>
                                    <select name="brand" id="brand" class="select input block appearance-none w-full border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option class="text-opacity-10">Выберите марку</option>
                                        <option class="text-opacity-10"></option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-white text-sm font-medium mb-2" for="make">
                                        Выберите модель
                                    </label>
                                    <select id="model" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option class="text-opacity-10">Выберите модель</option>
                                        <option class="text-opacity-10"></option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-white text-sm font-medium mb-2" for="make">
                                        Выберите вид топлива
                                    </label>
                                    <select id="fuel" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option>Выберите вид топлива</option>
                                        <option>Бензин</option>
                                        <option>Дизель</option>
                                        <option>Газ</option>
                                        <option>Электричество</option>
                                        <option>Гибрид</option>

                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-white text-sm font-medium mb-2" for="make">
                                        Привод
                                    </label>
                                    <select id="drive" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option>Привод</option>
                                        <option>4WD</option>
                                        <option>Задний</option>
                                        <option>Передний</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-white text-sm font-medium mb-2" for="make">
                                        Трансмиссия
                                    </label>
                                    <select id="transmition" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option>Трансмиссия</option>
                                        <option>АКПП</option>
                                        <option>Робот</option>
                                        <option>Вариантор</option>
                                        <option>Механика</option>

                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-white text-sm font-medium mb-2" for="make">
                                        Выберите комплектацию 
                                    </label>
                                    <select id="complectation" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option>Выберите комплектацию</option>
                                        <option></option>
                                    </select>
                                </div>

                            
                                <div class="mb-4">
                                    <label class="block text-white text-sm font-medium mb-2" for="make">
                                        Год 
                                    </label>
                                    <div class="flex gap-10">
                                        <div class="w-full">
                                            <select id="year" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option>от</option>
                                                <option>2001</option>
                                                <option>2002</option>
                                                <option>2003</option>
                                                <option>2004</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                                <option>2015</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                                <option>2020</option>
                                                <option>2021</option>
                                                <option>2022</option>
                                                <option>2023</option>
                                            </select>
                                        </div>
                                        <div class="w-full">
                                            <select id="year" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500" > 
                                                <option>до</option>
                                                <option>2001</option>
                                                <option>2002</option>
                                                <option>2003</option>
                                                <option>2004</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                                <option>2015</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                                <option>2020</option>
                                                <option>2021</option>
                                                <option>2022</option>
                                                <option>2023</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                
                                <div class="flex flex-1 gap-10">
                                    <div class="mb-4">
                                        <label class="block text-white text-sm font-medium mb-2" for="make">
                                            Пробег 
                                        </label>
                                        <div class="flex gap-10">
                                            <div class="w-1/2">
                                                <input id="mileage" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="от">

                                                </input>
                                            </div>
                                            <div class="w-1/2">
                                                <input id="7" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="до">

                                                </input>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex flex-1 gap-10">
                                    <div class="mb-4">
                                        <label class="block text-white text-sm font-medium mb-2" for="make">
                                            Цена 
                                        </label>
                                        <div class="flex gap-10">
                                            <div class="w-1/2">
                                                <input id="price" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="от">

                                                </input>
                                            </div>
                                            <div class="w-1/2">
                                                <input id="price" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="до">

                                                </input>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-1 gap-10">
                                    <div class="mb-4">
                                        <label class="block text-white text-sm font-medium mb-2" for="make">
                                            Объем 
                                        </label>
                                        <div class="flex gap-10">
                                            <div class="w-1/2">
                                                <input id="value" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="от">

                                                </input>
                                            </div>
                                            <div class="w-1/2">
                                                <input id="value" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="до">

                                                </input>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex items-center justify-center">
                                    <button class="up bg-red py-2 px-10 text-white rounded-lg">
                                        Получить расчёт
                                    </button>
                                </div>
                                
                                <div class="flex items-end justify-end">
                                    <button class=" text-yellow py-2 px-10 underline">
                                        Сбросить
                                    </button>
                                </div>


                            </form>
                        </div>
                        
                    </div>
                    
                    <div class="relative md:flex items-center pt-36 page-section-1 nav-link">
                        
                        <div class="w-full md:w-1/2">
                            <h2 class="text-white text-start font-normal md:text-5xl text-xl uppercase pb-10">
                                О компании
                            </h2>
                            <div class="text-white md:text-xl text-sm mb-7">
                                Компания <span class="text-yellow">«Автопотенциал-ДВ»</span> предоставляет Вам полный спектр профессиональных услуг по покупке автомобилей, транспортировке и таможенному оформлению ТС из Японии, Южной Кореи.  Благодаря многолетнему опыту в автомобильной сфере (с 2010 года) нами было импортировано более 1000 единиц ТС в РФ.
                            </div>
                            
                            <div class="text-white md:text-lg text-sm bg-bg-gray bg-opacity-50 relative md:p-10 md:pr-28 p-5 pr-2">
                                <span class="font-bold">Наша задача</span> – исключить риски покупки битых, аварийных, ржавых, утопленных автомобилей. Мы работаем только с проверенными и надежными поставщиками Японии и Южной Кореи. При заказе в нашей компании автомобиля для иногородних клиентов мы оказываем дополнительные услуги: детейлинг авто, замена тех.жидкостей, масла, покупка дополнительных фильтров, расходников.

                                <p class="text-yellow md:text-lg text-xs mt-5">Почему выбирают нас:</p>
                                <ul class="list-disc text-white md:text-xs p-5">
                                    <li class="pb-2">
                                        Индивидуальный подход к каждому клиенту
                                    </li>
                                    <li class="pb-2">
                                        Комфортные условия по дистанционному заказу для клиентов из других регионов РФ
                                    </li>
                                    <li class="pb-2">   
                                        В работе с заказчиками придерживаемся принципа: ответственность, требовательность, честность
                                    </li>
                                    <li class="pb-2">
                                        Ясный и элементарный сервис по приобретению автомобиля  и его таможенного оформления
                                    </li>
                                    <li class="pb-2">
                                        Все платежи Вы производите самостоятельно и за каждый платеж предоставляются отчетные документы
                                    </li>
                                    <li class="pb-2">
                                        Предоставляем полный отчет расходов стоимости авто для Вашего понимания за честную комиссию, без скрытых платежей
                                    </li>
                                </ul>
                                <img class="absolute right-0 top-10 wow fadeInRight"  data-wow-delay="0.2s"" src="<?php echo get_template_directory_uri() . '/src/img/icons/quot.svg'; ?>" alt="">
                            </div>
                        </div>
                        <img class="md:hidden block w-full z-10 wow fadeInRight"  data-wow-delay="0.2s"" src="<?php echo get_template_directory_uri() . '/src/img/about/car_about.png'; ?>" alt="" >
                    </div>
                </div>
            </section>

            <section class="relative bg-black pt-20 z-0 pb-40 wow fadeInUp" data-wow-delay="0.2s"">
                <div class="container relative md:flex items-center">
                    <img class="bg-cover bg-center opacity-90 absolute md:block hidden -z-10" src="<?php echo get_template_directory_uri() . '/src/img/company/bg_company.png'; ?>" alt="">
                    <div class="md:w-1/2">
                        <h2 class="text-white font-normal md:text-5xl text-xl uppercase pb-8">
                            «Автопотенциал-ДВ»
                        </h2>
                        <div class="text-white md:text-2xl text-sm mb-7">
                            предоставляет Вам полный спектр профессиональных услуг по покупке автомобилей, транспортировке и таможенному оформлению ТС из Японии, Южной Кореи
                        </div>
                        
                        <div class="text-white md:text-base text-xs mb-7">
                            Сотрудники компании «Автопотенциал-Дв» высоко ценят доверие каждого клиента 
                            к нашей компании и в основу всего ставится заказчик и его интересы
                        </div>
                    </div>
                    <div class="md:w-1/2 relative">
                        <img class="md:block hidden" src="<?php echo get_template_directory_uri() . '/src/img/company/people.png'; ?>" alt="">
                    </div>
                </div>
                <div class="relative md:w-1/2">
                    <img class="md:hidden block" src="<?php echo get_template_directory_uri() . '/src/img/company/people.png'; ?>" alt="">
                    <img class="bg-cover bg-center opacity-90 absolute bottom-0 md:hidden block -z-10" src="<?php echo get_template_directory_uri() . '/src/img/company/bg_company.png'; ?>" alt="">
                </div>
                <div class="container">
                    <ul class="flex items-center md:justify-center justify-start flex-wrap gap-10 counter-list">
                        <li class="py-3 px-2 sm:py-7 sm:px-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="4" viewBox="0 0 73 4" fill="none">
                                <path d="M0 2H72.5" stroke="#FCBC40" stroke-width="4"/>
                            </svg>
                            <p class="font-fontNokia md:text-5xl text-3xl text-yellow uppercase pt-4 pb-4 inline-flex items-center">
                                <span class="counter-years md:text-5xl text-3xl text-yellow uppercase pt-4 pb-4 w-8 sm:w-16"></span>
                                <span class="ml-2">лет</span>
                                </p>
                            <p class="md:text-xl text-sm text-white">опыт в автомобильной сфере</p>
                        </li>
                        <li class="py-3 px-2 sm:py-7 sm:px-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="4" viewBox="0 0 73 4" fill="none">
                                <path d="M0 2H72.5" stroke="#FCBC40" stroke-width="4"/>
                            </svg>
                            <p class="font-fontNokia md:text-5xl text-3xl text-yellow uppercase pt-4 pb-4 inline-flex items-center">
                                <span class="ml-2 mr-4">более</span>
                                <span class="counter-items md:text-5xl text-3xl text-yellow uppercase pt-4 pb-4 w-8 sm:w-16"></span>
                                </p>
                            <p class="md:text-xl text-sm text-white">опыт в автомобильной сфере</p>
                        </li>
                        <li class="py-3 px-2 sm:py-7 sm:px-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="4" viewBox="0 0 73 4" fill="none">
                                <path d="M0 2H72.5" stroke="#FCBC40" stroke-width="4"/>
                            </svg>
                            <p class="font-fontNokia md:text-5xl text-3xl text-yellow uppercase pt-4 pb-4 inline-flex items-center">
                                <span class="ml-2 mr-4">более</span>
                                <span class="counter-client md:text-5xl text-3xl text-yellow uppercase pt-4 pb-4 w-8 sm:w-16"></span>
                                </p>
                            <p class="md:text-xl text-sm text-white">опыт в автомобильной сфере</p>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="py-20 overflow-hidden wow fadeInUp" data-wow-delay="0.2s"">
                <div class="container">
                    <h2 class=" font-normal md:text-5xl text-xl uppercase pb-8">как купить автомобиль</h2>
                    <div class="pb-10 relative">
                        <div class="car__wrapper">
                            <div class="car__numbers">
                                <div class="car__progress relative">      
                                    <div class="car__progress-success">
                                        <img class="car__animate absolute -top-10 left-0" src="<?php echo get_template_directory_uri() .'/src/img/how_buy/car.svg'; ?>" alt="">
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
            
                    
                    <div class="flex items-stretch justify-center flex-1 flex-wrap gap-7">
                        <div class="relative bg-bg-how p-7 max-w-xs">
                            <img class="absolute left-2 top-2" src="<?php echo get_template_directory_uri() . '/src/img/how_buy/Frame_1.svg'; ?>" alt="">
                            <div>
                                <p class="md:text-base text-sm pt-14 pb-10 font-bold uppercase">
                                    Оставить заявку на сайте
                                    или написать на whatsapp
                                </p>

                                <p class="md:text-base text-xs">
                                    Мы бесплатно проконсультируем, проссчитаем конечную стоимость автомобиля и предоставим перевод аукционного листа (для Японских автомобилей)
                                </p>
                            </div>

                            <div class="flex items-center justify-center pt-10">
                                <a class="bg-red up py-2 px-10 text-white rounded-lg popup-link" href="popup1">
                                    Оставить заявку
                                </a>
                            </div>
                        </div>
                        <div class="relative bg-bg-how p-7 max-w-xs">
                            <img class="absolute left-2 top-2" src="<?php echo get_template_directory_uri() . '/src/img/how_buy/Frame_2.svg'; ?>" alt="">
                            <div>
                                <p class="md:text-base text-sm pt-14 pb-10 font-bold uppercase">
                                    Подбор и покупка 
                                    автомобиля
                                </p>

                                <p class="md:text-base text-xs">
                                    Мы подберем для Вас наилучший автомобиль по техническим характеристикам с учетом Ваших требований
                                </p>
                            </div>

                            <div class="flex items-center max-h-max justify-center pt-10">
                                <a class="absolute bottom-6 bg-yellow py-2 px-10 text-white rounded-lg" href="#">
                                    Скачать договор pdf
                                </a>
                            </div>
                        </div>
                        <div class="relative bg-bg-how p-7 max-w-xs">
                            <img class="absolute left-2 top-2" src="<?php echo get_template_directory_uri() . '/src/img/how_buy/Frame_3.svg'; ?>" alt="">
                            <div>
                                <p class="md:text-base text-sm pt-14 pb-10 font-bold uppercase">
                                    оплата, перевозка
                                    и таможенное оформление
                                </p>

                                <p class="md:text-base text-xs">
                                    Рассчитаем конечную стоимость автомобиля, транспортируем в порт Владивостока, проведем таможенное оформление, пройдем испытательную лабораторию (для получения СБКТС и ЭПТС, в котором Вы будете первым собственником)
                                </p>
                            </div>

                            
                        </div>
                        <div class="relative bg-bg-how p-7 max-w-xs">
                            <img class="absolute left-2 top-2" src="<?php echo get_template_directory_uri() . '/src/img/how_buy/Frame_4.svg'; ?>" alt="">
                            <div>
                                <p class="md:text-base text-sm pt-14 pb-10 font-bold uppercase">
                                    выдача, доставка авто
                                </p>

                                <p class="md:text-base text-xs">
                                    Отправим автомобиль в любой регион РФ автоперевозчиком или по ЖД вагоном-сеткой
                                </p>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="review-swiper wow fadeInUp page-section-2 nav-link" data-wow-delay="0.2s"">
                <div class="container">

                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative">Отзывы клиентов </h2>
                        </div>

                        <div class="swiper-pagination"></div>
                        <div class="md:flex flex-nowrap gap-5 hidden items-center justify-center">
                        <button
                            class="up review-prev rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_prev.svg'; ?>" alt="влево">
                        </button>
                        <button
                            class="up review-next rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_next.svg'; ?>" alt="вправо" >
                        </button>
                    </div>   
                    
                </div>
                    <div class="review-wrapper overflow-hidden">
                        <div class="review-item">
                            <div class="swiper-wrapper">

                                
                            <?php
                                    $my_posts = get_posts(array(
                                        'numberposts' => -1,
                                        'category_name' => 'review',
                                        'order' => 'title',
                                        'post_type' => 'testimonial',
                                        'suppress_filters' => true
                                    ));

                                    foreach( $my_posts as $post ){

                                        setup_postdata( $post );
                                    ?>  
                                
                                        <div class="swiper-slide p-5 animate">
                                            <div class="flex flex-col items-center justify-between md:w-auto w-full">
                                                <a href="#" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                                    <img src="<?php the_field('видео_отзыва'); ?>" alt="вправо" >
                                                </a>
                                                <div class="flex flex-col items-center md:items-start">
                                                    <div class="font-bold pb-5"><?php the_field('название_отзыва'); ?></div>
                                                    <div class="font-medium pb-5">
                                                        <?php the_field('текст_отзыва'); ?>
                                                    </div>
                                                    <div class="flex flex-col md:flex-row pb-5">
                                                        <div class="flex items-center">
                                                            <p class="pr-2 text-gray"><?php the_field('автор_отзыва'); ?></p>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <p class="pr-2 text-gray"><?php the_field('дата_отзыва'); ?></p>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <p class="pr-2 text-gray"><?php the_field('город_отзыва'); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-col md:flex-row items-center justify-around">
                                                        <a href="reviews.php">
                                                            <div>
                                                                <a class="text-yellow hover:text-red" href="%d0%be%d1%82%d0%b7%d1%8b%d0%b2%d1%8b">Смотреть оригинал</a>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                        
                                        <?php
                                    }
                                    wp_reset_postdata();
                                ?>

                            </div>
                        </div>
                    </div>     

                    <div class="md:hidden flex-nowrap gap-5 flex items-center justify-center">
                        <button
                            class="up review-prev rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_prev.svg'; ?>" alt="влево">
                        </button>
                        <button
                            class="up review-next rounded-lg shadow-md shadow-main-black -z-0 ">
                            <img src="<?php echo get_template_directory_uri() . '/src/img/icons/arrow_next.svg'; ?>" alt="вправо" >
                        </button>
                    </div>    
                    
                    
                </div>
            </section>

            <section class="pt-20 wow fadeInUp" data-wow-delay="0.2s"">
                <div class="container relative">
                    <div class="flex justify-center">
                        <img class="bg-cover bg-center opacity-90 absolute bottom-0 -z-10 md:block hidden" src="<?php echo get_template_directory_uri() . '/src/img/map/map2.png'; ?>" alt="" > 
                    </div>
                    
                    <div class="bg-white max-w-xl md:ml-10 ml-0 p-10">
                        <div class="pb-5">
                            <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative">Контакты </h2>
                        </div>
                        <ul>
                            <li class="pb-8">
                                <img class="pb-2" src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/phonw.svg'; ?>" alt="">
                                <a href="tel:79020607575">
                                    +79020607575,
                                </a>
                                <a href="tel:+79020605757">
                                    +79020605757,
                                </a>
                            </li>
                            <li class="pb-8">
                                <a href="mailto:Avtopotencial-DV@mail.ru"><img class="pb-2" src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/email.svg'; ?>" alt="">
                                    Avtopotencial-DV@mail.ru</a>
                            </li>
                            <li class="pb-8">
                                <img class="pb-2" src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/geo.svg'; ?>" alt="">
                                    г.  Владивосток, ул. Тухачевского 35 , 2 этаж, т/ц Тухачевский
                            </li>
                            <li class="pb-8">
                                <img class="pb-2" src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/clock.svg'; ?>" alt="">
                                    Пн-Пт 9:00-18:00
                            </li>
                            <li class="pb-8 flex items-center gap-4">
                                <a href="tel:+79020607575"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/sap.svg'; ?>" alt=""></a>
                                <a href="tel:+79020607575"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/tg.svg'; ?>" alt=""></a>
                                <a href="tel:+79020607575"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/vk.svg'; ?>" alt=""></a>
                                <a href="tel:+79020607575"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/inst.svg'; ?>" alt=""></a>
                                <a href="tel:+79020607575"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/youtube.svg'; ?>" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <img class="bg-cover bg-center opacity-90 h-full w-full md:hidden block" src="<?php echo get_template_directory_uri() . '/src/img/map/map2.png'; ?>" alt="" > 
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
                                <p class="text-white md:text-base text-sm"></p>
                            </div>
                            
                            <div>
                                <p class="text-yellow font-bold md:text-xl text-sm"></p>
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
