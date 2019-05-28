<!DOCTYPE html>
<html>
<head>
	<title>lab2</title>
</head>
<body>
	<?php
	$a = array(3,4,32,-7,10,-28,9,88);
	$max = 0;
	$min = 0;
	for ($i=0; $i< count($a) ; $i++) { 
		if ($a[$i]>=$max) {
			// echo $min;
			$max = $a[$i];
		}elseif ($a[$i]<=$min) {
			// echo $min;
			$min = $a[$i];
		}
	}
	echo "Your mini is:"."". $min."<br>";
	echo "Your max is:"."".$max;
	?>

</body>
</html>