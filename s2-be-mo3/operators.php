<?php
$GLOBALS['getal1'] = rand(1,1000);
$GLOBALS['getal2'] = rand(1,1000);
$GLOBALS['antwoord'] = $GLOBALS['getal1'] + $GLOBALS['getal2'];
teken("+");
$GLOBALS['antwoord'] = $GLOBALS['getal1'] - $GLOBALS['getal2'];
teken("-");
$GLOBALS['antwoord'] = $GLOBALS['getal1'] / $GLOBALS['getal2'];
teken(":");
$GLOBALS['antwoord'] = $GLOBALS['getal1'] % $GLOBALS['getal2'];
teken("%");
$GLOBALS['antwoord'] = $GLOBALS['getal1'] * $GLOBALS['getal2'];
teken("x");
function teken($teken){
    echo $GLOBALS['getal1']." ".$teken." ".$GLOBALS['getal2']."= ".$GLOBALS['antwoord']."<br>" ;
}
?>