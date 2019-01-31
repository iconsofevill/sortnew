<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
</head>
<body><pre><div id="wrapper">
    <?php
    $arr =[-5,-356,-78,-6,45,67,1,78,5,2,4,57,786,8,-74,6,2,456,-894,67,-457,4778];
    // echo 'Массив до сортировки: '.'<br>';
    // print_r($arr);
    
    //сортировка по убыванию
    for ($i=0; $i < count($arr); $i++) { 
        for ($j=$i+1; $j < count($arr); $j++) { 
            if ($arr[$i]<$arr[$j]) {
                $buf = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $buf;
            }
        }
    }
    //print_r ($arr);

    //сортировка по возрастанию   
    function sortbubble ($arr){
        for($i=0; $i<count($arr); $i++){
            for($j=$i+1; $j<count($arr); $j++){
                if($arr[$i]>$arr[$j]){
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$i];
                    $arr[$i] = $temp;
                }
            }         
        }
    }
    

    $time_start = microtime(1);
    for ($i=0; $i < 10000; $i++) { 
        sortbubble ($arr);
        shuffle ($arr);
    }
    $time_end = microtime(1);
    $time = $time_end - $time_start;
    
    
    $time_start2 = microtime(1);
    for ($i=0; $i < 10000; $i++) { 
        asort ($arr);
        shuffle ($arr);
    }
    

    $time_end2 = microtime(1);
    $time2 = $time_end2 - $time_start2;

    echo "Время сортировки массивов".'<br>'." с помощью пользовательской функции: ".round($time,4)." с.";
    echo '<br>'.'<br>';

    echo "Время сортировки массивов".'<br>'." с помощью встроенной функции: ".round($time2,4)." с.";
    echo '<br>'.'<br>';

    echo "Сортировка встроенной функцией составляет ".'<br>'." ".round((($time2/$time)*100),4)."% от времени сортировки пользовательской функцией.";
    echo '<br>'.'<br>';

    echo "Сортировка встроенной функцией занимает ".'<br>'." ".round((($time2/($time2+$time))*100),4)."% общего времени сортировки.";
    echo '<br>'.'<br>';

    echo "Сортировка пользовательской функцией занимает ".'<br>'." ".round((($time/($time2+$time))*100),4)."% общего времени сортировки.";
    echo '<br>'.'<br>';

    echo "Сортировка пользовательской функцией медленней в ".'<br>'." ".round(($time/$time2),4)." раз.";
    echo '<br>'.'<br>';
    ?></div></pre>
</body>
</html>