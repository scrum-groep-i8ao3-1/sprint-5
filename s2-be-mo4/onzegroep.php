<?php
$danny = array(
    'studentnummer' => '1',
    'voornaam' => 'danny',
    'achternaam' => 'lanssink',
    'woonplaats' => 'enschede',
    'leeftijd' => '17');
$tom = array(
    'studentnummer' => '2',
    'voornaam' => 'tom',
    'achternaam' => 'morskieft',
    'woonplaats' => 'borno',
    'leeftijd' => '17');
$timur = array(
    'studentnummer' => '3',
    'voornaam' => 'timur',
    'achternaam' => 'kocoz',
    'woonplaats' => 'enschede',
    'leeftijd' => '17');
$jairo = array(
    'studentnummer' => '4',
    'voornaam' => 'jairo',
    'achternaam' => 'kooidtrs',
    'woonplaats' => 'Enschede',
    'leeftijd' => '25');
$kevin = array(
    'studentnummer' => '5',
    'voornaam' => 'kevin',
    'achternaam' => 'schreyder',
    'woonplaats' => 'Enschede',
    'leeftijd' => '25');
$daniel = array(
    'studentnummer' => '6',
    'voornaam' => 'daniel',
    'achternaam' => 'loco',
    'woonplaats' => 'Enschede',
    'leeftijd' => '16');
$randomeen = rand(1,6);
switch ($randomeen){
    case 1:
        echo $daniel['studentnummer'];
        enter();
        echo $daniel['voornaam'];
        enter();
        echo $daniel['achternaam'];
        enter();
        echo $daniel['woonplaats'];
        enter();
        echo $daniel['leeftijd'];
        BREAK;
    case 2:
            echo $danny['studentnummer'];
            enter();
            echo $danny['voornaam'];
            enter();
        echo $danny['achternaam'];
            enter();
        echo $danny['woonplaats'];
            enter();
        echo $danny['leeftijd'];
        break;
    case 3:
            echo $jairo['studentnummer'];
            enter();
            echo $jairo['voornaam'];
            enter();
        echo $jairo['achternaam'];
            enter();
        echo $jairo['woonplaats'];
            enter();
        echo $jairo['leeftijd'];
        break;
    case 4:
            echo $tom['studentnummer'];
            enter();
            echo $tom['voornaam'];
            enter();
            echo $tom['achternaam'];
            enter();
            echo $tom['woonplaats'];
            enter();
            echo $tom['leeftijd'];
        break;
    case 5;
            echo $timur['studentnummer'];
            enter();
            echo $timur['voornaam'];
            enter();
            echo $timur['achternaam'];
            enter();
            echo $timur['woonplaats'];
            enter();
            echo $timur['leeftijd'];
        break;
    case 6:
            echo $kevin['studentnummer'];
            enter();
            echo $kevin['voornaam'];
            enter();
            echo $kevin['achternaam'];
            enter();
            echo $kevin['woonplaats'];
            enter();
            echo $kevin['leeftijd'];
        break;

}
function enter(){
    echo"<br>";
}