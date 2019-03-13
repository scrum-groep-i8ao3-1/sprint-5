<?php
$GLOBALS['getal1'] = rand(1,1000);
$GLOBALS['getal2'] = rand(1,1000);
echo "getal een is ". $GLOBALS['getal1']." getal twee is ".$GLOBALS['getal2'] . "<br>";
$GLOBALS['antwoord'] = $getal1 < $getal2;
iseen("<");
$GLOBALS['antwoord'] = $getal1 > $getal2;
iseen(">");
$GLOBALS['antwoord'] = $getal1 == $getal2;
iseen("==");
$GLOBALS['antwoord'] = $getal1 === $getal2;
iseen("===");
$GLOBALS['antwoord'] = $getal1 >= $getal2;
iseen(">=");
$GLOBALS['antwoord'] = $getal1 <= $getal2;
iseen("<=");
$GLOBALS['antwoord'] = $getal1 != $getal2;
iseen("!=");
function iseen($input){
    teken($input);
    if ($GLOBALS['antwoord'] == "1") {
        echo "waar" ."<br>";
    } else {
        echo "niet waar"."<br>";
    }
}
function teken($teken){
    echo $GLOBALS['getal1']." ".$teken." ".$GLOBALS['getal2']." " ;
}
?>