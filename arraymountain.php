<?php

$arra = array(1,2); //false
$arrb = array(1,2,3,2,4); //false
$arrc = array(1,2,3,2,1); //true
$arrd = array(1,2,2,3,1); //false
$arre = array(1,2,3,2,1,2,3,4); //false
$arrf = array(6,4,3,2,1); //false

function arraymount($arr){
	$tampung = array();
	$a = 0;
	$countarr = count($arr);
	if($countarr < 4){ return "false"; }
	
	
	//array_push($tampung,$coba);
	$a = $arr[0];
	for($x=1;$x<$countarr;$x++){
		if($arr[$x]<$a){
			$coba =  "turun";
		}else if($arr[$x]==$a){
			$coba = "sama";
		}else{
			$coba = "naik";
		}
		$a = $arr[$x];
		array_push($tampung,$coba);
		
	}
	
	echo json_encode($tampung);
	if(in_array("sama",$tampung)){
		echo "false";
		return;
	}
	if(!in_array("turun",$tampung)){
		echo "false";
		return;
	}
	if(!in_array("naik",$tampung)){
		echo "false";
		return;
	}
	
	$reverse	= array_reverse($tampung);
	$index1 = array_search('naik', $reverse);
	$index2 = array_search('turun', $reverse);
		
	if ($index1<$index2){
		echo "false";
		return;
	}
	
	
	echo "true";
	
	//print_r (each($tampung));

	
}

echo arraymount($arra);
echo "<br/>";
echo arraymount($arrb);
echo "<br/>";
echo arraymount($arrc);
echo "<br/>";
echo arraymount($arrd);
echo "<br/>";
echo arraymount($arre);
echo "<br/>";
echo arraymount($arrf);

?>