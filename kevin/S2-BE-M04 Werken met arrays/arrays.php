<?php
//opgave 5
echo "<br>----opgave5";
$producten =[];
$producten[0] = "Boeken";
$producten[1] = "CD's";
$producten[2] = "Smartphones";
$producten[3] = "DVD's";

//opgave6

echo "<br>---- Opgave 6: print_r()";
print_r($producten);


// opgave 7

echo  "<br>---- opgave 7: var_dump(): ";
var_dump($producten);


//opgave 8

echo "<br>---- opgave8: ";
unset($producten[2]);
print_r($producten);

//opgave9

echo "<br>--- opgave 9: ";
$gevonden = array_key_exists(1, $producten);
echo "Key 1 gevonden?: ". $gevonden;

//opgave 10

echo "<br>---- opgave 10: ";
$gevonden = in_array('Boeken', $producten);
echo "Boeken gevonden?: ". $gevonden;

//opgave 11

echo "<br>---- opgave 11: ";
$index = array_search("CD's", $producten);
echo "De index van CD's is: ". $index;

//opgave 12

echo "<br>---- opgave 12: ";
array_push($producten, "latops", "Tablets");
Print_r($producten);

// opgave 13

echo "<br>---- opgave 13: ";
echo $laatsteElement = array_pop($producten);
echo $laatsteElement . "is verwijderd: ";
print_r($producten);

//opgave 14

echo "<br>---- opgave 14";
$eersteElement = array_shift($producten);
echo $eersteElement. "Verwijderd: ";
print_r($producten);

//opgave 15

echo "<br>---- opgave 15: ";
array_unshift($producten, "TV's", "stereo's");
echo "TV's en Stereo's toegevoegd: ";
Print_r($producten);

echo  "<br>---- Opgave 16: ";
$random_keys = array_rand($producten, 2);
echo  "<br />Eerste random product: ". $producten[$random_keys[0]];
echo  "<br />Tweede random product: ". $producten[$random_keys[1]];

function printArray($item, $key){
    echo "<br>$key" . ":" . "<i>$item</i>";
}
echo "<br>---- Opgave 17: Producten array doorlopen: ";
array_walk($producten, 'printArray');

$getallen = ["nul", "een", "Twee", "drie", "vier", "vijf"];
$tools = ["boeken", "pen", "laptop", "potlood"];
$tekst1 = implode("*", $getallen);
echo "<br>----Opgave 18: Array getallen in tekst1 converteren: $tekst1";
$tekst2 = implode("|", $tools);
echo "<br>----Opgave 18: Array tools in tekst2 converteren: $tekst2";

echo "<br>---- Opgave19: tekst1 in array1 coverteren:";
$array1 = explode("*", $tekst1);
array_walk($array1, 'printarray');
$array2 = explode("|", $tekst2);
array_walk($array2, 'printarray');

$boeken = array(array("titel"=> "stoner", "auteur" => "John Williams",
    "genre" => "Fictie", "prijs" => 19.99),
    array("titel"=> "De cirkel", "auteur" => "Dave Eggers",
        "genre" => "Fictie", "prijs" => 25.50),
    array("titel"=> "Rayuela", "auteur" => "Julio Cortazar",
        "genre" => "Fictie", "prijs" => 25,50));
echo "<br>----Opgave 20: Boeken-array aangemaakt. ";


echo "<br>---- Opgavve 21: Boeken recursief doorlopen";
array_walk_recursive($boeken, "printArray");

$nieuweboeken = array(array("titel"=> "Spijt", "auteur" => "Carry Slee",
    "genre" => "Fictie", "prijs" => 12.99),
    array("titel"=> "Debet", "auteur" => "Saskia Noort",
        "genre" => "Fictie", "prijs" => 33.50));
echo "<br>----Opgave 22: twee arrays samengevoegen:";
$boeken = array_merge($boeken, $nieuweboeken);
Array_walk_recursive($boeken, "printArray");

echo "<br>----Opgave23: Array-elementen kopieren:";
$oudeboeken = array_slice($boeken, 0, 2);
array_walk_recursive($oudeboeken, "printArray");




