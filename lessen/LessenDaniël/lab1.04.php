<?php
echo "php lab 1.4";

$naam = "Karim";
$nederlands = "8.5";
$engels = "7.7";
$rekenen = "6.7";
$programmeren = "8.5";
$databases = "9.4";
$gemiddeld = ($nederlands + $engels + $rekenen + $programmeren + $databases) / 5;


$Naam = "Sophie";
$Nederlands = "8.9";
$Engels = "8.7";
$Rekenen = "9.7";
$Programmeren = "9.5";
$Databases = "9.2";
$Gemiddeld = ($Nederlands + $Engels + $Rekenen + $Programmeren + $Databases) / 5;

$groepGemiddeld = ($gemiddeld + $Gemiddeld) /2;
echo "<table border='1'>
<caption>
    <strong>Rapport</strong>
</caption>
<thead>
    <tr>
        <th>Naam</th><th>Nederlands</th><th>Engels</th>
        <th>Rekenen</th><th>Programmeren</th>
        <th>Databases</th>
        <th>Gemiddeld</th>
    </tr>
</thead>
<tbody>

<tr>
    <td>$naam</td><td>$nederlands</td><td>$engels</td>
    <td>$rekenen</td><td>$programmeren</td>
    <td>$databases</td><td>$gemiddeld</td>
</tr>

<tr>
    <td>$Naam</td><td>$Nederlands</td><td>$Engels</td>
    <td>$Rekenen</td><td>$Programmeren</td>
    <td>$Databases</td><td>$Gemiddeld</td>
</tr>
</tbody>
<tfoot>
<tr>
    <td colspan='6'>Groep gemiddeld</td><td>$groepGemiddeld</td>
</tr>
</tfoot>
</table>";
?>