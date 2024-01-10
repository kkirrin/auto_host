<?php
/*
    Template Name: finished
*/

?>

<?php get_header(); ?>


        <main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>

        
            <section class="wow fadeInUp md:py-40 py-10" data-wow-delay="0.3s"">
                <div class="container py-20">
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
                    <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative">Выполненные заказы </h2>
                    
                    <div class="flex items-start justify-start flex-wrap">
                       
                    <?php
                            $posts_per_page = 2;  
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
                            <div class="animate p-2">
                            <a href="<?php echo the_permalink(); ?>" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                <img class="" src="<?php echo the_field('главное_фото'); ?>" width="440" height="380" alt="вправо" >
                            </a>
                            <div class="flex flex-col items-center md:items-start">
                                <div class="font-bold pb-5"><?php echo the_field('название_машины'); ?></div>
                                
                                <div class="flex flex-col md:flex-row pb-5">
                                    <div class="flex items-center">
                                        <img src="<?php echo get_template_directory_uri() . '/src/img/icons/Frame.svg'; ?>" alt="">
                                        <p class="pl-3 pr-5 text-gray"><?php echo the_field('дата'); ?></p>
                                    </div>

                                    <div class="flex items-center">
                                        <img src="<?php echo get_template_directory_uri() . '/src/img/icons/icon.svg'; ?>" alt="">
                                        <p class="pl-3 pr-5 text-black font-bold"><?php echo the_field('сумма_в_рублях_с_пробелами_выполнено'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <?php
                    }

                        $pag_args = array(
                            'total' => $query->max_num_pages,
                            'current' => max(1, $paged),
                            'prev_text' => '&laquo;',
                            'next_text' => '&raquo;',
                        );

                        echo paginate_links($pag_args);

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

            
        </main>

<?php get_footer(); ?>