<?php

function hitungPohonFaktor($bilangan){
	$tampung = array();
	$bilanganasli = $bilangan;
	while($bilangan > 1){
		$cekbila = $bilangan/2;
		if(is_float($cekbila) == ''){
			$tampung[] = 2;
			$tampung[] = $bilangan/2;
			$bilangan = $bilangan/2;
		}else{
			$cekbila = $bilangan/3;
			if(is_float($cekbila) == ''){
				$tampung[] = 3;
				$tampung[] = $bilangan/3;
				$bilangan = $bilangan/3;
			}else{
				$cekbila = $bilangan/5;
				if(is_float($cekbila) == ''){
					$tampung[] = 5;
					$tampung[] = $bilangan/5;
					$bilangan = $bilangan/5;
				}
			}
		}
	}
	
	$tot = count($tampung);
	$totsum = $tot-3;
	$tt = $bilanganasli;
	for ($i = 0; $i <= $totsum; $i++){
		$tt += $tampung[$i];
	}
	
	return print_r($tt);
}

hitungPohonFaktor(24);


?>