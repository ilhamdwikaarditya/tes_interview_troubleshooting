<?php
error_reporting(0);
	function catatPermainan($klubkandang,$klubtandang,$skor){
		session_start();
		
		$tampung = array();
		$getskor = explode(":",$skor);
		
		if($getskor[0] < $getskor[1]){
			$pointklubkandang = 0;
			$pointklubtandang = 3;
			
			if(array_key_exists('leaguetable',$_SESSION) && !empty($_SESSION['leaguetable'])) {
				array_push($_SESSION['leaguetable'],array($klubtandang => $pointklubtandang));
			}else{
				$tampung[] = array($klubtandang => $pointklubtandang);
				$_SESSION['leaguetable'] = $tampung;
			}
			
		}
		if($getskor[0] > $getskor[1]){
			$pointklubkandang = 3;
			$pointklubtandang = 0;
			
			if(array_key_exists('leaguetable',$_SESSION) && !empty($_SESSION['leaguetable'])) {
				array_push($_SESSION['leaguetable'],array($klubkandang => $pointklubkandang));
			}else{
				$tampung[] = array($klubkandang => $pointklubkandang);
				$_SESSION['leaguetable'] = $tampung;
			}
		}
		if($getskor[0] == $getskor[1]){
			$pointklubkandang = 1;
			$pointklubtandang = 1;
			
			if(array_key_exists('leaguetable',$_SESSION) && !empty($_SESSION['leaguetable'])) {
				array_push($_SESSION['leaguetable'],array($klubkandang => $pointklubkandang));
				array_push($_SESSION['leaguetable'],array($klubtandang => $pointklubtandang));
			}else{
				$_SESSION['leaguetable'] = array($klubkandang => $pointklubkandang);
				array_push($_SESSION['leaguetable'],array($klubtandang => $pointklubtandang));
			}
		}
		
		$iZero = array_values($_SESSION['leaguetable']);
		$sumArray = array();
		
		foreach ($iZero as $k=>$subArray) {
		  foreach ($subArray as $id=>$value) {
			$sumArray[$id]+=$value;
		  }
		}

		$_SESSION['klasemen'] = $sumArray;
		#print_r($_SESSION['leaguetable']);
		
	}

	function cetakKlasemen(){
		$arr = $_SESSION['klasemen'];
		arsort($arr);
		print_r($arr);
		
	}

	function ambilPeringkat($ix){
		$arr = $_SESSION['klasemen'];
		$keys = array_keys($arr);
		$key = $keys[$ix-1];
		print_r($key);
	}



catatPermainan('Arsenal', 'Chelsea', '2:1');
cetakKlasemen();
ambilPeringkat(1);

?>