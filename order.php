<?php
/*
    Template Name: order
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
        
        <img class="absolute order_img" src="<?php echo get_template_directory_uri() . '/src/img/contact/bg2.png'; ?>" alt="">
        <div class="bg-black">
            <section class="order  h-auto md:pt-40 py-10 relative">
                    <!-- <img class=" -z-10" src="<?php echo get_template_directory_uri() . '/src/img/contact/bg2.png'; ?>" alt=""> -->
                    <div class="absolute right-0 md:bottom-52 bottom-6 z-10 padding_auc">
                        <a href="https://auc.avtopotencial-dv.ru/">
                            <div class="flex flex-col items-center mb-2 bg-bg-gray rounded-md p-2">  
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

                    <div class="container z-0 ">
                        
                        <h2 class="text-center text-white z-10 font-normal md:text-5xl text-xl uppercase">
                            <span class="text-yellow">Доставка</span> автомобилей
                        </h2>
                        <div class="z-10">
                            <p class="md:text-xl text-sm text-white font-bold md:py-10 pt-2">
                                Мы оказываем полный перечень услуг для наших клиентов. Осуществляем доставку приобретённой техники из пункта отправки в порт РФ. По предварительной договорённости осуществляем доставку в любую точку России, быстро и надёжно.
                                <img class="order_img--small" src="<?php echo get_template_directory_uri() . '/src/img/contact/bg2.png'; ?>" alt="">
                            </p>
                            
                            <img class="order_car absolute top-64 right-5" src="<?php echo get_template_directory_uri() . '/src/img/contact/order.webp'; ?>" alt="">
                        </div>
                    </div>
                    
                </section>
            </div>
        <section class="finished-swiper py-20 wow fadeInUp" data-wow-delay="0.4s"">
            <div class="container">
                
                <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative pb-10">О доставке </h2>
                    <p class="pb-5 font-medium md:text-xl text-sm">
                        Доставка приобретённой техники из Японии до порта г. Владивосток осуществляется паромом и контролируется на каждом её этапе. Вы можете не переживать за сохранность вашего груза. В среднем, срок доставки составляет 3-4 недели.
                    </p>
                    <p class="pb-5 font-medium md:text-xl text-sm">
                        При необходимости, мы поможем вам с доставкой по России. Для этого просто предупредите нас заранее и сообщите населённый пункт, куда необходимо будет доставить технику, и наши специалисты рассчитают вам стоимость доставки. Мы будем сопровождать вашу технику с момента вашего обращения к нам до получения её вами в указанном населённом пункте.
                    </p>
            </div>
        </section>

        <section class="japan-swiper pb-20 wow fadeInUp " data-wow-delay="0.4s"">
                <div class="container">

                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-xl lg:text-5xl text-jost font-extrabold line uppercase relative">сейчас на аукционах японии </h2>
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

                                        $offset = ((int)$_GET['page']-1)*20;
                                        $arr = aj_get("select id, model_id, model_name, marka_name, marka_id, color, mileage, eng_v, kpp, avg_price, year, images from main where marka_name='toyota' group by model_id order by model_name limit 30");

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
                                                    <a href="/car_card?id=' . $id . '" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black right-5 md:bottom-6 bottom-2">
                                                        <img class="brd" src=' . $img1. ' width="430" height="460" alt="вправо" >
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


</main>

<?php get_footer(); ?>