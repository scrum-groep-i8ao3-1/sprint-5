<?php
$naam = "Karim";
$nederlands = "8.5";
$engels =  "7.7";
$rekenen = "6.7";
$programmeren = "8.5";
$databases = "9.4";
echo "<table border = '1'>
<caption>
    <strong>Rapport</strong>
</caption>
<thead>
    <tr>
        <th>Naam</th><th>Nederlands</th><th>Engels</th>
<th>Rekenen</th><th>Programmeren</th>
<th>Databases</th>
<th>Gemiddelde</th>
    </tr>
    </thead>
    <tbody>
     <tr>
            <th>$naam</th><th>$nederlands</th><th>$engels</th>
<th>$rekenen</th><th>$programmeren</th>
<th>$databases</th>
<th>---------</th>
</tr>
    </tbody>
    <tfoot>
    <tr>
        <td colspan='6'>Groep gemiddeld</td><td>8.6</td>
        </tr>
        </tfoot>
        </table>";
?>