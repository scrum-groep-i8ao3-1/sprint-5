<?php
global $playlist;
$playlist = array(
    array("genre"=>"hiphop","auteur"=>"johnwilliams",
        "titel"=> "my girl"),
    array("genre"=>"kazz","auteur"=>"john coltrane",
        "titel"=> "new york"),
    array("genre"=>"hiphop","auteur"=>"shakira",
        "titel"=> "obsession")
);
function test_print($item, $key)
{
    echo "<i>$key holds $item\n<br>";
}
array_walk_recursive($playlist,'test_print');
function add($auteur,$title,$genre,$playlist){
    array_push($playlist,$genre,$auteur,$title);
}
add("caetano velso","cafe antlantico","latin",$playlist);
function printtracks($value,$key){
    array_walk($value,'loop2');
    echo "<br>";

}
function loop2($Value,$key)
{
    // hiphop|michal|ietshier
    echo "$Value";
    if($key == 'genre'||$key == 'auteur'){
echo "|";
    }
}
array_walk($playlist,'printtracks');