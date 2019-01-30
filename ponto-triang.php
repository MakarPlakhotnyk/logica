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
$pontos = array($a, $b, $c);
print_r($pontos);
sort($pontos);
print_r($pontos);
$a = $pontos[0];
$b = $pontos[1];
$c = $pontos[2];
echo $a." ".$b." ".$c.PHP_EOL;
if($a>= $b+$c){
	echo "NAO FORMA TRIANGULO".PHP_EOL;
	return;
	}
if($a*$a == $b*$b +$c*$c){
	echo "TRIANGULO RETANGULO".PHP_EOL;
	}else if($a*$a > $b*$b +$c*$c){
	echo "TRIANGULO OBTUSANGULO".PHP_EOL;
	}else 
	echo "TRIANGULO ACUTANGULO".PHP_EOL;
if($a==$c){
	echo "TRIANGULO EQUILATERO".PHP_EOL;
	}else if(($a==$b)||($b==$c)){
	echo "TRIANGULO ISOSCELES".PHP_EOL;
	}
}
f($argv);

?>
