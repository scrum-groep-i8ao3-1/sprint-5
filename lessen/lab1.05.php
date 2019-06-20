<?php
//gemaakt door danny lanssink
//nagekeken door tom 3-4-2019-09:17
error_reporting(E_ERROR | E_PARSE);
function br()
{
    echo "<br>";
}
function toonarray($array, $nummer)
{
    $lijst = explode("-", "3-6-8-12-14-16");
    echo "stap " . $lijst[$nummer] . ": ";
    for ($i = 0; $i < count($array); $i++) {
        echo " ";
        print_r($array[$i]);
    }
    br();
}
//1.05 array metodes
//gemaakt door danny lanssink
$array = ["een","twee",3,"vier"]; //1 gedaan
array_push($array,5); // gedaan
toonarray($array,0); //3 gedaan
echo "stap 4 : datatype is : ".gettype($array[4])."<br>"; //4 gedaan
unset($array[4]); //5 gedaan
toonarray($array,1); //6 gedaan
$niks = "nul"; //7
array_unshift($array,$niks);//7 gedaan
toonarray($array,2); //8 gedaan
unset($array[0]); //GEDAAN https://www.geeksforgeeks.org/removing-array-element-and-re-indexing-in-php/
$undefined = "error";  //zorgt ervoor dat undefined "undefined" word inplaats van null wat een error geeft/gooit.
    if($array[0] == null) {
        $undefined = "undefined";
    }
echo "stap 10 : datatype is : " . $undefined . ""; //10 gedaan //PROBLEEM gefixt (met hulp van daniel);
br();
unset($array[0]); //delete het eerste element of tewel element 0 //11 gedaan
array_push($array,"vier"); //snelle fix "VIER" mist;
toonarray($array,3);
unset($array[count($array)]); // haalt "DE EXTRA 4 weg"
array_splice($array,1,1); //11 gedaan
toonarray($array,4); //12 gedaan
if($array[2] =! null){
    array_splice($array,2,1); //11 gedaan
}
toonarray($array,5);