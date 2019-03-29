<?php
$getal1 = rand (0, 1000);
$getal2 = rand (0, 1000);
echo "$getal1", " > ", "$getal2"," =", ($getal1 > $getal2 ? "true" : "false"),'<br>';
echo "$getal1", " < ", "$getal2"," =", ($getal1 < $getal2 ? "true" : "false"),'<br>';
echo "$getal1", " == ", "$getal2"," =", ($getal1 == $getal2 ? "true" : "false"),'<br>';
echo "$getal1", " === ", "$getal2"," =", ($getal1 === $getal2 ? "true" : "false"),'<br>';
echo "$getal1", " >= ", "$getal2"," =", ($getal1 >= $getal2 ? "true" : "false"),'<br>';
echo "$getal1", " <= ", "$getal2"," =", ($getal1 <= $getal2 ? "true" : "false"),'<br>';
echo "$getal1", " != ", "$getal2"," =", ($getal1 != $getal2 ? "true" : "false"),'<br>';
?>