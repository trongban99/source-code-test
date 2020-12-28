<?php
    $arr =  [0, 100, -4, 8, 143, 5, 99, 100];
    $n = count($arr);
    $max = PHP_INT_MIN;
    for($i =0; $i <$n; $i++){
        for ($j = $i + 1; $j < $n - 1; $j++) {
            if ($max < $arr[$i] + $arr[$j]){
                $max = $arr[$i] + $arr[$j];
            }
        }        
    }
    echo $max;
?>