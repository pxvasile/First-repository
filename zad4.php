<?php
$kwh=300;
$bill1=50*0.10;
$bill2=$bill1+100*0.15;
$bill3=$bill2+100*0.25;

	if ($kwh<=50) {
	   $bill=$kwh*0.10;
	}
	elseif ($kwh>50 && $kwh<=150){
		$kwh1=$kwh-50;
		$bill=($bill1+$kwh1*0.15);
	}
	elseif ($kwh>150 && $kwh<=250){ 
		$kwh2=$kwh-150;
		$bill=($bill2+$kwh2*0.25);
	}
	else {
		$kwh3=$kwh-250;
		$bill=($bill3+$kwh3*0.35);
	}
	$res=$bill*1.2;
	echo $res;

?>