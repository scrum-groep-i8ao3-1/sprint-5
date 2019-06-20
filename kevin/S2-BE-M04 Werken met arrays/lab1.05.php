<?php
//stap 1
$cijfers = ["een","twee",3,"vier"];

//stap2
array_push($cijfers, 5);

//stap3
print_r($cijfers);
echo "<br>";

//stap4
echo "Datatype is: ".gettype($cijfers[4]);

//stap5
$laatsteElement = array_pop($cijfers);
echo "<br>";

//stap 6
print_r($cijfers);

//stap 7
$eesteElement = array_unshift($cijfers, 'nul');
echo "<br>";

//stap8
print_r($cijfers);

//stap 9
unset($cijfers[0]);
echo "<br>";

//stap 10
    echo "Datatype: undefined";

// stap11
echo "<br>";

//stap12
print_r($cijfers);

//stap13
unset($cijfers[2]);
echo "<br>";

//stap14
print_r($cijfers);

//stap15
unset($cijfers[4]);
echo "<br>";

//stap16
print_r($cijfers);




