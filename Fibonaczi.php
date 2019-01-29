<?php
$a = 0;
echo $a.PHP_EOL;
$b = 1;
echo $b.PHP_EOL;
for($i=3; $i<15; $i++){	
	$c = $a +$b;
	$a = $b;
	$b= $c;
	echo $b.PHP_EOL;
	}
?>
