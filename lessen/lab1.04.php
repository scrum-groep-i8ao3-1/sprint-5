<?php
$naam = "carl";
$straat = "kruislaan 111";
$woonplaats = "utrecht";
$naw = $naam." ". $straat." ".$woonplaats;
echo "gegevens: $naw";
echo <<<TEKSTS
<br>salarisspecificatie van $naam: 2000 euro
<br> maand: november
<br>jaar: 2020
TEKSTS;
