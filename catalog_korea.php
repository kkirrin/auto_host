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
                            <a href="%d0%b0%d0%b2%d1%82%d0%be-%d0%b8%d0%b7-%d1%8f%d0%bf%d0%be%d0%bd%d0%b8%d0%b8/" class="up py-3 px-8 text-white rounded-md text-opacity-50 bg-bg-gray">
                                Авто с аукционов
                            </a>
                            <a href="%d0%b0%d0%b2%d1%82%d0%be-%d0%b8%d0%b7-%d0%ba%d0%be%d1%80%d0%b5%d0%b8/" class="up py-3 px-8 text-white rounded-md text-opacity-50 bg-bg-gray">
                                Авто из Кореи
                            </a>
                            <a href="%d0%b0%d0%b2%d1%82%d0%be-%d0%b2-%d0%bd%d0%b0%d0%bb%d0%b8%d1%87%d0%b8%d0%b8/" class="up py-3 px-8 text-white rounded-md text-opacity-50 bg-bg-gray">
                                Авто в наличии
                            </a>
                        </div>

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
                                    <button class=" text-yellow hover:text-red transition-all py-2 px-10 underline">
                                        Сбросить
                                    </button>
                                </div>


                            </form>

                            <div class="container" style="padding-bottom: 40px;">
                                <div class="catalog-filter">
                                    <?php echo do_shortcode( '[fe_widget]' ); ?>	
                                    <div class="row category-grid">
                                        <?php while ( have_posts() ) : the_post(); ?>
                                    
                                        <?php get_template_part('korea') ?>
                                        
                                        <?php endwhile; ?>	
                                
                                
                                    </div>		 
                                </div>
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
                            </div>	


                        </div>
                    </div>
                </section>

                <section class=" w-full relative pt-20 pb-10 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="container">
                        <div class="flex items-start justify-start flex-wrap ">
                        <?php
                                    $my_posts = get_posts(array(
                                        'numberposts' => -1,
                                        'category_name' => 'korea',
                                        'order' => 'title',
                                        'post_type' => 'post',
                                        'suppress_filters' => true
                                    ));

                                    foreach( $my_posts as $post ){

                                        setup_postdata( $post );
                            ?>  

                                    <div class="p-3 animate">
                                        <div class="md:w-auto w-full">
                                            <a href="#" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                                                <img class="" src="<?php the_field('фото_машины'); ?>?>" alt="вправо"  width="430" height="460">
                                            </a>
                                            <div class="flex flex-col items-start gap-4 justify-between">
                                                <div class="md:text-3xl text-xl font-medium pt-4"><?php the_field('бренд'); ?> <?php the_field('модель'); ?></div>
                                                <div class="flex flex-row">
                                                    <div class="flex items-center">
                                                        <img class="pr-1 " src="<?php echo get_template_directory_uri() . '/src/img/icons/speed.svg'; ?>" alt="" >
                                                        <p class="md:pr-3 pr-1  md:text-base text-xs"><?php the_field('объем_двигателя');?> <?php get_field('трасмиссия');?> <?php get_field('пробег');?></p>
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
