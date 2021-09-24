<?php
function MaxPrime($num) {
  $tampung = array();
  $CurrMaxPrime = -1;

  //If $num is divisible by 2, store $CurrMaxPrime
  //as 2. keep on dividing $num until it is not 
  //divisible by 2. After each division, update 
  //$num as $num/2.
  if($num % 2 == 0) {
    $CurrMaxPrime = 2;
	$tampung[] = $CurrMaxPrime;
    while($num % 2 == 0){
      $num = $num/2;
	  $tampung[] = $num;
    }
  }
  
  //At this point, $num must be odd. Starting with 
  //3 to square root of $num , if divisible, divide 
  //and update $num, and update $CurrMaxPrime
  for($i = 3; $i <= sqrt($num); $i += 2) {
    while($num % $i == 0) {
      $CurrMaxPrime = $i;
	  //$tampung[] = $CurrMaxPrime;
      $num = $num/$i;
	  //$tampung[] = $num;
    }
  }

  //if the modified $num is greater than 2, 
  //update the $CurrMaxPrime with $num 
  if ($num > 2) 
    $CurrMaxPrime = $num;

  return print_r($tampung);
}

$x = 12;


echo "Largest prime factor of $x is: "
     .MaxPrime($x)."\n";
?>