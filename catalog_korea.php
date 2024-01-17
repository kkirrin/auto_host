<?php 
    /*
    Template Name: catalog_korea
    */
?>

<?php 

    function aj_get($sql) {

        ##----- CONFIG ---------
        $code='APTnghDfD64KJ';       ## REQUIRED
        $server='78.46.90.228'; ## optional :: $server='144.76.203.145'; 
        $go='api';              ## optional :: $go='gzip'; // gzip work faster

        ## SET IP,URL
        $ip = $_SERVER['HTTP_CF_CONNECTING_IP']=='' ? $_SERVER['REMOTE_ADDR'] : $_SERVER['HTTP_CF_CONNECTING_IP'];
        $url = 'http://'.$server.'/'.$go.'/?ip='.$ip.'&json&code='.$code.'&sql='.urlencode(preg_replace("/%25/","%",$sql));

        ## DEBUG
        echo "<hr><a style='font-size:12px' href='$url'>".$url."</a><hr>";

        ## API REQUEST
        $s = file_get_contents($url);
        //echo $s;

        ## GZIP DECODE
        if ($go=='gzip') {
            $s = $server=='144.76.203.145' ? gzinflate(substr($s,10,-8)) : 
                gzuncompress(preg_replace("/^\\x1f\\x8b\\x08\\x00\\x00\\x00\\x00\\x00/","",$s));
        }

        $arr = json_decode($s,true);  //die(var_export($arr));
        // echo gettype($arr);
        return $arr;
    }
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
            
         
      
                <section class="bg-black relative md:py-44 py-10 overflow-hidden wow fadeInUp" data-wow-delay="0.3s" style="background-image: url('<?php echo get_template_directory_uri() . '/src/img/main/catalog-bg.png'; ?>'); background-position: center; background-repeat: no-repeat;">

                    <!-- <div class="absolute md:-top-24 -top-0 right-0">
                        <img src="./src/img/main/catalog-bg.png" alt="">
                    </div> -->
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
                        
                        <h2 class="text-start text-white font-normal md:text-5xl text-xl uppercase py-5">
                            Корейские машины
                        </h2>      

                        <div class="flex flex-wrap items-start justify-start gap-10 pb-10">
                            <a href="/%d0%b0%d0%b2%d1%82%d0%be-%d0%b8%d0%b7-%d1%8f%d0%bf%d0%be%d0%bd%d0%b8%d0%b8/" class="up py-3 px-8 text-white rounded-md text-opacity-50 bg-bg-gray">
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
                                    
                                    <?php echo do_shortcode( '[fe_widget id=280]' ); ?>	
                                    
                                        <?php while ( have_posts() ) : the_post(); ?>
                                    
                                        <?php get_template_part('korea') ?>
                                        
                                        <?php endwhile; ?>	
                                    
                                    <?php 
                                    the_posts_pagination( array(
                                        'mid_size' => 2,
                                        'prev_text'    => __('&#8592; Предыдущая'),
                                        'next_text'    => __('Следующая &#8594;')
                                    ) );
                                    ?> 
                                    <div class="mobile-pagination">
                                        <div class="navigation"><?php posts_nav_link(' ','&#8592; Предыдущая &nbsp;','&nbsp; Следующая &#8594;'); ?></div>
                                    </div>
                                </form>
                            </div>	

                        </div>


                        </div>
                    </div>
                </section>

                <section class=" w-full relative pt-20 pb-10 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="flex items-start justify-start flex-wrap ">

                        
                        <?php
                            $posts_per_page = 2;  
                            // Текущая страница
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 

                            $args = array(
                                'posts_per_page' => $posts_per_page,
                                'paged' => $paged,
                                'category_name' => 'korea',
                                'order' => 'title',
                                'post_type' => 'post',
                                'suppress_filters' => true
                            );
                            $query = new WP_Query($args);

                            while ($query->have_posts()) {
                                $query->the_post();
                            ?>
                            <div class="p-3 animate body_car_wp">
                                <div class="md:w-auto w-full">
                                    <a href="#">
                                        <img class="" src="<?php the_field('фото_машины'); ?>?>" alt="вправо"  width="430" height="460">
                                    </a>
                                    <div class="flex flex-col items-start gap-4 justify-between">
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
                                                <p class="md:pr-3 pr-1  md:text-base text-xs"><?php the_field('year'); ?> г.</p>
                                            </div>
                                        </div>
                                        <div class="flex flex-row gap-4">
                                            <p class="md:text-xl text-base">
                                                <span class="font-bold"><?php the_field('price'); ?> ₽</span> (<?php the_field('сумма_в_юанях_с_пробелами');?> ¥)
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