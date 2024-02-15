<?php
/*
    Template Name: reviews
*/

?>

<?php get_header(); ?>

        <main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>

        
            <section class="md:py-40 py-10">
                <div class="container py-20">
                    <div class="absolute left-0 md:bottom-44 bottom-0 padding_auc hidden md:block">
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
                        
                        
                            <div class="bg-black rounded">
                                        <a class="get get--auc up bg-red text-white text-xs rounded-lg popup-link" href="#popup4">
                                Инструкция
                                    </a>
                            </div>
                        
                    </div>
                    <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative">Отзывы клиентов </h2>
                    
                    <div class="flex items-start justify-start flex-wrap">
                    <?php
                            $posts_per_page = 9;  
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
                            <div class="p-2 review_item review_padding" style="padding-right: 15px;">
                                <div class="flex flex-col items-center justify-between md:w-auto w-full">
                                    <div class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black right-5 md:bottom-6 bottom-2">
                                        <?php
                                            $poster = get_field('постер_отзыва');
                                            $video = get_field('видео_отзыва');

                                            if ($poster && $video) {
                                        ?>
                                            <video class="" controls poster="<?php echo $poster; ?>" alt="отзыв">
                                                <source src="<?php echo $video; ?>" type="video/mp4"> 
                                                <source src="<?php echo $video; ?>" type="video/webm"> 
                                            </video>
                                            <?php
                                            }
                                        ?>
                                        <img class="img_review" src="<?php the_field('фото_отзыва'); ?>">
                                   
                                        <div class="flex flex-col items-center md:items-start" style="background-color: #F6F6F6;">
                                            <div class="font-bold pb-5"><?php the_field('название_отзыва'); ?></div>
                                            <div class="textFull font-medium pb-5 body_review">
                                                <?php the_field('текст_отзыва'); ?>
                                            </div>
                                            <div class="flex flex-col md:flex-row pb-5">
                                                <div class="flex items-center">
                                                    <p class="author_review pr-2 text-gray"><?php the_field('автор_отзыва'); ?></p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p class="data_review pr-2 text-gray"><?php the_field('дата_отзыва'); ?></p>
                                                </div>
                                                <div class="flex items-center">
                                                    <p class="city_review pr-2 text-gray"><?php the_field('город_отзыва'); ?></p>
                                                </div>
                                            </div>
                                            <div class="flex flex-col md:flex-row items-center justify-around">
                                                <a href="<?php echo the_field('review_link'); ?>" class="link_review">
                                                    <div class="pt-4 pb-4">
                                                        <a class="text-yellow hover:text-red" href="<?php echo the_field('review_link'); ?>"">Смотреть оригинал</a>
                                                    </div>
                                                </a>                                      
                                            </div>
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
                
                <script>
                        const allImages = document.querySelectorAll('img');
                        // Перебрать все найденные изображения
                        allImages.forEach(function(img) {
                        // Проверить, имеет ли изображение непустой src
                        if (!img.getAttribute('src')) {
                            img.style.display = 'none'; // Скрыть изображение, если src пустой
                        }
                        });
                </script>
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