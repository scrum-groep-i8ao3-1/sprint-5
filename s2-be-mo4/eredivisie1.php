<?php
$eredivisie = array
(
    // format : naam positie stad totaal gewonnen gelijk verloren
    array("twente",'1',"enschede","100","100","0","0"),
    array("heracles",'2',"almelo","0","0","0","0"),
    array("ajax",'3',"amsterdam","1","0","0","1"),
);
for($i = 0;;$i++){
    for($a = 0;$a <= 6;$a++){
        if(isset($eredivisie[$i][$a])){
            echo $eredivisie[$i][$a]." ";
        }else{
            exit();
        }
    }
    echo"<br>";
}