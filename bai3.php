<?php
    $arr =  [1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15];
    $n = count($arr);
    $min = PHP_INT_MAX;
    for($i =0; $i <$n; $i++){
        for ($j = $i + 1; $j < $n - 1; $j++) {
            if ($min > abs($arr[$i] - $arr[$j])) { 
                $min = abs($arr[$i] - $arr[$j]) ;
            }
        }        
    }
    
    for($i =0; $i <$n; $i++){
        for ($j = $i + 1; $j < $n; $j++) {
            if ($min == abs($arr[$i] - $arr[$j])) { 
               echo "[".$arr[$i].",".$arr[$j]."]";
            }
        }        
    }
?>