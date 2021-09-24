<?php

$candles = array(3, 2, 1, 3);

function birthdayCakeCandles($candles) {
	
	/* $getmax = max($candles);
    $a = array_count_values($candles);
    return $a[$getmax]; */
	
	$n = count($candles);
	$a = 0;
	$count = 0;
	for($i=0;$i<$n;$i++){
		if($a<$candles[$i]){
			$a = $candles[$i];
		}
	}
	for($j=0;$j<$n;$j++){
		if($a == $candles[$j]){
			$count+=1;
		}
	}
	echo $count;
	

}

echo birthdayCakeCandles($candles);

?>