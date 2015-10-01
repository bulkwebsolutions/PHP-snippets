<!--

Walking through an associative array using foreach...as

-->

<?php


$paper = array('copier' => "Copier & Multipurpose",
	           'inkjet' => "Inkjet Printer",
	           'laser'  => "Laser Printer",
	           'photo'  => "Photographic Paper");

  foreach ($paper as $item => $description)
  	      echo "$item: $description<br>";

?>