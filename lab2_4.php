<?php  
$a = array(array(1,2,3),array(4,5,6),array(7,8,9),array(10,11,12));
for ($i=0; $i < 3 ; $i++) { 
	for ($j=0; $j < 4 ; $j++) { 
			echo $a[$j][$i].' ';
		}
		echo "<br>";
}

?>