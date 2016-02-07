<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UT-8">
		<title>triangle test</title>
	</head>
	<body>
		<form action="test.php" method="get">
		angleA
		<input type="text" name="angleA">
		angleB
		<input type="text" name="angleB">
		angleC
		<input type="text" name="angleC">
		<input type="submit" name="submit" value="check">
		</form>
		<?php
if(!empty($_GET['submit'])){
	$angleA = $_GET['angleA'];
	$angleB = $_GET['angleB'];
	$angleC = $_GET['angleC'];

	$sum = $angleA + $angleB + $angleC;
	if ($sum == 180) {
		echo "Valid triangle";
	} else {
		echo "Not a valid triangle";
	}
}
?>
	</body>
</html>
