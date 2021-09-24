<?php
function staircase($n) {
    // Write your code here
    for ( $i =1 ; $i<=$n; $i++) {
        for ( $space = 1; $space <= ($n-$i); $space++) {
                echo "&nbsp;";
        }
        for ( $hash = 1; $hash <= $i;$hash ++ ) {
                echo "#";
        }
        echo "<br>";
    }
}


function segitigakanan($n){
	
	for($a=1 ; $a<=$n ; $a++){
		for($b=1 ; $b<=$a ; $b++){
			echo "#";
		}
		echo "<br>";
	}
}

function segitigakiri($n){
	for($a=$n;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($a1=$n;$a1>=$a;$a1--){
		echo"#";
	}
	echo"<br>";
	}	
}

echo StairCase(6);
echo segitigakanan(6);
echo segitigakiri(6);
?>  