<?php

$a = rand(3,100);

if ($a%3==0 && $a%5==0 && $a%7==0){
		echo "deli se na 3-5-7";
	}
	elseif ($a%3==0 && $a%5==0){
		echo "deli se na 3-5";
	}
 	elseif ($a%5==0 && $a%7==0){
		echo "deli se na 5-7";
	}
	elseif ($a%3==0 && $a%7==0){
	  	echo "deli na 3-7";
	}
	else {
		echo "ne se deli na 3-5-7";
	}

?>