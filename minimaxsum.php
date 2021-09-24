<?php

$arr = array(1, 2, 3, 4, 5);
function miniMaxSum($arr) {
    //sort($arr);
    $total = array_sum($arr);
	$arrleng = count($arr);
    $newsum = [];    
    for ($i=0; $i < $arrleng; $i++) {
        $newsum[] = $total-$arr[$i];
    }

    $min = min($newsum);
    $max = max($newsum);
        
    echo $min.' '.$max;
}


echo miniMaxSum($arr);
?>