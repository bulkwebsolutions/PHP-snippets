<!-- 

Numerically Indexed Array 
Adding items to an array and retrieving them

-->
<?php

$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

for ($j = 0 ; $j < 4 ; ++$j)
	 echo "$j: $paper[$j]<br>";

?>