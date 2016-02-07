<?php
$a = 5;
$b = 6;
$c = 11;

if ($a == $b && $b == $c) {
	echo "equilateral";
} elseif (($a == $b && $b!=$c)||($b == $c && $c!=$a)||($a == $c && $c!=$b)) {
	echo "isosceles";
} else {
	echo "scalene";
}
?>