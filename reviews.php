<?php
/*
    Template Name: reviews
*/

?>

<?php get_header(); ?>

        <main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>

        
            <section class="md:py-40 py-10 wow fadeInUp" data-wow-delay="0.2">
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
                    <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative">Отзывы клиентов </h2>
                    
                    <div class="flex items-start justify-start flex-wrap">
                    <?php
                            $posts_per_page = 8;  
                            // Текущая страница
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 

                            $args = array(
                                'posts_per_page' => $posts_per_page,
                                'paged' => $paged,
                                'category_name' => 'review',
                                'order' => 'title',
                                'post_type' => 'testimonial',
                                'suppress_filters' => true
                            );
                            $query = new WP_Query($args);

                            while ($query->have_posts()) {
                                $query->the_post();
                            ?>
                            <div class="p-2 animate">
                                <div class="flex flex-col items-center justify-between md:w-auto w-full">
                                    <div class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black right-5 md:bottom-6 bottom-2">
                                        <video controls poster="<?php the_field('постер_отзыва'); ?>" alt="отзыв">
                                            <source src="<?php the_field('видео_отзыва'); ?>" type="video/mp4"> 
                                            <source src="<?php the_field('видео_отзыва'); ?>" type="video/webm"> 
                                        </video>
                                        </a>
                                        <div class="flex flex-col items-center md:items-start">
                                            <div class="font-bold pb-5"><?php the_field('название_отзыва'); ?></div>
                                            <div class="font-medium pb-5 reviews_body">
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
                            </div> 
                        <?php
                    }

                    $pag_args = array(
                        'total' => $query->max_num_pages,
                        'current' => max(1, $paged),
                        'prev_text' => '<',
                        'next_text' => '>',
                    );
                    
                    echo '<div class="pagination">';
                    echo paginate_links($pag_args);
                    echo '</div>';

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