<?php
/*
    Template Name: test_page
*/

?>


<?php    /* AVTO.JP 2023 :: v3.0 */

## SQL2JSON :: JSON-version
## CHANGE $code='DvemR43s'; TO CODE YOU BUY
## ADD TABLE FOR BIDS https://ajes.com/api/aj_bids.txt

$mtime = explode(' ',microtime()); ## set time
$start_time = $mtime[1] + $mtime[0];

##### API REQUEST ##############
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
  echo $s;

  ## GZIP DECODE
  if ($go=='gzip') {
    $s = $server=='144.76.203.145' ? gzinflate(substr($s,10,-8)) : 
         gzuncompress(preg_replace("/^\\x1f\\x8b\\x08\\x00\\x00\\x00\\x00\\x00/","",$s));
  }

  $arr = json_decode($s,true);  //die(var_export($arr));
  return $arr;
}

## START PAGE
echo "<html>
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel=stylesheet href='https://ajes.com/api/style.css' type='text/css'>
<body>";

##### 4. LOT BY ID #############
if(isset($_GET['id'])) {
  $arr = aj_get("select * from main where id='".$_GET['id']."'");

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

##### 3. LIST OF CARS ##########
elseif (isset($_GET['model'])) {
  ## PAGINATION
  $num_arr = aj_get("select count(*) from main where model_name='".$_GET['model']."'");
  $lots=$num_arr[0]['TAG0'];
  echo "<div style='float:left;margin-right:10px'>LOTS: $lots</div>";
  for($i=1;$i<=ceil($lots/20);$i++) {
    echo "<a class='page_num' href='" . get_permalink() . "?model=" . esc_attr($_GET['model']) . "&page=" . $i . "'>" . $i . "</a>";
  } echo '<div style="clear:both"></div>';

  ## SELECT 20 ROWS
  $offset = ((int)$_GET['page']-1)*20;
  $arr = aj_get("select * from main where model_name='".$_GET['model']."' 
                 order by year desc, mileage desc 
                 limit ".($offset<0?0:$offset).",20");
  echo '
  <table class=tb cellpadding=0 cellspacing=0>
  <tr class=h><td>'.implode("</td><td>\n",array_keys($arr[0])).'</td></tr>';
  
  foreach($arr as $v) {
    list($img1,$img2,$tmp)=explode('#',$v['IMAGES']);
    $v['IMAGES'] = "<img style='height:60px' src='$img1'><img style='height:60px' src='$img2'>"; // &h=50 can change to &w=320
    $v['ID'] = '<a href="?id='.$v['ID'].'"><u>'.$v['ID'].'</u></a>';
    echo '<tr><td>'.implode('</td><td>',$v)."</tr>\n";
  }
  echo '</tr></table>';
}

##### 2. MODELS ################
elseif (isset($_GET['vendor'])) {
  $arr = aj_get("select model_name from main where marka_name='".$_GET['vendor']."' group by model_name order by model_name");
  foreach($arr as $v) {
    echo '<a href="?model='.$v['MODEL_NAME'].'">'.$v['MODEL_NAME']."</a><br>\n";
  }
}

##### 1. VENDORS ###############
else {
  $arr = aj_get("select marka_id,marka_name from main group by marka_id order by marka_name ASC");
  foreach($arr as $v) {
    echo '<a href="?vendor='.$v['MARKA_NAME'].'">'.$v['MARKA_NAME']."</a><br>\n"; // or use $v['MARKA_ID']
  }
}

## END PAGE
$mtime = explode(' ',microtime());
die('<div style="clear:both"></div>
     <font>'.round($mtime[1]+$mtime[0]-$start_time,3).' sec</font>
     </body></html>');

##### CACHE ##### change aj_get("select..") to aj_get_cached("select..")
function aj_get_cached($sql,$minutes=30) { ## 30 for main; 1440 for stats;
  $file=md5($sql);                         ## create /aj_cache writable
  $dir=dirname(__FILE__).'/aj_cache/'.substr($file,-2);
  $f = $dir.'/'.$file;
  if (file_exists($f) && (filemtime($f)>(time()-60*$minutes))) {
    return unserialize(file_get_contents($f));
  } else {
    $arr = aj_get($sql);
    if (!is_dir($dir)) {mkdir($dir);}
    file_put_contents($f,serialize($arr));
    return $arr;
  }
}

?>


<main>
    <section class=" w-full relative pt-20 pb-10 wow fadeInUp" data-wow-delay="0.4s">
        <div class="container">
            <div class="flex items-start justify-start flex-wrap ">

                <?php 

                    $arr = aj_get("select model_id,model_name from stats where marka_name='toyota'");

                    $offset = ((int)$_GET['page']-1)*20;
                    $arr = aj_get("select model_id, model_name, color, mileage, eng_v, kpp, avg_price, year, images from main where marka_name='toyota' group by model_id order by model_name limit 30");
                    // echo '</tr></table>';

                    $num_arr = aj_get("select count(*) from main");
                    $lots=$num_arr[0]['TAG0'];
                    echo "<div style='float:left;margin-right:10px'>LOTS: $lots</div>";

                    $totalPages = ceil($lots / 20);
                    $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

                    if ($totalPages > 1) {
                        $maxPages = 10;

                        for ($i = 1; $i <= min($maxPages, $totalPages); $i++) {
                            echo "<a class=page_num href='?model=" . $v['model_name'] . "&page=" . $i . "'>" . $i . "</a> ";
                        }

                        if ($maxPages < $totalPages) {
                            echo "... ";
                        }

                        echo "<a class=page_num href='?model=" . $v['model_name'] . "&page=" . $totalPages . "'>" . $totalPages . "</a> ";
                        echo '<div style="clear:both"></div>';
                    }

                    

                
                    foreach($arr as $v) {
                        $avgPrice = $v['AVG_PRICE']; 
                        $year = $v['YEAR'];
                        $kpp = $v['KPP'];
                        $mileage = $v['MILEAGE'];
                        $color = $v['COLOR'];
                        $engine_value = $v['ENG_V'];
                        $name_car = $v['MODEL_NAME'];
                        list($img1, $img2) = explode('#', $v['IMAGES']);
                        
                        $img1 = str_replace("&h=50", "&w=320", $img1);
                    
                        echo '<div class="animate p-4">
                        <a href="#" class="bg-green md:rounded-lg rounded-2xl shadow-md shadow-main-black p-2 right-5 md:bottom-6 bottom-2">
                        <img class="" src=' . $img1. ' width="430" height="460" alt="вправо" >;
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
                                    <span class="font-bold">937 061 ₽</span> ('.$avgPrice.' ¥)
                                </p>
                                <button class="up bg-red py-2 px-5 text-white rounded-lg ">
                                    Заказать
                                </button>
                            </div>
                        </div>
                    </div>';
                    } 
                    
                    ?>                   
            </div>
        </div>
    </section> 


</main>

