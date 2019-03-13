<?php
$kleuren = array("ruiten","harten","klaveren","schoppen");
$waarden = array("1","2","3","4","5","6","7","8","9","10","boer","vrouw","heer");
$randomkleur = $kleuren[rand(0,3)];
$randomnummer = $waarden[rand(0,12)];
$resultaat = '';
$resultaat .= $randomkleur;
$resultaat .= "_";
$resultaat .= $randomnummer;
$resultaat .= ".svg";
$path = 'C:\\xampp\\htdocs\\projecten\\s2-be-mo4\\kaartspel\\kaarten\\';
$path .= $resultaat;
$file = file_get_contents($path, true);
echo $file;
?>