<!--

Adding items to an array using the array keyword

-->

<?php

$p1 = array("Copier", "Inkjet", "Laser", "Photo");

echo "p1 element: ". $p1[2] . "<br>";

$p1 = array('copier' => "Copier & Multipurpose",
	        'inkjet' => "Inkjet Printer",
	        'laser'  => "Laser Printer",
	        'photo'  => "Photographic Paper");

echo "p2 element: ". $p1['inkjet'] . "<br>";