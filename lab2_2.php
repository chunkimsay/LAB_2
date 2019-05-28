<!DOCTYPE html>
<html>
<head>
	<title>lab2_2</title>
</head>
<body>
	<?php  
	$b = array(4,12,31,23,7,54,17,93,13);
	$odd = [];
	$even = [];
	for($i = 0; $i <count($b); $i++){
		if ($b[$i]%2==0){
			$even[] = $b[$i];
		}elseif ($b[$i]%2!=0) {
			$odd[] = $b[$i];
		}
	}
	foreach ($even as $key => $value) {
		echo $value.' ';
	}
	echo "<br>";
	foreach ($odd as $key => $value) {
		echo $value.' ';
	}
	?>

</body>
</html>