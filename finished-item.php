<?php
/*
    Template Name: finished item
    Template Post Type: post
*/

?>

<?php get_header(); ?>

        <main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>

            
            <section class="md:py-40 py-10 wow fadeInUp" data-wow-delay="0.2s"">
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
                <div class="container">
                    <div class="flex md:flex-row flex-col items-center justify-center gap-10"> 
                        <div class="md:w-1/2 w-full">
                            <img src="<?php echo the_field('главное_фото'); ?>" alt="">
                        </div>
                        <div class="md:w-1/2 w-full">
                            <img src="<?php echo the_field('второе_фото'); ?>" alt="">
                        </div>
                    </div>
                    <h3 class="font-bold md:text-4xl text-xl pt-20">
                        TOYOTA WISH
                    </h3>
                    <div class="flex md:flex-row flex-col md:gap-10 gap-0">
                        
                        <div class="md:w-1/2">
                            <div class="flex justify-between items-center md:pt-10 pt-0">
                                <ul>
                                    <li class="md:text-base text-xs pb-5 font-semibold">
                                        Модель:
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Модификация:
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Цена на аукционе:
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Год выпуска:
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Пробег:
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Трансмиссия:
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Цвет:
                                    </li>
                                </ul>
                                <ul>
                                    <li class="md:text-base text-xs font-medium pb-5">
                                        <?php echo the_field('модель'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-medium pb-5">
                                        <?php echo the_field('модификация'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-medium pb-5">
                                        <?php echo the_field('год_выпуска'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-medium pb-5">
                                        <?php echo the_field('год_выпуска'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-medium pb-5">
                                        <?php echo the_field('пробег'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-medium pb-5">
                                        <?php echo the_field('трансмиссия'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-medium pb-5">
                                        <?php echo the_field('цвет'); ?>
                                    </li>
                                </ul>
                            </div> 
                        </div>
                        <div class="md:w-1/2">
                            <div class="flex justify-between items-center md:pt-10 pt-0">
                                <ul>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Оценка:
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Двигатель:
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Объем двигателя:
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Мощность:
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Топливо:
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Привод:
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Оборудование:
                                    </li>
                                </ul>
                                <ul>
                                    <li class="md:text-base text-xs font-medium pb-5">
                                        <?php echo the_field('двигатель'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-medium pb-5">
                                        <?php echo the_field('объем_двигателя'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-medium pb-5">
                                        <?php echo the_field('объем_двигателя'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-medium pb-5">
                                        <?php echo the_field('Мощность'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-medium pb-5">
                                        <?php echo the_field('топливо'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-medium pb-5">
                                        <?php echo the_field('привод'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-medium pb-5">
                                        <?php echo the_field('оборудование'); ?>
                                    </li>
                                </ul>
                            </div> 
                        </div>
                    </div>

                    <div class="flex items-start justify-start gap-10 flex-wrap">
                        <div class="flex items-center justify-center text-black md:text-2xl text-lg font-bold gap-2">
                            <p>
                                Итоговая стоимость: 
                            </p>
                            <p>
                                1 799 975 ₽
                            </p>
                        </div>
                        
                        
                        <a class="bg-red up py-2 px-10 text-white rounded-lg popup-link"
                        href="#popup1">Заказать авто</a>
                        
                    </div>
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
                                <?php
                                    $my_posts = get_posts(array(
                                        'numberposts' => -1,
                                        'category_name' => 'finished',
                                        'order' => 'title',
                                        'post_type' => 'post',
                                        'suppress_filters' => true
                                    ));

                                    foreach ($my_posts as $post) : setup_postdata($post);
                                ?> 
                                    <div class="p-2 swiper-slide animate">
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="" src="<?php the_field('главное_фото'); ?>" width="440" height="380" alt="вправо" >
                                    </a>
                                    <div class="flex flex-col items-center md:items-start">
                                        <div class="font-bold pb-5"><?php the_field('название_машины'); ?></div>
                                        
                                        <div class="flex flex-col md:flex-row pb-5">
                                            <div class="flex items-center">
                                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/year.svg'; ?>" alt="">
                                                <p class="pl-3 pr-5 text-gray"><?php the_field('дата'); ?></p>
                                            </div>
        
                                            <div class="flex items-center">
                                                <img src="<?php echo get_template_directory_uri('') . '/src/img/icons/icon.svg'; ?>" alt="">
                                                <p class="pl-3 pr-5 text-black font-bold"><?php the_field('сумма_в_рублях_с_пробелами_выполнено'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>    

                                <?php endforeach; ?>
                                <?php wp_reset_postdata(); ?>
     
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