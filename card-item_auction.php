<?php
/*
    Template Name: card item auction
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
            <section class="md:py-40 py-32">
                <div class="container">
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
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <section class="section product__item">
                            <div class="container">
                              <div class="section__wrapper">
                                <div class="card card--product">
                                    <div class="slider card__slider relative">
                                        <div class="swiper slider__slider">
                                            <div class="swiper-wrapper">
                                               
                                            <?php
                                                $arr = aj_get("select * from main where id='".$_GET['id']."'");
                                                foreach (explode('#',$arr[0]['IMAGES']) as $key=>$img) {
                                                    ## AUCTION SHEET CAN BE BIG. OTHER PHOTOS SET TO 320PX
                                                    $img = $key==0 ? $img : $img.'&w=320';
                                                    echo '<div class="swiper-slide">';
                                                    echo "<a href='$img'><img class='img_car--auc' src='$img' width=500px onload='image_nofoto(this);'></a>";
                                                    echo '</div>';
                                                  }
                                            ?>
                                            </div>
                                       
                                        </div>

                                        <div class="swiper slider__thumb md:pt-10 pt-5 md:w-full w-80 md:relative absolute">
                                            <div class="swiper-wrapper">
                                            
                                            <?php
                                                 $arr = aj_get("select * from main where id='".$_GET['id']."'");
                                                 foreach (explode('#',$arr[0]['IMAGES']) as $key=>$img) {
                                                     ## AUCTION SHEET CAN BE BIG. OTHER PHOTOS SET TO 320PX
                                                     $img = $key==0 ? $img : $img.'&w=320';
                                                     echo '<div class="swiper-slide">';
                                                     echo "<a href='$img'><img class='' src='$img' width=500px onload='image_nofoto(this);'></a>";
                                                     echo '</div>';
                                                 }
                                                    
                                            ?>
                                              
                                            </div>
                                        </div>
                                    </div>
                              </div>
                            </div>
                          </section>

                          <?php 
                                $arr = aj_get("select * from main where id='".$_GET['id']."'");
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
                                $lot = $v['LOT'];
                                $auction = $v['AUCTION'];
                                $kuzov = $v['KUZOV'];
                                $grade = $v['GRADE'];
                                $date_auction = $v['AUCTION_DATE'];
                                $pw = $v['PW'];
                                $rate = $v['RATE'];
                                $serial = $v['SERIAL'];


                                

                                list($img1, $img2) = explode('#', $v['IMAGES']);
                                $img1 = str_replace("&h=50", "&w=320", $img1);
                            
                                echo ' 

                                    <div class="w-full md:pt-0 pt-20">
                                        <h3 class="font-bold md:text-4xl text-xl">
                                            '.$name_model.'  '.$name_car.'
                                        </h3>
                                        <div class="flex justify-between items-center pt-10">
                                        <ul>
                                        
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                Аукцион
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                Дата аукциона
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                Оценка
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                Лот
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                Серийный номер
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                Бренд
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                Год выпуска
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                Кузов
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                Комлектация
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                Цвет
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                Трансмиссия
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                Пробег
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                Объем двигателя
                                            </li>

                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                Цена на аукционе
                                            </li>
                                        </ul>

                                        <ul>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                '.$auction.'
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                '.$date_auction.'
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                '.$rate.'
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                '.$lot.'
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                '.$serial.'
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                '.$name_model.'
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                '.$year.'
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                '.$kuzov.'
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                '.$grade.'
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                '.$color.'
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                '.$kpp.'
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                '.$mileage.'
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                '.$engine_value.'
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                '.$lot.'
                                            </li>
                                            <li class="md:text-base text-xs font-semibold pb-5">
                                                '.$avgPrice.'
                                            </li>
                                        </ul>
                                           
                                        </div>
                                        <div class="flex md:flex-row flex-col items-center justify-between gap-5">
                                            <div class="flex flex-1 gap-5 items-center ">
                                                <p class="font-bold md:text-2xl text-lg">
                                                '.$priceRub.'
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
                                ';
                            }
                        ?> 
                        </div>
                   </div>
                </div>
          
            </section>
            

            <section class=" wow fadeInUp" data-wow-delay="0.4s"">
                <div class="container relative pb-10">
                    <h2 class="text-start text-black z-10 font-normal md:text-4xl text-xl uppercase pb-10">
                        Расшифровка цены
                    </h2>
                    <img class="absolute bottom-0 -right-52 -z-0 md:block hidden" src="<?php echo get_template_directory_uri() . '/src/img/card-item/three2.png'; ?>" alt="">
                    <img class="absolute bottom-44 -right-52 -z-10 md:block hidden" src="<?php echo get_template_directory_uri() . '/src/img/card-item/key.png'; ?>" alt="">
                    <img class="absolute top-40 -z-10 md:hidden block" src="<?php echo get_template_directory_uri() . '/src/img/card-item/three2.png'; ?>" alt="">
                    <img class="absolute top-40 bottom-44 -right-0 -z-20 md:hidden block max-w-xs" src="<?php echo get_template_directory_uri() . '/src/img/card-item/key.png'; ?>" alt="">

                    <div class="flex gap-10 overflow-hidden md:flex-nowrap flex-wrap">
                        
                        <div class=" card__list md:p-10 p-5 md:order-1 order-2">
                            <form>          
                                <div class="bg-yellow p-2 max-w-max mb-3">
                                    
                                ЛОТ № 
                                <?php echo "$lot"?>
                                </div>
                                <div>
                                    <p class="font-bold md:text-2xl text-base pb-3">
                                    <?php echo "$name_model  $name_car"?>
                                    </p>
        
                                    <div class="flex flex-col pb-5 md:text-base text-xs">
                                        <p>Аукцион: <?php echo "$auction"?></p>
                                        <p>Дата: <?php echo "$date_auction"?></p>
                                    </div>
        

                                    <div class="md:text-base text-xs pb-5">
                                        Окончательная стоимость автомобиля во Владивостоке с ПТС
                                        <p id="sum" class="font-bold md:text-base text-xs pt-4">
                                            
                                        </p>
         
                                    </div>
        
                                    <div class="md:text-base text-xs pb-5">
                                        Стоимость авто на аукционе: ("пришло" в долларах -> переведено в рубли)
                                        <p class="font-bold md:text-base text-xs pt-4">
                                            <input class="dollar__price" placeholder="..." value="<?php echo "$avgPrice" ?>">
                                        </p>
                                    </div>
        
                                    <div class="md:text-base text-xs pb-5">
                                        Доставка авто до Владивостока ("пришло" в долларах -> переведено в рубли)
                                        <p class="font-bold md:text-base text-xs pt-4">
                                            <input class="dollar__price" placeholder="..." value="50000">
                                        </p>
                                    </div>

                                    <div class="md:text-base text-xs">
                                        Фиксированные расходы по Японии и до Владивостока (любой аукцион покупки, любой порт отправки) ("пришло" в долларах -> переведено в рубли):
                                        <ul class="list-disc md:p-5 p-3 md:text-base text-xs">
                                            <li>
                                                Комиссии аукциона -  <input class="dollar__price" value="50000">
                                            </li>
                                            <li>
                                                Комиссии аукциона -  <input class="dollar__price" value="50000">
                                            </li>
                                            <li>
                                                Комиссии аукциона -  <input class="dollar__price" value="50000">
                                            </li>
                                            <li>
                                                Комиссии аукциона -  <input class="dollar__price" value="50000">
                                            </li>
                                            <li>
                                                Комиссии аукциона -  <input class="dollar__price" value="50000">
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="md:text-base text-xs pb-5">
                                        Расходы по России:
                                        <p class="md:text-base text-xs pt-4">
                                            <span class="font-bold"><input id="priceСustoms" class="w-16" placeholder="..."></span> 
                                        </p>

                                        <ul class="list-disc md:p-5 p-3">
                                            <li>
                                                Выгрузка, хранение на СВХ первые 5 суток, таможенное оформление, СБКТС, услуга брокера, вывоз из порта до стоянки компании, фотоотчёт: <input value="10" class="partPayment" >
                                            </li>
                                            <li>
                                                Расходы, связанные с лабораторией: <input value="50000" class="partPayment" >
                                            </li>
                                            <li>
                                                Комиссия Япония-Трейд: <input value="50000" class="partPayment" > 
                                            </li>
                                        </ul>

                                    </div>

                                       
                                
                                    <div class="md:text-base text-xs pb-5">
                                        Таможенные платежи:
                                        <p class="md:text-base text-xs pt-4">
                                            <span class="font-bold"> <input type="number" id="priceСustoms" class="w-16" placeholder="..."></span>
                                        </p>
                                        <ul class="list-disc md:p-5 p-3">
                                            <li>
                                                Сборы за таможенное оформление: <input class="partCustoms" value="10">
                                            </li>
                                            <li>
                                                Пошлина (на физ.лицо):  <input class="partCustoms" value="10">
                                            </li>
                                        </ul>
                                    </div>
     
                                    <div class="md:text-base text-xs pb-5">
                                        Утилизационный сбор:
                                        <p class="md:text-base text-xs pt-4">
                                            <span class="font-bold">
                                                <input class="price w-16" placeholder="..."></span>
                                        </p>
                                    </div>

                                    <div class="bg-red py-5 px-10 text-white rounded-lg max-w-xs ">
                                        Итого во Владивостоке с ПТС:
                                        <p id="sum" class="font-bold md:text-xl text-base pt-4"></p>
                                    
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class= "py-10 md: max-w-xs -z-10 md:order-2 order-1">
                            <div class="bg-black p-5 rounded">
                                <p class="text-white font-medium md:text-xl text-base">Курс валют ЦБ на сегодня:</p>
                                <div class="flex items-center justify-between p-5" >
                                    <ul>
                                        <li class=" text-white text-base pb-3">
                                            JPY/RUB:
                                        </li> 
                                        <li class=" text-white text-base pb-3">
                                            USD/RUB:
                                        </li> 
                                        <li class=" text-white text-base pb-3">
                                            EUR/RUB:
                                        </li> 
                                    </ul>
                                    <a class="text-gray text-[10px] z-100" href="https://www.cbr-xml-daily.ru/">Курсы валют, API</a>
    
                                    <ul class="currency">
                                        <li class="exchange-rate-jpy text-yellow text-base font-bold pb-3">
                                            
                                        </li> 
                                        <li class="exchange-rate-usd text-yellow text-base font-bold pb-3">
                                            
                                        </li> 
                                        <li class="exchange-rate-eur text-yellow text-base font-bold pb-3">
                                            
                                        </li> 
                                   
                                    </ul>
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
                            <?php 
                            
                            echo '
                            
                                <div>
                                    <p class="text-white md:text-base text-sm">'.$name_car.'</p>
                                </div>
                                
                                <div>
                                    <p class="text-yellow font-bold md:text-xl text-sm">'.$priceRub.' ₽</p>
                                </div>
                                '
                            ?>
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
                                <p class="text-white md:text-base text-sm"><?php echo "$name_model  $name_car"?></p>
                            </div>
                            
                            <div>
                                <p class="text-yellow font-bold md:text-xl text-sm"><?php echo "$priceRub"?> ₽</p>
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