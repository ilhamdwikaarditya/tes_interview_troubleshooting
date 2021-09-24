<?php

function diagonalDifference($arr) {
    // Write your code here
    /* $pjgarr = count($arr);
    $d1 = $d2 = $y = 0;
    
    for($x = 0; $x < $pjgarr; $x++){
        $y++;
        $d1 += $arr[$x][$x];
        $d2 += $arr[$pjgarr-$y][$x];
    }
    return abs($d1 - $d2); */
	
	$arrDiag = count($arr);
	$firstD = $secondD = $i = 0;
	
	for($j = 0; $j < $arrDiag; $j++){
		$firstD += $arr[$i++][$j];
		$secondD += $arr[$arrDiag - $i][$j];
	}
	
	return abs($firstD - $secondD);

}

$arr = array(
    array(11, 2, 4),
    array(4, 5, 6),
    array(10, 8, -12),
);

echo diagonalDifference($arr);

?>