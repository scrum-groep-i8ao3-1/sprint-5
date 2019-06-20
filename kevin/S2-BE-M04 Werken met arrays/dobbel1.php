<html>
<head>

</head>
<body>
<?php
//Wanneer op de button is geclickt, gaat hij door de gooi function
if (isset($_POST['submit']))
{
    gooi();
}
//gaat een loop door tot dat alle 5 dobbels zijn gegooid, en toont ze
function gooi(){
    $ogen = array(random(),random(),random(),random(),random());
    for($i = 0;$i<5;$i++){
        $strings = ("nummer ".($i + 1)." is ".$ogen[$i]."<br>");
        echo $strings;
    }
    $sum = array_sum($ogen);
    var_export("het totaal is ".$sum);
}
//kiest een nummer tussen 1 en 6 en
function random(){
    $randomnummer = rand(1,6);
    return $randomnummer;
}
?>
<form action=" " method="post">
    <button type="submit" name="submit" value="submit">klik hier</button>

</form>
</body>
</html>