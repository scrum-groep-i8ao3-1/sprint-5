<html>
<head>
    <title>h1 tags</title>
</head>
<body>
<?php
echo <<<END
met lokale variabelen kunnen alleen de items in de functie erbij.
met globale variabelen kan iedereen er altijd bij.
END;
$GLOBALS['z'] = 2;
function globaal() {
    echo <<<END
    voorbeeld globaal variable:
    <BR>
    
END;
    $antwoord = $GLOBALS['z'] + 1;
    echo $antwoord;
}
function lokaal(){
    echo <<<END
    voorbeeld locaal variable:
    <BR>
    
END;
    $antwoord = 1 + 1;
    echo $antwoord;

}
lokaal();
globaal();
?>
</body>
</html>
