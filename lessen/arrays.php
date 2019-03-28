<?php
echo "<br>--- opgave 5";
$producten = [];
$producten[0] = "boeken";
$producten[1] = "CD's";
$producten[2] = "Smartphones";
$producten[3] = "DVD'S";
echo "<br>--- opgave 6 : print_r9();";
print_r($producten);
echo "<br>--- opgave 7 : var_dump();";
var_dump($producten);
echo "<br>--- opgave 8";
unset($producten[2]);
print_r($producten);
echo "<br>--- opgave 9";
$gevonden = array_key_exists(1,$producten);
echo "Key 1 gevonden?: ".$gevonden;
echo "<br>--- opgave 10";
$gevonden = in_array("CD's", $producten);
echo "boek gevonden ?: ".$gevonden;
echo "<br>--- opgave 12";
array_push($producten,"laptops","TABLETS");
print_r($producten);
echo "<br>--- opgave 14";
$eersteelement = array_shift($producten);
echo $eersteelement.'verwijderd: ';
print_r($producten);
echo "<br>--- opgave 15";
array_unshift($producten,"tv,s","stereo's");
echo "tv,s en stereo,s toe gevoegd";
print_r($producten);
echo "<br>--- opgave 16";
$random_keys = array_rand($producten, 2);
echo "<br> eerste random product".
    $producten[$random_keys[0]];
echo "<br> tweede random product".
    $producten[$random_keys[1]];
echo "<br>--- opgave 16";
function printarray($item, $key){
    echo "<br>$key".": "."<i> $item </i>";
}
echo "<br>--- opgave 17: producten doorlopen";
array_walk($producten, 'printarray');
$Getallen = ["nul","een","twee","drie","vier","vijf"];
$tools = ["boek","pen","laptop","potlood"];
$tekst1 = implode("*",$Getallen);
echo "<br>--- opgave 18: array getallen in tekst1 converteren: $tekst1";
$tekst2 = implode("|", $tools);
echo "<br>--- opgave 18: array getallen in tekst2 converteren: $tekst2";
echo "<br>--- opgave 19: tekst1 in array1 converteren";
$array1 = explode("*",$tekst1);
array_walk($array1,'printarray');
echo "<br>--- opgave 19: tekst1 in array2 convertere";
$array2 = explode('|', $tekst2);
array_walk($array2,"printarray");
$boeken = array (
  array("titel"=> "stoner", "auteur"=> "john williams",
    "genre"=>"fictie", "prijs"=> 19.99),
    array("titel"=> "de circel", "auteur"=> "dave eggers",
    "genre"=>"fictie", "prijs"=> 22.50),
    array("titel"=> "rayuela", "auteur"=> "julia cortazar",
    "genre"=>"fictie", "prijs"=> 22.50
    ));
echo "<br>--- opgave 20: boeken array aangemaakt ";
echo "<br>--- opgave 21: boeken recursief doorlopen ";
array_walk_recursive($boeken, "printarray");
$nieuweboeken = array (
    array("titel"=> "spijt", "auteur"=> "carry slee",
    "genre"=>"fictie", "prijs"=> 12.99),
    array("titel"=> "debet", "auteur"=> "saskia noort",
        "genre"=>"fictie", "prijs"=> 33.50));
echo "<br>--- opgave 22: twee arrays samenvoegen";
$boeken = array_merge($boeken,$nieuweboeken);
array_walk_recursive($boeken,"printarray");
echo "<br>--- opgave 23: array-elementen kopieren";
$oudeboeken = array_slice($boeken,0,2);
array_walk_recursive($oudeboeken,"printarray");



