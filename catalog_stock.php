<?php 
    /*
    Template Name: catalog_stock
    */
?>

<?php get_header(); ?>

        <main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>

                <div class="container bg-black w-full">
                    <div>
                        <ul>
                            
                            <li class="opacity-60 text-white">
                                Главная /
                            </li>
                            <li class="breadcrumb__item">
                                <span class="opacity-60 text-white">Каталог</span>
                            </li>
                        </ul>
                    </div>
                </div>
            
         
      
                <section class="md:py-44 py-10 bg-black relative overflow-hidden" style="background-image: url('<?php echo get_template_directory_uri() . '/src/img/main/catalog-bg.png'; ?>'); background-position: center; background-repeat: no-repeat;">
                    <!-- <div class="absolute left-0 md:bottom-44 bottom-0 padding_auc">
                        <a href="https://auc.avtopotencial-dv.ru/" target="_blank">
                            <div class="flex flex-col items-center mb-4 bg-red rounded-md p-2">  
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
                        
                        
                            <div class="bg-black rounded">
                                        <a class="get up bg-red text-white text-xs rounded-lg popup-link" href="#popup4">
                                Инструкция по регистрации
                                    </a>
                            </div>
                        
                    </div> -->
                    <div class="container">
                        
                        <h2 class="text-start text-white font-normal md:text-5xl text-xl uppercase py-5">
                            Авто в наличии
                        </h2>      

                        <div class="flex flex-wrap items-start justify-start gap-10 pb-10">
                            <a href="/japancar/" class="up py-3 px-8 text-white rounded-md text-opacity-50 bg-bg-gray">
                                Авто с аукционов
                            </a>
                            <a href="/%d0%b0%d0%b2%d1%82%d0%be-%d0%b8%d0%b7-%d0%ba%d0%be%d1%80%d0%b5%d0%b8/" class="up py-3 px-8 text-white rounded-md text-opacity-50 bg-bg-gray">
                                Авто из Кореи
                            </a>
                            <a href="/%d0%b0%d0%b2%d1%82%d0%be-%d0%b2-%d0%bd%d0%b0%d0%bb%d0%b8%d1%87%d0%b8%d0%b8/" class="up py-3 px-8 text-white rounded-md text-opacity-50 bg-bg-gray">
                                Авто в наличии
                            </a>
                        </div>

                        <div class="bg_search w-full rounded-xl">
                            <div class="container w-full rounded-xl">
                                <form class="pt-10 pb-10 grid grid-cols-1 md:grid-cols-2 gap-4 uppercase">     
                                    <?php echo do_shortcode( '[fe_widget id=290]' ); ?>	
                                </form>
                            </div>	

                        </div>
                    </div>
                </section>

                <section class="w-full relative pt-20 pb-10 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="flex items-start justify-start flex-wrap ">     
                        <?php
                            $posts_per_page = 10;  
                            // Текущая страница
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 

                            $args = array(
                                'posts_per_page' => $posts_per_page,
                                'paged' => $paged,
                                'category_name' => 'in_stock',
                                'order' => 'title',
                                'post_type' => 'post',
                                'suppress_filters' => true
                            );
                            $query = new WP_Query($args);

                            while ($query->have_posts()) {
                                $query->the_post();
                            ?>
                            <div class="p-3 animate img_car--finish">
                                <div class="md:w-auto w-full">
                                    <a href="<?php the_permalink(); ?>" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black right-5 md:bottom-6 bottom-2">
                                        <img class="img_car" src="<?php the_field('фото_машины'); ?>?>" alt="вправо"  width="430" height="460">
                                    </a>
                                    <div class="flex flex-col items-start gap-4 justify-between body_stock">
                                        <div class="md:text-3xl text-xl font-medium pt-4"><?php the_field('marka_name'); ?> <?php the_field('model_name'); ?></div>
                                        <div class="flex flex-row">
                                            <div class="flex items-center">
                                                <img class="pr-1 " src="<?php echo get_template_directory_uri() . '/src/img/icons/speed.svg'; ?>" alt="" >
                                                <p class="md:pr-3 pr-1  md:text-base text-xs"><?php the_field('value');?>л, <?php the_field('transmission');?>, <?php the_field('auto_mileage');?>км</p>
                                            </div>
                                            <div class="flex items-center">
                                                <img class="pr-1 " src="<?php echo get_template_directory_uri() . '/src/img/icons/color.svg'; ?>" alt="" >
                                                <p class="md:pr-3 pr-1  md:text-base text-xs"><?php the_field('цвет'); ?></p>
                                            </div>
                                            <div class="flex items-center">
                                                <img class="pr-1 " src="<?php echo get_template_directory_uri() . '/src/img/icons/year.svg'; ?>" alt="" >
                                                <p class="md:pr-3 pr-1  md:text-base text-xs"><?php the_field('year'); ?></p>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-4">
                                            <p class="md:text-xl text-base">
                                                <span class="font-bold"><?php the_field('price'); ?> ₽</span>
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

            <?php 
                $pag_args = array(
                    'total' => $query->max_num_pages,
                    'current' => max(1, $paged),
                    'prev_text' => '<',
                    'next_text' => '>',
                );
                
                echo '<div class="pagination">';
                echo paginate_links($pag_args);
                echo '</div>';

            ?>

           
        </main>

<?php get_footer(); ?>