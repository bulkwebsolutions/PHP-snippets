<!--

Walking through a numeric array using foreach...as

-->

<?php

$paper = array("Copier", "Inkjet", "Laser", "Photo");
$j = 0;

foreach ($paper as $item)
{
     echo "$j: $item<br>";
     ++$j;
}