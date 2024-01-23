<?php 
/*
Template Name: autopotencial
*/
?>

<?php get_header(); ?>

<?php 
    
    function aj_get($sql) {
        error_reporting(0);

        ##----- CONFIG ---------
        $code='APTnghDfD64KJ';       ## REQUIRED
        $server='78.46.90.228'; ## optional :: $server='144.76.203.145'; 
        $go='api';              ## optional :: $go='gzip'; // gzip work faster

        ## SET IP,URL
        $ip = $_SERVER['HTTP_CF_CONNECTING_IP']=='' ? $_SERVER['REMOTE_ADDR'] : $_SERVER['HTTP_CF_CONNECTING_IP'];
        $url = 'http://'.$server.'/'.$go.'/?ip='.$ip.'&json&code='.$code.'&sql='.urlencode(preg_replace("/%25/","%",$sql));

        ## DEBUG
        // echo "<hr><a style='font-size:12px' href='$url'>".$url."</a><hr>";

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

    <main>
            <h1 class="visually-hidden">Скрытый заголовок</h1>

            <section class="main-swiper limit_main overflow-hidden h-screen pt-20 md:max-h-full max-h-[600px]">
                <div class="main-wrapper">
                    <div class="main-item relative">

                        <div class="swiper-pagination"></div>
                        

                        
                        <div class="swiper-wrapper h-auto">
                        <div class="absolute right-0 md:bottom-52 bottom-0 padding__cosu">
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
                            <div class="swiper-slide autoheight relative bg-black -z-10 max-h-screen">
                                <div class="flag relative">
                                    <img class="absolute top-0 right-0 z-10 sm:w-full sm:h-auto" src="<?php echo get_template_directory_uri() . '/src/img/main/bg-slide1.png'; ?>" alt="">
                                    <img class="wheel absolute top-28 right-0 z-10 md:w-80 w-48" src="<?php echo get_template_directory_uri() . '/src/img/main/japan.png'; ?>" alt="">
                                    <img class="oblaco absolute top-1/2 right-0 z-10 md:w-[1130px] w-96" src="<?php echo get_template_directory_uri() . '/src/img/main/oblaco.svg'; ?>" alt="">
                                </div>
                                <div class="container text-4xl md:text-5xl pt-24 relative z-10">
                                    <h2 class="text-center text-white z-10 font-normal md:text-5xl text-xl uppercase">
                                        Автомобили <span class="text-yellow">из Японии</span> с доставкой во владивосток
                                    </h2>
                                    <p class="pt-10 z-10 text-center font-bold md:text-xl text-base text-white">Подберем под Ваш бюджет, привезем в РФ, растаможим, оформим документы и доставим до Вас</p>
                                    <div class="relative">
                                        <img class="slide2 absolute right-0 z-10" src="<?php echo get_template_directory_uri() . '/src/img/main/slide1.webp'; ?>" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="swiper-slide autoheight bg-black -z-10">
                                <div class="flag2 relative">
                                    <img class="absolute top-0  right-0 z-10 sm:w-full sm:h-auto" src="<?php echo get_template_directory_uri() . '/src/img/main/bg-slide2.png'; ?>" alt="">
                                    <img class="wheel absolute top-16 right-0 z-10 md:w-96 w-48" src="<?php echo get_template_directory_uri() . '/src/img/main/korea.png'; ?>" alt="">
                                    <img class="oblaco absolute top-1/2 right-0 z-10 md:w-[1130px] w-96" src="<?php echo get_template_directory_uri() . '/src/img/main/oblaco.svg'; ?>" alt="">
                                </div>
                                <div class="container text-5xl md:text-9xl pt-24 relative z-10">
                                    <h2 class="text-center text-white z-10 font-normal md:text-5xl text-xl uppercase">
                                        Автомобили <span class="text-yellow">из кореи</span> с доставкой во владивосток
                                    </h2>
                                    <p class="pt-10 z-10 text-center font-bold md:text-xl text-base text-white">Подберем под Ваш бюджет, привезем в РФ, растаможим, оформим документы и доставим до Вас</p>
                                    <div class="relative">
                                        <img class="slide2 absolute right-0 z-10" src="<?php echo get_template_directory_uri() . '/src/img/main/slide2.webp'; ?>" alt="">
                                    </div>
                                
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="japan-swiper pt-20 wow fadeInUp " data-wow-delay="0.4s"">
                <div class="container">

                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative  title_slider">сейчас на аукционах японии </h2>
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
     
                                    <?php 

                                        $arr = aj_get("select model_id,model_name from stats where marka_name='toyota'");
                                        $_GET['page']=2;
                                        $offset = ((int)$_GET['page']-1)*20;
                                        $arr = aj_get("select id, model_id, model_name, marka_name, marka_id, color, mileage, eng_v, kpp, avg_price, year, images from main where marka_name='toyota' group by model_id order by model_name limit 40");

                                        foreach ($arr as $v) {
                                            $avgPrice = $v['AVG_PRICE']; 
                                            $priceRub = round($avgPrice * 0.61, 2);
                                            $year = $v['YEAR'];
                                            $kpp = $v['KPP'];
                                            $mileage = $v['MILEAGE'];
                                            $color = $v['COLOR'];
                                            $engine_value = $v['ENG_V'];
                                            $name_car = $v['MODEL_NAME'];
                                            $id_car = $v['MODEL_ID'];
                                            $name_model = $v['MARKA_NAME'];
                                            $id_model = $v['MARKA_ID'];
                                            $id = $v['ID'];

                                            list($img1, $img2) = explode('#', $v['IMAGES']);
                                            $img1 = str_replace("&h=50", "&w=320", $img1);
                                        
                                            echo '  
                                            <div class="swiper-slide p-5 animate">
                                                <div class="md:w-auto w-full">
                                                    <a href="car_card?id='.$id.'" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black right-5 md:bottom-6 bottom-2">
                                                        <img class="img_car" src=' . $img1. ' width="430" height="460" alt="вправо" >
                                                    </a>
                                                    <div class="flex flex-col items-start gap-4 justify-between">
                                                        <div class="md:text-3xl text-xl font-medium pt-4">'.$name_car.'</div>
                                                        <div class="flex flex-row">
                                                            <div class="flex items-center">
                                                                <img class="" src="' . get_template_directory_uri() . '/src/img/icons/speed.svg " alt="" >
                                                                <p class="md:pr-3 pr-1  md:text-base text-xs">'.$engine_value.' '.$kpp.' '.$mileage.'</p>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <img class="pr-1 " src="' .get_template_directory_uri() . '/src/img/icons/color.svg" alt="" >
                                                                <p class="md:pr-3 pr-1  md:text-base text-xs">'.$color.'</p>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <img class="pr-1 " src="' .get_template_directory_uri() . '/src/img/icons/year.svg" alt="" >
                                                                <p class="md:pr-3 pr-1  md:text-base text-xs">'.$year.'</p>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-row gap-4">
                                                            <p class="md:text-xl text-base">
                                                                <span class="font-bold">'. $priceRub .'  ₽</span> ('. $avgPrice .' ¥)
                                                            </p>
                                                            <a class="up bg-red py-2 px-5 text-white rounded-lg" href="car_card?id='.$id.'">
                                                                Заказать
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>    
                                                ';
                                        }
                                    ?>    

                                    <?php 

                                        if(isset($_GET['id'])) {
                                            $arr = aj_get("select * from main where id='".$id."'");
                                        
                                            echo '<div class=img_position>';
                                            foreach (explode('#',$arr[0]['IMAGES']) as $key=>$img) {
                                            ## AUCTION SHEET CAN BE BIG. OTHER PHOTOS SET TO 320PX
                                            $img = $key==0 ? $img : $img.'&w=320';
                                            echo "<a href='$img'><img src='$img' width=500px onload='image_nofoto(this);'></a>";
                                            }
                                            echo '</div>
                                        
                                            <table class=tb cellpadding=0 cellspacing=0>';
                                            foreach($arr[0] as $key => $val) {
                                            if ($key=='IMAGES'||$key=='AVG_STRING'||$key=='TIME') {continue;}
                                            if ($key=='INFO' && is_array($val)) {$val=var_export($val,true);} ## if INFO array
                                            echo "<tr><td class=h>$key</td><td style='width:320px'>$val</td></tr>\n";
                                            }
                                            echo '</table>
                                        
                                            <script>
                                            function image_nofoto(el) {
                                            if( (el.naturalWidth==319||el.naturalWidth==1) && /\.ajes\.com/.test(el.src)){
                                                el.parentElement.style.display="none";
                                            }
                                            }</script>';
                                        }

                                    ?>
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
                            <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative title_slider">Автомобили из Кореи </h2>
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
                            <?php
                                    $my_posts = get_posts(array(
                                        'numberposts' => 25,
                                        'category_name' => 'korea',
                                        'order' => 'title',
                                        'orderby' => 'rand',
                                        'post_type' => 'post',
                                        'suppress_filters' => true
                                    ));

                                    foreach ($my_posts as $post) : setup_postdata($post);
                                ?> 
                                    <div class="swiper-slide p-3 animate">
                                        <div class="md:w-auto w-full">
                                            <a href="<?php echo the_permalink(); ?>" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black right-5 md:bottom-6 bottom-2">
                                                <img class="img_car" src="<?php the_field('фото_машины'); ?>?>" alt="вправо"  width="430" height="460">
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
                                                        <p class="md:pr-3 pr-1  md:text-base text-xs"><?php the_field('year'); ?> год</p>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row gap-4">
                                                    <p class="md:text-xl text-base">
                                                        <span class="font-bold"><?php the_field('price'); ?> ₽</span>
                                                    </p>
                                                    <a class="up bg-red py-2 px-5 text-white rounded-lg " href="<?php echo the_permalink(); ?>">
                                                        Заказать
                                                    </a>
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
                            <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative title_slider">автомобили в наличии </h2>
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
                                        'numberposts' => 25,
                                        'category_name' => 'in_stock',
                                        'order' => 'title',
                                        'orderby' => 'rand',
                                        'post_type' => 'post',
                                        'suppress_filters' => true
                                    ));

                                    foreach ($my_posts as $post) : setup_postdata($post);
                                ?> 
                                    <div class="swiper-slide p-3 animate">
                                        <div class="md:w-auto w-full">
                                            <a href="<?php echo the_permalink(); ?>" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black right-5 md:bottom-6 bottom-2">
                                                <img class="img_car" src="<?php the_field('фото_машины'); ?>?>" alt="вправо"  width="430" height="460">
                                            </a>
                                            <div class="flex flex-col items-start gap-4 justify-between">
                                                <div class="md:text-3xl text-xl font-medium pt-4"><?php the_field('бренд'); ?> <?php the_field('модель'); ?></div>
                                                <div class="flex flex-row">
                                                    <div class="flex items-center">
                                                        <img class="pr-1 " src="<?php echo get_template_directory_uri() . '/src/img/icons/speed.svg'; ?>" alt="" >
                                                        <p class="md:pr-3 pr-1  md:text-base text-xs"><?php the_field('объем_двигателя');?>л, <?php the_field('трансмиссия');?>, <?php the_field('пробег');?>км</p>
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
                                                        <span class="font-bold"><?php the_field('сумма_в_рублях_с_пробелами'); ?> ₽</span>
                                                    </p>
                                                    <a class="up bg-red py-2 px-5 text-white rounded-lg " href="<?php echo the_permalink(); ?>">
                                                        Заказать
                                                    </a>
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
                            <form id="formForMain" class="pt-10 pb-10 grid grid-cols-1 md:grid-cols-4 gap-4 uppercase">
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
                                        Год 
                                    </label>
                                    <div class="flex gap-10">
                                        <div class="w-full">
                                            <select id="year_from" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
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
                                            <select id="year_to" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500" > 
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
                                
                                
                                <div class="mb-4">
                                    <label class="block text-white text-sm font-medium mb-2" for="make">
                                        Пробег 
                                    </label>
                                    <div class="flex gap-10">
                                        <div class="w-full">
                                            <select id="mileage_from" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option>от</option>
                                                <option>10 000</option>
                                                <option>20 000</option>
                                                <option>30 000</option>
                                                <option>40 000</option>
                                                <option>50 000</option>
                                                <option>60 000</option>
                                                <option>70 000</option>
                                                <option>80 000</option>
                                                <option>90 000</option>
                                                <option>100 000</option>
                                                <option>110 000</option>
                                                <option>120 000</option>
                                                <option>130 000</option>
                                                <option>140 000</option>
                                                <option>150 000</option>
                                                <option>160 000</option>
                                                <option>170 000</option>
                                                <option>180 000</option>
                                                <option>190 000</option>
                                                <option>200 000</option>
                                                <option>210 000</option>
                                                <option>220 000</option>
                                                <option>230 000</option>
                                                <option>240 000</option>
                                                <option>250 000</option>
                                                <option>260 000</option>
                                                <option>270 000</option>
                                                <option>280 000</option>
                                                <option>290 000</option>
                                                <option>300 000</option>
                                            </select>
                                        </div>
                                        <div class="w-full">
                                            <select id="mileage_to" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500" > 
                                                <option>до</option>
                                                <option>10 000</option>
                                                <option>20 000</option>
                                                <option>30 000</option>
                                                <option>40 000</option>
                                                <option>50 000</option>
                                                <option>60 000</option>
                                                <option>70 000</option>
                                                <option>80 000</option>
                                                <option>90 000</option>
                                                <option>100 000</option>
                                                <option>110 000</option>
                                                <option>120 000</option>
                                                <option>130 000</option>
                                                <option>140 000</option>
                                                <option>150 000</option>
                                                <option>160 000</option>
                                                <option>170 000</option>
                                                <option>180 000</option>
                                                <option>190 000</option>
                                                <option>200 000</option>
                                                <option>210 000</option>
                                                <option>220 000</option>
                                                <option>230 000</option>
                                                <option>240 000</option>
                                                <option>250 000</option>
                                                <option>260 000</option>
                                                <option>270 000</option>
                                                <option>280 000</option>
                                                <option>290 000</option>
                                                <option>300 000</option>
                                            </select>
                                        </div>
                                    
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <label class="block text-white text-sm font-medium mb-2" for="make">
                                        Цена 
                                    </label>
                                    <div class="flex gap-10">
                                    <div class="w-full">
                                        <select id="price_from" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                            <option>от</option>
                                            <option>100 000</option>
                                            <option>250 000</option>
                                            <option>500 000</option>
                                            <option>750 000</option>
                                            <option>1 000 000</option>
                                            <option>1 500 000</option>
                                            <option>2 000 000</option>
                                            <option>2 500 000</option>
                                            <option>3 000 000</option>
                                            <option>3 500 000</option>
                                            <option>4 500 000</option>
                                            <option>5 000 000</option>
                                            <option>5 500 000</option>
                                            <option>6 000 000</option>
                                            <option>6 500 000</option>
                                            <option>7 000 000</option>
                                            <option>8 000 000</option>
                                        </select>
                                    </div>
                                    <div class="w-full">
                                        <select id="price_to" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500" > 
                                            <option>до</option>
                                            <option>100 000</option>
                                            <option>250 000</option>
                                            <option>500 000</option>
                                            <option>750 000</option>
                                            <option>1 000 000</option>
                                            <option>1 500 000</option>
                                            <option>2 000 000</option>
                                            <option>2 500 000</option>
                                            <option>3 000 000</option>
                                            <option>3 500 000</option>
                                            <option>4 500 000</option>
                                            <option>5 000 000</option>
                                            <option>5 500 000</option>
                                            <option>6 000 000</option>
                                            <option>6 500 000</option>
                                            <option>7 000 000</option>
                                            <option>8 000 000</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-white text-sm font-medium mb-2" for="make">
                                        Объем 
                                    </label>
                                    <div class="flex gap-10">
                                        <div class="w-full">
                                            <select id="value_from" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option>от</option>
                                                <option>600</option>
                                                <option>700</option>
                                                <option>800</option>
                                                <option>900</option>
                                                <option>1000</option>
                                                <option>1100</option>
                                                <option>1200</option>
                                                <option>1300</option>
                                                <option>1400</option>
                                                <option>1500</option>
                                                <option>1600</option>
                                                <option>1700</option>
                                                <option>1800</option>
                                                <option>1900</option>
                                                <option>2000</option>
                                                <option>2100</option>
                                                <option>2200</option>
                                                <option>2300</option>
                                                <option>2400</option>
                                                <option>2500</option>
                                                <option>2600</option>
                                                <option>2700</option>
                                                <option>2800</option>
                                                <option>2900</option>
                                                <option>3000</option>
                                                <option>3100</option>
                                                <option>3200</option>
                                                <option>3200</option>
                                                <option>3300</option>
                                                <option>3400</option>
                                                <option>3500</option>
                                                <option>3600</option>
                                                <option>3700</option>
                                                <option>3800</option>
                                                <option>3900</option>
                                                <option>4000</option>
                                                <option>4100</option>
                                                <option>4200</option>
                                                <option>4300</option>
                                                <option>4400</option>
                                                <option>4500</option>
                                                <option>4600</option>
                                                <option>4700</option>
                                                <option>4800</option>
                                                <option>4900</option>
                                                <option>5000</option>
                                                <option>5200</option>
                                                <option>5300</option>
                                                <option>5400</option>
                                                <option>5500</option>
                                                <option>5600</option>
                                                <option>5700</option>
                                                <option>5800</option>
                                                <option>5900</option>
                                                <option>6000</option>
                                            </select>
                                        </div>
                                        <div class="w-full custom-select">
                                            <select id="value_to" name="make" class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500" > 
                                                <option>до</option>
                                                <option>600</option>
                                                <option>700</option>
                                                <option>800</option>
                                                <option>900</option>
                                                <option>1000</option>
                                                <option>1100</option>
                                                <option>1200</option>
                                                <option>1300</option>
                                                <option>1400</option>
                                                <option>1500</option>
                                                <option>1600</option>
                                                <option>1700</option>
                                                <option>1800</option>
                                                <option>1900</option>
                                                <option>2000</option>
                                                <option>2100</option>
                                                <option>2200</option>
                                                <option>2300</option>
                                                <option>2400</option>
                                                <option>2500</option>
                                                <option>2600</option>
                                                <option>2700</option>
                                                <option>2800</option>
                                                <option>2900</option>
                                                <option>3000</option>
                                                <option>3100</option>
                                                <option>3200</option>
                                                <option>3200</option>
                                                <option>3300</option>
                                                <option>3400</option>
                                                <option>3500</option>
                                                <option>3600</option>
                                                <option>3700</option>
                                                <option>3800</option>
                                                <option>3900</option>
                                                <option>4000</option>
                                                <option>4100</option>
                                                <option>4200</option>
                                                <option>4300</option>
                                                <option>4400</option>
                                                <option>4500</option>
                                                <option>4600</option>
                                                <option>4700</option>
                                                <option>4800</option>
                                                <option>4900</option>
                                                <option>5000</option>
                                                <option>5200</option>
                                                <option>5300</option>
                                                <option>5400</option>
                                                <option>5500</option>
                                                <option>5600</option>
                                                <option>5700</option>
                                                <option>5800</option>
                                                <option>5900</option>
                                                <option>6000</option>
                                            </select>   
                                            
                                            <!-- <svg class="select-arrow" xmlns="http://www.w3.org/2000/svg" width="21" height="9" viewBox="0 0 21 9" fill="none">
                                                <path d="M20 0.5L10.8519 7.5L1 0.5" stroke="white"/>
                                            </svg> -->
                                        </div>
                                    
                                    </div>
                                </div>
                                
                                
                                <div class="flex items-center justify-center pt-2">
                                    <a class="get up bg-red text-white rounded-lg popup-link" href="#popup3">
                                        Получить расчёт
                                </a>
                                </div>
                                
                                <div class="flex items-center justify-center">
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
                                Компания <span class="text-yellow">«Автопотенциал-ДВ»</span> предоставляет Вам полный спектр профессиональных услуг по покупке автомобилей, транспортировке и таможенному оформлению ТС из Японии, Южной Кореи.  Благодаря многолетнему опыту в автомобильной сфере (с 2010 года) нами было импортировано более 3000 единиц ТС в РФ.
                            </div>
                            
                            <div class="text-white md:text-lg text-sm bg-bg-gray bg-opacity-50 relative md:p-10 md:pr-28 p-5 pr-2 about_index">
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
                        <img class="about_img md:hidden block w-full z-10 wow fadeInRight"  data-wow-delay="0.2s"" src="<?php echo get_template_directory_uri() . '/src/img/about/car_about.png'; ?>" alt="" >
                    </div>
                </div>
            </section>

            <section class="relative bg-black pt-20 z-0 pb-40 wow fadeInUp" data-wow-delay="0.2s"">
                <div class="container relative md:flex items-center">
                    <img class="bg-cover bg-center opacity-90 absolute md:block hidden -z-10" src="<?php echo get_template_directory_uri() . '/src/img/company/bg_company.png'; ?>" alt="">
                    <div class="md:w-1/2">
                        <h2 class="text-white font-normal md:text-3xl text-sm uppercase pb-8">
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
                        <img class="md:block hidden" src="<?php echo get_template_directory_uri() . '/src/img/company/people.webp'; ?>" alt="">
                    </div>
                </div>
                <div class="relative md:w-1/2">
                    <img class="md:hidden block" src="<?php echo get_template_directory_uri() . '/src/img/company/people.webp'; ?>" alt="">
                    <img class="bg-cover bg-center opacity-90 absolute bottom-0 md:hidden block -z-10" src="<?php echo get_template_directory_uri() . '/src/img/company/bg_company.png'; ?>" alt="">
                </div>
                <div class="container">
                <h2 class="text-white font-normal md:text-3xl text-sm uppercase pt-4 pb-8">
                            Наши специалисты
                        </h2>
                <ul class="flex items-start md:justify-between justify-start flex-wrap gap-10 counter-list">
                        <li class="py-3 pr-2 sm:py-7">
                                <img class="spec" src="<?php echo get_template_directory_uri() . '/src/img/company/челик1.webp'; ?>" alt="" >
                            <p class="md:text-xl text-sm text-white pt-3">Менеджер</p>
                        </li>
                        <li class="py-3 pr-2 sm:py-7">
                            <img class="spec" src="<?php echo get_template_directory_uri() . '/src/img/company/челик2.webp'; ?>" alt="" >     
                            <p class="md:text-xl text-sm text-white pt-3">Менеджер</p>
                        </li>
                        <li class="py-3 pr-2 sm:py-7">
                            <img class="spec" src="<?php echo get_template_directory_uri() . '/src/img/company/челик3.webp'; ?>" alt="" >     
                            <p class="md:text-xl text-sm text-white pt-3">Директор</p>
                        </li>
                    </ul>

                    <ul class="flex items-start md:justify-between justify-start flex-wrap gap-10 counter-list">
                        <li class="py-3 pr-2 sm:py-7">
                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="4" viewBox="0 0 73 4" fill="none">
                                <path d="M0 2H72.5" stroke="#FCBC40" stroke-width="4"/>
                            </svg>
                            <p class="font-fontNokia md:text-5xl text-3xl text-yellow uppercase pt-4 pb-4 inline-flex items-center">
                                <span class="counter-years md:text-5xl text-3xl text-yellow uppercase pt-4 pb-4 w-8 sm:w-16"></span>
                                <span class="ml-2">лет</span>
                                </p>
                            <p class="md:text-xl text-sm text-white">опыт в автомобильной сфере</p>
                        </li>
                        <li class="py-3 pr-2 sm:py-7">
                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="4" viewBox="0 0 73 4" fill="none">
                                <path d="M0 2H72.5" stroke="#FCBC40" stroke-width="4"/>
                            </svg>
                            <p class="font-fontNokia md:text-5xl text-3xl text-yellow uppercase pt-4 pb-4 inline-flex items-center">
                                <span class="ml-2 mr-4">более</span>
                                <span class="counter-items md:text-5xl text-3xl text-yellow uppercase pt-4 pb-4 w-8 sm:w-16"></span>
                                </p>
                            <p class="md:text-xl text-sm text-white">единиц ТС в РФ</p>
                        </li>
                        <li class="py-3 pr-2 sm:py-7">
                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="4" viewBox="0 0 73 4" fill="none">
                                <path d="M0 2H72.5" stroke="#FCBC40" stroke-width="4"/>
                            </svg>
                            <p class="font-fontNokia md:text-5xl text-3xl text-yellow uppercase pt-4 pb-4 inline-flex items-center">
                                <span class="ml-2 mr-4">более</span>
                                <span class="counter-client md:text-5xl text-3xl text-yellow uppercase pt-4 pb-4 w-8 sm:w-16"></span>
                                </p>
                            <p class="md:text-xl text-sm text-white">довольных клиентов по всей России</p>
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
                                <a class="absolute bottom-6 bg-yellow py-2 px-10 text-white rounded-lg" href="https://avtopotencial-dv.ru/wp-content/uploads/2024/01/Договор.pdf" download>
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

                            <div class="wrapper_review--btn">
                                <div>
                                    <a href="#">
                                        <div>
                                            <a class="review_btn bg-red up text-white" href="%d0%be%d1%82%d0%b7%d1%8b%d0%b2%d1%8b">
                                                Смотреть все отзывы
                                            </a>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <div>
                                            <a class="review_btn bg-red up text-white popup-link" href="popup2">
                                                Добавить отзыв
                                            </a>
                                        </div>
                                    </a>
                                </div>
                            </div>
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
                                        'numberposts' => 10,
                                        'category_name' => 'review',
                                        'order' => 'title',
                                        'orderby' => 'rand',
                                        'post_type' => 'testimonial',
                                        'suppress_filters' => true
                                    ));

                                    foreach( $my_posts as $post ){

                                        setup_postdata( $post );
                                    ?>  
                                
                                        <div class="swiper-slide p-5">
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
                                                    <img class="img_review img_car" src="<?php the_field('фото_отзыва'); ?>">
                                                    
                                                    <div class="flex flex-col items-center md:items-start" style="background-color: #F6F6F6;">
                                                        <div class="font-bold pb-5"><?php the_field('название_отзыва'); ?></div>
                                                        <div class="textFull font-medium pb-5 body_review truncate">
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
                                                                    <a class="text-yellow hover:text-red" href="<?php the_field('ссылка_на_отзыв'); ?>">Смотреть оригинал</a>
                                                                </div>
                                                            </a>
                                                            
                                                            <div class="pt-4 pb-4 pr-3 pl-3">
                                                                <button class="watchFull text-yellow hover:text-red">Посмотреть полностью</buton>
                                                            </div>
                                                          
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

            <div class="flex justify-center relative">
                <img class="bg-cover bg-center opacity-90  -z-10 md:block hidden" src="<?php echo get_template_directory_uri() . '/src/img/map/map2.png'; ?>" alt="" > 
                
                <div class="contact_div bg-white max-w-xl md:ml-10 ml-0 p-10">
                    <div class="pb-5">
                        <h2 class="text-xl md:text-4xl text-jost font-extrabold line uppercase relative">Контакты </h2>
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
                        <a href="https://api.whatsapp.com/send?phone=79020607575"><img src="<?php echo get_template_directory_uri() .'/src/img/icons_nav/sap.svg'; ?>" alt=""></a>
                        <a href="https://t.me/avtopotencialdv"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/tg.svg'; ?>" alt=""></a>
                        <a href="https://vk.com/avtopotencial_dv"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/vk.svg'; ?>" alt=""></a>
                        <a href="https://instagram.com/avtopotencial"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/inst.svg'; ?>" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCBKiXYVvi1ROscY2_ENwM-Q"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/youtube.svg'; ?>" alt=""></a>
                        </li>
                    </ul>
                </div>


            </div>
            <div class="contact_div2 bg-white max-w-xl md:ml-10 ml-0 p-10">
                    <div class="pb-5">
                        <h2 class="text-xl lg:text-4xl text-jost font-extrabold line uppercase relative">Контакты </h2>
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
                        <a href="https://api.whatsapp.com/send?phone=79020607575"><img src="<?php echo get_template_directory_uri() .'/src/img/icons_nav/sap.svg'; ?>" alt=""></a>
                        <a href="https://t.me/avtopotencialdv"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/tg.svg'; ?>" alt=""></a>
                        <a href="https://vk.com/avtopotencial_dv"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/vk.svg'; ?>" alt=""></a>
                        <a href="https://instagram.com/avtopotencial"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/inst.svg'; ?>" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCBKiXYVvi1ROscY2_ENwM-Q"><img src="<?php echo get_template_directory_uri() . '/src/img/icons_nav/youtube.svg'; ?>" alt=""></a>
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
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-white md:text-base text-sm"></p>
                            </div>
                            
                            <div>
                                <p class="text-yellow font-bold md:text-xl text-sm"></p>
                            </div>
                        </div>

                        <div class="form-wrapper">
                            <!-- <form action="#" id="form" class="form validate-form flex-col">

                            
                                <div class="form__item">
                                    <input id="formName" type="text" name="name" class="form__input _req w-full"
                                        placeholder="Ваше имя">
                                </div>

                                <div class="form__item">
                                    <input id="formPhone" type="tel" name="phone" class="form__input _req w-full"
                                        placeholder="Ваш телефон">
                                </div>

                                <button type="submit" class="form__button button bg-red up py-2 px-10 w-full text-white rounded-lg md:text-base text-sm">Заказать авто</button>
                            </form> -->

                            <?php echo do_shortcode('[contact-form-7 id="d806c55" title="Заявка заказать авто"]'); ?>

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
                        <h2 class="text-start text-white z-10 font-normal md:text-4xl text-xl uppercase pb-10 ">Добавить отзыв</h2>
                        <div class="flex items-center justify-between pb-10">
                            <div>
                                <p class="text-white md:text-base text-sm"></p>
                            </div>
                            
                            <div>
                                <p class="text-yellow font-bold md:text-xl text-sm"></p>
                            </div>
                        </div>

                        <div class="form-wrapper">
                            <!-- <form action="#" id="form" class="form validate-form flex-col">

                            
                                <div class="form__item">
                                    <input id="formName" type="text" name="name" class="form__input _req w-full"
                                        placeholder="Ваше имя">
                                </div>

                                <div class="form__item">
                                    <input id="formPhone" type="tel" name="phone" class="form__input _req w-full"
                                        placeholder="Ваш телефон">
                                </div>

                                <button type="submit" class="form__button button bg-red up py-2 px-10 w-full text-white rounded-lg md:text-base text-sm">Заказать авто</button>
                            </form> -->

                            <?php echo do_shortcode('[contact-form-7 id="74aaf08" title="Заявка на добавление отзыва"]'); ?>

                        </div>
                        <p class="form-section__descriptions w-full">Нажимая кнопку “Получить консультацию” я даю согласие на <a
                                class="underline" href="#" target="_blank" rel="noopener noreferrer">обработку персональных
                                данных</a></p>
                    </div>
                </div>
            </section>

            <section id="popup3" class="popup">
                <div class="popup__body">
                    <div class="popup__content">
                        <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                                <path d="M4 1.45508L19.9099 17.365" stroke="#FCBC40"/>
                                <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#FCBC40"/>
                                </svg>
                        </button>
                        <h2 class="text-start text-white z-10 font-normal md:text-3xl text-xl uppercase pb-10 ">Получить расчёт</h2>
                        <div class="flex items-center justify-between pb-10">
                            <div>
                                <p class="text-white md:text-base text-sm"><span class="text-yellow">Это бесплатно</span> для вас и ни к чему не обязывает</p>
                            </div>
                        </div>

                        <!-- <div class="form-wrapper">
                            <form action="#" id="formMain" class="form validate-form flex-col">

                            
                                <div class="form__item">
                                    <input id="formName" type="text" name="name" class="form__input _req w-full"
                                        placeholder="Ваше имя">
                                </div>

                                <div class="form__item">
                                    <input id="formPhone" type="tel" name="phone" class="form__input _req w-full"
                                        placeholder="Ваш телефон">
                                </div>


                                <div class="form__item hidden">
                                    <input type='hidden' id="formMainMarka" type="text" name="marka">
                                </div>
                                <div class="form__item hidden">
                                    <input type='hidden' id="formMainModel" type="text" name="model">
                                </div>
                                <div class="form__item hidden">
                                    <input type='hidden' id="formMainFuel" type="text" name="fuel">
                                </div>
                                <div class="form__item hidden">
                                    <input type='hidden' id="formMainPrivod" type="text" name="privod">
                                </div>
                                <div class="form__item hidden">
                                    <input type='hidden' id="formMainKpp" type="text" name="kpp">
                                </div>
                                <div class="form__item hidden">
                                    <input type='hidden' id="formMainYearFrom" type="tel" name="phone">
                                </div>
                                <div class="form__item hidden">
                                    <input type='hidden' id="formMainYearTo" type="tel" name="phone">
                                </div>
                                <div class="form__item hidden">
                                    <input type='hidden' id="formMainMileageFrom" type="tel" name="phone">
                                </div>
                                <div class="form__item hidden">
                                    <input type='hidden' id="formMainMileageTo" type="tel" name="phone">
                                </div>
                                <div class="form__item hidden">
                                    <input type='hidden' id="formMainPriceFrom" type="tel" name="phone">
                                </div>
                                <div class="form__item hidden">
                                    <input type='hidden' id="formMainPriceTo" type="tel" name="phone">
                                </div>
                                <div class="form__item hidden">
                                    <input type='hidden' id="formMainValueFrom" type="tel" name="phone">
                                </div>
                                <div class="form__item hidden">
                                    <input type='hidden' id="formMainValueTo" type="tel" name="phone">
                                </div>

                                <button type="submit" class="form__button button bg-red up py-2 px-10 w-full text-white rounded-lg md:text-base text-sm">Заказать авто</button>
                            </form>

                        </div> -->


                        <?php echo do_shortcode('[contact-form-7 id="493fe64" title="Заявка на получение расчета"]'); ?>


                        <p class="form-section__descriptions w-full">Нажимая кнопку “Получить консультацию” я даю согласие на <a
                                class="underline" href="#" target="_blank" rel="noopener noreferrer">обработку персональных
                                данных</a></p>
                    </div>
                </div>
            </section>

    </main>

<?php get_footer(); ?>