<?php

$indiana = 99;
$heat = 96;
$total = $indiana + $heat;

echo "Total Score: $total";

echo "<br>";

if ($total == 195){
	$year = $total * 12;
	$decade = $year * 120;

	for ($g=0; $g < 5; $g++) {
		echo $decade++;
	}
	
} else {
	echo "Indiana LOSE!!";
}