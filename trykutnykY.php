<?php
function tryk($dimen){
for($i=1; $i<=$dimen; $i++){	
	echo str_repeat("*", $i).PHP_EOL;
	}
}
tryk(3);
tryk(9);
tryk(5);

?>
