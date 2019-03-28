<<form>
    <input type="text" name="getal1">
    <input type="text" name="getal2">
    <input type="submit">
</form>
<?php
error_reporting(0);
ini_set('display_errors', 0);
    $GLOBALS['getal1'] = $_GET['getal1'];
    $GLOBALS['getal2'] = $_GET['getal2'];

    $GLOBALS['antwoord'] = $GLOBALS['getal1'] + $GLOBALS['getal2'];
    teken("+");
    $GLOBALS['antwoord'] = $GLOBALS['getal1'] - $GLOBALS['getal2'];
    teken("-");
    $GLOBALS['antwoord'] = $GLOBALS['getal1'] / $GLOBALS['getal2'];
    teken(":");
    $GLOBALS['antwoord'] = $GLOBALS['getal1'] % $GLOBALS['getal2'];
    teken("%");
    $GLOBALS['antwoord'] = $GLOBALS['getal1'] * $GLOBALS['getal2'];
    teken("x");
function teken($teken){
    echo $GLOBALS['getal1']." ".$teken." ".$GLOBALS['getal2']."= ".$GLOBALS['antwoord']."<br>" ;
}
?>

