<?php
/*
    Template Name: finished
*/

?>

<?php get_header(); ?>


        <main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>

        
            <section class="md:pt-40 md:pb-20 py-10">
                <div class="container py-20">
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
                    <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative">Выполненные заказы </h2>
                    
                    <div class="flex items-start justify-start flex-wrap">
                       
                    <?php
                            $posts_per_page = 9;  
                            // Текущая страница
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 

                            $args = array(
                                'posts_per_page' => $posts_per_page,
                                'paged' => $paged,
                                'category_name' => 'finished',
                                'order' => 'title',
                                'post_type' => 'post',
                                'suppress_filters' => true
                            );
                            $query = new WP_Query($args);

                            while ($query->have_posts()) {
                                $query->the_post();
                            ?>
                            <div class="animate p-2 img_car--finish brd">
                            <a href="<?php echo the_permalink(); ?>">
                                <img class="brd" src="<?php echo the_field('главное_фото'); ?>" alt="<?php echo the_field('модель'); ?>">
                            </a>
                            <div class="ml-2 md:ml-0 flex flex-col items-center md:items-start">
                                <div class="md:text-3xl text-xl font-medium pt-4 font-bold pb-5"><?php echo the_field('marka_name'); ?> <?php echo the_field('модель'); ?></div>
                                
                                <div class="flex flex-col md:flex-row pb-5 items-start md:items-center">
                                    <div class="flex items-center pr-5 mb-2 md:mb-0">
                                        <img src="<?php echo get_template_directory_uri() . '/src/img/icons/Frame.svg'; ?>" alt="Дата">
                                        <p class="pl-3 text-gray"><?php echo the_field('дата'); ?></p>
                                    </div>

                                    <div class="flex items-center">
                                        <img src="<?php echo get_template_directory_uri() . '/src/img/icons/icon.svg'; ?>" alt="Сумма">
                                        <p class="pl-3 text-black font-bold"><?php echo the_field('сумма_в_рублях_с_пробелами_выполнено'); ?> ₽</p>
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