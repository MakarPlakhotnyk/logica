<?php
#print_r($argv);
function f($arg){
if(count($arg)!==4){
	echo "wrong number of variables".PHP_EOL;
	return;
	}
$a =$arg[1];
$b =$arg[2];
$c =$arg[3];
if (!is_numeric($a)||
	!is_numeric($b)||
	!is_numeric($c)
   ){	
	echo "at least one of arguments is not a number".PHP_EOL;
	return;
	}
if($a==0){
	echo "Impossivel calcular".PHP_EOL;
	return;
	}
$d = $b*$b -4*$a*$c;
if ($d<0){	
	echo "Impossivel calcular".PHP_EOL;
	return;
	}
$x1 = (-$b+sqrt($d))/2/$a;
$x2 = (-$b-sqrt($d))/2/$a;
echo "R1 = ".$x1."; R2 = ".$x2.PHP_EOL;
}
f($argv);

?>
