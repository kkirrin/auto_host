<?php
/*
    Template Name: В наличии (корейские)
    Template Post Type: post
*/

?>

<?php get_header(); ?>
        <main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>
            <section class="md:py-40 py-32">
                <div class="container">
                    <div class="absolute left-0 md:bottom-44 bottom-0 padding_auc">
                        <a href="https://auc.avtopotencial-dv.ru/" target="_blank">
                            <div class="flex flex-col items-center mb-4 bg-red rounded-md p-2">  
                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/online.svg'; ?>" alt="">
                                <p class="text-white md:text-base text-xs">Онлайн-аукцион</p>
                            </div>
                        </a>

                        <a href="#" class="hidden">
                            <div class="flex flex-col items-center bg-bg-gray bg-opacity-50 rounded-md p-2">
                                <img src="<?php echo get_template_directory_uri() . '/src/img/icons/chat.svg'; ?>" alt="">
                                <p class="text-white md:text-base text-xs">Онлайн-чат</p>
                            </div>
                        </a>
                        
                        
                            <div class="rounded">
                                        <a class="get get--auc up bg-red text-white text-xs rounded-lg popup-link" href="#popup4">
                                Инструкция
                                    </a>
                            </div>
                        
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
                                                        echo '<img class="img_car md:w-[650px] md:h-[500px] w-[335px] h-[290px]" src="' . esc_url($photo['url']) . '" alt="">';
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
                                                        echo '<img class="img_car md:w-24 md:h-24 w-[60px] h-[60px]" src="' . esc_url($photo['url']) . '" alt="">';
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
                                <?php the_field('marka_name'); ?> <?php the_field('model_name'); ?>
                            </h3>
                            <div class="flex justify-between items-center pt-10">
                                <ul>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Марка
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Модель
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
                                     <li class="md:text-base text-xs font-semibold pb-5">
                                        Топливо
                                    </li>
                                     <li class="md:text-base text-xs font-semibold pb-5">
                                        Цвет
                                    </li>
                                    <!--  
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Лот
                                    </li> -->
                                    <li class="md:text-base text-xs font-semibold pb-5">
                                        Цена
                                    </li>
                                </ul>
                                <ul>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php the_field('marka_name'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php the_field('model_name'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php the_field('year'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php the_field('тип_кузова'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php the_field('тип_двигателя'); ?>
                                    </li>
                                    <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php the_field('value'); ?> л
                                    </li>
                                     <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php the_field('fuel'); ?>
                                    </li>
                                     <li class="md:text-base text-xs font-semibold pb-5 card_item--li">
                                        <?php the_field('цвет'); ?>
                                    </li>
                                    <!-- 
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
                                    href="#popup2">Заказать авто</a>
                                </div>
                                
                                
                            </div>
                        </div>
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

            <section id="popup2" class="popup">
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
                                <p class="text-white md:text-base text-sm"><?php echo the_field('marka_name'); ?> <?php  echo the_field('модель'); ?></p>
                            </div>
                        
                            <div>
                                <p class="text-yellow font-bold md:text-xl text-sm"><?php the_field("price"); ?> ₽</p>               
                            </div>
                        </div>


        
                        <div class="form-wrapper form validate-form flex-col">      
                            <?php echo do_shortcode('[contact-form-7 id="db5b26d" title="Заявка авто определенное"]');?>
                        </div>
                        <p class="form-section__descriptions w-full">Нажимая кнопку “Получить консультацию” я даю согласие на <a
                        class="underline" href="#" target="_blank" rel="noopener noreferrer">обработку персональных
                                данных</a></p>
                    </div>
                </div>
            </section>

            <script type="text/javascript">
                jQuery('#order_name').attr('value', "<?php echo get_field('marka_name') . ' ' . get_field('модель'); ?>");
                jQuery('#order_price').attr('value', "<?php echo get_field('price'); ?>");
            </script>
      
        
        </main>

<?php get_footer(); ?>