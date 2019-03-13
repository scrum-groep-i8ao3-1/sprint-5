<html>
<head></head>
<body>
<?php
if (isset($_POST['submit']))
{
    gooi();
}
function gooi(){
    $nummers = array(random(),random(),random(),random(),random());
    for($i = 0;$i<5;$i++){
        $strings = ("nummer ".($i + 1)." is ".$nummers[$i]."<br>");
        echo $strings;
    }
    $sum = array_sum($nummers);
    var_export("het totaal is ".$sum);
}
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
