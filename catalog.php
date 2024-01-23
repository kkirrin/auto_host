<?php
/*
Template Name: catalog
*/
?>
<?php

function aj_get($sql)
{
    error_reporting(0);

    ##----- CONFIG ---------
    $code = 'APTnghDfD64KJ';       ## REQUIRED
    $server = '78.46.90.228'; ## optional :: $server='144.76.203.145'; 
    $go = 'api';              ## optional :: $go='gzip'; // gzip work faster

    ## SET IP,URL
    $ip = $_SERVER['HTTP_CF_CONNECTING_IP'] == '' ? $_SERVER['REMOTE_ADDR'] : $_SERVER['HTTP_CF_CONNECTING_IP'];
    $url = 'http://' . $server . '/' . $go . '/?ip=' . $ip . '&json&code=' . $code . '&sql=' . urlencode(preg_replace("/%25/", "%", $sql));

    ## DEBUG
    // echo "<hr><a style='font-size:12px' href='$url'>".$url."</a><hr>";

    ## API REQUEST
    $s = file_get_contents($url);
    //echo $s;

    ## GZIP DECODE
    if ($go == 'gzip') {
        $s = $server == '144.76.203.145' ? gzinflate(substr($s, 10, -8)) :
            gzuncompress(preg_replace("/^\\x1f\\x8b\\x08\\x00\\x00\\x00\\x00\\x00/", "", $s));
    }

    $arr = json_decode($s, true);  //die(var_export($arr));
    // echo gettype($arr);
    // print_r($arr);
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



    <section id="catalog" class="bg-black relative md:py-44 py-10 overflow-hidden"
        style="background-image: url('<?php echo get_template_directory_uri() . '/src/img/main/catalog-bg.png'; ?>'); background-position: center; background-repeat: no-repeat;">

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
                японские автоаукционы
            </h2>

            <div class="flex flex-wrap items-start justify-start gap-10 pb-10">
                <a href="/japancar/"
                    class="up py-3 px-8 text-white rounded-md text-opacity-50 bg-bg-gray">
                    Авто с аукционов
                </a>
                <a href="/%d0%b0%d0%b2%d1%82%d0%be-%d0%b8%d0%b7-%d0%ba%d0%be%d1%80%d0%b5%d0%b8/"
                    class="up py-3 px-8 text-white rounded-md text-opacity-50 bg-bg-gray">
                    Авто из Кореи
                </a>
                <a href="/%d0%b0%d0%b2%d1%82%d0%be-%d0%b2-%d0%bd%d0%b0%d0%bb%d0%b8%d1%87%d0%b8%d0%b8/"
                    class="up py-3 px-8 text-white rounded-md text-opacity-50 bg-bg-gray">
                    Авто в наличии
                </a>
            </div>

            <div class="bg_search">
                <div class="container w-full rounded-xl">
                    <form class="pt-10 pb-10 grid grid-cols-1 md:grid-cols-4 gap-4 uppercase" action="/japancar"
                        method="get">
                        <!-- ВЫБЕРИТЕ МАРКУ -->
                        <div class="mb-4">
                            <label class="block text-white text-sm font-medium mb-2" for="vendor">
                                Выберите марку
                            </label>
                            <select id="markaAuc" name="vendor"
                                class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <?php
                                $arr = aj_get("select marka_name from main group by marka_id order by marka_name ASC");
                                $json = json_encode($arr);
                                ?>
                                <option value='any'>Любая</option>
                                <?php
                                foreach ($arr as $v) {
                                    echo '<option value="' . $v['MARKA_NAME'] . '">' . $v['MARKA_NAME'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <!-- ВЫБЕРИТЕ МОДЕЛЬ -->
                        <div class="mb-4">
                            <label class="block text-white text-sm font-medium mb-2" for="MODEL_NAME">
                                Выберите модель
                            </label>
                            <select id="modelAuc" name="MODEL_NAME"
                                class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option value='any'>Любая</option>
                            </select>
                        </div>

                        <!-- ВЫБЕРИТЕ КУЗОВ -->
                        <div class="mb-4">
                            <label class="block text-white text-sm font-medium mb-2" for="KUZOV">
                                Выберите кузов
                            </label>
                            <select id="kuzovAuction" name="KUZOV"
                                class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option value=''>Любой</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-white text-sm font-medium mb-2" for="kpp_type">
                                Трансмиссия
                            </label>
                            <select id="transmitionAuction" name="kpp_type"
                                class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option value="">Любая</option>
                                <option value="1">Механическая</option>
                                <option value="2">Автоматическая</option>
                            </select>
                        </div>

                        <!-- <div class="mb-4">
                            <label class="block text-white text-sm font-medium mb-2" for="year">
                                Год
                            </label>
                            <div class="flex gap-10">
                                <div class="w-full">
                                    <select id="yearAuctionFrom" name="year"
                                        class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option value="">От</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                </div>
                                <div class="w-full">
                                    <select id="yearAuctionTo" name="year"
                                        class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option value="">До</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                </div>

                            </div>
                        </div> -->

                        <!-- <div class="flex flex-1 gap-10">
                            <div class="mb-4">
                                <label class="block text-white text-sm font-medium mb-2" for="mileage">
                                    Пробег
                                </label>
                                <div class="flex gap-10">
                                    <div class="w-1/2">
                                        <input type="number" id="mileageAuctionFrom" name="mileage"
                                            class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            placeholder="от">

                                        </input>
                                    </div>
                                    <div class="w-1/2">
                                        <input type="number" id="mileageAuctionTo" name="mileage"
                                            class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            placeholder="до">

                                        </input>
                                    </div>

                                </div>
                            </div>
                        </div> -->

                        <!-- 
                        <div class="flex flex-1 gap-10">
                            <div class="mb-4">
                                <label class="block text-white text-sm font-medium mb-2" for="finish">
                                    Цена
                                </label>
                                <div class="flex gap-10">
                                    <div class="w-1/2">
                                        <input id="priceAuctionFrom" name="finish[from]"
                                            class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            placeholder="от">

                                        </input>
                                    </div>
                                    <div class="w-1/2">
                                        <input id="priceAuctionTo" name="finish[to]"
                                            class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            placeholder="до">

                                        </input>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="flex flex-1 gap-10">
                            <div class="mb-4">
                                <label class="block text-white text-sm font-medium mb-2" for="value">
                                    Объем
                                </label>
                                <div class="flex gap-10">
                                    <div class="w-1/2">
                                        <input id="valueAuctionFrom" name="eng_v[from]"
                                            class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            placeholder="от">

                                        </input>
                                    </div>
                                    <div class="w-1/2">
                                        <input id="valueAuctionTo" name="eng_v[to]"
                                            class="select input block appearance-none w-full  border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                            placeholder="до">

                                        </input>
                                    </div>

                                </div>
                            </div>
                        </div> -->

                        <div class="flex items-center justify-center">
                            <button class="up bg-red py-2 px-10 text-white rounded-lg" type="submit">
                                Фильтр
                            </button>
                        </div>

                        <div class="flex items-end justify-end">
                            <button type="reset"
                                class=" text-yellow hover:text-red transition-all py-2 px-10 underline">
                                Сбросить
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- $arr = aj_get("select id, model_id, model_name, color, mileage, eng_v, kpp, avg_price, year, images from main group by model_id order by model_name limit 10"); -->

    <section class=" w-full relative pt-20 pb-10">
        <div class="container">
            <div class="flex items-start justify-start flex-wrap ">
                <?php

                // if (isset($_GET['vendor']) && isset($_GET['MODEL_NAME']) && !empty($_GET['MODEL_NAME'])) {
                //     $arr = aj_get("select * from main where model_name='" . $_GET['MODEL_NAME'] . "' order by year desc, mileage desc");
                // } elseif (isset($_GET['vendor']) && (empty($_GET['MODEL_NAME']))) {
                //     $arr = aj_get("select id, model_id, model_name, color, mileage, eng_v, kpp, avg_price, year, images from main where marka_name='" . $_GET['vendor'] . "' group by model_name order by model_name");
                // }
                // модель/марка ===============================================================
                
                // модель/марка/кузов ===============================================================
                if (!empty($_GET['MODEL_NAME'])) {
                    $kuzovCondition = "";
                    if (!empty($_GET['KUZOV'])) {
                        $kuzovCondition = " and kuzov='" . $_GET['KUZOV'] . "'";
                    }
                    $arr = aj_get("select * from main where model_name='" . $_GET['MODEL_NAME'] . "'" . $kuzovCondition . " order by year desc, mileage desc");

                } elseif (!empty($_GET['vendor'])) {
                    $kuzovCondition = "";
                    if (!empty($_GET['KUZOV'])) {
                        $kuzovCondition = " and kuzov='" . $_GET['KUZOV'] . "'";
                    }
                    $arr = aj_get("select id, model_id, model_name, color, mileage, eng_v, kpp, avg_price, year, images from main where marka_name='" . $_GET['vendor'] . "'" . $kuzovCondition . " group by model_name order by model_name");
                }

                // $arr = aj_get("select * from main limit 10");


                $conditions = array();  // Создаем пустой массив для хранения условий

// Проверяем каждый элемент в $_GET
// foreach ($_GET as $key => $value) {
//     // Проверяем, должен ли параметр быть включен в SQL-запрос
//     if (!empty($value) && in_array($key, array('MODEL_NAME', 'vendor', 'KUZOV'))) {
//         // Выполняем необходимые операции, в зависимости от того, какие параметры у нас есть
//         // Например, можно добавить условие в массив
//         $conditions[] = "$key='$value'";
//     }
// }

// // Собираем SQL-запрос
// $sql = "SELECT * FROM main";

// if (!empty($conditions)) {
//     $sql .= " WHERE " . implode(" AND ", $conditions);
// }

                ?>
                <pre>
                    <?php
                    // print_r($arr);
                    ?>
                </pre>
                <?php



                foreach ($arr as $v) {
                    $avgPrice = $v['AVG_PRICE'];
                    $year = $v['YEAR'];
                    $kpp = $v['KPP'];
                    $mileage = $v['MILEAGE'];
                    $color = $v['COLOR'];
                    $engine_value = $v['ENG_V'];
                    $name_car = $v['MODEL_NAME'];
                    $id = $v['ID'];
                    list($img1, $img2) = explode('#', $v['IMAGES']);

                    $img1 = str_replace("&h=50", "&w=320", $img1);

                    echo '<div class="animate p-4">
                        <a href="#" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black right-5 md:bottom-6 bottom-2">
                            <img class="img_car" src=' . $img1 . ' width="430" height="460" alt="вправо" >
                        </a>
                         <div class="flex flex-col items-start gap-4 justify-between">
                            <div class="md:text-3xl text-xl font-medium pt-4">' . $name_car . '</div>
                            <div class="flex flex-row">
                                <div class="flex items-center">
                                    <img class="" src="' . get_template_directory_uri() . '/src/img/icons/speed.svg " alt="" >
                                    <p class="md:pr-3 pr-1  md:text-base text-xs">' . $engine_value . ' ' . $kpp . ' ' . $mileage . '</p>
                                </div>
                                <div class="flex items-center">
                                    <img class="pr-1 " src="' . get_template_directory_uri() . '/src/img/icons/color.svg" alt="" >
                                    <p class="md:pr-3 pr-1  md:text-base text-xs">' . $color . '</p>
                                </div>
                                <div class="flex items-center">
                                    <img class="pr-1 " src="' . get_template_directory_uri() . '/src/img/icons/year.svg" alt="" >
                                    <p class="md:pr-3 pr-1  md:text-base text-xs">' . $year . '</p>
                                </div>
                            </div>
                            <div class="flex flex-row gap-4">
                                <p class="md:text-xl text-base">
                                    <span class="font-bold">' . $avgPrice . '</span> (' . $avgPrice . ' ¥)
                                </p>
                                <a class="up bg-red py-2 px-5 text-white rounded-lg" href="/car_card?id=' . $id . '">
                                            Заказать
                                            </a>
                            </div>
                            </div>
                        </div>';
                }

                ?>
            </div>
        </div>
    </section>


    <section id="popup1" class="popup">
        <div class="popup__body">
            <div class="popup__content">
                <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                        <path d="M4 1.45508L19.9099 17.365" stroke="#FCBC40" />
                        <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#FCBC40" />
                    </svg>
                </button>
                <h2 class="text-start text-white z-10 font-normal md:text-4xl text-xl uppercase pb-10 ">Заказать авто
                </h2>
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

                        <button type="submit"
                            class="form__button button bg-red up py-2 px-10 w-full text-white rounded-lg md:text-base text-sm">Заказать
                            авто</button>
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