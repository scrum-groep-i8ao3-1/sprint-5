<?php
echo "<br>--- opgave 5";
$producten = [];
$producten[0] = "boeken";
$producten[1] = "CD's";
$producten[2] = "Smartphones";
$producten[3] = "DVD'S";
echo "<br>--- opgave 6 : print_r9();";
print_r($producten);
echo "<br>--- opgave 7 : var_dump();";
var_dump($producten);
echo "<br>--- opgave 8";
unset($producten[2]);
print_r($producten);
echo "<br>--- opgave 9";
$gevonden = array_key_exists(1,$producten);
echo "Key 1 gevonden?: ".$gevonden;
echo "<br>--- opgave 10";
$gevonden = in_array("CD's", $producten);
echo "boek gevonden ?: ".$gevonden;
echo "<br>--- opgave 12";
array_push($producten,"laptops","TABLETS");
print_r($producten);
echo "<br>--- opgave 14";
$eersteelement = array_shift($producten);
echo $eersteelement.'verwijderd: ';
print_r($producten);
echo "<br>--- opgave 15";
array_unshift($producten,"tv,s","stereo's");
echo "tv,s en stereo,s toe gevoegd";
print_r($producten);
